<h1>{{ $module}}</h1>

<ul>
    @foreach ($topics as $topic)
        <li>{{ $topic }}</li>
        @endforeach
</ul>