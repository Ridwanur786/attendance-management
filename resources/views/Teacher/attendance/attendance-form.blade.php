@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="card-body">
                    <form action="{{ route('teacher.submit', $class) }}" method="post">
                        @csrf
                        @foreach ($students as $student)
                            <label>
                                {{ $student->name }}:
                                <input type="hidden" name="class" value="{{$class}}">
                                <input type="radio" name="attendance[{{ $student->id }}]" value="present" {{ old('attendance.' . $student->id) == 'present' ? 'checked' : '' }}> Present
                                <input type="radio" name="attendance[{{ $student->id }}]" value="absent" {{ old('attendance.' . $student->id) == 'absent' ? 'checked' : '' }}> Absent
                            </label>
                            <br>
                        @endforeach
                        @error('attendance')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit">Submit Attendance</button>
                    </form>
                    
                    
                                       
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
