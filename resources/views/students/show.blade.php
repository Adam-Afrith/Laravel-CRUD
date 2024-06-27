@extends('students/layouts')

@section('content')
    <div class='card'>
        <div class='card-header'>
            <h1>Show Student</h1>
        </div>
        <div class='card-body'>
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
        </div>
    </div>
    <br>
    <div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection