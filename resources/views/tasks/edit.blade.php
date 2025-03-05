<x-app-layout>
    <div class="container d-flex justify-content-center align-items-center mt-5" >
        <div class="card shadow bg-light" style=" width: 100%; max-width: 600px; padding: 20px;">
            <h2 class="text-center mb-4">Modifier la tâche</h2>
            <form action="{{ route('tasks.update', $task) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Titre</label>
                    <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ $task->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Mettre à jour</button>
            </form>
        </div>
    </div>
</x-app-layout>
