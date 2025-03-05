<x-app-layout>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('tasks.create') }}" class="btn btn-success">Ajouter une tâche</a>
        </div>

        @if($tasks->count() > 0)
            <div class="row">
                @foreach($tasks as $task)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header position-relative">
                                <h5 class="card-title pr-2">{{ $task->title }}</h5>
                                <span class="position-absolute top-0 end-0 pl-2 mt-2 me-2">
                                    @if($task->status === 'completed')
                                        <span class="badge bg-success">Complétée</span>
                                    @else
                                        <span class="badge bg-warning text-dark">En attente</span>
                                    @endif
                                </span>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $task->description }}</p>
                            </div>
                            <div class="card-footer d-flex gap-2 justify-content-center">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Modifier
                                </a>

                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Supprimer
                                    </button>
                                </form>

                                @if($task->status === 'pending')
                                    <form action="{{ route('tasks.complete', $task->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="bi bi-check-circle"></i> Compléter
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center">Aucune tâche disponible.</div>
        @endif
    </div>
</x-app-layout>
