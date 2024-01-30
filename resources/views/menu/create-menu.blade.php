@extends('admin.layout.layout');


@section('main-content')
    <div id="main-content">
        <div class="container-fluid">

            <div class="block-header py-lg-4 py-3">
                <div class="row g-3">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="m-0 fs-5"><a href="javascript:void(0);"
                                class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                            {{ $tittle }}</h2>
                        <ul class="breadcrumb mb-0">
                            <li class="#"><a href="index.html">Admin</a></li>&nbsp;/&nbsp;
                            {{-- <li class="breadcrumb-item">Forms</li> --}}
                            <li class="breadcrumb-item active">{{ $tittle }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-end">
                        <div class="d-inline-flex text-start">
                            <div class="me-2">
                                {{-- <h6 class="mb-0"><i class="fa fa-user"></i> 1,784</h6> --}}
                                <a href="{{ url('employee-list') }}" class="btn btn-primary">Employee List</a></small>
                            </div>
                            <span id="bh_visitors"></span>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">{{ $detais }}</h6>
                        </div>
                        <div class="card-body">

                            {!! Form::open([
                                'url' => $url,
                                'method' => $method,
                                'id' => 'basic-form',
                                'novalidate' => 'novalidate',
                                'class' => 'row g-3',
                                'enctype' => 'multipart/form-data',
                            ]) !!}

                            <div class="col-md-3">
                                <label>Select category</label>
                               <select class="form-control" name="category">
                                <option value="0">Select category</option>
                               </select>
                            </div>
                            <div class="col-md-3">
                                <x-input type="text" name="category_name" label="Category Name" placeholder="Category Name" />
                            </div>
                            
                          
                            <div class="col-12">
                                {!! Form::submit($btnName, ['class' => 'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
