@extends('admin.layout.master')
@section('container')
@php
$id=auth()->id();
$admin=App\Models\User::find($id);
$all_admin = App\Models\User::get();
$products = App\Models\Product::get();
$categories = App\Models\Category::get();
$messages = App\Models\Message::get();
$blogs = App\Models\Blog::get();
$sales = App\Models\Sales_Point::get();

@endphp

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome to Admin panel , {{$admin->name}} 🎉</h5>
                          <p class="mb-4">
                            Check your new badge in your profile.
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{asset('/admin/assets/img/illustrations/man-with-laptop-light.png')}}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="col-lg-12 col-md-4 order-1">
                    <div class="row">
                      <div class="col-lg-4 col-md-12 col-6 mb-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Category</span>
                            <h3 class="card-title mb-2">  {{ count($categories) }}     </h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12 col-6 mb-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/admin/assets/img/icons/unicons/chart-success.png') }}" alt="chart success" class="rounded">
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Products</span>
                            <h3 class="card-title mb-2">  {{ count($products) }}     </h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12 col-6 mb-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/admin/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded">
                              </div>
                            
                            </div>
                            <span>Users</span>
                            <h3 class="card-title text-nowrap mb-1">  {{ count($all_admin) }}      </h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12 col-6 mb-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                              </div>
                            
                            </div>
                            <span>Messages</span>
                            <h3 class="card-title text-nowrap mb-1">  {{ count($messages) }}      </h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12 col-6 mb-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                              </div>
                            </div>
                            <span>Blogs</span>
                            <h3 class="card-title text-nowrap mb-1">  {{ count($blogs) }}      </h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-12 col-6 mb-2">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                              </div>
                            </div>
                            <span>Sales Point</span>
                            <h3 class="card-title text-nowrap mb-1">  {{ count($sales) }}      </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
            
              </div>
             
            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
    

  
  
 <!-- Vendors JS -->
 <script src="{{asset('/admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>


@endsection