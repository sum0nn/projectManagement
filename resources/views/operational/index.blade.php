@extends('template.index')

@section('content')
    <style>
        .nav-link {
            color: black;
        }

        .nav-link:hover {
            color: red;
        }

        .nav-link.active {
            color: red !important;
            font-weight: 800;
        }

        .tables-card {
            margin-bottom: 0 !important;
        }

        .details-text {
            margin-bottom: 10px;
            font-weight: 800;
        }

        .title-text {
            margin-bottom: unset;
        }

        .card-nbm {
            margin-bottom: 0 !important;
        }

        .btn-addMaterial {
            border-radius: 10px;
            background-color: #FF3E3E;
            border: #FF3E3E;
            color: white;
        }
    </style>

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="header-title mb-2">Sales Order Number</h4>

                                        <select class="form-select" id="sales-order"
                                                onchange="getOperationals(this.value)">
                                            <option selected value="">Pilih Sales Order Number</option>
                                            @foreach ($salesOrder as $item)
                                                <option value="{{ $item->id }}">{{ $item->so }}</option>
                                            @endforeach
                                        </select>

                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card card-nbm">
                            <div class="card-body card-nbm">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h4 class="header-title mb-2">Operational</h4>
                                            <select id="select-operational" class="form-select mb-2"
                                                    onchange="detailOperational(this.value, false)">
                                                <option selected value="">Silahkan Pilih SO</option>

                                            </select>
                                        </div> <!-- end col -->
                                    </div>

                                    <div class="row px-3">
                                        <div class="col-md-6">
                                            <th scope="row">
                                                <p class="title-text">SPK Number :</p>
                                                <p class="details-text" id="spk_number">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Service Date :</p>
                                                <p class="details-text" id="date">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Project Label :</p>
                                                <p class="details-text" id="label">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Service Type :</p>
                                                <p class="details-text" id="type">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">File</p>
                                                <p class="details-text" id="file">-</p>
                                            </th>
                                        </div>
                                        <div class="col-md-6">
                                            <th scope="row">
                                                <p class="title-text">Description</p>
                                                <p class="details-text" id="description">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Approved by</p>
                                                <p class="details-text" id="approved">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Transportation Mode</p>
                                                <p class="details-text" id="transport">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Vehicle Number</p>
                                                <p class="details-text" id="vehicle">-</p>
                                            </th>
                                            <th scope="row">
                                                <p class="title-text">Created by</p>
                                                <p class="details-text" id="created">-</p>
                                            </th>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-nbm text-center">
                                                <div class="card-header bg-transparent border-bottom">
                                                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link active show"
                                                                    href="#work"
                                                                    role="tab" data-toggle="tab">Work Plan
                                                            </button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab"
                                                                    href="#expenses" data-toggle="tab">Operational
                                                                Expenses
                                                            </button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab"
                                                                    href="#material" data-toggle="tab">Material
                                                                Utilized
                                                            </button>
                                                        </li>
                                                        <li class="nav-item">
                                                            <button type="button" class="nav-link" role="tab"
                                                                    href="#technician" data-toggle="tab"
                                                                    id="technician_list">Technician
                                                                List
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="card-body tab-content">
                                                    {{-- isi tab work plan --}}
                                                    <div role="tabpanel" class="tab-pane fade active show" id="work">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-work-modal"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Work Plan
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table-striped table-hover mb-0">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Operational</th>
                                                                                    <th>Description</th>
                                                                                    <th>Due Date</th>
                                                                                    <th>Status</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>N-23009</td>
                                                                                    <td>Dummy Work Plans</td>
                                                                                    <td>11/09/2023</td>
                                                                                    <td><span
                                                                                            class="badge bg-info">Planned</span>
                                                                                    </td>
                                                                                    <td class="text-center" width="140">
                                                                                        <div
                                                                                            class="btn-group btn-group-sm"
                                                                                            style="float: none;">
                                                                                            <button type="button"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#add-work-modal"
                                                                                                    title="Edit Operational Expenses"
                                                                                                    type="button"
                                                                                                    class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                                                                    style="background-color: #3E8BFF;">
                                                                                                <span
                                                                                                    class="mdi mdi-pencil"></span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div
                                                                                            class="btn-group btn-group-sm"
                                                                                            style="float: none;">
                                                                                            <button id="delete-button"
                                                                                                    title="Hapus Operational Expenses"
                                                                                                    type="button"
                                                                                                    class="tabledit-edit-button btn btn-danger">
                                                                                                <span
                                                                                                    class="mdi mdi-trash-can-outline"></span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <th scope="row">2</th>
                                                                                <td>N-23009</td>
                                                                                <td>Dummy Work Plans</td>
                                                                                <td>11/09/2023</td>
                                                                                <td><span class="badge bg-warning">On
                                                                                            Progress</span></td>
                                                                                <td class="text-center">
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button type="button"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#add-work-modal"
                                                                                                title="Edit Operational Expenses"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                                                                style="background-color: #3E8BFF;">
                                                                                                <span
                                                                                                    class="mdi mdi-pencil"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button id="delete-button"
                                                                                                title="Hapus Operational Expenses"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-danger">
                                                                                                <span
                                                                                                    class="mdi mdi-trash-can-outline"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </td>
                                                                                </tr>
                                                                                <th scope="row">3</th>
                                                                                <td>N-23009</td>
                                                                                <td>Dummy Work Plans</td>
                                                                                <td>11/09/2023</td>
                                                                                <td><span
                                                                                        class="badge bg-success">Completed</span>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button type="button"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#add-expenses-modal"
                                                                                                title="Edit Operational Expenses"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                                                                style="background-color: #3E8BFF;">
                                                                                                <span
                                                                                                    class="mdi mdi-pencil"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button id="delete-button"
                                                                                                title="Hapus Operational Expenses"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-danger">
                                                                                                <span
                                                                                                    class="mdi mdi-trash-can-outline"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- isi tab expenses --}}
                                                    <div role="tabpanel" class="tab-pane fade" id="expenses">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-expenses-modal"
                                                                                        onclick="showExpenseForm()"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Expenses
                                                                                </button>
                                                                            </div>

                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table-bordered dt-responsive table-hover table-responsive nowrap dataTable no-footer dtr-inline"
                                                                                id="table-expenses">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Expense Date</th>
                                                                                    <th>Expense Item</th>
                                                                                    <th>Amount</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- isi tab material utilized --}}
                                                    <div role="tabpanel" class="tab-pane fade" id="material">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-material-modal"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Material
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table table-striped table-hover mb-0">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Operational</th>
                                                                                    <th>Memo Number</th>
                                                                                    <th>Delivery Order Number</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>N-23009</td>
                                                                                    <td>M223</td>
                                                                                    <td>DO-886</td>
                                                                                    <td class="text-center">
                                                                                        <div
                                                                                            class="btn-group btn-group-sm"
                                                                                            style="float: none;">
                                                                                            <button type="button"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#add-material-modal"
                                                                                                    title="Edit Material"
                                                                                                    type="button"
                                                                                                    class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                                                                    style="background-color: #3E8BFF;">
                                                                                                <span
                                                                                                    class="mdi mdi-pencil"></span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div
                                                                                            class="btn-group btn-group-sm"
                                                                                            style="float: none;">
                                                                                            <button id="delete-button"
                                                                                                    title="Hapus Material"
                                                                                                    type="button"
                                                                                                    class="tabledit-edit-button btn btn-danger">
                                                                                                <span
                                                                                                    class="mdi mdi-trash-can-outline"></span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <th scope="row">2</th>
                                                                                <td>N-23009</td>
                                                                                <td>M223</td>
                                                                                <td>DO-886</td>
                                                                                <td class="text-center">
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button title="Edit Material"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                                                                style="background-color: #3E8BFF;">
                                                                                            <span
                                                                                                class="mdi mdi-pencil"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button id="delete-button"
                                                                                                title="Hapus Material"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-danger">
                                                                                            <span
                                                                                                class="mdi mdi-trash-can-outline"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </td>
                                                                                </tr>
                                                                                <th scope="row">3</th>
                                                                                <td>N-23009</td>
                                                                                <td>M223</td>
                                                                                <td>DO-886</td>
                                                                                <td class="text-center">
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button title="Edit Material"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                                                                style="background-color: #3E8BFF;">
                                                                                            <span
                                                                                                class="mdi mdi-pencil"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="btn-group btn-group-sm"
                                                                                         style="float: none;">
                                                                                        <button id="delete-button"
                                                                                                title="Hapus Material"
                                                                                                type="button"
                                                                                                class="tabledit-edit-button btn btn-danger">
                                                                                            <span
                                                                                                class="mdi mdi-trash-can-outline"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- isi tab technician --}}
                                                    <div role="tabpanel" class="tab-pane fade" id="technician">
                                                        <div class="row text-start">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body pt-0">
                                                                        <div class="row table-title mb-1">
                                                                            <div class="col-sm-8">
                                                                                <h4 class="mt-0 header-title"></h4>
                                                                            </div>
                                                                            <div class="col-sm-4 text-end">
                                                                                <button type="button"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#add-technician-modal"
                                                                                        class="btn btn-save w-md waves-effect waves-light px-4 btn-addMaterial">
                                                                                    <i class="mdi mdi-plus"></i>Add
                                                                                    Technician
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table table-striped table-hover mb-0"
                                                                                id="table-technician">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Name</th>
                                                                                    <th>Division</th>
                                                                                    <th class="text-center" width="140">
                                                                                        Actions
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @include('operational.listModals')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
            </div> <!-- content -->
        </div>
    </div>
    {{-- <script src="https://kit.fontawesome.com/031855bb65.js" crossorigin="anonymous"></script> --}}
