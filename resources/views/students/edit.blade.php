@extends('students/layouts')

@section('content')
    <h1>Edit Student</h1>
    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $student->name }}" class="form-control">
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $student->email }}" class="form-control">
        </div>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

    @endsection
