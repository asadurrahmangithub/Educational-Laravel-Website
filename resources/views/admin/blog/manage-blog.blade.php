@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Manage Blog</h4>
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
                        <h3 class="mb-0">Manage All Blog Section</h3>
                        <a class="text-muted float-end btn badge-outline-warning" href="{{route('add-blog')}}">Add</a>
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
                                                <th> Blog Name </th>
                                                <th> First Description </th>
                                                <th> Author </th>
                                                <th> Image </th>
                                                <th> Status </th>
                                                <th> Action </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1 ?>
                                            @foreach($blogs as $blog)
                                                <tr>
                                                    <td> {{$i}} </td>
                                                    <td> {!! substr($blog->blog_title,0,10) !!} </td>
                                                    <td> {!! substr($blog->first_description,0,20) !!} </td>
                                                    <td> {{$blog->author}} </td>
                                                    <td>
                                                        <img src="{{asset($blog->image)}}" alt="image" />
                                                    </td>

                                                    <td>
                                                        @if($blog->publication_status==1)

                                                            <a href="{{route('blog-status',['id'=>$blog->id])}}" class="btn badge-outline-success" title="UnPublished">Public</a>
                                                        @else
                                                            <a href="{{route('blog-status',['id'=>$blog->id])}}" class="btn badge-outline-warning" title="Published">UnPublic</a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn badge-outline-warning" href="{{route('edit-blog',['id'=>$blog->id])}}">Edit</a>
                                                        <a class="btn badge-outline-danger" href="{{route('delete-blog',['id'=>$blog->id])}}" onclick="return confirm('Are you sure to Delete this!!')">Delete</a>
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
