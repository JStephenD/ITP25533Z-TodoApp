<h1>Welcome to home</h1>

@auth
<form action="/logout" method="post">
    @csrf

    <button type="submit">Logout</button>
</form>

<a href="/todo/list">Todo Lists</a>
@endauth

@guest
<a href="/login">Login</a>
@endguest