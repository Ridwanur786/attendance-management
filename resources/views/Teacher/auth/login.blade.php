
@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center d-flex">
   <div class="col-sm-4">
    <div class="card my-5">
        <div class="card-title"><p class="h1 text-center">Teachers  Login</p></div>
        <div class="card-body">
        
                <form action="{{ route('teacher.login.submit')}}" method="post">
                @csrf
                  <div class="form-group">
                  <label for="Email">Email</label>
                 <input type="text" name="email" id="teachers_email" class="form-control form-control-sm">
                  </div>  
                  <div class="form-group">
                  <label for="password">Password</label>
                 <input type="password" name="password" id="teachers_password" class="form-control form-control-sm">
                  </div> 
                  <div class="form-group my-2"><button type="submit" class="btn btn-sm btn-block btn-outline-primary ">Login</button></div> 
                
                </form>
        </div>
        
        </div>
    </div>
        
    </div>
</div>
</div>

@endsection