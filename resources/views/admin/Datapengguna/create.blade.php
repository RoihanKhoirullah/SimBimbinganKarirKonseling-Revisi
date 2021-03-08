
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
            <h1 class="m-0">Tambah Data Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        
    </div>

    <!-- CREATE -->
    <div class="card-body">
       <form action="/admin/datapengguna-store" method="post">
       {{ csrf_field() }}
       
          <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Nama" >
          </div>
          
            <div class="form-group">
                <select name="level" id="level" class="form-control">
                        <option>Level</option>
                        <option value="admin">admin</option>
                        <option value="pembimbing">pembimbing</option>
                        <option value="siswa">siswa</option>
                </select>
            </div>



          <div class="form-group">
            <input type="text" id="email" name="email" class="form-control" placeholder="Username">
          </div>

          <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
          </div>

          

          <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
          </div>

       </form>
    </div>
    </div>
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
</body>
</html>
