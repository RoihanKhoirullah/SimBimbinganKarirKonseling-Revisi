
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
                          <form action="/admin/datapengguna-store" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" >
                                </div>

                                <div class="form-group">
                                  <select name="mapel" id="mapel" class="form-control">
                                          <option>Mata Pelajaran</option>
                                          <option>-</option>
                                          <option value="Bahasa-Indonesia">Bahasa Indonesiaa</option>
                                          <option value="Bahasa-Inggris">Bahasa Inggris</option>
                                          <option value="Matematika">Matematika</option>
                                          <option value="Agama">Agama</option>
                                          <option value="PJOK">Pendidikan Kebugaran Jasmani</option>
                                          <option value="KWH">Pendidikan Kewirausahaan</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <select name="level" id="level" class="form-control">
                                          <option>Level</option>
                                          <option value="guru">Guru</option>
                                          <option value="pembimbing-siswa">Pembimbing Siswa</option>
                                  </select>
                                </div>
                              
                                <div class="form-group">
                                  <input type="text" id="email" name="email" class="form-control" placeholder="Username">
                                </div>

                                <div class="form-group">
                                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <br>
                                <br>
                                
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Smpan</button>
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

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
  <thead>
    
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>Mata Pelajaran</th>
      <th>Level</th>
      <th>Username</th>
      <th>Password</th>
      <th>Aksi</th>
     
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($dtpengguna as $item)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->mapel }}</td>
        <td>{{ $item->level }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->password }}</td>

      
        <td>

            <!-- <a href="{{ route('Datapengguna.edit', $item->id) }}"><i style="color : blue" class="material-icons"><i class="fas fa-edit"></i></i> </a> |  -->
            <a href="{{ route('delete', $item->id) }}"><i style="color : red" class="material-icons"><i class="fas fa-trash-alt"></i></i> </a>
       
        </td>
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