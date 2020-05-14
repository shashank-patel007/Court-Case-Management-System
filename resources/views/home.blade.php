@extends('layouts.app')

@section('content')
  @php
    $users=App\User::all();
  @endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as admin!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                        <table class="table table-dark">
                             <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                    @can ('edit-users')<th scope="col">Action</th>@endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{$user->email}}</td>
                                <td>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                <td>
                                    @can ('edit-users')
                                    <a href="{{ route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                                    <form action="{{route('admin.users.destroy',$user)}}" method="POST" class="float-left">
                                      @csrf
                                      {{method_field("DELETE")}}
                                      <button type="submit" class="btn btn-warning" style="margin-left: 10px;">Delete</button>
                                      @endcan
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
@endsection
