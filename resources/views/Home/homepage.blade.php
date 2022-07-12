@extends('layouts.main')
@section('css')
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">  
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
 <!-- iCheck -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
 <!-- JQVMap -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
 <!-- summernote -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css')}}">

 <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}"> 

@endsection



@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="row">
                <!-- left column -->
                <div style="margin-top: 200px" class="col-md-4 offset-md-4">

                
                     <!-- Horizontal Form -->
                    <div class="card card-info">
                      <div class="card-header">
                        <h3 class="card-title">TRACK YOUR SHIPMENT</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      
                          <div class="card-footer">
                            <form action="#" method="post">
                              <div class="input-group">
                                <input type="text" name="message" placeholder="Enter your Tracking number here" class="form-control">
                                <span class="input-group-append">
                                  <button type="button" class="btn btn-info">Track</button>
                                </span>
                              </div>
                            </form>
                          </div>
                          <div class="card-footer">
                            <a class="btn btn-info float-right" href="{{ route('supplier.index') }}">Create New Shipment</a>
                           <!-- /.card <a class="btn btn-info float-right" href="">Ship Now</a>-->  
                           </div>
                        </div>
                                <!-- /.card -->


                </div>

         </div>
   
  
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
      toastr.success('Successful Posted!')
    });   

  });
</script>
@endif

@if ($message = Session::get('access_denied'))
<script>
$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: true,
      timer: 18000
    });

    $('.toastrDefaultDanger').ready(function() {
      toastr.error("{{ $message  }}")
    });
   

  });
</script>
@endif

@endsection