<html>
<head>
    <title> Update </title>
</head>
<body>
  <form action="/updaterecord/{{ $Update->id }}" method="post">
    {{csrf_field()}}
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $Update->name }}">
    <label for="password">Password</label>
    <input type="text" name="password" value="{{ $Update->password }}">
    <label for="email">Email</label>
    <input type="text" name="email" value="{{ $Update->email }}">
    <input type="Submit" name="Submit" value="Submit">
  </form>
</body>
</html>
