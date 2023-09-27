<div class="listModals">

    {{-- modals work plan--}}
    <form action="" class="parsley-examples" novalidate="" method="post" enctype="multipart/form-data">
        @csrf
        <div id="add-work-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            style="overflow:hidden;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Add
                            Work Plan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="row">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-1" class="form-label">Operational<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="operational"
                                        placeholder="get value default dari operational id" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-2" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" placeholder="Description"
                                        parsley-trigger="change" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-3" class="form-label">Due Date<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="due-date" placeholder="Due Date"
                                        parsley-trigger="change" required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-save waves-effect waves-light">
                                Save
                                changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
    </form>

    {{-- modals operational expenses --}}
    <form action="" class="parsley-examples" novalidate="" method="post" enctype="multipart/form-data">
        @csrf
        <div id="add-expenses-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            style="overflow:hidden;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Add
                            Expenses</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="row">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-1" class="form-label">Project<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="project_name"
                                        placeholder="get value default dari parent project name" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-1" class="form-label">Description<span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="description" placeholder="Description"
                                        parsley-trigger="change" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-2 " class="form-label">Amount<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="amount" placeholder="Amount"
                                        parsley-trigger="change" required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-save waves-effect waves-light">
                                Save
                                changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
    </form>

    {{-- modals material utilized--}}
    <form action="" class="parsley-examples" novalidate="" method="post" enctype="multipart/form-data">
        @csrf
        <div id="add-material-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            style="overflow:hidden;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Add
                            Material</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="row">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-1" class="form-label">Operational<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="memo_number"
                                        placeholder="get value default dari operational id" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-1" class="form-label">Memo
                                        Number</label>
                                    <input type="text" class="form-control" id="memo_number" placeholder="Memo Number">
                                    <small id="emailHelp" class="form-text text-muted">(Optional)</small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-2 " class="form-label">Delivery
                                        Order
                                        Number<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="do_number" placeholder="DO Number"
                                        parsley-trigger="change" required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-save waves-effect waves-light">
                                Save
                                changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
    </form>

    {{-- modals technician--}}
    <form action="" class="parsley-examples" novalidate="" method="post" enctype="multipart/form-data">
        @csrf
        <div id="add-technician-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="overflow:hidden;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Add
                            Technician</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="row">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-1" class="form-label">Operational<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="operational"
                                        placeholder="get value default dari operational id" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start" id="technician-parent">
                                    <label for="field-1" class="form-label">Technician</label>
                                    {{-- <input type="text" class="form-control" id="technician"
                                        placeholder="Technician" parsley-trigger="change" required=""> --}}
                                    <select class="form-select" id="select-technician">
                                        <option selected value="">-- Pilih Technician -- </option>
                                        <option value="">Technician 1</option>
                                        <option value="">Technician 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-start">
                                    <label for="field-2 " class="form-label">Dvision<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="division"
                                        placeholder="generate value division dari data user" parsley-trigger="change"
                                        required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-save waves-effect waves-light">
                                Save
                                changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
    </form>
    
</div>