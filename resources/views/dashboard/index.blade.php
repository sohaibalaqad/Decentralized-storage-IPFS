@extends('layouts.dashboard.main')

@section('title')
الصفحة الرئسية
@endsection

@section('content')
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Upload file</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <form id="upload-form">
                    <input type="file" name="file">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>

            </div>

            <div class="row mt-3" id="alert-div"></div>

            <div class="row mt-3">
                <table class="table table-bordered" id="file-table">
                    <thead>
                    <tr>
                        <th>File Name</th>
                        <th>File Type</th>
                        <th>File Size</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>


                        @foreach($files as $file)
                            <tr>
                                <td>{{ $file->name }}</td>
                                <td>{{ $file->type }}</td>
                                <td>{{ number_format($file->size / 1024, 2) }} KB</td>
                                <td>
                                    {{--                            <a href="{{ route('cat', $file->hash) }}" target="_blank">--}}
                                    {{--                                <i class="fa fa-eye"></i>--}}
                                    {{--                            </a>--}}
                                    <a href="http://217.147.1.38:5002/ipfs/{{$file->hash}}" target="_blank">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

{{-- css --}}
@push('css')

@endpush

{{-- js --}}
@push('js')
    <script>
        $(document).on('submit', '#upload-form', function(event) {
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
                            var tableBody = $('#file-table tbody');
                            tableBody.empty();

                            for (var i = 0; i < files.length; i++) {
                                var file = files[i];

                                var row = '<tr>' +
                                    '<td>' + file.name + '</td>' +
                                    '<td>' + file.type + '</td>' +
                                    '<td>' + (file.size / 1024).toFixed(2) + ' KB</td>' +
                                    '<td>' +
                                    '<a href="http://217.147.1.38:5002/ipfs/' + file.hash + '" target="_blank">' +
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
