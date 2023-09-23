<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/signup">
        @csrf

        <h1>Sign Up Page</h1>

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" 
                value="{{ old('name') }}"
                class="@error('name') is-invalid @enderror" 
                placeholder="Enter name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="@error('email', 'login') is-invalid @enderror" placeholder="Enter email" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                class="@error('password', 'login') is-invalid @enderror" placeholder="Enter password" required>
        </div>

        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="@error('password', 'login') is-invalid @enderror" placeholder="Enter password" required>
        </div>

        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Signup</button>
    </form>
</body>

</html>
