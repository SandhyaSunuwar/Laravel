<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="/student/register" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>
        <label>Course:</label><br>
        <input type="text" name="course"><br><br>
       <button type="submit">Register</button>
    </form>
</body>
</html>