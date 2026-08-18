<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    abstract class OfflineModel extends Model
{
    protected $connection = 'mysql';
    protected $localConnection = 'sqlite_local';
    
    // Sincronizar registro específico
    public function syncToLocal()
    {
        $localData = $this->toArray();
        DB::connection($this->localConnection)
            ->table($this->getTable())
            ->updateOrInsert(
                ['id' => $this->id],
                $localData
            );
    }
    
    // Sincronizar do local para o servidor
    public function syncToServer()
    {
        $localRecord = DB::connection($this->localConnection)
            ->table($this->getTable())
            ->where('id', $this->id)
            ->first();
            
        if ($localRecord) {
            $this->update((array) $localRecord);
        }
    }
}


