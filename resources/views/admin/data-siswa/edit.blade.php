
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
      <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
        <div class="row">


<!-- CREATE -->
<div class="card-body">
       <form action="{{ route('update', $datasiswa->id) }}" method="post">
       {{ csrf_field() }}

          <div class="form-group">
          <label for="">Yang Melaporkan</label>
            <input type="text" id="pelapor" name="pelapor" class="form-control" placeholder="Yang Melaporkan" value="{{ $datasiswa->pelapor}}" disabled>
          </div>

          <div class="form-group">
          <label for="">NIS</label>
            <input type="text" id="nis" name="nis" class="form-control" placeholder="NIS" value="{{ $datasiswa->nis}}" disabled>
          </div>

          <div class="form-group">
          <label for="">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa" value="{{ $datasiswa->nama}}" disabled>
          </div>

          <div class="form-group">
          <label for="">Rombel</label>
            <input type="text" id="rombel" name="rombel" class="form-control" placeholder="Rombel " value="{{ $datasiswa->rombel}}" disabled>
          </div>

          <div class="form-group">
          <label for="">Rayon</label>
            <input type="text" id="rayon" name="raypn" class="form-control" placeholder="Rayon" value="{{ $datasiswa->rayon}}" disabled>
          </div>

          <div class="form-group">
          <label for="">Penyelesaian Masalah</label>
            <select name="penyelesaianmasalah" id="penyelesaianmasalah" class="form-control">
            <option>-- Penyelesaian Masalah --</option>
            <option value="sudah-selesai">Sudah Selesai</option>
            <option value="belum-selesai">Belum Selesai</option>
                    
            </select>
        </div>

         

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </div>
                        


                      </tbody>
                    </table>
                  </div>
                </div>
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