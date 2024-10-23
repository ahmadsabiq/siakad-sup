<html>
{{-- Register Page --}}

<head>
    <title>Register</title>
</head>

<body>
    <h1>Halaman Register</h1>
    <h2>SIAKAD</h2>
    <form method="GET" action="{{ route('dashboard') }}">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <button type="submit">Register</button>
    </form>

    <a href="{{ route('login') }}">Login</a>

</html>
