@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Update Course</h4>
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
                        <h3 class="mb-0">Update Course Section</h3>
                        <a class="text-muted float-end btn badge-outline-primary" href="{{route('manage-course-section')}}">Manage</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-course',['id'=>$course->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Course Name</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="course_name"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Course Name"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"

                                    >{{$course->course_name}}</textarea>
                                    @if ($errors->has('course_name'))
                                        <span class="text-danger">{{ $errors->first('course_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Button 1 Name</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="button_1"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Button One Name"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"

                                    >{{$course->button_1}}</textarea>
                                    @if ($errors->has('button_1'))
                                        <span class="text-danger">{{ $errors->first('button_1') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Button 2 Name</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="button_2"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Button Name Two"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"

                                    >{{$course->button_2}}</textarea>
                                    @if ($errors->has('button_2'))
                                        <span class="text-danger">{{ $errors->first('button_2') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Course Description</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="course_description"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Course Description Text"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                        rows="9"
                                    >{{$course->course_description}}</textarea>
                                    @if ($errors->has('course_description'))
                                        <span class="text-danger">{{ $errors->first('course_description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Technology</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="technology"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Course Technology"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                    >{{$course->technology}}</textarea>
                                    @if ($errors->has('technology'))
                                        <span class="text-danger">{{ $errors->first('technology') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Total Cost Per Semester</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="cost" value="{{$course->cost}}" id="basic-default-name" placeholder="Enter Your Course Total Cost Per Semester" />
                                    @if ($errors->has('cost'))
                                        <span class="text-danger">{{ $errors->first('cost') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">4 Years(8 semester) Total Cost</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="total_cost" value="{{$course->total_cost}}" id="basic-default-name" placeholder="Enter Your Course 4 Years(8 semester) Total Cost" />
                                    @if ($errors->has('total_cost'))
                                        <span class="text-danger">{{ $errors->first('total_cost') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Total Semester</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="semester" value="{{$course->semester}}" id="basic-default-name" placeholder="Enter Your Number of Students" />
                                    @if ($errors->has('semester'))
                                        <span class="text-danger">{{ $errors->first('semester') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Number of Students</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="student" value="{{$course->student}}" id="basic-default-name" placeholder="Enter Your Number of Students" />
                                    @if ($errors->has('student'))
                                        <span class="text-danger">{{ $errors->first('student') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Course Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($course->image)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Other Image</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" id="inputGroupFile02" name="other_image[]" multiple/>
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label mt-5" for="basic-default-name">Other Image</label>
                                @foreach($course->courseOtherImages as $otherImage)
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <img src="{{asset($otherImage->other_image)}}" alt="" style="height: 100px; width: 100px">
                                        </div>
                                        <a href="{{url('admin/course-other-image/'.$otherImage->id.'/delete')}}" class="d-block btn badge-outline-danger" style="height: 30px; width: 100px">Remove</a>
                                    </div>
                                @endforeach
                                <div class="col-sm-12 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="other_image[]"  multiple/>
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
                                        @if($course->publication_status == 1)
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
                                        @if($course->publication_status == 2)
                                            checked
                                        @endif
                                    />
                                    <label class="form-check-label col-sm-12" for="defaultRadio2"> UnPublic </label>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
