<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
</head>

<body>
        <h1>register page</h1>
    <form action="register.php" method="POST">
        <label>NAME: </label>
        <input type="text" name="name" placeholder="enter your name">
        <label>Email: </label>
        <input type="text" name="email" placeholder="enter your email">
        <label>Password: </label>
        <input type="text" name="password" placeholder="enter your password">

        <button type="submit">register</button>
    </form>
</body>

</html>