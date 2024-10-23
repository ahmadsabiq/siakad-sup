<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <h2>SIAKAD</h2>
    <form method="GET" action="{{ route('dashboard') }}">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>

    <a href="{{ route('register') }}">Register</a>


</body>

</html>
