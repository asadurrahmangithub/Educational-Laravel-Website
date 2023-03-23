@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Add Instructor</h4>

    <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Add Instructor Section</h3>
                        <a class="text-muted float-end btn badge-outline-primary" href="{{route('manage-instructor')}}">Manage</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save-instructor')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Teacher Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="teacher_name" value="{{old('teacher_name')}}" id="basic-default-name" placeholder="Enter Your Teacher Name" />
                                    @if ($errors->has('teacher_name'))
                                        <span class="text-danger">{{ $errors->first('teacher_name') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Designation</label>
                                <div class="col-sm-10">
                                    <textarea
                                        name="designation"
                                        id="basic-default-message"
                                        class="form-control"
                                        placeholder="Enter Your Teacher Designation"
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2"
                                    >{{old('designation')}}</textarea>
                                    @if ($errors->has('designation'))
                                        <span class="text-danger">{{ $errors->first('designation') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Teacher Image</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" value="{{old('image')}}" id="inputGroupFile02" name="image" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Facebook (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}" id="basic-default-name" placeholder="Enter Your Teacher Facebook Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">LinkedIn (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="linkedin" value="{{old('linkedin')}}" id="basic-default-name" placeholder="Enter Your Teacher LinkedIn Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Twitter (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="twitter" value="{{old('twitter')}}" id="basic-default-name" placeholder="Enter Your Teacher Twitter Link" />
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
                                        checked
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
                                    />
                                    <label class="form-check-label col-sm-12" for="defaultRadio2"> UnPublic </label>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
