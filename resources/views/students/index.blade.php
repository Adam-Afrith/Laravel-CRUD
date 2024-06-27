@extends('students/layouts')

@section('content')
<h1>Students</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Create New Student</a><br><br>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-secondary">Show</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-dark">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
