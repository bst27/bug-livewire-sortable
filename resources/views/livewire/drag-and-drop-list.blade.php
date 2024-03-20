<div>
    <ul wire:sortable="updateTaskOrder" wire:sortable.options="{ animation: 100 }">
        @foreach ($tasks as $task)
            <li wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                <h4>{{ $task->title }}</h4>
                <button wire:sortable.handle>drag</button>
            </li>
        @endforeach
    </ul>
</div>
