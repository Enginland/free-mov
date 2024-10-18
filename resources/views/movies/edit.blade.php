<x-app-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Start Status area -->
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="{{ route('movies.update', $movies->mov_id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use PUT for updates -->
                    <div class="form-element-list mg-t-30" >
                        <div class="cmp-tb-hd">
                            <h2>Update</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-film"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        {{-- <label class="nk-label">Video ID</label> --}}
                                        <input type="text" class="form-control" name="mov_video" value="{{$movies->mov_video}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-heading"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="mov_title" value="{{$movies->mov_title}}">
                                        {{-- <label class="nk-label">Movies Title</label> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-text-width"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="mov_dec" value="{{$movies->mov_dec}}">
                                        {{-- <label class="nk-label">Movies Description</label> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-pen"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <select class="selectpicker form-control" name="mov_cat" value="{{$movies->mov_cat}}">
											<optgroup label="Category">
                                                <option>{{$movies->mov_cat}}</option>
												@foreach ($category as $categ)
                                                    <option value="{{$categ->cat_name}}">{{$categ->cat_name}}</option>
                                                @endforeach
											</optgroup>
										</select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                    <div class="form-ic-cmp">
                                        <i class="fa fa-pen"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <select class="selectpicker form-control" name="mov_type" value="{{$movies->mov_type}}">
											<optgroup label="movies Type">
                                                <option>{{$movies->mov_type}}</option>
												@foreach ($type as $ty)
                                                    <option value="{{$ty->type_name}}">{{$ty->type_name}}</option>
                                                @endforeach
											</optgroup>
										</select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Drag and Drop Image Upload Area -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="imageUpload"></label>
                                    <div id="drop-area" class="drop-zone">
                                        <p>Drop image here or click to upload</p>
                                        <input type="file" id="imageUpload" accept="image/*"
                                            style="display:none;" name="image"/>
                                    </div>
                                    <img id="previewImage" src="/image/{{ $movies->image }}" alt="Image Preview"
                                        style="max-width: 100%; display:none; margin-top: 10px;" />
                                        {{-- <img src="/image/{{ $movies->image }}" alt="Movie Image" style="width: 100px; height: auto;"> --}}
                                </div>
                            </div>
                        </div>
                        <!-- --->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" >Save changes</button>
                            <a href="{{ url('movies') }}" type="button" class="btn btn-default" >Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Status area-->
</x-app-layout>
