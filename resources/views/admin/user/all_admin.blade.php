@extends('admin.layout.master')
@section('container')
@php
$id=auth()->id();
$admin2=App\Models\User::find($id);
@endphp


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> All Admin</h4>

            </div>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">All Admin</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Super Admin</th>
                            @if($admin2->superadmin === '1')
                            <th>Delete</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                        @foreach ($admins as $admin )
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $admin->name }}</strong></td>
                                <td>
                                    {{ $admin->email }}
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>

                                        @if($admin->superadmin === '1')
                                            <span class="badge bg-label-primary">SuperAdmin</span>

                                        @else
                                            <span class="badge bg-label-warning">Admin</span>
                                        @endif

                                    </strong></td>

                                    @if($admin2->superadmin === '1')
                                <td>  <a href="{{ route('admin.delete',$admin->id) }}" class="btn btn-outline-danger delete-confirm">Delete Admin</a></td>
                                    @endif


                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <hr class="my-5" />
        </div>
        <!-- / Content -->



        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->


    
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
