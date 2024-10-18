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
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="basic-tb-hd">
                        <h2>Movies data table</h2>
                    </div>
                    <div class="data-table-list">
                        <div class="col-lg ">
                            <div class="breadcomb-report">
                                <button class="btn" data-toggle="modal" data-target="#myModalthree"><i
                                        class="notika-icon notika-edit"></i></button>
                            </div>
                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Searching">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Movies ID</th>
                                        <th>Movies Images</th>
                                        <th>Movies video ID </th>
                                        <th>Movies Title</th>
                                        <th>Movies Description</th>
                                        <th>Movies Category</th>
                                        <th>Movies Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $movies as $movie)
                                    <tr>
                                        <td>{{ $movie->mov_id }}</td>
                                        <td><img src="/image/{{ $movie->image }}" alt="Movie Image" style="width: 30px; height: auto;"></td>
                                        <td>{{ $movie->mov_video }}</td>
                                        <td>{{ $movie->mov_title }}</td>
                                        <td>{{ $movie->mov_dec }}</td>
                                        <td>{{ $movie->mov_cat }}</td>
                                        <td>{{ $movie->mov_type }}</td>
                                        <!-- Action buttons: Edit and Delete -->
                                        <td>
                                            <!-- Edit button -->
                                            <a href="{{ route('movies.edit', $movie->mov_id) }}" class="btn btn-primary btn-sm">Edit</a>

                                            
                                            <!-- Delete button -->
                                            <form action="{{ route('movies.destroy', $movie->mov_id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this movie?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

    <!-- Modals area start-->
    <div class="modal fade" id="myModalthree" role="dialog">
        <div class="modal-dialog modal-large">
            <div class="modal-content">
                <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                            <div class="form-element-list mg-t-30" >
                                <div class="cmp-tb-hd">
                                    <h2>cREATE</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                            <div class="form-ic-cmp">
                                                <i class="fa fa-film"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="mov_video">
                                                <label class="nk-label">Video ID</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                            <div class="form-ic-cmp">
                                                <i class="fa fa-heading"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="mov_title">
                                                <label class="nk-label">Movies Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                            <div class="form-ic-cmp">
                                                <i class="fa fa-text-width"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="mov_dec">
                                                <label class="nk-label">Movies Description</label>
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
                                                <select class="selectpicker form-control" name="mov_cat">
                                                    <optgroup label="Category">
                                                        @foreach ($category as $categ)
                                                            <option value="{{$categ->cat_id}}">{{$categ->cat_name}}</option>
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
                                                <select class="selectpicker form-control" name="mov_type">
                                                    <optgroup label="movies Type">
                                                        @foreach ($type as $ty)
                                                            <option value="{{$ty->type_id}}">{{$ty->type_name}}</option>
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
                                                    style="display:none;" name="image" />
                                            </div>
                                            <img id="previewImage" src="" alt="Image Preview"
                                                style="max-width: 100%; display:none; margin-top: 10px;" />
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
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
    <!-- Modals area End-->
    
</x-app-layout>
