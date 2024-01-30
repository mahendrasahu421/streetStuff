@extends('admin.layout.layout')


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
                                {{-- <h6 class="mb-0"><i class="fa fa-user"></i> {{ $countEmp }} Employee</h6> --}}
                                {{-- <a href="{{ url('create-new-employee') }}" class="btn btn-primary">Create Employee
                                </a></small> --}}
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
                            <h6 class="card-title">Basic Validation</h6>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" id="basic-form" method="post" novalidate="">
                                <div class="col-md-3">
                                    <label><b>Search by Name Or ID</b></label>
                                    <input type="search" name="nameId" class="form-control"
                                        placeholder="Search by Name Or ID">
                                </div>
                                <div class="col-md-3">
                                    <label><b>Search By P & A</b> </label>
                                    <select class="form-control" name="empStatus">
                                        <option value="0">Select Status</option>
                                        <option value="P">Present</option>
                                        <option value="A">Absent</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label><b>Form Date</b></label>
                                    <input type="date" name="startDate" class="form-control"
                                        placeholder="Search by Name Or ID">
                                </div>
                                <div class="col-md-2">
                                    <label><b>To date</b></label>
                                    <input type="date" name="startDate" class="form-control"
                                        placeholder="Search by Name Or ID">
                                </div>
                                <div class="col-md-2 mt-4">
                                    {{-- <label>To date</label> --}}
                                    <button type="submit" class="btn btn-primary mt-2">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card p-4 mb-4">
                        <table id="myTable" class="table display dataTable table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>

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
                                    $i = ($empLeaves->currentPage() - 1) * $empLeaves->perPage();
                                @endphp
                                @foreach ($empLeaves as $employee)
                                    <tr>
                                        <td class="sorting_1">{{ ++$i }}</td>
                                        <td class="sorting_1">{{ $employee->employee->name }}</td>
                                        <td>{{ $employee->employee->age }}</td>
                                        <td>{{ $employee->employee->email }}</td>
                                        <td>{{ $employee->employee->contect_number }}</td>
                                        {{-- <td>{{ $employee->employee->sallry }}</td> --}}
                                        <td>
                                            @if ($employee->employee->empStatus == 'A')
                                                <span class="badge bg-primary">Absent</span>
                                            @else
                                                <span class="badge bg-success">Present</span>
                                            @endif
                                        </td>


                                        {{-- <td><a href="{{ url('edit-employee-details/' . $employee->employee->id) }}">Edit</a></td> --}}
                                    </tr>
                                @endforeach
                            </tbody>



                        </table>
                        <span>{{ $empLeaves->links('pagination::bootstrap-5') }}</span>
                    </div> <!-- .card end -->

                </div>
            </div>

        </div>
    </div>

    </div>
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
