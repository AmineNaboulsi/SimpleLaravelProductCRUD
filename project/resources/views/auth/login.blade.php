<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    @session('error')
    <span>{{session('error')}}</span>
    @endsession
    <form action="{{route('signin')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="password" placeholder="Password" >
      
        <button type="submit">Login</button>
    </form>
</body>
</html>
