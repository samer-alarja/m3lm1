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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <style>body 
   { margin: 0;
    background-color:gray}

.change{width: 50px;
  text-align: center ;}
 
h1{font-size: 60px;
  color: white;
  margin-top: 80px;}
table, td, th {  
  border: 2px solid white;
  text-align: center;
  padding: 10px;
  border-collapse: collapse;
  width:25%;
  color: white;
  margin:40px 0 0 37% ;
}
input[type=text],input[type=password], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 24px;
  box-sizing: border-box;
  width: 100%;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 24px;
  cursor: pointer;
  width: 100%;
 
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
    <title>my page</title>
</head>

<div class="d-flex justify-content-center" style="margin-top:100px">
  
<form action="{{ route('login.submit') }}" method="post" style=" border-radius: 25px;background-color: #f2f2f2;width:600px;padding:50px"> 
  @csrf
  <h2 style="margin-top: 0;">admin accont</h2>
  <hr style="height:1px;border-width:0;background-color:gray">
  <label for="lname">name:</label>
    <input type="text" id="lname" name="name" placeholder="Your name..">
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
<br>
    <label for="lemail">email:</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">
  <br>
@error('email')
<span class="text-danger">{{ $message }}</span>
@enderror
<br>
    <label for="country">password:</label>
    <input type="password" id="pass" name="password" placeholder="Your password..">
  
 @error('password')
<span class="text-danger">{{ $message }}</span>
@enderror
<input type="submit" value="sign in">
<a href=" {{route('name.register')}}" style="margin: 50px 0 0 180px;color:royalblue">create new account</a>
  </form>
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"> </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>