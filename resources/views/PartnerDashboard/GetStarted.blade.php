@extends('PartnerLayouts.dashboard.main')

@section('title')
@endsection
{{-- css --}}
@push('css')

 <!--begin::Vendor Stylesheets(used for this page only)-->
 <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
 <!--end::Vendor Stylesheets-->

@endpush


@section('content')
    <!-- -------------------------Ahmed -->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">

            	<div class="col-xxl-12">
											<!--begin::Engage widget 10-->
											<div class="card card-flush h-md-100">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
													<!--begin::Wrapper-->
													<div class="mb-10">
														<!--begin::Title-->
														<div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
														<span class="me-2">Welcome to Connect 3 We are excited to work with you and change the world together towards
														<br />
														<span class="position-relative d-inline-block text-danger">
															<a href="#" class="text-danger opacity-75-hover">a bright future.</a>
															<!--begin::Separator-->
															<span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
															<!--end::Separator-->
														</span></span></div>
														<!--end::Title-->
														<!--begin::Action-->
														<div class="text-center">
															<a href='#' class="btn btn-lg btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Get Started</a>
														</div>
														<!--begin::Action-->
													</div>
													<!--begin::Wrapper-->
													<!--begin::Illustration-->
													<img class="mx-auto h-150px h-lg-200px theme-light-show" src="{{ asset('assets/media/illustrations/misc/nodes.png') }}" alt="" />
													<img class="mx-auto h-150px h-lg-200px theme-dark-show" src="{{ asset('assets/media/illustrations/misc/upgrade-dark.svg') }}" alt="" />
													<!--end::Illustration-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 10-->
										</div>


        </div>
        <!--end::Container-->
    </div>
    <!-- --------------------------Ahmed -->
    <!--end::Post-->



    {{-- js --}}
    @push('js')



    @endpush
@endsection
