<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'completed', 'uuid', 'updated_at', 'deleted_at'];
    
    protected $casts = [
        'completed' => 'boolean',
        'updated_at' => 'datetime'
    ];
    
    // Relacionamento com mudanças pendentes
    public function pendingChanges()
    {
        return $this->hasMany(PendingChange::class);
    }
}

// app/Models/PendingChange.php
class PendingChange extends Model
{
    protected $fillable = [
        'todo_id',
        'operation_type',
        'data',
        'status'
    ];
    
    const STATUS_PENDING = 'pending';
    const STATUS_SYNCED = 'synced';
    const STATUS_FAILED = 'failed';
}
