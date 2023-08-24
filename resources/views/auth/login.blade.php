<form method="POST" action="/login">
    @csrf

    <h1>Login Page</h1>

    <label for="email">Email address</label>
    <input id="email" type="email" name='email' class="@error('email', 'login') is-invalid @enderror">

    @error('email', 'login')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="password">Password</label>
    <input id="password" type="password" name='password' class="@error('password', 'login') is-invalid @enderror">

    <button type="submit">Login</button>
</form>