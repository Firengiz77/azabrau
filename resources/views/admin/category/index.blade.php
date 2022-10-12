@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column-reverse;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Category </h4>

         
                </div>
          
                <div class="lang">
                  <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                  <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
                  <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
              </div>

              
              <!-- Examples -->
              <div class="row">
                <div class="col-md-4 col-lg-6 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.category_add') }}">
                        @csrf
                       
                        <div class="row mb-3">
                          <select id="largeSelect" name="cat_id" class="form-select form-select-lg">
                              <option value="0">Select Category :</option>
                              @foreach($categories as $category)
                              <option value="{{ $category->id }}" > {!! json_decode($category['name'])->{app()->getLocale()} !!} </option>
                              @endforeach

                          </select>
                      </div>


                               <div class="mb-3 col-md-12 translate">
                                <label for="title" class="form-label"> Name </label>
                                <input type="hidden" id="title" name="name"  value='{"az":"","en":"","ru":""}'>
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="Name"
                                />
                              </div>
                              
                              <div class="mb-3 col-md-12 translate">
                                <label for="slug_az" class="form-label"> Slug (az) </label>
                                <input type="text" class="form-control"  id="slug_az" name="slug_az"  placeholder="Slug (az)">

                                <label for="slug_en" class="form-label"> Slug (en) </label>
                                <input type="text" class="form-control"  id="slug_en" name="slug_en"  placeholder="Slug (en)">
                        
                                <label for="slug_ru" class="form-label"> Slug (ru) </label>
                                <input type="text"    class="form-control" id="slug_ru" name="slug_ru"  placeholder="Slug (ru)">
                              
                              </div>


                              <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Add Category</span>
                              </button>
                             </div>
                           </div>
                        

                            </form>

                          
                              <div class="card">
                                <h5 class="card-header">All Category</h5>
                                <div class="table-responsive text-nowrap">
                                  <table class="table">
                                    <thead>
                                      <tr>
                          
                                        <th>Name</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                
                                 @foreach ($categories as $category )
                                      <tr>
                                    
                                        
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{!! json_decode($category['name'])->{app()->getLocale()} !!}</strong></td>
                                        <td>
                                          <a href="{{ route('admin.category_edit',$category->id) }}" class="btn btn-outline-primary">Edit Category</a>
                                          <a  href="{{ route('admin.category_delete',$category->id) }}" class="btn btn-outline-danger delete-confirm" id="remBtn">Delete Category</a>
                                        </td>
                                      </tr>
                                   
                                      @endforeach
                
                                    </tbody>
                                  </table>
                                </div>
                        

                     
                          </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
      $('.delete-confirm').on('click', function (event) {
          event.preventDefault();
          const url = $(this).attr('href');
          swal({
              title: 'Are you sure?',
              text: 'This record and it`s details will be permanantly deleted!',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
          }).then(function(value) {
              if (value) {
                  window.location.href = url;
              }
          });
      });
</script>

@endsection