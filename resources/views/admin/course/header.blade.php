@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Course Category Header</h4>
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
                        <h3 class="mb-0">Add Course Category Header Section</h3>
                        <small class="text-muted float-end">Please Add</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('course-header')}}" method="post" >
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Course Header</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$courseHeader->course_header}}" name="course_header" id="basic-default-name" placeholder="Enter Your Course Category Header Name" />
                                    @if ($errors->has('course_header'))
                                        <span class="text-danger">{{ $errors->first('course_header') }}</span>
                                    @endif

                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Course Sub Header</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="course_subheader"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Course Category Sub Header Name"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                        rows="3">{{$courseHeader->course_subheader}}</textarea>
                                    @if ($errors->has('course_subheader'))
                                        <span class="text-danger">{{ $errors->first('course_subheader') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn badge-outline-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
