@extends('layout')

@section('content')
<div class="m-2">
    <h1 class="text-center">User Registration</h1>
    <form method="POST" action="/register">
        @csrf
        <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="RestoUserName">Name</label>
            <input type="text" name="RestoUserName" class="form-control" id="RestoUserName" placeholder="Enter Name">
            @error('RestoUserName')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="RestoUserEmail">Email</label>
            <input type="email" name="RestoUserEmail" class="form-control" id="RestoUserEmail" placeholder="Enter Email">
            @error('RestoUserEmail')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <i class="fas fa-phone"></i>
            <label for="RestoUserMobile">Mobile Number</label>
            <input type="text" name="RestoUserMobile" class="form-control" id="RestoUserMobile" placeholder="Enter Mobile Number">
            @error('RestoUserMobile')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="RestoUserPassword">Password</label>
            <input type="password" name="RestoUserPassword" class="form-control" id="RestoUserPassword" placeholder="Enter Password">
            @error('RestoUserPassword')
                <span>{{$message}}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection