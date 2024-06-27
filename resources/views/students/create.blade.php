@extends('students/layouts')

@section('content')
    <h1>Create Student</h1>
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
    <form action="{{ route('students.store') }}" method="POST">  
        <!--students.store means it's going to controller store func() and return navigate to view---->
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
