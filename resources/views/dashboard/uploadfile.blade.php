@extends('layouts.dashboard.main')

@section('title')
 رفع الملفات على الشبكة
@endsection

@section('content')
{{-- css --}}
@push('css')

@endpush
{{-- content --}}
<style>
* {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

body {
  font-family: 'Montserrat', sans-serif;
  background: #535c68;
}

.wrapper {
  margin: auto;
  max-width: 640px;
  padding-top: 60px;
  text-align: center;
}

.container {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
  /*border: 0.5px solid rgba(130, 130, 130, 0.25);*/
  /*box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1),
              0 0 0 1px rgba(0, 0, 0, 0.1);*/
}

h1 {
  color: #130f40;
  font-family: 'Varela Round', sans-serif;
  letter-spacing: -.5px;
  font-weight: 700;
  padding-bottom: 10px;
}

.upload-container {
  background-color: rgb(239, 239, 239);
  border-radius: 6px;
  padding: 10px;
}

.border-container {
  border: 5px dashed rgba(198, 198, 198, 0.65);
/*   border-radius: 4px; */
  padding: 20px;
}

.border-container p {
  color: #130f40;
  font-weight: 600;
  font-size: 1.1em;
  letter-spacing: -1px;
  margin-top: 30px;
  margin-bottom: 0;
  opacity: 0.65;
}

#file-browser {
  text-decoration: none;
  color: rgb(22,42,255);
  border-bottom: 3px dotted rgba(22, 22, 255, 0.85);
}

#file-browser:hover {
  color: rgb(0, 0, 255);
  border-bottom: 3px dotted rgba(0, 0, 255, 0.85);
}

.icons {
  color: #95afc0;
  opacity: 0.55;

  .file-input {
    position: relative;
    display: inline-block;
}

#file-label {
    display: inline-block;
    background-color: #4caf50;
    color: #fff;
    padding: 8px 16px;
    border-radius: 4px 0 0 4px;
    cursor: pointer;
    font-weight: bold;
}

#file-browser {
    display: inline-block;
    background-color: #8bc34a;
    color: #fff;
    padding: 8px 16px;
    border-radius: 0 4px 4px 0;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

#file-input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}



}

</style>
          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Upload a file</h6>
            </div>
            <div class="card-body">

                <div class="wrapper">
                    <div class="container">
                      <h1>Upload a file</h1>
                      <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="upload-container">
                        <div class="border-container">
                          <div class="icons fa-4x">
                            <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                            <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                            <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                          </div>
                          <!--<input type="file" id="file-upload">-->
                          <p>Drag and drop files here, or
                            <div class="file-input">
                              <label for="file-input" id="file-label">Choose a file</label>

                              <button type="button" id="file-browser">Browse</button>
                              <input type="file" name="file" id="file-input" style="display:none;">
                          </div>

                            {{-- <button type="submit" style="border: none" id="file-browser">browse</button> your computer.</p> --}}
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
            </div>
        </div>






{{-- js --}}
@push('js')
<script>
    $("#file-upload").css("opacity", "0");

$("#file-browser").click(function(e) {
  e.preventDefault();
  $("#file-upload").trigger("click");
});

</script>
@endpush

@endsection
