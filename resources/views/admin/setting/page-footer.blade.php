@extends('admin.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page / </span>Footer Section</h4>
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
                    <form action="{{route('save-page-footer')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Add Page Footer Contact Information</h3>
                            <small class="text-muted float-end">Please Add</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Contact Address</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="address"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Footer Contact Address"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                        >{{$pageFooter->address}}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Contact Number</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="number"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Footer Contact Number"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                        >{{$pageFooter->number}}</textarea>
                                    @if ($errors->has('number'))
                                        <span class="text-danger">{{ $errors->first('number') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Contact Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" value="{{$pageFooter->email}}" id="basic-default-name" placeholder="Enter Your Contact Email Name" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>


                        </div>
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Footer Lest Site All Information</h3>
                            <small class="text-muted float-end">input data</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">left Description</label>
                                <div class="col-sm-10">
                                        <textarea
                                            name="description"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Enter Your Footer Left Site Description"
                                            aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2"
                                            rows="3"
                                        >{{$pageFooter->description}}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label mt-5" for="basic-default-name">Footer Image</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <img id="img" src="{{asset($pageFooter->image)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="col-sm-7 mt-5">
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark" name="image" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">Footer Social Media Information</h3>
                            <small class="text-muted float-end">input data</small>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Facebook (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="facebook" value="{{$pageFooter->facebook}}" id="basic-default-name" placeholder="Enter Your Footer Facebook Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Instagram (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="instagram" value="{{$pageFooter->instagram}}" id="basic-default-name" placeholder="Enter Your Footer Instagram Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">LinkedIn (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="linkedin" value="{{$pageFooter->linkedin}}" id="basic-default-name" placeholder="Enter Your Footer LinkedIn Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Twitter (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="twitter" value="{{$pageFooter->twitter}}" id="basic-default-name" placeholder="Enter Your Footer Twitter Link" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">YouTube (Optional)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="youtube" value="{{$pageFooter->youtube}}" id="basic-default-name" placeholder="Enter Your Footer YouTube Link" />
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10" >
                                    <button type="submit" class="btn badge-outline-success p-2">Upload</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
