@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Category </h4>

              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
            </div>

                </div>
          

              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-2 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.category_update',$category->id) }}">
                        @csrf
                         <div class="d-flex align-items-start align-items-sm-center gap-4">
                       
                          <div class="row mb-3">
                          <div class="col-md-12">
                            <select id="largeSelect" name="cat_id" class="form-select form-select-lg">
                              <option value="0">Select Category :</option>
                              @foreach($categories as $category2)
                                  <option value="{{$category2->id}}"  @if($category->cat_id == $category2->id) selected @endif  > {!! json_decode($category2['name'])->{app()->getLocale()} !!} </option>
                              @endforeach

                          </select>
                          </div>
                        </div>
                        
                             </div>
                             <div class="mb-3 col-md-6 translate">
                              <label for="name" class="form-label">Name</label>
                              <input type="hidden"  id="name" name="name" value="{{ $category->name }}">
                              <input
                                class="form-control"
                                type="text"
                                placeholder="{{ $category->translate('name', app()->getLocale()) }}"
                              />
                            </div>


                            <div class="mb-3 col-md-12 translate">
                              <label for="slug_az" class="form-label"> Slug (az) </label>
                              <input type="text" class="form-control"  id="slug_az" name="slug_az" value="{{ $category->slug_az  }}"  placeholder="Slug (az)">

                              <label for="slug_en" class="form-label"> Slug (en) </label>
                              <input type="text" class="form-control"  id="slug_en" name="slug_en"   value="{{ $category->slug_en  }}"  placeholder="Slug (en)">
                      
                              <label for="slug_ru" class="form-label"> Slug (ru) </label>
                              <input type="text"    class="form-control" id="slug_ru" name="slug_ru"  value="{{ $category->slug_ru  }}" placeholder="Slug (ru)">
                            
                            </div>



                        
                            
                             
                            <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                              <i class="bx bx-reset d-block d-sm-none"></i>
                              <span class="d-none d-sm-block">Edit Category</span>
                            </button>


                           </div>
                            </form>
                  </div>

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