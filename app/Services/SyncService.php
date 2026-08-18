<?php
namespace App\Services;

class SyncService
{
    public function syncTodos()
    {
        $pendingChanges = PendingChange::where('status', PendingChange::STATUS_PENDING)
            ->get();
            
        foreach ($pendingChanges as $change) {
            try {
                $this->processChange($change);
                $change->update(['status' => PendingChange::STATUS_SYNCED]);
            } catch (\Exception $e) {
                $change->update(['status' => PendingChange::STATUS_FAILED]);
            }
        }
    }
    
    private function processChange($change)
    {
        $data = json_decode($change->data, true);
        
        switch ($change->operation_type) {
            case 'create':
                Todo::create($data);
                break;
            case 'update':
                Todo::find($change->todo_id)->update($data);
                break;
            case 'delete':
                Todo::find($change->todo_id)->delete();
                break;
        }
    }
}