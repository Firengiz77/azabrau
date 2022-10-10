@extends('admin.layout.master')

@section('container')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Page</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0">Add Page</h5>
            </div>
            <div class="card-body">
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif



          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.page_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="container">
               

                   <div class="mb-3 col-md-12 ">
                    <label for="page_az" class="form-label">Page (az)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="page_az" name="page_az"  
                      placeholder="Page (az)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="page_en" class="form-label">Page (en)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="page_en" name="page_en"  
                      placeholder="Page (en)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="page_ru" class="form-label">Page (ru)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="page_ru" name="page_ru"  
                      placeholder="Page (ru)"
                    />
                  </div>

                  
                  <div class="mb-3 col-md-12 ">
                    <label for="slug_az" class="form-label">Slug (az)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="slug_az" name="slug_az"  
                      placeholder="Slug (az)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="slug_en" class="form-label">Slug (en)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="slug_en" name="slug_en"  
                      placeholder="Slug (en)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="slug_ru" class="form-label">Slug (ru)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="slug_ru" name="slug_ru"  
                      placeholder="Slug (ru)"
                    />
                  </div>


                  <div class="mb-3 col-md-12 ">
                    <label for="title_az" class="form-label">Title (az)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="title_az" name="title_az"  
                      placeholder="Title (az)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="title_en" class="form-label">Title (en)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="title_en" name="title_en"  
                      placeholder="Title (en)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="title_ru" class="form-label">Title (ru)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="title_ru" name="title_ru"  
                      placeholder="Title (ru)"
                    />
                  </div>



                  <div class="mb-3 col-md-12 ">
                    <label for="description_az" class="form-label">Description (az)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="description_az" name="description_az"  
                      placeholder="Description (az)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="description_en" class="form-label">Description (en)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="description_en" name="description_en"  
                      placeholder="Description (en)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="description_ru" class="form-label">Description (ru)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="description_ru" name="description_ru"  
                      placeholder="Description (ru)"
                    />
                  </div>


                  <div class="mb-3 col-md-12 ">
                    <label for="keywords_az" class="form-label">Keywords (az)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="keywords_az" name="keywords_az"  
                      placeholder="Keywords (az)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="keywords_en" class="form-label">Keywords (en)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="keywords_en" name="keywords_en"  
                      placeholder="Keywords (en)"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="keywords_ru" class="form-label">Keywords (ru)</label>
                    <input
                      class="form-control"
                      type="text"
                      id="keywords_ru" name="keywords_ru"  
                      placeholder="Keywords (ru)"
                    />
                  </div>


                  <div class="mb-3 col-md-12 ">
                    <label for="viewname" class="form-label">View name</label>
                    <input
                      class="form-control"
                      type="text"
                      id="viewname" name="viewname"  
                      placeholder="View name"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="route" class="form-label">Route</label>
                    <input
                      class="form-control"
                      type="text"
                      id="route" name="route"  
                      placeholder="Route"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="parent_id" class="form-label">Parent-id</label>
                    <input
                      class="form-control"
                      type="text"
                      id="parent_id" name="parent_id"  
                      placeholder="Parent-id"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="page_id" class="form-label">Page-id</label>
                    <input
                      class="form-control"
                      type="text"
                      id="page_id" name="page_id"  
                      placeholder="Page-id"
                    />
                  </div>

                  <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="1" name="on_off" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1"> Show Home Page </label>
                  </div>

                
                   <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                     <i class="bx bx-reset d-block d-sm-none"></i>
                     <span class="d-none d-sm-block">Add Page</span>
                   </button>

                   
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
