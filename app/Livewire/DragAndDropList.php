<?php

namespace App\Livewire;

use Livewire\Component;
use stdClass;

class DragAndDropList extends Component
{
    public $tasks = [];

    public function mount()
    {
        $tasks = [
            'Task A',
            'Task B',
            'Task C',
            'Task D',
        ];

        foreach ($tasks as $id => $title) {
            $task = new stdClass();
            $task->id = $id;
            $task->title = $title;
            $this->tasks[] = $task;
        }
    }

    public function updateTaskOrder(array $order): void
    {

    }

    public function render()
    {
        return view('livewire.drag-and-drop-list');
    }
}
