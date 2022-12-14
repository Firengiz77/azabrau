@extends('admin.layout.master')

@section('container')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> News</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0">Add News</h5>
              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
            </div>
            </div>
            <div class="card-body">
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif

              <form method="POST" enctype="multipart/form-data" action="{{ route('admin.blog_add') }}">
                @csrf

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
                <div class="row mb-3 translate">
                  <label class="col-sm-12 form-label" for="basic-icon-default-phone">Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"
                        ><i class="bx bx-phone"></i
                      ></span>
                      <input type="hidden" name="name" value='{"az":"","en":"","ru":""}'>
                      <input
                      type="text"

                      id="basic-icon-default-company"
                      class="form-control"
                      placeholder="Name"
                      aria-describedby="basic-icon-default-company2"
                    />
                    </div>
                  </div>
                </div>
               
                <div class="mb-3 col-md-12 translate">
                  <label for="" class="form-label">Desc</label>
                  <input type="hidden" name="desc" value='{"az":"","en":"","ru":""}'>
                  <textarea
                    class="form-control" 
                    id="editor"
                    ></textarea>
                </div>

          

                <div class="row mb-3">
                  <label class="col-sm-12 col-form-label" for="basic-icon-default-company"> Slug az </label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        >
                        <i class='bx bxl-facebook'></i>
                      </span>
                      <input
                        type="text"
                        name="slug_az"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Slug az"
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-12 col-form-label" for="basic-icon-default-company"> Slug en </label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        >
                        <i class='bx bxl-facebook'></i>
                      </span>
                      <input
                        type="text"
                        name="slug_en"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Slug en"
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-12 col-form-label" for="basic-icon-default-company"> Slug ru </label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        >
                        <i class='bx bxl-facebook'></i>
                      </span>
                      <input
                        type="text"
                        name="slug_ru"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Slug ru"
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>

                <div class="row justify-content-end">
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Add</button>
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
