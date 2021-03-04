<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>

<body>
  <h3 align="center">Registration Form</h3>
  <form action="{url('add_user')}" method="post">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" placeholder="name"><br><br>
    <label>Phone:</label>
    <input type="number" name="phone" placeholder="phone"><br><br>
    <label>Email:</label>
    <input type="email" name="email" placeholder="email"><br><br>
    <label>Password:</label>
    <input type="password" name="pass" placeholder="password"><br><br>
    <input type="submit" value="submit" name="submit">

  </form>
</body>

</html>