<div>
    <ul wire:sortable="updateTaskOrder" wire:sortable.options="{ animation: 100 }">
        @foreach ($tasks as $task)
            <livewire:drag-and-drop-item :task="$task" wire:key="task-{{ $task->id }}" />
        @endforeach
    </ul>
</div>
