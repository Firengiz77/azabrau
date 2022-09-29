@extends('admin.layout.master')

@section('container')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Slider</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0">Add Slider</h5>
              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>
            </div>
            <div class="card-body">
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif



          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.slider_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="button-wrapper">
                   <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                     <span class="d-none d-sm-block">Upload new photo</span>
                     <i class="bx bx-upload d-block d-sm-none"></i>
                     <input
                       type="file"
                       id="upload"
                       class="account-file-input"
                       hidden
                       name="image"
                       accept="image/png,image/jpeg,image/svg,image/jpg"
                     />
                   </label>

                   <div class="mb-3 col-md-12 translate">
                    <label for="title" class="form-label">Title</label>
                    <input type="hidden"    id="title" name="title"  value='{"az":"","en":"","ru":""}'>
                 
                    <input
                      class="form-control"
                      type="text"
                     
                      placeholder="Title"
                    />
                  </div>

                  <div class="mb-3 col-md-12 translate">
                    <label for="" class="form-label">Desc</label>
                    <input type="hidden" name="desc" value='{"az":"","en":"","ru":""}'>
                    <textarea
                      class="form-control" 
                      id="editor"
                      ></textarea>
                  </div>
                   <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                     <i class="bx bx-reset d-block d-sm-none"></i>
                     <span class="d-none d-sm-block">Upload</span>
                   </button>

                   <p class="text-muted mb-0">Allowed JPG, GIF, JPEG, SVG or PNG. Max size of 150K</p>
                 </div>
               </div>
                </form>



    
            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- / Content -->


    <script src="{{ asset('/admin/js/file-upload.js') }}"></script>
    <script src="{{ asset('/admin/js/translate.js') }}"></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>
@endsection
