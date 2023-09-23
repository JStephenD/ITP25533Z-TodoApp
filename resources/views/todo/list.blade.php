<h1>Todo Lists page for {{ $name }}</h1>

<ul>
    @foreach ($todoLists as $todoList)
    <h4>
        <li>{{ $todoList->title }} <a href="/todo/list/{{ $todoList->id }}">Goto List</a> </li>
    </h4>
    @endforeach
</ul>