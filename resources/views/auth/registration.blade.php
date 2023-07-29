<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <img src="{{asset('images/mb.png')}}" alt="">
  
</head>
<body>
    
    <div class="container">
  
<div class="row ">
<div class="col-md-4 col-md-offset-4 mbaye" style="margin-top:50px;">
    <h1>Inscrivez-vous en tant que apprenant(e) sur la liste electoral</h1>
    <hr>
    <form action="{{route('register-user')}}" method="post">
        @if(Session::has('Sucess'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
<div class="form-group">
<label for="name">Full Name</label>
<input type="text" class="form-control" placeholder="Entrer Full Name"
name="name" value="{{old('name')}}">
<span class="text-danger">@error('name') {{$message}} @enderror</span>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="text" class="form-control" placeholder="Entrer Email"
name="email" value="{{old('email')}}">
<span class="text-danger">@error('email') {{$message}} @enderror</span>
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" placeholder="Entrer Password"
name="password" value="{{old('password')}}">
<span class="text-danger">@error('password') {{$message}} @enderror</span>
</div>
<div class="form-group">
<button class="btn btn-block btn-primary" type="submit">Registrer</button>
</div>
<br>
<a href="login">Already Registered !! Login here.</a>
    </form>
</div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>