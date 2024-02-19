<form action="{{ route('project.update', $project->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $project->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="body">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $project->descripcion }}</textarea>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>