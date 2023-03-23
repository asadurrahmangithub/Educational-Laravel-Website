@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>All User</h4>
        @if(session()->has('message'))
            <div class="alert badge-outline-success">
                {{session()->get('message')}}
            </div>
    @endif

    <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">ALL USERS</h3>
                        <a class="text-muted float-end btn badge-outline-warning">Add</a>
                    </div>
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th> SL NO </th>
                                                <th> User Name </th>
                                                <th> Email </th>
                                                <th> Role </th>
                                                <th> Action </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1 ?>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td> {{$i}} </td>
                                                    <td> {{$user->name}} </td>
                                                    <td> {{$user->email}} </td>

                                                    <td>
                                                        @if($user->role_as==1)

                                                            <a href="{{route('role-as',['id'=>$user->id])}}" class="btn badge-outline-success" title="User">Admin</a>
                                                        @else
                                                            <a href="{{route('role-as',['id'=>$user->id])}}" class="btn badge-outline-warning" title="Admin">User</a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn badge-outline-danger" href="{{route('delete-user',['id'=>$user->id])}}" onclick="return confirm('Are you sure to Delete this!!')">Delete</a>
                                                    </td>

                                                </tr>
                                                <?php $i++ ?>
                                            @endforeach
                                            </tbody>
                                        </table>
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
