<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;



class TodoIndex extends Component
{

    public $liveModal = false;
    public $title;
    public $newImage;
    public $price;
    public $description;

    public function showTodoModal()
    {
        $this->reset();
        $this->liveModal = true;
    }

    public function TodoPost()
    {
        $this->validate([
            'content' => 'required|string:20'
        ]);
    }

    public function render()
    {
        return view('livewire.todo-index', ['todos' => Todo::select('id', 'content', 'created_at', 'updated_at')]);
    }
}
