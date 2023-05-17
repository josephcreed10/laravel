<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Database</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Gender</th>
    <th>Course</th>
    <th>Email</th>
    <th>Actions</th>
  </tr>
  @foreach($details as $detail)
  <tr>
  <td>{{$detail->name}}</td>
  <td>{{$detail->gender}}</td>
  <td>{{$detail->course}}</td>
  <td>{{$detail->email}}</td>
  <td><a href="{{url('update_view',$detail->id)}}"><button>Update</button></a><a href="{{url('delete',$detail->id)}}"><button>Delete</button></a></td>
  
</tr>
@endforeach

</table>

</body>
</html>

