@extends('AdminLayouts.dashboard.main')

@section('title')
Nodes
@endsection

@section('title_route')
{{route('nodes')}}
@endsection


@section('subtitle')
Show Node
@endsection


@push('css')
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush


@section('content')
    
@endsection
