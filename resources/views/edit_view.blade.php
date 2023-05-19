<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Update Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>
<br>  
<br>  <center>
<?php $id=Auth::id();?>
<form action="{{url('edit',Auth::id())}}" method="post">
  @csrf  
  <div class="container">  
    <h1>Update Student  Form</h1>
  <hr>  

<input type="text" name="name" value="{{Auth::user()->name}}" placeholder= "Name" size="15"/>   <br>
Course :  
</label>   

<select name="course">  
<option value="BCA" <?php if(Auth::user()->course=="BCA") print "selected"; ?>>BCA</option>  
<option value="BBA" <?php if(Auth::user()->course=="BBA") print "selected"; ?>>BBA</option>  
<option value="B.Tech" <?php if(Auth::user()->course=="B.Tech") print "selected"; ?>>B.Tech</option>  
<option value="MBA" <?php if(Auth::user()->course=="MBA") print "selected"; ?>>MBA</option>  
<option value="MCA" <?php if(Auth::user()->course=="MCA") print "selected"; ?>>MCA</option>  
<option value="M.Tech" <?php if(Auth::user()->course=="M.Tech") print "selected"; ?>>M.Tech</option>  
</select>  
<label>   <br>
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" <?php if(Auth::user()->gender=="Male") print "checked"; ?>> Male   
<input type="radio" value="Female" name="gender" <?php if(Auth::user()->gender=="Female") print "checked"; ?>> Female   
<input type="radio" value="Other" name="gender" <?php if(Auth::user()->gender=="Other") print "checked"; ?>> Other  
   <br>
 <input type="text" placeholder="Enter Email" name="email"  value="{{Auth::user()->email}}" >    <br>
 <button type="submit" class="registerbtn">Update</button>
</form>  
  </div>
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