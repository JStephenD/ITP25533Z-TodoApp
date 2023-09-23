<h1>Welcome to home</h1>

@auth
    <form action="/logout" method="post">
        @csrf

        <button type="submit">Logout</button>
    </form>

    <a href="/todo/list">Todo Lists</a>
@endauth

@guest
    <p><a href="/login">Login</a></p>
    <p><a href="/signup">Signup</a></p>
@endguest
