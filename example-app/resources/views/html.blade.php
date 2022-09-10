<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
       body{box-sizing:border-box;}
    *{box-sizing:border-box;}
.master{padding: 10px;}
.div1{width: 40%;float: left; padding-left: 30px;}
.div2{width: 59%;float: left; padding-left: 10px;}
.div3{float: left;width: 240px;}
.div4{float: left;width: 250px;margin-left: 10px;}
table, td, th {
  border: 1px solid black;
    border-bottom: 1px solid #ddd;

}
table {
  border-collapse: collapse;
  width: 100%; 
  height: 400px;
}
th {
  height: 70px;
}
@media (max-width: 1320px) {
  .div1{
   width: 100%
 }
}
        </style>
    <title>Document</title>
</head>

<body>
   <div class="master">
<div class="div1">



<div class="div3">
<label for="firstname">first name</label><br>
<input type="text" id="fname" class="form-control" name="link" >
</div>
<div class="div4">
<label for="firstname">last name</label><br>
<input type="text" id="fname" class="form-control" name="link" >
</div><br><br><br>

<label for="firstname">email</label><br>
<input type="text" id="fname" class="form-control" name="link" style="width:500px;">
<label for="firstname">phone number</label><br>
<input type="text" id="fname" class="form-control" name="link" style="width:500px;">
<label for="firstname">zip code</label><br>
<input type="text" id="fname" class="form-control" name="link" style="width:500px;">



<div class="div3">
<label for="firstname">country</label><br>
<input type="text" id="fname" class="form-control" name="link" >
</div>
<div class="div4">
<label for="firstname">city</label><br>
<input type="text" id="fname" class="form-control" name="link" ><br><br>
</div>
</div>
    </div>


<br><br>
<div class="div2"> 
   <div style="float: right;">
   <b>no.1235</b><br>
   <b>date:2/2/2022</b><br><br>
   </div>
<table>
  <tr>
    <th style="width: 90px;position: relative;left:170px">اسم السلعة</th>
    <th style="width: 40px;position: relative;left:100px">العدد</th>
    <th style="width: 40px;position: relative;left:100px">السعر</th>
  </tr>
  <tr style="height:25px">
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="height:25px">
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="height:25px">
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr style="height:25px">
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
<br>
<div class="div3" >
<div style="background-color:black;width:20px;height:20px;float:right;margin:10px"></div>
<div style="float:right;margin-top:5px">موافق على الشروك والقوانين </div><br>
<div style="background-color: #009900;width:150px;height:50px;border-radius: 10px;margin:20px 0 0 30px"><b style="font-size:large;position: relative;top:10px;left:17px"> Done    |    موافق</b></div>

</div>
<div class="div4" style="margin-left: 70px;">
<label for="firstname">Sub Totla:</label><br>
<label for="firstname">taxes:</label><br>
<label for="firstname">Discound:</label><br>
<label for="firstname">Ofer fees:</label><br>
<label style="font-size:xx-large">Totla:</label><br>
</div>
</div>
</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>