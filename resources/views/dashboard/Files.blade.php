@extends('NewLayouts.dashboard.main')

@section('title')
    My Files
@endsection
@push('css')
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}"/>
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush


@section('content')
    <!-- -------------------------Ahmed -->

    {{--    <!--begin::Post-->--}}
    {{--     <div class="post d-flex flex-column-fluid" id="kt_post">--}}
    {{--                                <!--begin::Container-->--}}
    {{--                                <div id="kt_content_container" class="container-xxl">--}}

    {{--                                    <!--begin::Documents toolbar-->--}}
    {{--                                    <div class="d-flex flex-wrap flex-stack mb-6">--}}
    {{--                                        <!--begin::Title-->--}}
    {{--                                        <h3 class="fw-bolder my-2">My Documents--}}
    {{--                                        <span class="fs-6 text-gray-400 fw-bold ms-1">100+ resources</span></h3>--}}
    {{--                                        <!--end::Title-->--}}
    {{--                                        <!--begin::Controls-->--}}
    {{--                                        <div class="d-flex my-2">--}}
    {{--                                            <!--begin::Search-->--}}
    {{--                                            <div class="d-flex align-items-center position-relative me-4">--}}
    {{--                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->--}}
    {{--                                                <span class="svg-icon svg-icon-3 position-absolute ms-3">--}}
    {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
    {{--                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />--}}
    {{--                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />--}}
    {{--                                                    </svg>--}}
    {{--                                                </span>--}}
    {{--                                                <!--end::Svg Icon-->--}}
    {{--                                                <input type="text" id="kt_filter_search" class="form-control form-control-white form-control-sm w-150px ps-9" placeholder="Search" />--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Search-->--}}
    {{--                                            <a href="#" class='btn btn-primary btn-sm' data-bs-toggle="tooltip" title="Coming soon">File Manager</a>--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Controls-->--}}
    {{--                                    </div>--}}
    {{--                                    <!--end::Documents toolbar-->--}}
    {{--                                    <!--begin::Row-->--}}
    {{--                                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-75px mb-5">--}}

    {{--                                                            <a href="{{route('MyFiles')}}"><img src="assets/media/svg/files/folder-document.svg" alt="" /></a>--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">My Files</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">7 files</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-75px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/folder-document.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">Customers</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">3 files</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-75px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/folder-document.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">CRM Project</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">25 files</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                    </div>--}}
    {{--                                    <!--end:Row-->--}}
    {{--                                    <!--begin::Row-->--}}
    {{--                                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-60px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/pdf.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">Project Reqs..</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">3 days ago</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-60px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/doc.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">CRM App Docs..</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">3 days ago</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-60px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/css.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">User CRUD Styles</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">4 days ago</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-60px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/ai.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">Metronic Logo</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">5 days ago</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-60px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/sql.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">Orders backup</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">1 week ago</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-60px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/xml.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">UTAIR CRM API Co..</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">2 weeks ago</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                        <!--begin::Col-->--}}
    {{--                                        <div class="col-md-6 col-lg-4 col-xl-3">--}}
    {{--                                            <!--begin::Card-->--}}
    {{--                                            <div class="card h-100">--}}
    {{--                                                <!--begin::Card body-->--}}
    {{--                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">--}}
    {{--                                                    <!--begin::Name-->--}}
    {{--                                                    <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">--}}
    {{--                                                        <!--begin::Image-->--}}
    {{--                                                        <div class="symbol symbol-60px mb-5">--}}
    {{--                                                            <img src="assets/media/svg/files/tif.svg" alt="" />--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Image-->--}}
    {{--                                                        <!--begin::Title-->--}}
    {{--                                                        <div class="fs-5 fw-bolder mb-2">Tower Hill App..</div>--}}
    {{--                                                        <!--end::Title-->--}}
    {{--                                                    </a>--}}
    {{--                                                    <!--end::Name-->--}}
    {{--                                                    <!--begin::Description-->--}}
    {{--                                                    <div class="fs-7 fw-bold text-gray-400">3 weeks ago</div>--}}
    {{--                                                    <!--end::Description-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--end::Card body-->--}}
    {{--                                            </div>--}}
    {{--                                            <!--end::Card-->--}}
    {{--                                        </div>--}}
    {{--                                        <!--end::Col-->--}}
    {{--                                    </div>--}}
    {{--                                    <!--end:Row-->--}}
    {{--                                    <!--begin::Modals-->--}}
    {{--                                    <!--begin::Modal - Offer A Deal-->--}}
    {{--                                    <div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">--}}
    {{--                                        <!--begin::Modal dialog-->--}}
    {{--                                        <div class="modal-dialog modal-dialog-centered mw-1000px">--}}
    {{--                                            <!--begin::Modal content-->--}}
    {{--                                            <div class="modal-content">--}}
    {{--                                                <!--begin::Modal header-->--}}
    {{--                                                <div class="modal-header py-7 d-flex justify-content-between">--}}
    {{--                                                    <!--begin::Modal title-->--}}
    {{--                                                    <h2>Offer a Deal</h2>--}}
    {{--                                                    <!--end::Modal title-->--}}
    {{--                                                    <!--begin::Close-->--}}
    {{--                                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">--}}
    {{--                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->--}}
    {{--                                                        <span class="svg-icon svg-icon-1">--}}
    {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
    {{--                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />--}}
    {{--                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />--}}
    {{--                                                            </svg>--}}
    {{--                                                        </span>--}}
    {{--                                                        <!--end::Svg Icon-->--}}
    {{--                                                    </div>--}}
    {{--                                                    <!--end::Close-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--begin::Modal header-->--}}
    {{--                                                <!--begin::Modal body-->--}}
    {{--                                                <div class="modal-body scroll-y m-5">--}}
    {{--                                                    <!--begin::Stepper-->--}}
    {{--                                                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">--}}
    {{--                                                        <!--begin::Nav-->--}}
    {{--                                                        <div class="stepper-nav justify-content-center py-2">--}}
    {{--                                                            <!--begin::Step 1-->--}}
    {{--                                                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">--}}
    {{--                                                                <h3 class="stepper-title">Deal Type</h3>--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Step 1-->--}}
    {{--                                                            <!--begin::Step 2-->--}}
    {{--                                                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">--}}
    {{--                                                                <h3 class="stepper-title">Deal Details</h3>--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Step 2-->--}}
    {{--                                                            <!--begin::Step 3-->--}}
    {{--                                                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">--}}
    {{--                                                                <h3 class="stepper-title">Finance Settings</h3>--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Step 3-->--}}
    {{--                                                            <!--begin::Step 4-->--}}
    {{--                                                            <div class="stepper-item" data-kt-stepper-element="nav">--}}
    {{--                                                                <h3 class="stepper-title">Completed</h3>--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Step 4-->--}}
    {{--                                                        </div>--}}
    {{--                                                        <!--end::Nav-->--}}
    {{--                                                        <!--begin::Form-->--}}
    {{--                                                        <form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_modal_offer_a_deal_form">--}}
    {{--                                                            <!--begin::Type-->--}}
    {{--                                                            <div class="current" data-kt-stepper-element="content">--}}
    {{--                                                                <!--begin::Wrapper-->--}}
    {{--                                                                <div class="w-100">--}}
    {{--                                                                    <!--begin::Heading-->--}}
    {{--                                                                    <div class="mb-13">--}}
    {{--                                                                        <!--begin::Title-->--}}
    {{--                                                                        <h2 class="mb-3">Deal Type</h2>--}}
    {{--                                                                        <!--end::Title-->--}}
    {{--                                                                        <!--begin::Description-->--}}
    {{--                                                                        <div class="text-muted fw-bold fs-5">If you need more info, please check out--}}
    {{--                                                                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>--}}
    {{--                                                                        <!--end::Description-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Heading-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-15" data-kt-buttons="true">--}}
    {{--                                                                        <!--begin::Option-->--}}
    {{--                                                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6 active">--}}
    {{--                                                                            <!--begin::Input-->--}}
    {{--                                                                            <input class="btn-check" type="radio" checked="checked" name="offer_type" value="1" />--}}
    {{--                                                                            <!--end::Input-->--}}
    {{--                                                                            <!--begin::Label-->--}}
    {{--                                                                            <span class="d-flex">--}}
    {{--                                                                                <!--begin::Icon-->--}}
    {{--                                                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->--}}
    {{--                                                                                <span class="svg-icon svg-icon-3hx">--}}
    {{--                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
    {{--                                                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />--}}
    {{--                                                                                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />--}}
    {{--                                                                                    </svg>--}}
    {{--                                                                                </span>--}}
    {{--                                                                                <!--end::Svg Icon-->--}}
    {{--                                                                                <!--end::Icon-->--}}
    {{--                                                                                <!--begin::Info-->--}}
    {{--                                                                                <span class="ms-4">--}}
    {{--                                                                                    <span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Personal Deal</span>--}}
    {{--                                                                                    <span class="fw-bold fs-4 text-muted">If you need more info, please check it out</span>--}}
    {{--                                                                                </span>--}}
    {{--                                                                                <!--end::Info-->--}}
    {{--                                                                            </span>--}}
    {{--                                                                            <!--end::Label-->--}}
    {{--                                                                        </label>--}}
    {{--                                                                        <!--end::Option-->--}}
    {{--                                                                        <!--begin::Option-->--}}
    {{--                                                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">--}}
    {{--                                                                            <!--begin::Input-->--}}
    {{--                                                                            <input class="btn-check" type="radio" name="offer_type" value="2" />--}}
    {{--                                                                            <!--end::Input-->--}}
    {{--                                                                            <!--begin::Label-->--}}
    {{--                                                                            <span class="d-flex">--}}
    {{--                                                                                <!--begin::Icon-->--}}
    {{--                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->--}}
    {{--                                                                                <span class="svg-icon svg-icon-3hx">--}}
    {{--                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">--}}
    {{--                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--                                                                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />--}}
    {{--                                                                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />--}}
    {{--                                                                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />--}}
    {{--                                                                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />--}}
    {{--                                                                                        </g>--}}
    {{--                                                                                    </svg>--}}
    {{--                                                                                </span>--}}
    {{--                                                                                <!--end::Svg Icon-->--}}
    {{--                                                                                <!--end::Icon-->--}}
    {{--                                                                                <!--begin::Info-->--}}
    {{--                                                                                <span class="ms-4">--}}
    {{--                                                                                    <span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Corporate Deal</span>--}}
    {{--                                                                                    <span class="fw-bold fs-4 text-muted">Create corporate account to manage users</span>--}}
    {{--                                                                                </span>--}}
    {{--                                                                                <!--end::Info-->--}}
    {{--                                                                            </span>--}}
    {{--                                                                            <!--end::Label-->--}}
    {{--                                                                        </label>--}}
    {{--                                                                        <!--end::Option-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Actions-->--}}
    {{--                                                                    <div class="d-flex justify-content-end">--}}
    {{--                                                                        <button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">--}}
    {{--                                                                            <span class="indicator-label">Offer Details</span>--}}
    {{--                                                                            <span class="indicator-progress">Please wait...--}}
    {{--                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
    {{--                                                                        </button>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Actions-->--}}
    {{--                                                                </div>--}}
    {{--                                                                <!--end::Wrapper-->--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Type-->--}}
    {{--                                                            <!--begin::Details-->--}}
    {{--                                                            <div data-kt-stepper-element="content">--}}
    {{--                                                                <!--begin::Wrapper-->--}}
    {{--                                                                <div class="w-100">--}}
    {{--                                                                    <!--begin::Heading-->--}}
    {{--                                                                    <div class="mb-13">--}}
    {{--                                                                        <!--begin::Title-->--}}
    {{--                                                                        <h2 class="mb-3">Deal Details</h2>--}}
    {{--                                                                        <!--end::Title-->--}}
    {{--                                                                        <!--begin::Description-->--}}
    {{--                                                                        <div class="text-muted fw-bold fs-5">If you need more info, please check out--}}
    {{--                                                                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>--}}
    {{--                                                                        <!--end::Description-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Heading-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-8">--}}
    {{--                                                                        <!--begin::Label-->--}}
    {{--                                                                        <label class="required fs-6 fw-bold mb-2">Customer</label>--}}
    {{--                                                                        <!--end::Label-->--}}
    {{--                                                                        <!--begin::Input-->--}}
    {{--                                                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" name="details_customer">--}}
    {{--                                                                            <option></option>--}}
    {{--                                                                            <option value="1" selected="selected">Keenthemes</option>--}}
    {{--                                                                            <option value="2">CRM App</option>--}}
    {{--                                                                        </select>--}}
    {{--                                                                        <!--end::Input-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-8">--}}
    {{--                                                                        <!--begin::Label-->--}}
    {{--                                                                        <label class="required fs-6 fw-bold mb-2">Deal Title</label>--}}
    {{--                                                                        <!--end::Label-->--}}
    {{--                                                                        <!--begin::Input-->--}}
    {{--                                                                        <input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title" name="details_title" value="Marketing Campaign" />--}}
    {{--                                                                        <!--end::Input-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-8">--}}
    {{--                                                                        <!--begin::Label-->--}}
    {{--                                                                        <label class="fs-6 fw-bold mb-2">Deal Description</label>--}}
    {{--                                                                        <!--end::Label-->--}}
    {{--                                                                        <!--begin::Label-->--}}
    {{--                                                                        <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>--}}
    {{--                                                                        <!--end::Label-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-8">--}}
    {{--                                                                        <label class="required fs-6 fw-bold mb-2">Activation Date</label>--}}
    {{--                                                                        <div class="position-relative d-flex align-items-center">--}}
    {{--                                                                            <!--begin::Icon-->--}}
    {{--                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->--}}
    {{--                                                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">--}}
    {{--                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
    {{--                                                                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />--}}
    {{--                                                                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />--}}
    {{--                                                                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />--}}
    {{--                                                                                </svg>--}}
    {{--                                                                            </span>--}}
    {{--                                                                            <!--end::Svg Icon-->--}}
    {{--                                                                            <!--end::Icon-->--}}
    {{--                                                                            <!--begin::Datepicker-->--}}
    {{--                                                                            <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="details_activation_date" />--}}
    {{--                                                                            <!--end::Datepicker-->--}}
    {{--                                                                        </div>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-15">--}}
    {{--                                                                        <!--begin::Wrapper-->--}}
    {{--                                                                        <div class="d-flex flex-stack">--}}
    {{--                                                                            <!--begin::Label-->--}}
    {{--                                                                            <div class="me-5">--}}
    {{--                                                                                <label class="required fs-6 fw-bold">Notifications</label>--}}
    {{--                                                                                <div class="fs-7 fw-bold text-muted">Allow Notifications by Phone or Email</div>--}}
    {{--                                                                            </div>--}}
    {{--                                                                            <!--end::Label-->--}}
    {{--                                                                            <!--begin::Checkboxes-->--}}
    {{--                                                                            <div class="d-flex">--}}
    {{--                                                                                <!--begin::Checkbox-->--}}
    {{--                                                                                <label class="form-check form-check-custom form-check-solid me-10">--}}
    {{--                                                                                    <!--begin::Input-->--}}
    {{--                                                                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="details_notifications[]" />--}}
    {{--                                                                                    <!--end::Input-->--}}
    {{--                                                                                    <!--begin::Label-->--}}
    {{--                                                                                    <span class="form-check-label fw-bold">Email</span>--}}
    {{--                                                                                    <!--end::Label-->--}}
    {{--                                                                                </label>--}}
    {{--                                                                                <!--end::Checkbox-->--}}
    {{--                                                                                <!--begin::Checkbox-->--}}
    {{--                                                                                <label class="form-check form-check-custom form-check-solid">--}}
    {{--                                                                                    <!--begin::Input-->--}}
    {{--                                                                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="details_notifications[]" />--}}
    {{--                                                                                    <!--end::Input-->--}}
    {{--                                                                                    <!--begin::Label-->--}}
    {{--                                                                                    <span class="form-check-label fw-bold">Phone</span>--}}
    {{--                                                                                    <!--end::Label-->--}}
    {{--                                                                                </label>--}}
    {{--                                                                                <!--end::Checkbox-->--}}
    {{--                                                                            </div>--}}
    {{--                                                                            <!--end::Checkboxes-->--}}
    {{--                                                                        </div>--}}
    {{--                                                                        <!--begin::Wrapper-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Actions-->--}}
    {{--                                                                    <div class="d-flex flex-stack">--}}
    {{--                                                                        <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">Deal Type</button>--}}
    {{--                                                                        <button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">--}}
    {{--                                                                            <span class="indicator-label">Financing</span>--}}
    {{--                                                                            <span class="indicator-progress">Please wait...--}}
    {{--                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
    {{--                                                                        </button>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Actions-->--}}
    {{--                                                                </div>--}}
    {{--                                                                <!--end::Wrapper-->--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Details-->--}}
    {{--                                                            <!--begin::Budget-->--}}
    {{--                                                            <div data-kt-stepper-element="content">--}}
    {{--                                                                <!--begin::Wrapper-->--}}
    {{--                                                                <div class="w-100">--}}
    {{--                                                                    <!--begin::Heading-->--}}
    {{--                                                                    <div class="mb-13">--}}
    {{--                                                                        <!--begin::Title-->--}}
    {{--                                                                        <h2 class="mb-3">Finance</h2>--}}
    {{--                                                                        <!--end::Title-->--}}
    {{--                                                                        <!--begin::Description-->--}}
    {{--                                                                        <div class="text-muted fw-bold fs-5">If you need more info, please check out--}}
    {{--                                                                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>--}}
    {{--                                                                        <!--end::Description-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Heading-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-8">--}}
    {{--                                                                        <!--begin::Label-->--}}
    {{--                                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">--}}
    {{--                                                                            <span class="required">Setup Budget</span>--}}
    {{--                                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>--}}
    {{--                                                                        </label>--}}
    {{--                                                                        <!--end::Label-->--}}
    {{--                                                                        <!--begin::Dialer-->--}}
    {{--                                                                        <div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">--}}
    {{--                                                                            <!--begin::Decrease control-->--}}
    {{--                                                                            <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">--}}
    {{--                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->--}}
    {{--                                                                                <span class="svg-icon svg-icon-1">--}}
    {{--                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
    {{--                                                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />--}}
    {{--                                                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />--}}
    {{--                                                                                    </svg>--}}
    {{--                                                                                </span>--}}
    {{--                                                                                <!--end::Svg Icon-->--}}
    {{--                                                                            </button>--}}
    {{--                                                                            <!--end::Decrease control-->--}}
    {{--                                                                            <!--begin::Input control-->--}}
    {{--                                                                            <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="readonly" value="$50" />--}}
    {{--                                                                            <!--end::Input control-->--}}
    {{--                                                                            <!--begin::Increase control-->--}}
    {{--                                                                            <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">--}}
    {{--                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->--}}
    {{--                                                                                <span class="svg-icon svg-icon-1">--}}
    {{--                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
    {{--                                                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />--}}
    {{--                                                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />--}}
    {{--                                                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />--}}
    {{--                                                                                    </svg>--}}
    {{--                                                                                </span>--}}
    {{--                                                                                <!--end::Svg Icon-->--}}
    {{--                                                                            </button>--}}
    {{--                                                                            <!--end::Increase control-->--}}
    {{--                                                                        </div>--}}
    {{--                                                                        <!--end::Dialer-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-8">--}}
    {{--                                                                        <!--begin::Label-->--}}
    {{--                                                                        <label class="fs-6 fw-bold mb-2">Budget Usage</label>--}}
    {{--                                                                        <!--end::Label-->--}}
    {{--                                                                        <!--begin::Row-->--}}
    {{--                                                                        <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">--}}
    {{--                                                                            <!--begin::Col-->--}}
    {{--                                                                            <div class="col-md-6 col-lg-12 col-xxl-6">--}}
    {{--                                                                                <!--begin::Option-->--}}
    {{--                                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6" data-kt-button="true">--}}
    {{--                                                                                    <!--begin::Radio-->--}}
    {{--                                                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">--}}
    {{--                                                                                        <input class="form-check-input" type="radio" name="finance_usage" value="1" checked="checked" />--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                    <!--end::Radio-->--}}
    {{--                                                                                    <!--begin::Info-->--}}
    {{--                                                                                    <span class="ms-5">--}}
    {{--                                                                                        <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Precise Usage</span>--}}
    {{--                                                                                        <span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                    <!--end::Info-->--}}
    {{--                                                                                </label>--}}
    {{--                                                                                <!--end::Option-->--}}
    {{--                                                                            </div>--}}
    {{--                                                                            <!--end::Col-->--}}
    {{--                                                                            <!--begin::Col-->--}}
    {{--                                                                            <div class="col-md-6 col-lg-12 col-xxl-6">--}}
    {{--                                                                                <!--begin::Option-->--}}
    {{--                                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">--}}
    {{--                                                                                    <!--begin::Radio-->--}}
    {{--                                                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">--}}
    {{--                                                                                        <input class="form-check-input" type="radio" name="finance_usage" value="2" />--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                    <!--end::Radio-->--}}
    {{--                                                                                    <!--begin::Info-->--}}
    {{--                                                                                    <span class="ms-5">--}}
    {{--                                                                                        <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Extreme Usage</span>--}}
    {{--                                                                                        <span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>--}}
    {{--                                                                                    </span>--}}
    {{--                                                                                    <!--end::Info-->--}}
    {{--                                                                                </label>--}}
    {{--                                                                                <!--end::Option-->--}}
    {{--                                                                            </div>--}}
    {{--                                                                            <!--end::Col-->--}}
    {{--                                                                        </div>--}}
    {{--                                                                        <!--end::Row-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Input group-->--}}
    {{--                                                                    <div class="fv-row mb-15">--}}
    {{--                                                                        <!--begin::Wrapper-->--}}
    {{--                                                                        <div class="d-flex flex-stack">--}}
    {{--                                                                            <!--begin::Label-->--}}
    {{--                                                                            <div class="me-5">--}}
    {{--                                                                                <label class="fs-6 fw-bold">Allow Changes in Budget</label>--}}
    {{--                                                                                <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>--}}
    {{--                                                                            </div>--}}
    {{--                                                                            <!--end::Label-->--}}
    {{--                                                                            <!--begin::Switch-->--}}
    {{--                                                                            <label class="form-check form-switch form-check-custom form-check-solid">--}}
    {{--                                                                                <input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked" />--}}
    {{--                                                                                <span class="form-check-label fw-bold text-muted">Allowed</span>--}}
    {{--                                                                            </label>--}}
    {{--                                                                            <!--end::Switch-->--}}
    {{--                                                                        </div>--}}
    {{--                                                                        <!--end::Wrapper-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Input group-->--}}
    {{--                                                                    <!--begin::Actions-->--}}
    {{--                                                                    <div class="d-flex flex-stack">--}}
    {{--                                                                        <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">Project Settings</button>--}}
    {{--                                                                        <button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">--}}
    {{--                                                                            <span class="indicator-label">Build Team</span>--}}
    {{--                                                                            <span class="indicator-progress">Please wait...--}}
    {{--                                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
    {{--                                                                        </button>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Actions-->--}}
    {{--                                                                </div>--}}
    {{--                                                                <!--end::Wrapper-->--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Budget-->--}}
    {{--                                                            <!--begin::Complete-->--}}
    {{--                                                            <div data-kt-stepper-element="content">--}}
    {{--                                                                <!--begin::Wrapper-->--}}
    {{--                                                                <div class="w-100">--}}
    {{--                                                                    <!--begin::Heading-->--}}
    {{--                                                                    <div class="mb-13">--}}
    {{--                                                                        <!--begin::Title-->--}}
    {{--                                                                        <h2 class="mb-3">Deal Created!</h2>--}}
    {{--                                                                        <!--end::Title-->--}}
    {{--                                                                        <!--begin::Description-->--}}
    {{--                                                                        <div class="text-muted fw-bold fs-5">If you need more info, please check out--}}
    {{--                                                                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>--}}
    {{--                                                                        <!--end::Description-->--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Heading-->--}}
    {{--                                                                    <!--begin::Actions-->--}}
    {{--                                                                    <div class="d-flex flex-center pb-20">--}}
    {{--                                                                        <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Deal</button>--}}
    {{--                                                                        <a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Deal</a>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Actions-->--}}
    {{--                                                                    <!--begin::Illustration-->--}}
    {{--                                                                    <div class="text-center px-4">--}}
    {{--                                                                        <img src="assets/media/illustrations/sketchy-1/20.png" alt="" class="w-100 mh-300px" />--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <!--end::Illustration-->--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                            <!--end::Complete-->--}}
    {{--                                                        </form>--}}
    {{--                                                        <!--end::Form-->--}}
    {{--                                                    </div>--}}
    {{--                                                    <!--end::Stepper-->--}}
    {{--                                                </div>--}}
    {{--                                                <!--begin::Modal body-->--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <!--end::Modal - Offer A Deal-->--}}
    {{--                                    <!--end::Modals-->--}}
    {{--                                </div>--}}
    {{--                                <!--end::Container-->--}}
    {{--                            </div>--}}
    {{--    <!--end::Post-->--}}

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
                           placeholder="Search Files &amp; Folders">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">

                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-flex btn-primary me-4" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_folder" id="kt_toolbar_primary_button">
                        <i class="ki-duotone ki-folder-up fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>New Folder
                    </button>
                    <!--end::Add customer-->

                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_file" id="kt_toolbar_primary_button">
                        <i class="ki-duotone ki-folder-up fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>Upload Files
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
                    <span id="kt_file_manager_items_counter">{{ $folders->count() + $files->count() }}  items</span>
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
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                       data-kt-check-target="#kt_file_manager_list .form-check-input"
                                                       value="1">
                                            </div>
                                        </th>
                                        <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 45%;">Name
                                        </th>
                                        <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 10%;">Size
                                        </th>
                                        <th class="min-w-125px sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 20%;">Last Modified
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
                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name
                                        </div>
                                    </th>
                                    <th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 10%; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Size
                                        </div>
                                    </th>
                                    <th class="min-w-125px sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 20%; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                        <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Last
                                            Modified
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
                                @foreach($folders as $folder)
                                <tr class="odd">
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td data-order="Images">
                                        <div class="d-flex align-items-center">
                                            <span>
{{--                                            <img src="{{ asset('assets/media/svg/files/folder-document.svg') }}" width="50" alt=""/>--}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                                                    <style>svg {fill: #009ef7}</style>
                                                    <path d="M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48z"/></svg>
                                            </span>
                                            <a href="{{ route('folder.show', $folder->id) }}"
                                               class="text-gray-800 text-hover-primary ms-6">{{ $folder->name }}</a>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td data-order="Invalid date">{{ date('j M Y, g:i a', strtotime($folder->updated_at)) }}</td>
                                    <td></td>
                                    <td data-order="Invalid date"></td>
                                    <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                        <!-- Rest of the code -->
                                    </td>
                                    <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Share link-->
                                            <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                    <i class="ki-duotone ki-fasten fs-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                             viewBox="0 0 640 512">
                                                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                            <style>svg {
                                                                    fill: #009ef7
                                                                }</style>
                                                            <path
                                                                d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                                                        </svg>
                                                    </i>
                                                </button>
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
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                    <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
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
                                                        <a href="{{ route('folder.show', $folder->id) }}"
                                                           class="menu-link px-3">View</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a id="#kt_modal_rename_folder" class="menu-link px-3" data-bs-toggle="modal"
                                                           data-bs-target="#kt_modal_rename_folder" data-folder-id="{{ $folder->id }}"
                                                           data-kt-filemanager-table="rename">Rename</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Download Folder</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                           data-kt-filemanager-table-filter="move_row"
                                                           data-bs-toggle="modal"
                                                           data-folder-id="{{ $folder->id }}"
                                                           data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
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
                                @endforeach


                                @foreach($files as $file)
                                        <!-- File -->
                                    <tr class="odd">
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                        <span>
                                            <img src="{{ asset(\App\Helpers\getFileIcon($file->name)) }}" width="35" alt=""/>
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary ms-2">{{ $file->name }}</a>
                                        </span>

                                            </div>
                                        </td>
                                        <td>{{ number_format($file->size / 1024, 2) }} KB</td>
                                        <td data-order="Invalid date">{{ date('j M Y, g:i a', strtotime($file->updated_at)) }}</td>
                                        <td></td>
                                        <td data-order="Invalid date"></td>
                                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                            <!-- Rest of the code -->
                                        </td>
                                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Share link-->
                                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                                    <button type="button"
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-fasten fs-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                 viewBox="0 0 640 512">
                                                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                <style>svg {
                                                                        fill: #009ef7
                                                                    }</style>
                                                                <path
                                                                    d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                                                            </svg>
                                                        </i>
                                                    </button>
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
                                                                    <div class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                        Read
                                                                        only.
                                                                        <a href="../../demo1/dist/apps/file-manager/settings/.html"
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
                                                            class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-dots-square fs-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
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
                                                            <a href="{{ route('cat', $file->hash) }}"
                                                               class="menu-link px-3" target="_blank">View</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->

                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Download</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3"
                                                               data-kt-filemanager-table-filter="move_row"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#kt_modal_move_to_folder">Move to
                                                                folder</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
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
                                @endforeach


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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
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
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                         id="kt_modal_add_file_stepper">
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" id="kt_modal_add_file_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">File</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                   title="File"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-lg form-control-solid"
                                                   name="file" placeholder="" value=""/>
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

    <div class="modal fade" id="kt_modal_add_folder" tabindex="-1" aria-hidden="true">
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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
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
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                         id="kt_modal_add_folder_stepper">
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" method="post" id="kt_modal_add_folder_form" action="{{ route('create.folder') }}">
                                <!--begin::Step 1-->
                                @csrf
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Folder Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                   title="Folder"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   name="folder_name" placeholder="" value=""/>
                                            <input type="hidden" name="parent_id" value=""/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <button type="submit" class="btn btn-lg btn-primary">Add Folder
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

    <div class="modal fade" id="kt_modal_rename_folder" tabindex="-1" aria-hidden="true">
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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
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
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                         id="kt_modal_rename_folder_stepper">
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" method="post" id="kt_modal_rename_folder_form" action="{{ route('rename.folder') }}">
                                <!--begin::Step 1-->
                                @csrf
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">New Folder Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                   title="Folder"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   name="new_folder_name" placeholder="" value=""/>
                                            <input type="hidden" name="folder_id" id="folderId">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <button type="submit" class="btn btn-lg btn-primary">Rename Folder</button>
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

    <div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                      action="{{ route('move.folder') }}" method="post" id="kt_modal_move_to_folder_form">
                    <!--begin::Modal header-->
                    @csrf
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Move to folder</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body pt-10 pb-15 px-lg-17">
                        <!--begin::Input group-->
                        <div class="form-group fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">

                            <input type="hidden" name="folderId" id="folderId">
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="new_parent_folder_id" type="radio" value="" id="kt_modal_move_to_folder_0">
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_0">
                                        <div class="fw-bold">
                                            <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>My Files</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            @foreach(\App\Models\Folder::get() as $folder)
                            <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="new_parent_folder_id" type="radio" value="{{ $folder->id }}" id="kt_modal_move_to_folder_{{ $folder->id }}">
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_{{ $folder->id }}">
                                        <div class="fw-bold">
                                            <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>{{ $folder->name }}</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->
                                @if($loop->last)
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                @else
                                    <div class="separator separator-dashed my-5"></div>
                                @endif
                            @endforeach


                        </div>
                        <!--end::Input group-->
                        <!--begin::Action buttons-->
                        <div class="d-flex flex-center mt-12">
                            <!--begin::Button-->
                            <button type="submit" class="btn btn-primary"
                                    id="kt_modal_move_to_folder_submit"
                            >
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--begin::Action buttons-->
                    </div>
                    <!--end::Modal body-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>

    <!-- Ahmed -->

    @push('js')
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/custom/apps/file-manager/list.js') }}"></script>
        <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>




        <script>
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
                                        '<div class="menu-item px-3"><a href="#" class="menu-link px-3" target="_blank">View</a></div>' +
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
        </script>

    @endpush
@endsection

