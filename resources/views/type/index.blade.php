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
                        <h2>Type data table</h2>
                    </div>
                    <div class="data-table-list">
                        <div class="col-lg ">
                            <div class="breadcomb-report">
                                <a href="{{route('types.create')}}" class="btn"><i
                                        class="notika-icon notika-edit"></i></a>
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
                                        <th>ID</th>
                                        <th>Type Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($type as $ty)
                                    <tr>
                                        <td>{{$ty->type_id}}</td>
                                        <td>{{$ty->type_name}}</td>
                                        <td>{{$ty->type_dec}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

</x-app-layout>
