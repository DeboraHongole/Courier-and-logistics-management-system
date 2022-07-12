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
 Create New Shipping
@endsection


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Create  <small>New Shipment</small></h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
              <li class="breadcrumb-item active">New Shipment</li>
            </ol>
          </div> <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form class="form-horizontal" action="{{ route('supplier.destination') }}" method="POST">  
                {{csrf_field()}}
                <div id="accordion">
                  <div class="card card-info">
                      <div class="card-header">
                          <h4 class="card-title w-100">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                              Create Destinations  
                            </a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                              <div class="col-12">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-group">
                                      <label>From Country</label>
                                        <select name="selectCountry" id="selectCountry" class="form-control select2 @error('selectCountry') is-invalid @enderror" value="{{ old('selectCountry') }}" class="form-control select2" style="width: 100%;">                          
                                          <option selected="false" value="">Choose Country</option>
                                            @foreach($Countries as $data)
                                              <option value='{{ $data->id }}'>{{ $data->country_name }}</option>
                                            @endforeach 
                                        </select>
                                      </div> 
                                  </div>
                                  
                                  <div class="col-6">
                                    <div class="form-group">
                                      <label>To Country</label>
                                      <select name="selectCountry2" id="selectCountry2" class="form-control select2 @error('selectCountry2') is-invalid @enderror" value="{{ old('selectCountry2') }}" class="form-control select2" style="width: 100%;">                          
                                        <option selected="false" value="">Choose Country</option>
                                          @foreach($Countries as $data)
                                            <option value='{{ $data->id }}'>{{ $data->country_name }}</option>
                                          @endforeach 
                                      </select>  
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer">
                                <button type="submit"  class="btn btn-info float-right">Save Destination</button>               
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                                @error('selectCountry')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                        
                          <div class="col-6">
                            <div class="form-group">
                                @error('selectCountry2')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>

                        </div>
                      </div>
                  </div>
                </div>
            </form>
          </div>
          <!-- /.col-md-6 -->

          <div class="col-lg-6"></div>
          <!-- /.col-md-6 -->


           <div class="col-lg-6">
            <!-- general form elements disabled -->
              <div class="card card-info">
                  <div class="card-header">
                      <h3 class="card-title">From Details</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form class="form-horizontal" action="{{ route('supplier.busness_contact_from') }}" method="POST">  
                      {{csrf_field()}}
                      <div class="col-12">
                        <div class="row">
                          <div class="col-6">
                            
                            <div class="form-group">
                              <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" id="fullname" placeholder="Full Name">
                              @error('fullname')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                          <div class="col-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12"><label>Busness Contact</label></div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                              <div class="form-group">
                                <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}"  placeholder="Company Name">
                                @error('company')<div style="color: red;">{{ $message }}</div>@enderror 
                              </div>
                          </div>
                          <div class="col-6">
                             <div class="form-group">
                              <input type="email" class="form-control @error('from_email') is-invalid @enderror" name="from_email" value="{{ old('from_email') }}"  placeholder="Enter email">
                              @error('from_email')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>
                          <div class="col-6">
                             <div class="form-group">
                              <input type="hidden" class="form-control @error('country') is-invalid @enderror" name="country" id="country" value="{{ Session::get("from_id")}}">
                              <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" id="country" value="{{ Session::get("from_country")}}"  placeholder="{{ Session::get("from_country")}}" disabled>
                              @error('country')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <select name="reg_from" id="reg_from" class="form-control select2 @error('reg_from') is-invalid @enderror" value="{{ old('reg_from') }}" class="form-control select2" style="width: 100%;">
                                <option selected="false" value=""> -- Select Region-- </option>
                                  @foreach($Region_from as $data)
                                      <option value='{{ $data->id }}'>{{ $data->name }}</option>
                                  @endforeach 
                                  
                              </select>
                              @error('reg_from')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>  
                          </div>
                           <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('state') is-invalid @enderror"  name="state" value=""  value="" placeholder="State">
                              @error('state')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>
                           <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="" placeholder="Address">
                              @error('address')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>
                          <div class="col-sm-12"><hr></div>
                          <div class="col-6">
                            <select name="phonetype" id="phonetype" class="form-control select2 @error('phonetype') is-invalid @enderror" value="{{ old('phonetypea') }}" class="form-control select2" style="width: 100%;">
                              <option value="">--Phone Type--</option>
                              <option value="1">Office</option>
                              <option value="2">Other</option>
                              <option value="3">Fax</option>
                            </select>
                            @error('phonetype')<div style="color: red;">{{ $message }}</div>@enderror 
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value=""  placeholder="Code">
                              @error('code')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value=""  placeholder="Phone">
                              @error('phone')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                               <input type="text" class="form-control @error('vat') is-invalid @enderror" name="vat" value="" placeholder="VAT/TAX ID">
                               @error('vat')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>

                          <div class="col-sm-6"></div>
                          <div class="col-sm-6">
                            <button type="submit"  class="btn btn-info float-right">
                             <i class="fas fa-save"></i>  <b>Save details</b>
                            </button>
                          </div>
                         
                        </div>
                      </div>
                    </form>

                  </div>
                  <!-- /.card-body -->
              </div>
          </div>

           <div class="col-lg-6">
            <!-- general form elements disabled -->
              <div class="card card-info">
                  <div class="card-header">
                      <h3 class="card-title">To Details</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  
                    <div class="col-12">
                       
                        <div class="row">
                            <div class="col-sm-12"><label>Busness Contact</label></div>
                        </div>
                    <form class="form-horizontal" action="{{ route('supplier.busness_contact_to') }}" method="POST">  
                          {{csrf_field()}}
                      
                     
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('to_fullname') is-invalid @enderror" name="to_fullname" value="{{ old('to_fullname') }}" id="to_fullname" placeholder="Full Name">
                              @error('to_fullname')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                         
                          <div class="col-6"></div>
                          <div class="col-6">
                              <div class="form-group">
                                <input type="text" class="form-control @error('company_to') is-invalid @enderror" name="company_to" value="{{ old('company_to') }}"  placeholder="Company Name">
                                @error('company_to')<div style="color: red;">{{ $message }}</div>@enderror 
                              </div>
                          </div>
                          <div class="col-6">
                             <div class="form-group">
                              <input type="email" class="form-control @error('to_email') is-invalid @enderror" name="to_email" value="{{ old('to_email') }}"  placeholder="Enter email">
                              @error('from_email')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>
                          <div class="col-6">
                             <div class="form-group">
                              <input type="hidden" class="form-control @error('country_to') is-invalid @enderror" name="country_to" id="country_to" value="{{ Session::get("to_id")}}">
                              <input type="text" class="form-control @error('country_to') is-invalid @enderror" name="country_to" id="country_to" value="{{ Session::get("to_country")}}"  placeholder="{{ Session::get("to_country")}}" disabled>
                              @error('country_to')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <select name="reg_to" id="reg_to" class="form-control select2 @error('reg_to') is-invalid @enderror" value="{{ old('reg_to') }}" class="form-control select2" style="width: 100%;">
                                <option selected="false" value=""> -- Select Region-- </option>
                                  @foreach($Region_to as $data)
                                      <option value='{{ $data->id }}'>{{ $data->name }}</option>
                                  @endforeach
                              </select>
                              @error('reg_to')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>  
                          </div>
                           <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('state_to') is-invalid @enderror"  name="state_to"   value="{{ old('state_to') }}" placeholder="State">
                              @error('state_to')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>
                           <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('address_to') is-invalid @enderror" name="address_to" value="{{ old('address_to') }}" placeholder="Address">
                              @error('address_to')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>
                          <div class="col-sm-12"><hr></div>
                          <div class="col-6">
                            <select name="phonetype_to" id="phonetype_to" class="form-control select2 @error('phonetype_to') is-invalid @enderror" value="{{ old('phonetype_to') }}" class="form-control select2" style="width: 100%;">
                              <option value="">--Phone Type--</option>
                              <option value="1">Office</option>
                              <option value="2">Other</option>
                              <option value="3">Fax</option>
                            </select>
                            @error('phonetype_to')<div style="color: red;">{{ $message }}</div>@enderror 
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('code_to') is-invalid @enderror" name="code_to" value="{{ old('code_to') }}"  placeholder="Code">
                              @error('code_to')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" class="form-control @error('phone_to') is-invalid @enderror" name="phone_to" value="{{ old('phone_to') }}"   placeholder="Phone">
                              @error('phone_to')<div style="color: red;">{{ $message }}</div>@enderror 
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                               <input type="text" class="form-control @error('vat_to') is-invalid @enderror" name="vat_to" value="{{ old('vat_to') }}"  placeholder="VAT/TAX ID">
                               @error('vat_to')<div style="color: red;">{{ $message }}</div>@enderror
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <a href="{{ route('homepage') }}">
                              <button type="button" class="btn btn-danger"> <b>Cancel Process</b></button>
                            </a>
                          </div>
                          <div class="col-sm-6">
                            <button type="submit"  class="btn btn-info float-right">
                             <i class="fas fa-save"></i>  <b>Save and Continue</b>
                            </button>
                          </div>
                         
                        </div>
                     
                        
                   </form>
                  </div>

                  </div>
                </div>
                  <!-- /.card-body -->
          </div>
          </div>

        </div>
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