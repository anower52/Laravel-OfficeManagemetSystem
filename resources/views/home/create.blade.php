<!DOCTYPE html>
<html>
<body>

<h2>Create View</h2>

<form {{--action="{{route('display')}}"--}} method="post">
    First name:<br>
    <input type="text" value="anower" name="myname">
    <br>
    Last name:<br>
    <input type="email" value="me@email.com" name="myemail">
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
