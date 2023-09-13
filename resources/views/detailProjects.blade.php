@extends('template.index')

@section('content')

<style>
    tr {
        vertical-align: middle;
    }

    .tabledit-edit-button {
        float: none;
        color: white;
        border-radius: 15px !important;
    }

    .btn-createItems {
        border-radius: 10px;
        background-color: #FF3E3E;
        border: #FF3E3E;
        color: white;
        margin-right: 0;
        float: right;
        margin-left: auto;
    }

    .btn-createItems:focus {
        color: white;
    }

    .table-title {
        vertical-align: middle !important;
    }

    .details-text {
        margin-bottom: unset;
    }

    .title-text {
        margin-bottom: unset;
        font-weight: 100;
    }
</style>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row table-title">
                                <div class="col-sm-8">
                                    <h4 class="mt-0 header-title">Milestone</h4>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="btn btn-createItems w-md waves-effect waves-light mb-3 px-4"><i
                                            class="mdi mdi-plus"></i>Add Milestone</a>
                                </div>
                            </div>


                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Entry Date</th>
                                            <th>Description</th>
                                            <th>Due Date</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Entry Date</td>
                                            <td>Description</td>
                                            <td>Due Date</td>
                                            <td class="text-center">
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button" class="tabledit-edit-button btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Entry Date</td>
                                            <td>Description</td>
                                            <td>Due Date</td>
                                            <td class="text-center">
                                                <span class="badge bg-warning">On-Progress</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button" class="tabledit-edit-button btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Entry Date</td>
                                            <td>Description</td>
                                            <td>Due Date</td>
                                            <td class="text-center">
                                                <span class="badge bg-primary">Planned</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button" class="tabledit-edit-button btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row table-title">
                                <div class="col-sm-8">
                                    <h4 class="mt-0 header-title">Production Cost</h4>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="btn btn-createItems w-md waves-effect waves-light mb-3 px-4"><i
                                            class="mdi mdi-plus"></i>Add Cost</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Entry Date</th>
                                            <th>Description</th>
                                            <th>Due Date</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Entry Date</td>
                                            <td>Description</td>
                                            <td>Due Date</td>
                                            <td class="text-center">
                                                <span class="badge bg-success">Completed</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button" class="tabledit-edit-button btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Entry Date</td>
                                            <td>Description</td>
                                            <td>Due Date</td>
                                            <td class="text-center">
                                                <span class="badge bg-primary">Planned</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button" class="tabledit-edit-button btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Entry Date</td>
                                            <td>Description</td>
                                            <td>Due Date</td>
                                            <td class="text-center">
                                                <span class="badge bg-warning">On Progress</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button"
                                                        class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                                        style="background-color: #3E8BFF;">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>
                                                </div>
                                                <div class="btn-group btn-group-sm" style="float: none;">
                                                    <button type="button" class="tabledit-edit-button btn btn-danger">
                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row table-title">
                                <div class="col-sm-8">
                                    <h4 class="mt-0 header-title">Field Service Log</h4>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="btn btn-createItems w-md waves-effect waves-light mb-3 px-4"><i
                                            class="mdi mdi-plus"></i>Add Operational</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>SPK Number</th>
                                            <th>Service Date</th>
                                            <th>Project Label</th>
                                            <th>Service Type</th>
                                            <th>SPK Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>SPK Number</td>
                                            <td>Service Date</td>
                                            <td>Project Label</td>
                                            <td>Service Type</td>
                                            <td>SPK Code</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>SPK Number</td>
                                            <td>Service Date</td>
                                            <td>Project Label</td>
                                            <td>Service Type</td>
                                            <td>SPK Code</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>SPK Number</td>
                                            <td>Service Date</td>
                                            <td>Project Label</td>
                                            <td>Service Type</td>
                                            <td>SPK Code</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- end col-->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Detail Project</h4>
                            <p class="text-muted font-14 mb-3">
                                PT Apapun
                            </p>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Purchase Order Number</p>
                                                <p class="details-text">256 - 001</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Sales Order Number</p>
                                                <p class="details-text">S1/23/001</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Customer Contact Name</p>
                                                <p class="details-text">Andre Taulany</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Project Manager</p>
                                                <p class="details-text">Andre Cagur</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Sales Executive</p>
                                                <p class="details-text">Tora Sudiro</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Start Date</p>
                                                <p class="details-text">05/09/2023</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">End Date</p>
                                                <p class="details-text">06/09/2023</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Preliminary Cost</p>
                                                <p class="details-text">Rp. 1.000.000</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Purchase Order Amount</p>
                                                <p class="details-text">Rp. 12.000.000</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Real Cost</p>
                                                <p class="details-text">Rp. 0</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <p class="title-text">Progress Milestone</p>
                                                <p class="details-text">
                                                <div id="donut-chart">
                                                    <div id="donut-chart-container" class="flot-chart"
                                                        style="height: 260px; padding: 0px; position: relative;">
                                                        <canvas class="flot-base" width="731" height="260"
                                                            style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 731px; height: 260px;"></canvas><canvas
                                                            class="flot-overlay" width="731" height="260"
                                                            style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 731px; height: 260px;"></canvas>
                                                        <div class="legend">
                                                            <div
                                                                style="position: absolute; width: 93.3594px; height: 120px; top: 50px; right: 50px; background-color: transparent; opacity: 0.85;">
                                                            </div>
                                                            <table
                                                                style="position:absolute;top:50px;right:50px;;font-size:smaller;color:#545454">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="legendColorBox">
                                                                            <div
                                                                                style="border:1px solid null;padding:1px">
                                                                                <div
                                                                                    style="width:4px;height:0;border:5px solid rgb(24,138,226);overflow:hidden">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="legendLabel">
                                                                            <div style="font-size:14px;">&nbsp;Series 1
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="legendColorBox">
                                                                            <div
                                                                                style="border:1px solid null;padding:1px">
                                                                                <div
                                                                                    style="width:4px;height:0;border:5px solid rgb(16,196,105);overflow:hidden">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="legendLabel">
                                                                            <div style="font-size:14px;">&nbsp;Series 2
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="legendColorBox">
                                                                            <div
                                                                                style="border:1px solid null;padding:1px">
                                                                                <div
                                                                                    style="width:4px;height:0;border:5px solid rgb(249,200,81);overflow:hidden">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="legendLabel">
                                                                            <div style="font-size:14px;">&nbsp;Series 3
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="legendColorBox">
                                                                            <div
                                                                                style="border:1px solid null;padding:1px">
                                                                                <div
                                                                                    style="width:4px;height:0;border:5px solid rgb(255,138,204);overflow:hidden">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="legendLabel">
                                                                            <div style="font-size:14px;">&nbsp;Series 4
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div><!-- end col-->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->


    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-orderbars/js/jquery.flot.orderBars.js') }}">
    </script>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

    @endsection