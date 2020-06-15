@extends('layout')

@section('content')
    <div class="m-2">
        <h1 class="text-center">List Of Restaurants</h1>
        @if (Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">
                            @php
                                echo $i;
                                $i = $i+1;
                            @endphp
                        </th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            <a href="delete/{{$item->id}}"><i class="fas fa-trash"></i></a>
                            <a href="edit/{{$item->id}}" class="ml-2"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection