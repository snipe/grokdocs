<ul>
    @foreach ($user->projects as $project)
        <li>{{ $project->name }}</li>
    @endforeach
</ul>

