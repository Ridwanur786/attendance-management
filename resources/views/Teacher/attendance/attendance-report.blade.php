@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card justify-content-center d-flex my-5">
                <div class="card-header">
                    <h4 class="text-center">Attendance Report - {{ $class }} </h4>
                </div>
                <div class="card-title text-center"> Attendance Report: {{ $class }} </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-warning">{{session('error')}}</div>
                        @endif
                        <table class="table table-sm table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>attendance</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>

                    
                                        @php
                                        $attendanceData = json_decode($student->attendance, true);
                                        @endphp
                                    
                                        @if (is_null($attendanceData))
                                            <p class="alert alert-warning">No data found</p>
                                        @else
                                        {{ $attendanceData[array_rand($attendanceData)] }}
                                        @endif
                               
                                       
                                    </td>
                                    <td>{{ $student->attendance_reports->status ?? 'late' }}
                                    </td>
                                    <td>
                                        <form
                                            action="{{ route('teacher.update-attendance', ['class' => $class, 'studentId' => $student->id]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-sm btn-block btn-outline-success">Approve
                                                Attendance</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection