<h1>Todo Items page for list {{ $title }}</h1>

<ul>
    @foreach ($todoItems as $todoItem)
        <li>
            <p>
                {{ $todoItem->name }}
                <input type="checkbox" {{ $todoItem->done ? 'checked' : '' }}>
            </p>
        </li>
    @endforeach
</ul>
