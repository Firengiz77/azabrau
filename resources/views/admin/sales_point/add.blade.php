@extends('admin.layout.master')

@section('container')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Sales Point</h4>
       
      <div class="lang">
        <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
        <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
        <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
    </div>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Add Sales Point</h5>
            </div>
            <div class="card-body">
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif

            <form method="POST" action="{{ route('admin.sales_add') }}">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
                  <div class="col-sm-10 translate">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                      ></span>
                      <input type="hidden"   id="name"   name="name" value='{"az":"","en":"","ru":""}'>
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

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Address</label>
                  <div class="col-sm-10 translate">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                      ></span>
                      <input type="hidden"   id="address"   name="address" value='{"az":"","en":"","ru":""}'>
                      <input
                        type="text"
                    
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Address"
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone 1</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"
                        ><i class="bx bx-phone"></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-phone"
                        class="form-control phone-mask"
                        placeholder="994 070 888 4581"
                        name="phone_1"
                        aria-describedby="basic-icon-default-phone2"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone 2 <span style="color:red"> If Not,Can be null </span></label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"
                        ><i class="bx bx-phone"></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-phone"
                        class="form-control phone-mask"
                        placeholder="994 070 888 4581"
                        name="phone_2"
                        aria-describedby="basic-icon-default-phone2"
                      />
                    </div>
                  </div>
                </div>

            

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company"> Address Link </label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        >
                        <i class='bx bxl-facebook'></i>
                      </span>
                      <input
                        type="text"
                        name="link"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Address Link"
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>
                
              
                <div class="row justify-content-end">
                  <div class="col-sm-10">
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
