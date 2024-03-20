<?php

namespace App\Livewire;

use Livewire\Component;

class DragAndDropItem extends Component
{
    public $task;

    public function render()
    {
        return view('livewire.drag-and-drop-item');
    }
}
