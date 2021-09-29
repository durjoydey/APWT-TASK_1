<html>
    <head></head>
    <body>
        <form action="/register" method="post">
        {{csrf_field()}}
        Name: <input type="text" name="name"><br>
        Username: <input type="text" name="uname"><br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        Address: <input type="address" name="address"><br>
        <input type="submit" name="submit">
</form>
</body>
</html>