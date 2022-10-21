@extends('admin.layout.master')

@section('container')


  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Products</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0">Add Products</h5>
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



          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.product_add') }}">
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
                       name="thumbnail"
                       accept="image/png,image/jpeg,image/svg,image/jpg"
                     />
                   </label>



                   <div class="row mb-3">
                    <select id="largeSelect" name="cat_id" class="form-select form-select-lg">
                        <option value="0">Select Category :</option>
                        @foreach($categories as $category)
                      @if($category->cat_id == 0)  <optgroup style="font-weight:800"  value="{{ $category->id }}" label="{!! json_decode($category['name'])->{app()->getLocale()} !!} "> @endif
                  @php
                    $cat = App\Models\Category::where('cat_id',$category->id)->get();
                    @endphp
                         @foreach($cat as $cat2)
                        <option value="{{ $cat2->id }}" > {!! json_decode($cat2['name'])->{app()->getLocale()} !!} </option>
                        @endforeach
                          @endforeach
                          </optgroup>

                    </select>
                </div>


                   <div class="mb-3 col-md-12 translate">
                    <label for="name" class="form-label">Name</label>
                    <input type="hidden"  id="name" name="name"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Name"
                    />
                  </div>

                   <div class="mb-3 col-md-12 translate">
                    <label for="title" class="form-label">Title</label>
                    <input type="hidden"  id="title" name="title"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Title"
                    />
                  </div>
                  <div class="mb-3 col-md-12 translate">
                    <label for="cesid" class="form-label">Çeşid</label>
                    <input type="hidden"  id="cesid" name="cesid"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Çeşid"
                    />
                  </div>
                  <div class="mb-3 col-md-12 translate">
                    <label for="menseyi" class="form-label">Mənşəyi</label>
                    <input type="hidden"  id="menseyi" name="menseyi"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Mənşəyi"
                    />
                  </div>
                  <div class="mb-3 col-md-12 translate">
                    <label for="terkibi" class="form-label">Tərkibi</label>
                    <input type="hidden"  id="terkibi" name="terkibi"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Tərkibi"
                    />
                  </div>

                  <div class="mb-3 col-md-12 translate">
                    <label for="uygunluq" class="form-label">Uyğunluq</label>
                    <input type="hidden"  id="uygunluq" name="uygunluq"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Uyğunluq"
                    />
                  </div>
                  <div class="mb-3 col-md-12 translate">
                    <label for="saxlama_formasi" class="form-label">Saxlama Forması</label>
                    <input type="hidden"  id="saxlama_formasi" name="saxlama_formasi"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Saxlama Forması"
                    />
                  </div>
                  <div class="mb-3 col-md-12 translate">
                    <label for="istehsal_il" class="form-label">İstehsal ili</label>
                    <input type="hidden"  id="istehsal_il" name="istehsal_il"  value='{"az":"","en":"","ru":""}'>
                    <input
                      class="form-control"
                      type="text"
                      placeholder="İstehsal ili "
                    />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="spirt" class="form-label">Spirt</label>
                   
                    <input
                      class="form-control"
                      type="text"
                     name="spirt"
            
                      placeholder="spirt"
                    />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="temp" class="form-label">Temperatur</label>
                  
                    <input
                      class="form-control"
                      type="text" name="temp"
                      placeholder="Temperatur"
                    />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="slug_az" class="form-label">Slug az</label>
                  
                    <input
                      class="form-control"
                      type="text" name="slug_az"
                      placeholder="Slug az"
                    />
                  </div>
                  <!-- <div class="mb-3 col-md-12">
                    <label for="slug_en" class="form-label">Slug en</label>
                    <input
                    name="slug_en"
                      class="form-control"
                      type="text"
                      placeholder="Slug en"
                    />
                  </div> -->


                  <div class="mb-3 col-md-12">
                    <label for="slug_ru" class="form-label">Slug ru</label>
                 
                    <input
                      class="form-control"
                      name="slug_ru"
                      type="text"
                      placeholder="Slug ru"
                    />
                  </div>


                  <div class="mb-3 col-md-12">
                    <label for="sifaris" class="form-label">Sifariş </label>
                    <input
                      class="form-control"
                      name="sifaris"
                      type="text"
                      placeholder="Sifariş"
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
                     <span class="d-none d-sm-block">Add Product</span>
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
