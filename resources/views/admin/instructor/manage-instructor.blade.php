@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Add Course</h4>
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
                        <h3 class="mb-0">Add Instructor Section</h3>
                        <a class="text-muted float-end btn badge-outline-warning" href="{{route('add-instructor')}}">Add</a>
                    </div>
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order Status</h4>
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                            <tr>
                                                <th> SL NO </th>
                                                <th> Teacher Name </th>
                                                <th> Designation </th>
                                                <th> Image </th>
                                                <th> Status </th>
                                                <th> Action </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1 ?>
                                            @foreach($teachers as $teacher)
                                                <tr>
                                                    <td> {{$i}} </td>
                                                    <td> {{$teacher->teacher_name}} </td>
                                                    <td> {{$teacher->designation}} </td>
                                                    <td>
                                                        <img src="{{asset($teacher->image)}}" alt="image" />
                                                    </td>

                                                    <td>
                                                        @if($teacher->publication_status==1)

                                                            <a href="{{route('instructor-status',['id'=>$teacher->id])}}" class="btn badge-outline-success" title="UnPublished">Public</a>
                                                        @else
                                                            <a href="{{route('instructor-status',['id'=>$teacher->id])}}" class="btn badge-outline-warning" title="Published">UnPublic</a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn badge-outline-warning" href="{{route('edit-instructor',['id'=>$teacher->id])}}">Edit</a>
                                                        <a class="btn badge-outline-danger" href="{{route('delete-instructor',['id'=>$teacher->id])}}" onclick="return confirm('Are you sure to Delete this!!')">Delete</a>
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
