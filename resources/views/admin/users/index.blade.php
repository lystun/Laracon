@extends('layouts.admin')



@section ('content')

    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_user')}}</p>
    @endif

    <h1>Users</h1>

    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
              <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated </th>
          </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                  <td><img src="{{$user->photo ? $user->photo->file_path : '/images/avatar2.png'}}" height="50"></td>
                <td><a href="{{url('/admin/users/'.$user->id.'/edit')}}">{{$user->name}}</a></td><td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffforhumans()}}</td>
                <td>{{$user->updated_at->diffforhumans()}}</td>
              </tr>
            @endforeach
        @endif
        </tbody>
      </table>


    @stop