@endsection
@section('pageScript')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        function getOperationals(salesOrder) {
            if (salesOrder !== "" && salesOrder != null) {
                $.ajax({
                    url: "{{ route('operational.get-operational', '') }}" + "/" + salesOrder,
                    type: "GET",
                    success: function(data) {
                        console.log(data);
                        $(`#select-operational`).empty();
                        $(`#select-operational`).append(`<option selected value="">Pilih Operational</option>`);
                        $.each(data, function(key, value) {
                            var option = new Option(value.spk_number, value.id, false, false);
                            $("#select-operational").append(option)
                        });
                    }
                });
            }
        }
    </script>
    <script type="text/javascript">
        function detailOperational(operational) {
            if (operational !== "" && operational != null) {
                console.log(operational);
                getExpenses(operational);
                $.ajax({
                    url: "{{ route('operational.show', '') }}" + "/" + operational,
                    type: "GET",
                    success: function(data) {
                        console.log(data);

                        // Get the first operational in the array.
                        const operationalData = data[0];

                        // Get the project label.
                        const projectLabel = operationalData.project.label;
                        $('#spk_number').text(operationalData.spk_number);
                        $('#date').text(operationalData.date);
                        $('#label').text(projectLabel);
                        $('#type').text(operationalData.type);
                        $('#file').text(operationalData.file);
                        $('#description').text(operationalData.description);
                        $('#transport').text(operationalData.transportation_mode);
                        $('#vehicle').text(operationalData.vehicle_number);
                        $('#created').text(operationalData.created_by);
                        if (operationalData.approved == null) {
                            $('#approved').text('Belum di Approve');
                            //text become red button
                            $('#approved').addClass('btn btn-danger disabled');
                        } else {
                            $('#approved').text(operationalData.approved);
                        }
                        var i = 1;
                        //check if team is empty
                        if (operationalData.team.length == 0) {
                            $('#table-technician tbody').append(`
                            <tr>
                                <td colspan="3" align="center">Belum ada Technician</td>
                            </tr>
                          `);
                        } else {
                            //empty table
                            $('#table-technician tbody').empty();
                            //looping team
                            for (const member of operationalData.team) {
                                console.log(member.first_name);
                                $('#table-technician tbody').append(`
                            <tr>
                                <th scope="row">${i}</th>
                                <td>${(member.first_name + member.last_name)}</td>
                                <td>${member.division}</td>
                                <td class="text-center"> <div class="btn-group btn-group-sm"
                                        style="float: none;">
                                        <button id="delete-button"
                                            title="Hapus Technician"
                                            type="button"
                                            onclick="deleteTeam('${operationalData.id}', '${member.id}')"
                                            class="tabledit-edit-button btn btn-danger">
                                            <span
                                                class="mdi mdi-trash-can-outline"></span>
                                        </button>
                                    </div></td>
                            </tr>
                          `);
                                i++
                            }
                        }
                    }
                });

            } else {
                // Cancel the AJAX call.
                event.preventDefault();
            }
        }
    </script>

    </script>

    <script type="text/javascript">
        function deleteTeam(operational, user_id) {
            // console.log(operational, user_id)
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send an AJAX request to delete the user
                    $.ajax({
                        url: "{{ route('operational.detach-team', '') }}" + '/' + operational,
                        type: 'PATCH',
                        data: {
                            _token: "{{ csrf_token() }}",
                            user_id: user_id,
                        },
                        success: function () {
                            // Reload the table
                            detailOperational(operational)
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            console.error(xhr.responseText);
                            // Handle errors here if needed.
                        }
                    });
                }
            });
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#select-operational').select2({
                // placeholder: 'role',
                // dropdownParent: $('#con-close-modal'),
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sales-order').select2({
                // placeholder: 'role',
                // dropdownParent: $('#con-close-modal'),
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#select-technician').select2({
                // placeholder: 'role',
                // dropdownParent: $('#con-close-modal'),
                theme: 'default',
                multiple: false,
                dropdownAutoWidth: true,
                width: '100%',
                dropdownParent: $('#technician-parent'),
                formatNoMatches: function () {
                    return "Nothing found";
                },
            });
        });
    </script>
    <script type="text/javascript">
        function getExpenses(expense) {
            console.log(expense);
            // let operational = $('#select-operational').val();
            let table = $('#table-expenses').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "{{ route('operational.expense.index', '') }}" + "/" + expense,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'item',
                        name: 'item'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'id',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function (data) {
                            return `
                            <div class="btn-group btn-group-sm"
                            style="float: none;">
                            <button type="button"
                            id="edit-expense-${data}"
                            data-bs-toggle="modal"
                            data-bs-target="#add-expenses-modal"
                            title="Edit Operational Expenses"
                            data-id="${data}"
                            class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                            onclick="editExpense('${data}')"
                            style="background-color: #3E8BFF;">
                            <span
                            class="mdi mdi-pencil"></span>
                            </button>
                            </div>
                            <div class="btn-group btn-group-sm"
                            style="float: none;">
                            <button id="delete-button"
                            title="Hapus Operational Expenses"
                            type="button"
                            onclick="deleteExpense('${data}')"
                            class="tabledit-edit-button btn btn-danger">
                            <span
                            class="mdi mdi-trash-can-outline"></span>
                            </button>
                            </div>
                            `
                        }
                    }
                ]
            })
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Repopulate Expense Modal -->
    <script type="text/javascript">
        function editExpense(expense) {
            console.log(expense);
            let modal = $('#add-expenses-modal');
            let operational = $('#select-operational').val();
            let operationalText = $('#select-operational option:selected').text();
            console.log(operational)
            axios({
                method: 'GET',
                url: "{{ route('operational.expense.show', '') }}" + "/" + expense,
            })
                .then(function (response) {
                    console.log(response);
                    modal.find('#operational-label').text(operationalText);
                    modal.find('#expense-id').val(operational);
                    modal.find('#expense-date').val(response.data[0].date);
                    modal.find('#expense-item').val(response.data[0].item);
                    modal.find('#expense-amount').val(response.data[0].amount);
                    modal.find('#updateExpense').attr("data-id", response.data[0].id)
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    </script>
    <!-- Update Expense -->
    <script type="text/javascript">
        function updateExpense(expense) {
            console.log(expense)
            let modal = $('#add-expenses-modal');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    let date = modal.find('#expense-date').val()
                    let item = modal.find('#expense-item').val()
                    let amount = modal.find('#expense-amount').val()
                    axios({
                        method: 'PATCH',
                        url: "{{ route('operational.expense.update', '') }}" + "/" + expense,
                        data: {
                            _token: "{{ csrf_token() }}",
                            date: date,
                            amount: amount,
                            item: item,
                        },
                    }).then(function (response)
                    {
                        console.log(response);
                        Swal.fire(
                            'Updated!',
                            'Your file has been updated.',
                            'success'
                        )
                        $('#table-expenses').DataTable().ajax.reload();
                        modal.modal('hide');
                    }).catch(function (error) {
                        console.log(error);
                        swal.fire("Error!", "Please try again", "error");
                    })
                }
            })
        }

    </script>
    <script type="text/javascript">
        function deleteExpense(expense)
        {
            swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f34e4e',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios({
                        method: 'DELETE',
                        url: "{{ route('operational.expense.delete', '') }}" + "/" + expense,
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                    }).then(function (response)
                    {
                        console.log(response);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        $('#table-expenses').DataTable().ajax.reload();
                    }).catch(function (error) {
                        console.log(error);
                        swal.fire("Error!", "Please try again", "error");
                    })
                }
            })
        }
    </script>
    <script type="text/javascript">
        function showExpenseForm() {
            const modal = document.getElementById('add-expenses-modal');
            const button = modal.querySelector('#expenseButton');

            // Set the onclick attribute of the button element.
            button.setAttribute('onclick', 'addExpense()');

            // Change the inner HTML of the button element.
            button.innerHTML = 'Add Expense';
        }
    </script>
    <script type="text/javascript">
        function addExpense()
        {
            let modal = $('#add-expenses-modal');
            let operational = $('#select-operational').val();
            let date = modal.find('#expense-date').val()
            let item = modal.find('#expense-item').val()
            let amount = modal.find('#expense-amount').val()
            if (operational == null || operational == "") {
                swal.fire("Error!", "Please select operational", "error");
                return;
            }
            axios({
                method: 'POST',
                url: "{{ route('operational.expense.store') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    operational_id: operational,
                    date: date,
                    amount: amount,
                    item: item,
                },
            }).then(function (response)
            {
                console.log(response);
                Swal.fire(
                    'Added!',
                    'Expense has been added.',
                    'success'
                )
                $('#table-expenses').DataTable().ajax.reload();
                modal.modal('hide');
            }).catch(function (error) {
                console.log(error);
                swal.fire("Error!", "Please try again", "error");
            })
        }
    </script>
@endsection
