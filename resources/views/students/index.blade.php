<!DOCTYPE html>
<html>
<head><title>Student List</title></head>
<body>
    <h2>Student Management System</h2>
    <a href="{{ route('students.create') }}">Add New Student</a>
    <table border="1" cellpadding="10" style="margin-top: 10px;">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->course }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>