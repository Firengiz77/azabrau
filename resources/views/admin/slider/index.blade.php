@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column-reverse;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Slider </h4>

         
                </div>
          
                <div class="lang">
                  <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                  <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
              </div>

              
              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-6 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
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
                                <input type="hidden"    id="title" name="title"  value='{"az":"","en":""}'>
                             
                                <input
                                  class="form-control"
                                  type="text"
                                 
                                  placeholder="Title"
                                />
                              </div>

                              <div class="mb-3 col-md-12 translate">
                                <label for="" class="form-label">Desc</label>
                                <input type="hidden" name="desc" value='{"az":"","en":""}'>
                                <textarea
                                  class="form-control" 
                                  id="editor"
                                  ></textarea>
                              </div>

                              <div class="mb-3 col-md-6 translate">
                                <label for="link" class="form-label">Link</label>
                                <input type="hidden"   id="link" name="link"   value='{"az":"","en":""}'>
                                <input
                                  class="form-control translate"
                                  type="text"
                                 
                                />
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

                @foreach ($sliders as $slider)
                    
             
                <div class="col-md-8 col-lg-6 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="{{  (!empty($slider->image)? url('upload/slider_images/'.$slider->image):asset('/admin/assets/img/avatars/1.png')  )}}" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Title</h5>
                      <p class="card-text">
                        {{ $slider->translate('title', app()->getLocale()) }}
                      </p>
                      <a href="{{ route('admin.slider_edit',$slider->id) }}" class="btn btn-outline-primary">Edit Slider</a>
                      <a href="{{ route('admin.slider_delete',$slider->id) }}" class="btn btn-outline-danger">Delete Slider</a>
                    </div>
                  </div>
                </div>
                @endforeach

               

              </div>
              <!-- Examples -->

            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->





    <script src="{{ asset('/admin/js/file-upload.js') }}"></script>
    <script src="{{ asset('/admin/js/translate.js') }}"></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>
    
@endsection