@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Manage Course Category</h4>
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
                        <h3 class="mb-0">Manage All Course Category Section</h3>
                        <a class="text-muted float-end btn badge-outline-warning" href="{{route('add-course')}}">Add</a>
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
                                                <th> Category Name </th>
                                                <th> Description </th>
                                                <th> Image </th>
                                                <th> Hover Img </th>
                                                <th> Status </th>
                                                <th> Action </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1 ?>
                                            @foreach($courses as $course)
                                            <tr>
                                                <td> {{$i}} </td>
                                                <td> {{$course->course_title}} </td>
                                                <td> {{$course->course_subtitle}} </td>
                                                <td>
                                                    <img src="{{asset($course->category_img)}}" alt="image" />
                                                </td>
                                                <td>
                                                    <img src="{{asset($course->white_category_img)}}" alt="image" />
                                                </td>
                                                <td>
                                                    @if($course->publication_status==1)

                                                        <a href="{{route('course-status',['id'=>$course->id])}}" class="btn badge-outline-success" title="UnPublished">Public</a>
                                                    @else
                                                        <a href="{{route('course-status',['id'=>$course->id])}}" class="btn badge-outline-warning" title="Published">UnPublic</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn badge-outline-warning" href="{{route('course-edit',['id'=>$course->id])}}">Edit</a>
                                                    <a class="btn badge-outline-danger" href="{{route('course-delete',['id'=>$course->id])}}" onclick="return confirm('Are you sure to Delete this!!')">Delete</a>
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
