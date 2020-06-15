@extends('layout')

@section('content')
    <div class="m-2">
        <h1 class="text-center">Add New Restaurant</h1>
        <form method="POST" action="/add">
            @csrf
            <div class="form-group">
                <i class="fas fa-utensils"></i>
                <label for="RestoName">Name Of Restaurant</label>
                <input type="text" name="RestoName" class="form-control" id="RestoName" placeholder="Enter Name">
                @error('RestoName')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <i class="fas fa-envelope    "></i>
                <label for="RestoEmail">Email Of Restaurant</label>
                <input type="email" name="RestoEmail" class="form-control" id="RestoEmail" placeholder="Enter Email">
                @error('RestoEmail')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <i class="fas fa-map-pin    "></i>
                <label for="RestoAddress">Address Of Restaurant</label>
                <input type="text" name="RestoAddress" class="form-control" id="RestoAddress" placeholder="Enter Address">
                @error('RestoAddress')
                    <span>{{$message}}</span>
                @enderror
            </div>            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection