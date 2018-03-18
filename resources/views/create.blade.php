<html>
<head>
    <title> Create </title>
</head>
<body>
  <form action="/Register" method="post">
    {{csrf_field()}}
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="password">Password</label>
    <input type="text" name="password">
    <label for="email">Email</label>
    <input type="text" name="email">
    <input type="Submit" name="Submit" value="Submit">
  </form>
</body>
</html>
