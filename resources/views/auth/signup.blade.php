<form method="POST" action="/signup">
    @csrf

    <h1>Sign Up Page</h1>

    <label for="name">Name</label>
    <input type="text" name="name" id="name"  class="@error('email', 'login') is-invalid @enderror" placeholder="Enter name" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="@error('email', 'login') is-invalid @enderror" placeholder="Enter email" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="@error('password', 'login') is-invalid @enderror" placeholder="Enter password" required>

    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="@error('password', 'login') is-invalid @enderror" placeholder="Enter password" required>

    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Signup</button>
</form>