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
                                {{-- <h6 class="mb-0"><i class="fa fa-user"></i> {{ $countEmp }} Employee</h6> --}}
                                <a href="{{ url('create-new-employee') }}" class="btn btn-primary">Create Employee
                                </a></small>
                            </div>
                            <span id="bh_visitors"></span>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row g-3">
                <form action="{{ route('employees.search') }}" method="get">
                    <div class="col-md-3 mb-3">
                        <x-input type="search" name="search" label="Search" value="{{ old('search', $search) }}" />
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-danger">Search</button>
                    </div>
                </form>
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
                                    <th>Sallry</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
                                        <td class="sorting_1">{{ $employee->name }}</td>
                                        <td>{{ $employee->age }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->contect_number }}</td>
                                        <td>{{ $employee->sallry }}</td>
                                        <td>
                                            @if ($employee->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-primary">Deactive</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ url('edit-employee-details/' . $encodedId) }}">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                        <span>{{ $allemp->links('pagination::bootstrap-5') }}</span>
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
