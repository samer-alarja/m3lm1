<!DOCTYPE html>
<html lang="en">

<head>
<title> page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src='tinymce/js/tinymce/tinymce.min.js'></script>
    <style>
        body{background-color: #f2f2f2; }
        .container{ 
            margin-top: 30px;
        }
        #fname{width: 390px;}
    </style> 
      

</head>
<body>
            

<form  name="myform" method="post" action="{{route('update.user')}}">
    @csrf
<div  class="container">
     <div class="row" >
  <div class="col-12">
  <h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF">edit user</h1> 
  @foreach($editt as $key => $users)
<input type="hidden" value="{{ $users->id }}" name="id">
                     <label class="form-label" for="firstname">
                      name:
                     </label>
                     <input type="text" id="fname" value=" {{ $users->name}}" class="form-control" name="name">
                     <label class="form-label" for="firstname">
                      birthday:
                     </label>
                     <input type="text" id="fname" value="{{$users->birthday}}" class="form-control" name="birthday">                     <label class="form-label" for="firstname">
                      age:
                     </label>
                     <input type="text" id="fname" value="{{$users->age}}" class="form-control" name="age">                     <label class="form-label" for="firstname">
                      gender:
                     </label>
                     <input type="text" id="fname" value="{{$users->gender}}" class="form-control" name="gender">
                     <br><button type="submit" class="btn btn-dark" style="width:100px ;">done</button>
                     </div> </div></div>
                      @endforeach
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body> 
</html>