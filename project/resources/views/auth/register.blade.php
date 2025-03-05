<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    @session('error')
    <span>{{session('error')}}</span>
    @endsession
    <form action="{{route('signup')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="name" placeholder="Name" >
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="password" placeholder="Password" >
        <select name="role_id" id="">
            @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
        <button type="submit">Register</button>
    </form>
</body>
</html>
