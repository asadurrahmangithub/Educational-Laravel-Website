@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Update Blog</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Add Blog Section</h3>
                        <a class="text-muted float-end btn badge-outline-primary" href="{{route('manage-blog')}}">Manage</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save-blog',['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Blog Title</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="blog_title"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Blog Title Name"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"

                                    >{{$blog->blog_title}}</textarea>
                                    @if ($errors->has('blog_title'))
                                        <span class="text-danger">{{ $errors->first('blog_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">First Description</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="first_description"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your First Description Text"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                        rows="6"
                                    >{{$blog->first_description}}</textarea>
                                    @if ($errors->has('first_description'))
                                        <span class="text-danger">{{ $errors->first('first_description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Middle Description</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="middle_description"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Middle Description Text"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                        rows="5"
                                    >{{$blog->middle_description}}</textarea>
                                    @if ($errors->has('middle_description'))
                                        <span class="text-danger">{{ $errors->first('middle_description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Last Description</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="last_description"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your last Description Text"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                        rows="5"
                                    >{{$blog->last_description}}</textarea>
                                    @if ($errors->has('last_description'))
                                        <span class="text-danger">{{ $errors->first('last_description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Author Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="author" value="{{$blog->author}}" id="basic-default-name" placeholder="Enter Your Blog Author Name" />
                                    @if ($errors->has('author'))
                                        <span class="text-danger">{{ $errors->first('author') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Blog Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" value="{{$blog->date}}" id="basic-default-name" placeholder="Enter Your Blog Public Date" />
                                    @if ($errors->has('date'))
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Blog Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($blog->image)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                                <div class="form-check">
                                    <input
                                        name="publication_status"
                                        class="form-check-input"
                                        type="radio"
                                        value="1"
                                        id="defaultRadio1"
                                        @if($blog->publication_status==1)
                                         checked
                                        @endif
                                    />
                                    <label class="form-check-label col-sm-12" for="defaultRadio1"> Public </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        name="publication_status"
                                        class="form-check-input"
                                        type="radio"
                                        value="2"
                                        id="defaultRadio2"
                                        @if($blog->publication_status==2)
                                            checked
                                        @endif
                                    />
                                    <label class="form-check-label col-sm-12" for="defaultRadio2"> UnPublic </label>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
