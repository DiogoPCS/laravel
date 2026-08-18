<?php

namespace App\Livewire;

use Livewire\Component;

// app/Http/Livewire/TodoList.php
class TodoList extends Component
{
    public $todos = [];
    
    public function mount()
    {
        // Carregar dados locais primeiro
        $this->loadLocalTodos();
    }
    
    public function addTodo($title)
    {
        $todo = [
            'id' => Str::uuid(),
            'title' => $title,
            'completed' => false,
            'created_at' => now()
        ];
        
        // Salvar localmente
        $this->saveToLocalStorage($todo);
        
        // Tentar sincronizar
        if ($this->isOnline()) {
            $this->syncTodo($todo);
        }
    }
    
    private function saveToLocalStorage($todo)
    {
        // Usar localStorage ou IndexedDB via JavaScript
        $this->dispatchBrowserEvent('save-todo', [
            'todo' => $todo
        ]);
    }
    
    private function isOnline()
    {
        return Cache::get('is_online', true);
    }
}