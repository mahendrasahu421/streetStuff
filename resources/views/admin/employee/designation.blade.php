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
                                <a href="{{ url('designation-list') }}" class="btn btn-primary">Designation List</a></small>
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
                            <h6 class="card-title">{{ $tittle }}</h6>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            {!! Form::open([
                                'url' => $url,
                                'method' => 'post',
                                'id' => 'basic-form',
                                'novalidate' => 'novalidate',
                                'class' => 'row g-3',
                                'enctype' => 'multipart/form-data',
                            ]) !!}
                            
                            <div class="col-md-6">
                                <x-input type="text" value="{{ isset($designation) ? $designation->designation : '' }}" name="designation"
                                    class="form-control" label="Designation Name" />
                            </div>
                            
                            <div class="col-md-6">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="0">---Select Status---</option>
                                    <option value="1" @if(isset($designation) && $designation->status == 1) selected @endif>Active</option>
                                    <option value="2" @if(isset($designation) && $designation->status == 2) selected @endif>Inactive</option>
                                </select>
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
