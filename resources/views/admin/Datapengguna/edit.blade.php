
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
            <h1 class="m-0">Tambah Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data USer</li>
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
       <form action="{{ route('Datapengguna.update', $dtpengguna->id) }}" method="post">

            @csrf
            @method('PUT')
       
          <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Nama"  value="{{ $dtpengguna->name}}" >
          </div>
          
            <div class="form-group">
                <select name="level" id="level" class="form-control" >
                        <option>Level</option>
                        <option value="admin">admin</option>
                        <option value="pembimbing">pembimbing</option>
                </select>
            </div>



          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $dtpengguna->email}}">
          </div>

          <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="{{ $dtpengguna->password}}">
          </div>

          

          <div class="form-group">
            <button type="submit" class="btn btn-success">Ubah Data</button>
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
  <footer class="main-footer">
   @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>
</html>
