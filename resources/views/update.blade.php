<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<br>  
<br>  <center>
<form action="{{url('update',$form->id)}}" method="post">
  @csrf  
  <div class="container">  
    <h1>Update Student  Form</h1>
  <hr>  
  <label> Name </label>   
<input type="text" name="name" value="{{$form->name}}" placeholder= "Name" size="15"/>   <br>
Course :  
</label>   

<select name="course">  
<option value="BCA" <?php if($form->course=="BCA") print "selected"; ?>>BCA</option>  
<option value="BBA" <?php if($form->course=="BBA") print "selected"; ?>>BBA</option>  
<option value="B.Tech" <?php if($form->course=="B.Tech") print "selected"; ?>>B.Tech</option>  
<option value="MBA" <?php if($form->course=="MBA") print "selected"; ?>>MBA</option>  
<option value="MCA" <?php if($form->course=="MCA") print "selected"; ?>>MCA</option>  
<option value="M.Tech" <?php if($form->course=="M.Tech") print "selected"; ?>>M.Tech</option>  
</select>  
</div>  
<div>  
<label>   <br>
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" <?php if($form->gender=="Male") print "checked"; ?>> Male   
<input type="radio" value="Female" name="gender" <?php if($form->gender=="Female") print "checked"; ?>> Female   
<input type="radio" value="Other" name="gender" <?php if($form->gender=="Other") print "checked"; ?>> Other  
  
</div>  
<label>   <br>

 <label for="email">Email</label>  
 <input type="text" placeholder="Enter Email" name="email"  value="{{$form->email}}" >    <br>
 <button type="submit" class="registerbtn">Update</button>
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