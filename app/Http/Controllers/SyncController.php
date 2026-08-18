<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    class SyncController extends Controller
{
    public function push(Request $request)
    {
        $data = $request->validate([
            'changes' => 'required|array',
            'changes.*.table' => 'required|string',
            'changes.*.data' => 'required|array',
            'changes.*.operation' => 'required|in:create,update,delete',
            'changes.*.timestamp' => 'required|date'
        ]);
        
        foreach ($data['changes'] as $change) {
            $this->applyChange($change);
        }
        
        return response()->json(['success' => true]);
    }
    
    public function pull(Request $request)
    {
        $lastSync = $request->input('last_sync', null);
        
        // Buscar mudanças desde a última sincronização
        $changes = DB::table('sync_log')
            ->where('created_at', '>', $lastSync)
            ->get();
            
        return response()->json($changes);
    }
    
    private function applyChange($change)
    {
        DB::transaction(function () use ($change) {
            switch ($change['operation']) {
                case 'create':
                    DB::table($change['table'])->insert($change['data']);
                    break;
                case 'update':
                    DB::table($change['table'])
                        ->where('id', $change['data']['id'])
                        ->update($change['data']);
                    break;
                case 'delete':
                    DB::table($change['table'])
                        ->where('id', $change['data']['id'])
                        ->delete();
                    break;
            }
            
            // Registrar no log de sincronização
            DB::table('sync_log')->insert([
                'table' => $change['table'],
                'operation' => $change['operation'],
                'data' => json_encode($change['data']),
                'created_at' => now()
            ]);
        });
    }
}

