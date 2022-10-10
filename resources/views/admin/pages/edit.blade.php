@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Page </h4>

                </div>
          

              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-2 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.page_update',$page->id) }}">
                        @csrf
                        
    
                          <div class="mb-3 col-md-12 ">
                            <label for="page_az" class="form-label">Page (az)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="page_az" name="page_az" 
                              value="{{ $page->page_az }}" 
                              placeholder="{{ $page->page_az }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="page_en" class="form-label">Page (en)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="page_en" name="page_en"  
                              value="{{ $page->page_en }}" 
                              placeholder="{{ $page->page_en }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="page_ru" class="form-label">Page (ru)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="page_ru" name="page_ru"  
                              value="{{ $page->page_ru }}" 
                              placeholder="{{ $page->page_ru }}"
                            />
                          </div>
        
                          
                          <div class="mb-3 col-md-12 ">
                            <label for="slug_az" class="form-label">Slug (az)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="slug_az" name="slug_az"  
                              value="{{ $page->slug_az }}" 
                              placeholder="{{ $page->slug_az }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="slug_en" class="form-label">Slug (en)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="slug_en" name="slug_en"  
                              value="{{ $page->slug_en }}" 
                              placeholder="{{ $page->slug_en }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="slug_ru" class="form-label">Slug (ru)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="slug_ru" name="slug_ru"  
                               value="{{ $page->slug_ru }}" 
                              placeholder="{{ $page->slug_ru }}"
                            />
                          </div>
        
        
                          <div class="mb-3 col-md-12 ">
                            <label for="title_az" class="form-label">Title (az)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="title_az" name="title_az"  
                              value="{{ $page->title_az }}" 
                              placeholder="{{ $page->title_az }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="title_en" class="form-label">Title (en)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="title_en" name="title_en"  
                              placeholder="Title (en)"
                              value="{{ $page->title_en }}" 
                              placeholder="{{ $page->title_en }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="title_ru" class="form-label">Title (ru)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="title_ru" name="title_ru"  
                              value="{{ $page->title_ru }}" 
                              placeholder="{{ $page->title_ru }}"
                            />
                          </div>
        
        
        
                          <div class="mb-3 col-md-12 ">
                            <label for="description_az" class="form-label">Description (az)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="description_az" name="description_az"  
                              value="{{ $page->description_az }}" 
                              placeholder="{{ $page->description_az }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="description_en" class="form-label">Description (en)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="description_en" name="description_en"  
                              value="{{ $page->description_en }}" 
                              placeholder="{{ $page->description_en }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="description_ru" class="form-label">Description (ru)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="description_ru" name="description_ru"  
                              value="{{ $page->description_ru }}" 
                              placeholder="{{ $page->description_ru }}"
                            />
                          </div>
        
        
                          <div class="mb-3 col-md-12 ">
                            <label for="keywords_az" class="form-label">Keywords (az)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="keywords_az" name="keywords_az"  
                              value="{{ $page->keywords_az }}" 
                              placeholder="{{ $page->keywords_az }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="keywords_en" class="form-label">Keywords (en)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="keywords_en" name="keywords_en"  
                              value="{{ $page->keywords_en }}" 
                              placeholder="{{ $page->keywords_en }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="keywords_ru" class="form-label">Keywords (ru)</label>
                            <input
                              class="form-control"
                              type="text"
                              id="keywords_ru" name="keywords_ru"  
                              value="{{ $page->keywords_ru }}" 
                              placeholder="{{ $page->keywords_ru }}"
                            />
                          </div>
        
        
                          <div class="mb-3 col-md-12 ">
                            <label for="viewname" class="form-label">View name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="viewname" name="viewname"  
                              value="{{ $page->viewname }}" 
                              placeholder="{{ $page->viewname }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="route" class="form-label">Route</label>
                            <input
                              class="form-control"
                              type="text"
                              id="route" name="route"  
                              value="{{ $page->route }}" 
                              placeholder="{{ $page->route }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="parent_id" class="form-label">Parent-id</label>
                            <input
                              class="form-control"
                              type="text"
                              id="parent_id" name="parent_id"  
                              value="{{ $page->parent_id }}" 
                              placeholder="{{ $page->parent_id }}"
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="page_id" class="form-label">Page-id</label>
                            <input
                              class="form-control"
                              type="text"
                              id="page_id" name="page_id"  
                              value="{{ $page->page_id }}" 
                              placeholder="{{ $page->page_id }}"
                            />
                          </div>

                          <div class="form-check mt-3">
                            <input class="form-check-input" @if($page->on_off === '1')  checked @endif type="checkbox" value="1" name="on_off" id="on_off">
                            <label class="form-check-label" for="on_off"> Show Home Page </label>
                          </div>




                               <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                                 <i class="bx bx-reset d-block d-sm-none"></i>
                                 <span class="d-none d-sm-block">Edit Page</span>
                               </button>
     
                             </div>
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