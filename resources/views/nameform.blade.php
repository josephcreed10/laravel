<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>  
<br>  <center>
<form action="/nameform" method="post">
  @csrf  
    
  <div class="container">  
    <h1> Student Registeration Form</h1>
  <hr>  
  <label> Name </label>   
<input type="text" name="name" placeholder= "Name" size="15" required />   <br>
Course :  
</label>   

<select name="course">  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
</div>  
<div>  
<label>   <br>
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   <br>

 <label for="email">Email</label>  
 <input type="text" placeholder="Enter Email" name="email" required>    <br>
    <button type="submit" class="registerbtn">Register</button>    
</form>  
@if (session()->has('success'))
<div class="alert alert-success">
   <h1> Registered successfully</h1>
</div>
@endif
@if($errors->any())
@foreach($errors->all() as $err)
<div>
   <li>{{$err}}</li>
</div>
@endforeach
@endif
</center>  
</body>
</html>