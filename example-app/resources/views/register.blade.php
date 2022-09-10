<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    
    <script src="https://kit.fontawesome.com/93c76a4947.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>register</title>
</head>
<body>
<form method="post" style=" border-radius: 25px;background-color: #f2f2f2;width:600px;margin:100px 0 0 400px;padding:50px"> 
  @csrf

  <h2 style="margin-top: 0;">new account</h2>
  <hr style="height:1px;border-width:0;background-color:gray">

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
   <button type="button" class="close" data-dismiss="alert">x</button>
   <strong>{{$message}}</strong>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <label for="lname">name</label><br>
    <input type="text" id="lname" name="name" placeholder="new name..">
<br>
<br>
    <label for="lemail">email</label><br>
    <input type="text" id="lname" name="email" placeholder="new email..">
<br>
<br>
    <label for="country">password</label><br>
    <input type="password" id="pass" name="password" placeholder="new password..">
    <br><br>
    <input type="submit" value="Sign Up">
  </form></body>
</html>