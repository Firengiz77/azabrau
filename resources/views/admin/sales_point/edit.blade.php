@extends('admin.layout.master')

@section('container')
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Sales Point</h4>
       
      <div class="lang">
        <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
        <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
        <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
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

          <form method="post" action="{{ route('admin.sales_update',$sales_point->id) }}">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Name</label>
              <div class="col-sm-10 translate">
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"
                    ><i class="bx bx-buildings"></i
                  ></span>
                  <input type="hidden"   id="name"   name="name" value='{{ $sales_point->name }}'>
                  <input
                    type="text"
                    id="basic-icon-default-company"
                    class="form-control"
                    value="{{ $sales_point->translate('name', app()->getLocale()) }}"
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
                  <input type="hidden"   id="address"   name="address" value='{{ $sales_point->address }}'>
                  <input
                    type="text"
                    id="basic-icon-default-company"
                    class="form-control"
                    value="{{ $sales_point->translate('address', app()->getLocale()) }}"
                    aria-describedby="basic-icon-default-company2"
                  />
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Phone 1</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="Phone 1"
                    name="phone_1"
                    value="{{ $sales_point->phone_1 }}"
                    aria-describedby="basic-icon-default-email2"
                  />
                </div>
              </div>
            </div>


            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Phone 2</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="Phone 2"
                    name="phone_2"
                    value="{{ $sales_point->phone_2 }}"
                    aria-describedby="basic-icon-default-email2"
                  />
                </div>
              </div>
            </div>
 
         

            <!-- <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Link</label>
              <div class="col-sm-10">
                  <div id="map" style="width:800px;height:600px"></div>
              </div>
            </div> -->

    <label for="latitude" >
        Latitude:
    </label>
    <input id="txtLat" type="text" name="txtLat" style="color:red" value="{{ $sales_point->txtLat }}" />
    <label for="longitude">
        Longitude:
    </label>
    <input id="txtLng" type="text" name="txtLng" style="color:red" value="{{ $sales_point->txtLng }}" /><br />
    <br />
    <br />
 
    <div id="map_canvas" style="width: auto; height: 500px;"> </div>
             
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>

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
