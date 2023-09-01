@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center d-flex">
        <div class="col-sm-12">
            <div class="card my-5">
                <div class="card-header text-center">
                    <h1>Welcome to Teachers Dashboard</h1>
                </div>
                <div class="card-title text-center">
                    <h4>Students Management System</h4>
                </div>
                <div class="card-body">
                    <div class="logout_btn my-5">
                        <form id="logout-form" action="{{ route('teacher.logout.submit') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>

                        <a href="#" id="logout" class="btn btn-sm btn-danger">Logout</a>
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Attendance</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Home
                                work report</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="update-tab" data-bs-toggle="tab" data-bs-target="#update"
                                type="button" role="tab" aria-controls="update" aria-selected="false">Home
                                work Update</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                                type="button" role="tab" aria-controls="messages" aria-selected="false">Attendance
                                Report</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#official"
                                type="button" role="tab" aria-controls="settings"
                                aria-selected="false">Official</button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul class="list-group list-group-horizontal-sm my-5">
                                <li class="list-group-item">

                                    <a href="{{ route('teacher.class-attendance', 'play') }}">
                                        Play
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.class-attendance', 'classOne') }}">
                                        Class One </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.class-attendance', 'classTwo') }}">
                                        Class Two </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.class-attendance', 'classThree') }}">
                                        Class Three </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.class-attendance', 'classFour') }}">
                                        Class Four </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.class-attendance', 'classFive') }}">
                                        Class Five </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.class-attendance', 'classSix') }}">
                                        Class Six </a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul class="list-group list-group-horizontal-sm my-5">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="update" role="tabpanel" aria-labelledby="update-tab">
                            <ul class="list-group list-group-horizontal-sm my-5">
                                <li class="list-group-item">

                                    <a href="{{ route('teacher.homework', 'play') }}">
                                        Play
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.homework', 'classOne') }}">
                                        Class One </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.homework', 'classTwo') }}">
                                        Class Two </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.homework', 'classThree') }}">
                                        Class Three </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.homework', 'classFour') }}">
                                        Class Four </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.homework', 'classFive') }}">
                                        Class Five </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('teacher.homework', 'classSix') }}">
                                        Class Six </a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">this is
                            update
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">this is
                            report</div>
                        <div class="tab-pane" id="official" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="list-group my-5">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                    <small>And some small print.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                    <small class="text-muted">And some muted small print.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                    <small class="text-muted">And some muted small print.</small>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
</div>
</div>

@endsection