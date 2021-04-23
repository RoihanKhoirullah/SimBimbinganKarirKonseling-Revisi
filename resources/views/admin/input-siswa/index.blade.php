
<!DOCTYPE html>
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Data User</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
<!-- /.card-header -->

<div class="col-lg-6">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h5 class="m-0">Jika Anda Memiliki Kendala Dengan Murid</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="col-lg-12 col-sm-12 col-md-9 offset">
                  <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#addGalModal">
                        Tambah Data
                  </button>

  <!-- TAMBAH DATA -->
  <div class="modal fade" id="addGalModal" tabindex="-1" aria-labelledby="addAboutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
              <div class="modal-content">
                    <div class="modal-header">
                          <h5 class="modal-title" id="addAboutModalLabel">Tambah Data Pengguna</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                    <div class="modal-body">
                          <form action="/admin/input-siswa-store" method="post" enctype="multipart/form-data">
                          @csrf

                                <div class="form-group">
                                  <input type="number" id="nis" name="nis" class="form-control" placeholder="NIS " required>
                                </div>

                                <div class="form-group">
                                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama " onkeypress="return event.charCode <48 || event.charCode >57" required>
                                </div>

                                <div class="form-group">
                                  <select name="rombel" id="rombel" class="form-control" required>
                                          <option value="">Rombel </option>
                                          <option value="rpl">Rpl</option>
                                          <option value="tkj">Tkj</option>
                                          <option value="mmd">Mmd</option>
                                          <option value="bdp">Bdp</option>
                                          <option value="otkp">Otkp</option>
                                          <option value="hotel">Hotel</option>
                                          <option value="tataboga">Tataboga</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <select name="rayon" id="rayon" class="form-control"required>
                                          <option value="">Rayon </option>
                                          <option value="tajur 1">Tajur 1</option>
                                          <option value="tajur 2">Tajur 2</option>
                                          <option value="tajur 3">Tajur 3</option>
                                          <option value="tajur 4">Tajur 4</option>
                                          <option value="wikrama 1">Wikram 1</option>
                                          <option value="wikrama 2">Wikram 2</option>
                                          <option value="wikrama 3">Wikram 3</option>
                                          <option value="wikrama 4">Wikram 4</option>
                                          
                                  </select>
                                </div>

                                <!-- <div class="form-group">
                                  <input type="text" id="masalah" name="masalah" class="form-control" placeholder="Masalah" >
                                </div> -->

                                <div class="form-group">
                                      <textarea class="form-control" name="masalah" id="masalah" rows="3" placeholder="Masalah" required></textarea>
                                </div>

                                <!-- <div class="form-group">
                                  <select name="penyelesaianmasalah" id="penyelesaianmasalah" class="form-control">
                                          <option value="belum-selesai">Belum Selesai</option>
                                  </select>
                                </div> -->

                                <div class="form-group">
                                  <input type="text" id="penyelesaianmasalah" value="belum selesai" name="penyelesaianmasalah" class="form-control" placeholder="penyelesaianmasalah " readonly>
                                </div>

                                <br>
                                <br>
                                
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Smpan</button>
                          <div class="form-group">
                                  <select name="pelapor" id="pelapor" class="form-control" > 
                                  <option value="{{auth()->user()->name}}">{{auth()->user()->name}}</option>                                          
                                  </select>
                                <div>
                          </form>
                    </div>
              </div>
      </div>
    </div>
  </div>
</div>
      <div class="card-tools">
  </div>
</div>
              </div>
            </div>

 <!-- /.col-md-6 -->
 </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer">
   @include('Template.footer')
  </footer> -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('Template.script')
    @include('sweetalert::alert')
</body>
</html>