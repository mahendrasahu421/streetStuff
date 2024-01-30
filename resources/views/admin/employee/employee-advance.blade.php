@extends('admin.layout.layout');


@section('main-content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Advance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="advanceForm" action="{{ url('add-EmployeeAdvance') }}" method="get">
                        <!-- Your form inputs go here -->
                        {{-- <input type="text" hidden class="form-control" id="encodedId" value="{{ $encodedId }}"> --}}

                        <div class="mb-3">

                            <input type="text" hidden class="form-control" id="employeeId">
                        </div>
                        <div class="mb-3">
                            <label for="employeeName" class="form-label">Employee Name</label>
                            <input type="text" name="empId" class="form-control" id="employeeName" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="employeeId" class="form-label">Employee Sallry</label>
                            <input type="text" class="form-control" id="sallry" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="employeeId" class="form-label">Add Advance</label>
                            <input type="number" name="advancePayment" class="form-control" id="advance">
                        </div>
                        <!-- Other form inputs go here -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-info">Save</button> --}}
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">

            <div class="block-header py-lg-4 py-3">
                <div class="row g-3">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="m-0 fs-5"><a href="javascript:void(0);"
                                class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                            Employee Advance</h2>
                        <ul class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Employee</a></li>&nbsp; / &nbsp;

                            <li class="">Employee Advance</li>
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
            @section('success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endsection
        

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
                                    <td>
                                        <span data-bs-toggle="modal" class="badge bg-warning"
                                            data-bs-target="#exampleModal"
                                            onclick="setModalValues('{{ $employee->sallry }}', '{{ $encodedId }}', '{{ $employee->name }}')">Add
                                            Advance</span>
                                    </td>
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
    function setModalValues(sallry, encodedId, name) {
        // Set values in the modal
        document.getElementById('employeeId').value = encodedId;
        document.getElementById('employeeName').value = name;
        document.getElementById('sallry').value = sallry;

        // Update the form action with the employee ID
        var form = document.getElementById('advanceForm');
        form.action = "{{ url('add-EmployeeAdvance') }}/" + encodedId;
    }
</script>

@endsection
