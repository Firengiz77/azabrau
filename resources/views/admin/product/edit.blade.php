@extends('admin.layout.master')

@section('container')



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->


            <div class="container-xxl flex-grow-1 container-p-y">
                <div style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Products </h4>
             
              <div class="lang">
                <a href="az" class="btn btn-success {{ app()->isLocale('az') ? 'active' : '' }}">Az</a>
                <a href="ru" class="btn btn-success {{ app()->isLocale('ru') ? 'active' : '' }}">Ru</a>
                <a href="en" class="btn btn-success {{ app()->isLocale('en') ? 'active' : '' }}">En</a>
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
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.product_update',$product->id) }}">
                        @csrf
                                <img
                                src="{{  (!empty($product->thumbnail)? url('upload/product_images/'.$product->thumbnail):asset('/admin/assets/img/avatars/1.png')  )}}"
                                alt="user-avatar"
                                class="d-block rounded"
                                height="100"
                                width="100"
                                id="uploadedAvatar"
                              />
                              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0" style="margin-top:16px">
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
                                <div class="col-md-12">
                                  <select id="largeSelect" name="cat_id" class="form-select form-select-lg">
                                    <option value="{{ $product['category']['cat_id'] }}">Select Category :</option>
                                   

                                          @foreach($categories as $category)
                      @if($category->cat_id == 0)  <optgroup   value="{{$category->id}}" style="font-weight:800" label=" {!! json_decode($category['name'])->{app()->getLocale()} !!}" > @endif
                  @php
                    $cat = App\Models\Category::where('cat_id',$category->id)->get();
                    @endphp
                         @foreach($cat as $cat2)
                        <option value="{{ $cat2->id }}" @if($product['category']['id'] == $cat2->id) selected @endif  value="{{ $cat2->id }}"  > {!! json_decode($cat2['name'])->{app()->getLocale()} !!} </option>
                        @endforeach
                          @endforeach

                      </optgroup >
                                </select>
                                </div>
                              </div>

                               <div class="mb-3 col-md-12 translate">
                                <label for="alt" class="form-label">Name</label>
                                  <input type="hidden" name="name" value="{{ $product->name }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  id="alt"
                                  value="{!! json_decode($product['name'])->{app()->getLocale()} !!}"
                                />
                              </div>

                              <div class="mb-3 col-md-12 translate">
                                <label for="title" class="form-label">Title</label>
                                <input type="hidden" name="title" value="{{ $product->title }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  id="title"
                                  value="{!! json_decode($product['title'])->{app()->getLocale()} !!}"
                                />
                              </div>
                              <div class="mb-3 col-md-12 translate">
                                <label for="cesid" class="form-label">??e??id</label>
                                <input type="hidden" name="cesid" value="{{ $product->cesid }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  id="cesid"
                                  value="{!! json_decode($product['cesid'])->{app()->getLocale()} !!}"
                                />
                              </div>

                              
                              <div class="mb-3 col-md-6 translate">
                                <label for="menseyi" class="form-label">M??n????yi</label>
                                <input type="hidden"  id="menseyi" name="menseyi" value="{{ $product->menseyi }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  value="{{ $product->translate('menseyi', app()->getLocale()) }}"
                                />
                              </div>
                              <div class="mb-3 col-md-6 translate">
                                <label for="terkibi" class="form-label">T??rkibi</label>
                                <input type="hidden"  id="terkibi" name="terkibi" value="{{ $product->terkibi }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  value="{{ $product->translate('terkibi', app()->getLocale()) }}"
                                />
                              </div>
                              <div class="mb-3 col-md-6 translate">
                                <label for="uygunluq" class="form-label">Uy??unluq</label>
                                <input type="hidden"  id="uygunluq" name="uygunluq" value="{{ $product->uygunluq }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  value="{{ $product->translate('uygunluq', app()->getLocale()) }}"
                                />
                              </div>
                              <div class="mb-3 col-md-6 translate">
                                <label for="saxlama_formasi" class="form-label">Saxlama Formas??</label>
                                <input type="hidden"  id="saxlama_formasi" name="saxlama_formasi" value="{{ $product->saxlama_formasi }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  value="{{ $product->translate('saxlama_formasi', app()->getLocale()) }}"
                                />
                              </div>
                              <div class="mb-3 col-md-6 translate">
                                <label for="istehsal_il" class="form-label">??stehsal ili </label>
                                <input type="hidden"  id="istehsal_il" name="istehsal_il" value="{{ $product->istehsal_il }}">
                                <input
                                  class="form-control"
                                  type="text"
                                  value="{{ $product->translate('istehsal_il', app()->getLocale()) }}"
                                />
                              </div>

                              <div class="mb-3 col-md-6">
                                <label for="spirt" class="form-label">Spirt</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="spirt"
                                  value="{{ $product->spirt }}"
                               
                                />
                              </div>
                              
                              <div class="mb-3 col-md-6">
                                <label for="temp" class="form-label">Temperatur</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="temp"
                                  value="{{ $product->temp }}"
                                  
                                />
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="slug_az" class="form-label">Slug az</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="slug_az"
                                  value="{{ $product->slug_az }}"
                                 
                                />
                              </div>

                              <!-- <div class="mb-3 col-md-6">
                                <label for="slug_en" class="form-label">Slug en</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="slug_en"
                                  value="{{ $product->slug_en }}"
                                  placeholder="{{ $product->slug_en }}"
                                />
                              </div> -->

                              <div class="mb-3 col-md-6">
                                <label for="slug_ru" class="form-label">Slug ru</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="slug_ru"
                                  value="{{ $product->slug_ru }}"
                                
                                />
                              </div>

                              <div class="mb-3 col-md-6">
                                <label for="sifaris" class="form-label">Sifari??</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="sifaris"
                                  value="{{ $product->sifaris }}"
                               
                                />
                              </div>




                              <div class="mb-3 col-md-12 translate">
                                <label for="" class="form-label">Desc</label>
                                <input type="hidden" name="desc" value="{{ $product->desc }}">
                                <textarea
                                  class="form-control" 
                                  id="editor"
                                  >{{ $product->translate('desc', app()->getLocale()) }}</textarea>
                              </div>


                               <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                                 <i class="bx bx-reset d-block d-sm-none"></i>
                                 <span class="d-none d-sm-block">Edit Product</span>
                               </button>
     
                               <p class="text-muted mb-0">Allowed JPG, GIF, JPEG, SVG or PNG. Max size of 150K</p>
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



