<html>
<head>
    <title> Create </title>
</head>
<body>
  <table border="2">
    <tr>
      <th> Name </th>
      <th> Email </th>
      <th> Password </th>
      <th> Actions </th>
    </tr>
    @foreach($Members as $crud)
    <tr>
      <td>{{ $crud->name }} </td>
      <td>{{ $crud->email }} </td>
      <td>{{ $crud->password }} </td>
      <td><a href="/user/{{ $crud->id }}"> Detail </td>
      <td><a href="/update/{{ $crud->id }}"> Update </td>
      <td><a href="/delete/{{ $crud->id }}"> Delete </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
