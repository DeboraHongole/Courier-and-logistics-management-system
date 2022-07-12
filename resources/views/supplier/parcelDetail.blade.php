 @extends('layouts.supplier_base')
@section('css')
 <!-- Select2 -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}"> 
@endsection

@section('title')
 Parcel Details
@endsection


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Create  <small>New Parcel Details</small></h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">Create Shipment</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div> <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
          <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          




          <div class="card-body" style="display: block;">
          <form class="form-horizontal" method="POST" action="{{ route('supplier.add_parceldetail') }}">
                       @csrf
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                  <label>Parcel Name</label>
                    <input type="text" name="parcel_Name" class="form-control @error('parcel_Name') is-invalid @enderror"  value="{{ old('parcel_Name')}}"  placeholder="Parcel Name">
                    @error('parcel_Name')<div style="color: red;">{{ $message }}</div>@enderror 
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                  <label>Weight</label>
                    <input type="text" name="parcel_weight" class="form-control @error('parcel_weight') is-invalid @enderror" name="parcel_weight" value="{{ old('weight') }}"  placeholder="Weight (40kg)">
                    @error('parcel_weight')<div style="color: red;">{{ $message }}</div>@enderror 
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                  <label>Dimensions</label>
                    <input type="text" name="parcel_height" class="form-control @error('parcel_height') is-invalid @enderror"  value="{{ old('parcel_height') }}"  placeholder="Height (4cm)">
                    @error('parcel_height')<div style="color: red;">{{ $message }}</div>@enderror 
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group" style="padding-top: 30px">
                    <input type="text" name="parcel_width" class="form-control @error('parcel_width') is-invalid @enderror"  value="{{ old('parcel_width') }}"  placeholder="Width (4cm)">
                    @error('parcel_width')<div style="color: red;">{{ $message }}</div>@enderror 
                  </div>
              </div>
              <div class="col-3">
                  <label>Packeging Category</label>
                  <select name="parcel_category" id="parcel_category" class="form-control select2 @error('parcel_category') is-invalid @enderror" value="{{ old('parcel_category') }}" class="form-control select2" style="width: 100%;">
                      <option value=""> --  Category  --</option>
                      <option value="1">Wood</option>
                      <option value="2">Glass</option>
                      <option value="3">Other</option>
                  </select>
                  @error('parcel_category')<div style="color: red;">{{ $message }}</div>@enderror 
              </div>

              <div class="col-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-info float-right">
                      <i class="fas fa-save"></i> Save Parcel
                 </button>
                </div>
              </div>

              
              
              <div class="col-sm-12"><hr></div>
             
              <!-- /.col -->
            </div>
          </form>
            <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                        <th>S/No</th>
                        <th>Parcel Name</th>
                        <th>Weight</th>            
                        <th>Dimensions</th>            
                        <th>Category</th>            
                        <th>Tracking No</th>            
                        <th>Status</th>            
                        <th>Action</th>             
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="margin">
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                      <i class="fa fa-solid fa-list-ul"></i>
                                    </button>
                                    <div class="dropdown-menu " role="menu">
                                      <form method="POST" action="">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-pen"></i> Edit</a>
                                          @csrf @method('DELETE') 
                                          <button title="DELETE" type="submit" class="dropdown-item">
                                            <i class="fa fa-trash"></i> Delete
                                          </button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            </td>
                          </tr> 
                      </tbody>
                    </table>
                  </div>
                </div>
           
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer" style="display: block;">
            Visit <a href="">System</a>
          </div>
        </div>
    
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

 @section('js')
 <!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{ asset('assets/plugins/toastr/toastr.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

     //Initialize Select2 Elements
     $('.select2').select2()

  });

</script>
@if ($message = Session::get('success'))
<script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });   
    // $('.toastrDefaultSuccess').click(function() {
    //   toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    // });
    $('.toastrDefaultSuccess').ready(function() {
      toastr.success('Detail Successful Saved!')
    });   

  });
</script>
@endif

@if ($message = Session::get('destination_success'))
<script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });   
    // $('.toastrDefaultSuccess').click(function() {
    //   toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    // });
    $('.toastrDefaultSuccess').ready(function() {
      toastr.success('Destination Successful created!')
    });   

  });
</script>


@elseif ($message = Session::get('from_denied'))
<script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });   
    // $('.toastrDefaultSuccess').click(function() {
    //   toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    // });
    $('.toastrDefaultDanger').ready(function() {
      toastr.error('Please Fill All Details From ...!')
    });   

  });
</script>
@endif

@if ($message = Session::get('destination_denied'))
<script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 8000
    });

    $('.toastrDefaultWarning').ready(function() {
      toastr.warning("{{ $message  }}")
    });
   

  });
</script>
@endif

@endsection