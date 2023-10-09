@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card justify-content-center d-flex my-5">
                <div class="card-header">
                    <h4 class="text-center">Home work Report - {{ $class }} </h4>
                </div>
                <div class="card-title text-center"> Home work Submission: {{ $class }} </div>
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


                                        {{-- Now you can loop through the attendance array --}}
                                       
                                        {{ $student->attendance}}<br>
                                      
                                    </td>
                                    <td>{{ $student->homework->status ?? 'N/A' }}
                                    </td>
                                    <td>
                                        <form
                                            action="{{ route('teacher.update-homework', ['class' => $class, 'studentId' => $student->id]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-sm btn-block btn-outline-success">Approve
                                                Homework</button>
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