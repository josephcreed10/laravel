<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Registration Page </title>  
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
<form action="/nameform" method="post">
  @csrf  
    
  <div class="container">  
    <h1> Student Registeration Form</h1>
  <hr>  
  
<input type="text" name="name" placeholder= "Name" size="15"  />   <br>
 


<input type="password" name="password" placeholder= "Password"/>   <br>
<label>
Course :  
</label>

<select name="course">  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  <br>
<label>
Gender :  
</label>
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
<label>   <br>
 <input type="text" placeholder="Enter Email" name="email" required>    <br>
    <button type="submit" >Register</button>    
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