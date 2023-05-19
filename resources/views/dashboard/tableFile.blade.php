@extends('NewLayouts.dashboard.main')

@section('title')
عرض الملفات
@endsection
{{-- css --}}
@push('css')

@endpush


@section('content')

			<!-- -------------------------Ahmed -->

            <div class="card card-flush mt-6 mt-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bolder mb-1">Files</h3>
                        {{-- <div class="fs-6 text-gray-400"></div> --}}
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar my-1">
                        <!--begin::Select-->
                        {{-- <div class="me-6 my-1">
                            <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                <option value="All" selected="selected">All time</option>
                                <option value="thisyear">This year</option>
                                <option value="thismonth">This month</option>
                                <option value="lastmonth">Last month</option>
                                <option value="last90days">Last 90 days</option>
                            </select>
                        </div> --}}
                        <!--end::Select-->
                        {{-- <!--begin::Select-->
                        <div class="me-4 my-1">
                            <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                <option value="All" selected="selected">All Orders</option>
                                <option value="Approved">Approved</option>
                                <option value="Declined">Declined</option>
                                <option value="In Progress">In Progress</option>
                                <option value="In Transit">In Transit</option>
                            </select>
                        </div>
                        <!--end::Select--> --}}
                        <!--begin::Search-->
                        <a href="#" style="margin-right: 25px" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_file" id="kt_toolbar_primary_button">Upload File</a>

                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-3 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Files" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card toolbar-->
                </div>
                <!--end::Card header-->
                <div class="alert-div"></div>

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                            <!--begin::Head-->
                            <thead class="fs-7 text-gray-400 text-uppercase">
                                <tr>
                                    <th class="min-w-250px">File Name</th>
                                    <th class="min-w-150px">File Type</th>
                                    <th class="min-w-90px">File Size</th>
                                    <th class="min-w-90px">Action</th>
                                </tr>
                            </thead>
                            <!--end::Head-->
                            <!--begin::Body-->
                            <tbody class="fs-6">
                                @foreach($files as $file)
                                <tr>
                                    <td>
                                        {{ $file->name }}
                                    </td>
                                    <td>{{ $file->type }}</td>
                                    <td>{{ number_format($file->size / 1024, 2) }} KB</td>
                                    <td>
                                        {{-- <span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span> --}}
                                        <a href="http://217.147.1.37:5002/ipfs/{{$file->hash}}" target="_blank" class="btn btn-light-success btn-sm">View</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                            <!--end::Body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>


						<!-- Ahmed -->


            <!--begin::Modal - Create App-->
            <div class="modal fade" id="kt_modal_add_file" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Upload File</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-10 px-lg-10">
                            <!--begin::Stepper-->
                            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_add_file_stepper">
                                <!--begin::Content-->
                                <div class="flex-row-fluid py-lg-5 px-lg-15">
                                    <!--begin::Form-->
                                    <form class="form"  id="kt_modal_add_file_form">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">File</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="File"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="file" class="form-control form-control-lg form-control-solid" name="file" placeholder="" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 1-->

                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack pt-10">
                                            <button type="submit" class="btn btn-lg btn-primary">Upload
                                            </button>
                                        </div>

                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Stepper-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->





{{-- js --}}
@push('js')


        <script src="{{ asset('assets/js/custom/pages/projects/project/project.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/users-search.js')}}"></script>
		<script src="{{ asset('assets/js/custom/modals/new-target.js')}}"></script>
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script>
    $(document).on('submit', '#kt_modal_add_file_form', function(event) {
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
            success: function(response) {
                console.log(response);
                $.ajax({
                    url: '/get-files', // Replace with the URL of the endpoint that fetches the list of files
                    type: 'GET',
                    success: function (files) {

                        var modal = document.getElementById('kt_modal_add_file');
                        $(modal).modal('hide');

                        var tableBody = $('#kt_profile_overview_table tbody');
                        tableBody.empty();

                        for (var i = 0; i < files.length; i++) {
                            var file = files[i];

                            var row = '<tr>' +
                                '<td>' + file.name + '</td>' +
                                '<td>' + file.type + '</td>' +
                                '<td>' + (file.size / 1024).toFixed(2) + ' KB</td>' +
                                '<td>' +
                                '<a href="http://217.147.1.37:5002/ipfs/' + file.hash + '" target="_blank">' +
                                '<i class="fa fa-eye"></i>' +
                                '</a>' +
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
</script>

@endpush


@endsection
