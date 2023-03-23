@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Edit Instructor Data</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Update Course Section</h3>
                        <small class="text-muted float-end">Please Update</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-instructor',['id'=>$teacher->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Teacher Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="teacher_name" value="{{$teacher->teacher_name}}" id="basic-default-name" placeholder="Enter Your Teacher Name" />

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
                                    >{{$teacher->designation}}</textarea>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Category Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($teacher->image)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Facebook (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="facebook" value="{{$teacher->facebook}}" id="basic-default-name" placeholder="Enter Your Teacher Facebook Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">LinkedIn (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="linkedin" value="{{$teacher->linkedin}}" id="basic-default-name" placeholder="Enter Your Teacher LinkedIn Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Twitter (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="twitter" value="{{$teacher->twitter}}" id="basic-default-name" placeholder="Enter Your Teacher Twitter Link" />
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
                                        @if($teacher->publication_status==1)
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
                                        @if($teacher->publication_status==2)
                                        checked
                                        @endif
                                    />
                                    <label class="form-check-label col-sm-12" for="defaultRadio2"> UnPublic </label>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
