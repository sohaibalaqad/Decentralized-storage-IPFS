@extends('PartnerLayouts.dashboard.main')

@section('title')
Node
@endsection

@section('title_route')
{{route('partner.index')}}
@endsection



@push('css')
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}"/>
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>

          <style>
            .card.card-flush {
                margin: 20px;
            }
        </style>
@endpush


@section('content')
    <!-- -------------------------Ahmed -->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header pt-8">
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>svg {
                                    fill: #ffffff
                                }</style>
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                        </svg>
                    </i>
                    <input type="text" data-kt-filemanager-table-filter="search"
                           class="form-control form-control-solid w-250px ps-15"
                           placeholder="Search Nodes &amp; servers">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">



                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_file" id="kt_toolbar_primary_button">
                        <i class="ki-duotone ki-folder-up fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>New Node
                    </button>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none"
                     data-kt-filemanager-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected
                    </div>
                    <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">
                        Delete
                        Selected
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Table header-->
            <div class="d-flex flex-stack">
                <!--begin::Folder path-->
                <div>
                </div>
                <!--end::Folder path-->
                <!--begin::Folder Stats-->
                <div class="badge badge-lg badge-primary">
                    <span id="kt_file_manager_items_counter"> 1 Nodes</span>
                </div>
                <!--end::Folder Stats-->
            </div>
            <!--end::Table header-->
            <!--begin::Table-->
            <div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <div class="dataTables_scroll">
                        <div class="dataTables_scrollHead"
                             style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                            <div class="dataTables_scrollHeadInner"
                                 style="box-sizing: content-box; width: 100%; padding-right: 15px;">
                                <table data-kt-filemanager-table="folders"
                                       class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                       style="margin-left: 0px; width: 638px;">
                                    <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class=" pe-2 sorting_disabled" rowspan="1" colspan="1" style="width: 2%;">
                                            <div>#</div>
                                            </div>
                                        </th>
                                        <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 45%;">Node Name
                                        </th>
                                        <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 10%;">Size
                                        </th>

                                        <th class="w-125px sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 20%;text-align: right;padding-right: 20px;">Actions
                                        </th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="dataTables_scrollBody"
                             style="position: relative; overflow: auto; max-height: 700px; width: 100%;">
                            <table id="kt_file_manager_list" data-kt-filemanager-table="folders"
                                   class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                   style="width: 100%;">
                                <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"
                                    style="height: 0px;">
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 5%; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                       data-kt-check-target="#kt_file_manager_list .form-check-input"
                                                       value="1">
                                            </div>
                                        </div>
                                    </th>
                                    <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 45%; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">NODE NAME
                                        </div>
                                    </th>
                                    <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 10%; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Size
                                        </div>
                                    </th>

                                    <th class="w-125px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 20%; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Actions
                                        </div>
                                    </th>
                                </tr>
                                </thead>

                                <tbody class="fw-semibold text-gray-600">

                                <!-- Folder -->

                                <tr class="odd">
                                    <td>
                                       <div class="text-gray-800 sorting_disabled">1</div>
                                    </td>
                                    <td data-order="Images">
                                        <div class="text-gray-800 text-hover-primary ms-6">
                                            <span>
{{--                                            <img src="{{ asset('assets/media/svg/files/folder-document.svg') }}" width="50" alt=""/>--}}
<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm280 72a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm48 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM64 288c-35.3 0-64 28.7-64 64v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V352c0-35.3-28.7-64-64-64H64zm280 72a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm56 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>                                            </span>
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary ms-6">server1</a>
                                        </div>
                                    </td>

                                    <td data-order="Invalid date">-</td>
                                    <td></td>
                                    <td data-order="Invalid date"></td>
                                    <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                        <!-- Rest of the code -->
                                    </td>
                                    <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Share link-->
                                            <div class="ms-2" data-kt-filemanger-table="copy_link">

                                                <!--begin::Menu-->
                                                <div
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                    data-kt-menu="true">
                                                    <!--begin::Card-->
                                                    <div class="card card-flush">
                                                        <div class="card-body p-5">
                                                            <!--begin::Loader-->
                                                            <div class="d-flex"
                                                                 data-kt-filemanger-table="copy_link_generator">
                                                                <!--begin::Spinner-->
                                                                <div class="me-5" data-kt-indicator="on">
                                                                        <span class="indicator-progress">
                                                                            <span
                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                        </span>
                                                                </div>
                                                                <!--end::Spinner-->
                                                                <!--begin::Label-->
                                                                <div class="fs-6 text-dark">Generating Share Link...
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Loader-->
                                                            <!--begin::Link-->
                                                            <div class="d-flex flex-column text-start d-none"
                                                                 data-kt-filemanger-table="copy_link_result">
                                                                <div class="d-flex mb-3">
                                                                    <i
                                                                        class="ki-duotone ki-check fs-2 text-success me-3"></i>
                                                                    <div class="fs-6 text-dark">Share Link Generated
                                                                    </div>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control form-control-sm"
                                                                       value="https://path/to/file/or/folder/">
                                                                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read
                                                                    only.
                                                                    <a href="#"
                                                                       class="ms-2">Change permissions</a>
                                                                </div>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::Share link-->
                                            </div>
                                            <!--begin::More-->
                                            <div class="ms-2">
                                                <button type="button"
                                                        class="btn btn-lg btn-icon btn-light btn-active-light-primary me-2"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                    <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em"
                                                             viewBox="0 0 512 512">
                                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <style>svg {
                                                                    fill: #009ef7
                                                                }</style>
                                                            <path
                                                                d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                                                        </svg>
                                                    </i>
                                                </button>
                                                <!--begin::Menu-->
                                                <div
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        {{-- {{route('nodes.show'.$node->id)}} --}}
                                                        <a href="#"
                                                           class="menu-link px-3">Info</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a id="#kt_modal_rename_folder" class="menu-link px-3" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_rename_folder" data-folder-id="#"
                                                           data-kt-filemanager-table="rename">More</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link text-danger px-3"
                                                           data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::More-->
                                            </div>
                                        </div>
                                    </td>
                                </tr>






                                </tbody>


                            </table>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                    </div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                    </div>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>


    <div class="modal fade" id="kt_modal_add_file" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered">
          <!--begin::Modal content-->
          <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
              <!--begin::Modal title-->
              <h2 class="modal-title text-primary">New Node</h2>
              <!--end::Modal title-->
              <!--begin::Close-->
              <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                <span class="svg-icon svg-icon-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                  </svg>
                </span>
              </button>
              <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-8 px-10">
              <!--begin::Form-->
              <div>
                <p class="text-gray-700">
                    The Connect3 documentation guides us on adding a new node to the network. 
                    It covers software requirements, configurations, protocols, 
                    and performance optimization. By following it, we can expand the decentralized Connect3 network.
                </p>
              </div>
              <!--end::Form-->
            </div>
            <!--end::Modal body-->
            <!--begin::Modal footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
              <a href="{{ route('documentation') }}" class="btn btn-primary">Add Node</a>
            </div>
            <!--end::Modal footer-->
          </div>
          <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
      </div>
      
      
      
      
    
    

    <!-- Ahmed -->

    @push('js')
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/custom/apps/file-manager/list.js') }}"></script>
        <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>




        {{-- <script>
        $(document).ready(function() {
            $('#kt_modal_rename_folder').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var folderId = button.data('folder-id'); // Retrieve the folder ID from the data-folder-id attribute
                var modal = $(this);

                // Set the folderId value in the hidden input field
                modal.find('.modal-body input#folderId').val(folderId);
            });
        });
        $(document).ready(function() {
            $('#kt_modal_move_to_folder').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var folderId = button.data('folder-id'); // Retrieve the folder ID from the data-folder-id attribute
                var modal = $(this);

                // Set the folderId value in the hidden input field
                modal.find('.modal-body input#folderId').val(folderId);
            });
        });



        $(document).on('submit', '#kt_modal_add_file_form', function (event) {
                event.preventDefault();

                var file = $('input[name="file"]')[0].files[0];

                var formData = new FormData();
                formData.append('file', file);

                $.ajax({
                    url: '{{ route('add.file') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                        $.ajax({
                            url: '/get-files', // Replace with the URL of the endpoint that fetches the list of files
                            type: 'GET',
                            success: function (files) {

                                var modal = document.getElementById('kt_modal_add_file');
                                $(modal).modal('hide');

                                var tableBody = $('#kt_file_manager_list tbody');
                                tableBody.empty();

                                for (var i = 0; i < files.length; i++) {
                                    var file = files[i];

                                    var row = '<tr class="odd">' +
                                        '<td><div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" value="1"></div></td>' +
                                        '<td><div class="d-flex align-items-center"><span><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><style>svg {fill: #03d855}</style><path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm97 289c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L79 303c-9.4 9.4-9.4 24.6 0 33.9l48 48c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-31-31 31-31zM257 255c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l31 31-31 31c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9l-48-48z" /></svg><a href="#" class="text-gray-800 text-hover-primary ms-2">' + file.name + '</a></span></div></td>' +
                                        '<td>' + (file.size / 1024).toFixed(2) + ' KB</td>' +
                                        '<td data-order="Invalid date">' + (file.updated_at).toLocaleString('en-US', {
                                            day: 'numeric',
                                            month: 'short',
                                            year: 'numeric',
                                            hour: 'numeric',
                                            minute: 'numeric',
                                            hour12: true
                                        }) + '</td>' +
                                        '<td></td>' +
                                        '<td data-order="Invalid date"></td>' +
                                        '<td class="text-end" data-kt-filemanager-table="action_dropdown"></td>' +

                                        '<td class="text-end" data-kt-filemanager-table="action_dropdown"><div class="d-flex justify-content-end"><div class="ms-2" data-kt-filemanger-table="copy_link"><button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"><i class="ki-duotone ki-fasten fs-5 m-0"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><style>svg {fill: #009ef7}</style><path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" /></svg></i></button>' +
                                        '<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true"><div class="card card-flush"><div class="card-body p-5"><div class="d-flex" data-kt-filemanger-table="copy_link_generator"><div class="me-5" data-kt-indicator="on"><span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></div><div class="fs-6 text-dark">Generating Share Link...</div></div>' +
                                        '<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result"> <div class="d-flex mb-3"> <i class="ki-duotone ki-check fs-2 text-success me-3"></i><div class="fs-6 text-dark">Share Link Generated</div></div><input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/"><div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.<a href="../../demo1/dist/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div></div></div></div></div></div>' +
                                        '<div class="ms-2"><button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"><i class="ki-duotone ki-dots-square fs-5 m-0"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg {fill: #009ef7}</style><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" /></svg></i></button>' +
                                        '<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">' +
                                        '<div class="menu-item px-3"><a href="{{ route('cat', $file->hash) }}" class="menu-link px-3" target="_blank">View</a></div>' +
                                        '<div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a> </div>' +
                                        '<div class="menu-item px-3"><a href="#" class="menu-link px-3">Download Folder</a></div>' +
                                        '<div class="menu-item px-3"><a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a></div>' +
                                        '<div class="menu-item px-3"><a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a></div></div></div></div>' +
                                        '</td>' +
                                        '</tr>';

                                    tableBody.append(row);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });

                        var div = document.getElementById("alert-div");
                        while (div.firstChild) {
                            div.removeChild(div.firstChild);
                        }

                        var alertHtml = '<div class="alert alert-success alert-dismissible fade show w-100" role="alert">' +
                            '<strong>File uploaded successfully!</strong>' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '</div>';

                        $(alertHtml).appendTo('#alert-div');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        </script> --}}

    @endpush
@endsection

