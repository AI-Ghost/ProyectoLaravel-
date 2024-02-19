<html>
    <body>
        <h1>Hello,</h1>
        
        @foreach ($projects as $project)
            <li>{{$project->nombre}}</li>
            <a href="{{ route('project.edit', $project->id) }}">Edit</a>
            <a href="{{ route('project.destroy', $project->id) }}">Delete</a>
        @endforeach

    </body>
</html>