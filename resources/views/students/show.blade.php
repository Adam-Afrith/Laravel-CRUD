@extends('students/layouts')

@section('content')
    <h1>Show Student</h1>
    <div>
        <strong>Name:</strong>
        {{ $student->name }}
    </div>
    <div>
        <strong>Email:</strong>
        {{ $student->email }}
    </div>
    <div>
        <strong>Phone:</strong>
        {{ $student->phone }}
    </div>
    <div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection