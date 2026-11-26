<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf @method('PUT')
        Name: <input type="text" name="name" value="{{ $student->name }}"><br><br>
        Email: <input type="email" name="email" value="{{ $student->email }}"><br><br>
        Course: <input type="text" name="course" value="{{ $student->course }}"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>