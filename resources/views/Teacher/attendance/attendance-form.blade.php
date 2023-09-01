@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center d-flex">
        <div class="col-md-8">
            <div class="card p-5">
                <div class="card-header">
                    <h4 class="text-center">
                        Attendance for {{ $class }}
                    </h4>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
               
                <div class="card-body py-5">
                    <form action="{{ route('teacher.submit', $class) }}" method="post">
                        @csrf
                        <input type="hidden" name="class" value="{{$class}}">
                        @foreach($students as $student)
                        <div class="form-group">
                         <label for="{{ $student->name }}" class="form-check-label">
                                <h4>{{ $student->name }}:</h4>
                            </label>
                        <div class="form-check">
                               <input type="radio" class="form-check-input @error('attendance') is-invalid @enderror"
                                id="attendance_present-{{ $student->id }}"
                                name="attendance[{{ $student->id }}]" value="present"
                                {{ old('attendance.' . $student->id) == 'present' ? 'checked' : '' }}> 
                                <label for="attendance_present-{{ $student->id }}" class="form-check-label">
                                    Present
                                </label>
                                <br>
                       
                            <input type="radio" class="form-check-input @error('attendance' ) is-invalid @enderror"
                                id="attendance_absent-{{ $student->id }}"
                                name="attendance[{{ $student->id }}]" value="absent"
                                {{ old('attendance.' . $student->id) == 'absent' ? 'checked' : '' }}>
                                <label for="attendance_absent-{{ $student->id }}" class="form-check-label">
                                    Absent
                                </label>  
                                  @error('attendance')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    </div>
                       
                    @endforeach
                    
                       <button type="submit" class="btn btn-sm btn-block btn-outline-primary">Submit Attendance</button>
                    </form>
                    
                </div>

                
            </div>
        </div>
    </div>
</div>

@endsection
