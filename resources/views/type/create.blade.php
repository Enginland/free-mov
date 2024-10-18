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
                <form action="{{route('types.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-element-list mg-t-30" >
                        <div class="cmp-tb-hd">
                            <h2>Type</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" placeholder="Type Name" name="type_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner form-rlt-mg">
                                    <p>Descrition</p>
                                </div>
                            </div>  
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea name="type_dec" class="form-control" rows="5" placeholder="Let us type some Type description...."></textarea>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <!-- --->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" >Save changes</button>
                            <a href="{{ url('types') }}" type="button" class="btn btn-default" >Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Status area-->
</x-app-layout>
