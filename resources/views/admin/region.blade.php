@extends('layouts.admin_base')
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
 Add New region
@endsection


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h3>@yield('title')</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
        
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Add New Region</h3>
            </div>
            
            <form class="form-horizontal" method="POST" action="{{ route('admin.add_regions') }}">
                       @csrf
              <div class="card-body">
                  <div class="row">
                      <div class="col-4">
                            <div class="form-group">
                                <label>Region Name</label>
                                <input type="text" name="region" class="form-control @error('region') is-invalid @enderror"  placeholder="Region Name" value="{{ old('region') }}">
                                @error('region')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                      </div>
                      <div class="col-4">
                            <div class="form-group">
                                  <label>Select Country</label>
                                  <select name="Coutry" id="Coutry" class="form-control select2 @error('Coutry') is-invalid @enderror" value="{{ old('Coutry') }}" class="form-control select2" style="width: 100%;">                          
                                    <option value="">-- Select Country --</option>
                                    @foreach($Coutry as $data)
                                        <option value="{{$data->id}}">{{$data->country_name}}</option>
                                    @endforeach 
                                  </select>
                                  @error('Coutry')<div style="color: red;">{{ $message }}</div>@enderror   
                            </div>
                      </div>
                      <div class="col-3" style="padding-top: 30px">
                        <div class="form-group">
                           <button type="submit" class="btn btn-info float-left">
                              <i class="fas fa-save"></i>   Save
                           </button>
                        </div>
                      </div>
                  </div>
              
            </form>
      </div>
    </section>
    <section class="content-header">
      <div class="card">
          <div class="card-header">
            <h3 class="card-title">List of Regions</h3>
          </div>

          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr>
                        <th>S/No</th>
                        <th>Region Name</th>
                        <th>Country</th>
                        <th>Created Date</th>           
                        <th>Total City</th>            
                        <th>Status</th>            
                        <th>Action</th>             
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($regions as $data)
                        <tr >
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->getCountry->country_name}}</td>
                            <td>{{ date_format($data->created_at,'d-M-Y')}}.</td>
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
                      @empty
                      @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>



      </div>
    </section>

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

@endsection
