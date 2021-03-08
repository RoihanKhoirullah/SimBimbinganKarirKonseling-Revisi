
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

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
  <thead>
    
    <tr>
      <th>No</th>
      <th>Yang Melaporkan</th>
      <th>NIS Siswa</th>
      <th>Nama Siswa</th>
      <th>Rombel Siswa</th>
      <th>Rayon Siswa</th>
      <th>Masalah Siswa</th>
    </tr>
  </thead>
  <tbody>
  @php
    $no = 1;
    @endphp
    @foreach ($datasiswa as $item)
    <tr>
       <td>{{ $no++ }}</td>
        <td>{{ $item->pelapor }}</td>
        <td>{{ $item->nis }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->rombel }}</td>
        <td>{{ $item->rayon }}</td>
        <td>{{ $item->masalah }}</td>
    </tr>
    @endforeach 
  </tbody>
</table>
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