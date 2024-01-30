@extends('admin.layout.layout');


@section('main-content')
    <div id="main-content">
        <div class="container-fluid">

            <div class="block-header py-lg-4 py-3">
                <div class="row g-3">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="m-0 fs-5"><a href="javascript:void(0);"
                                class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                            Employee List</h2>
                        <ul class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Employee</a></li>&nbsp; / &nbsp;

                            <li class="">Employee List</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 text-md-end">
                        <div class="d-inline-flex text-start">
                            <div class="me-2">
                                <h6 class="mb-0"><i class="fa fa-user"></i> {{ $countEmp }} Employee</h6>
                                <a href="{{ url('create-new-employee') }}" class="btn btn-primary">Create Employee
                                </a></small>
                            </div>
                            <span id="bh_visitors"></span>
                        </div>


                    </div>
                </div>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
           

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ session('success') }}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
            @endif

        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                {{ Form::open([
                    'url' => 'employePresenty',
                    'method' => 'post',
                    'id' => 'basic-form',
                    'enctype' => 'multipart/form-data',
                ]) }}
                <label><b>Select Status</b></label>

                <div class="col-md-3">
                    <select class="form-control" name="empStatus">
                        <option value="0">Select Presenty</option>
                        <option value="P">Present</option>
                        <option value="A">Appsent</option>

                    </select>
                </div>

                <div class="card p-4 mb-4">


                    <table id="myTable" class="table display dataTable table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th><input type="checkbox" name="empId[]" label="Select all" /></th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Phone</th>
                                {{-- <th>Sallry</th> --}}
                                <th>Status</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $i = ($allemp->currentPage() - 1) * $allemp->perPage();
                            @endphp
                            @foreach ($allemp as $employee)
                                @php
                                    $id = $employee->id;
                                    $encodedId = base64_encode($id);
                                @endphp
                                <tr>
                                    <td class="sorting_1">{{ ++$i }}</td>
                                    <td><input type="checkbox" name="empId[]" value="{{ $id }}"
                                            label="Select all" /></td>
                                    <td class="sorting_1">{{ $employee->name }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->contect_number }}</td>
                                    {{-- <td>{{ $employee->sallry }}</td> --}}
                                    <td>
                                        @if ($employee->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-primary">Deactive</span>
                                        @endif
                                    </td>
                                    {{-- <td><a href="{{ url('edit-employee-details/' . $encodedId) }}">Edit</a></td> --}}
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div class="col-12">
                        {!! Form::submit('Present Employee', ['class' => 'btn btn-primary', 'id' => 'submitForm']) !!}
                    </div>
                    {{ Form::close() }}
                    <span>{{ $allemp->links('pagination::bootstrap-5') }}</span>
                </div> <!-- .card end -->

            </div>
        </div>

    </div>
    </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#submitForm').on('click', function() {
                // Serialize form data
                var formData = $('#basic-form').serialize();

                // Send AJAX request
                $.ajax({
                    type: 'POST',
                    url: 'employePresenty',
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        // You can add further actions here if needed
                    },
                    error: function(error) {
                        // Handle error response
                        console.log(error);
                        // You can add error handling actions here
                    }
                });
            });
        });
    </script>
    <style>
        .pagi a {
            border: 1px solid #ddd;
            padding: 10px;
        }
    </style>
    <script>
        $('#myTable').DataTable({
            responsive: true
        });
    </script>
@endsection
