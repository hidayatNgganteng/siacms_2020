<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi SMP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="noven_dist/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI</b>SMP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="image/admin.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="image/admin.png" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
              <!-- Menu Body -->
              <li class="user-body pdg">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- Sidebar user panel -->

        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->


        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <!-- Sidebar user panel -->

        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
 <ul class="sidebar-menu">
          <li class="header"></li>

<!-- Sidemenu Kesiswaan -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Kesiswaan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o"></i>Penerimaan Peserta Didik Baru</a>
           <ul class="treeview-menu">
            <li ><a href="ppdbujian.php"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
            <li ><a href="ppdbneg.php"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
          </ul>
        </li>

        <li ><a href="#"><i class="fa fa-circle-o"></i>Daftar  Ulang</a>
         <ul class="treeview-menu">
          <li ><a href="daftarulang.php"><i class="fa fa-circle-o text-red"></i>Peserta Didik Baru</a></li>
          <li ><a href="daftarkenaikan.php"><i class="fa fa-circle-o text-red"></i>Kenaikan Kelas</a></li>
        </ul>
      </li>

      <li ><a href="#"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
        <ul class="treeview-menu">
          <li ><a href="distribusi.php"><i class="fa fa-circle-o text-red"></i>Kelas Reguler</a></li>
          <li ><a href="distribusi2.php"><i class="fa fa-circle-o text-red"></i>Kelas Tambahan</a></li>
        </ul>
      </li>

      <li ><a href="#"><i class="fa fa-circle-o"></i> Mutasi </a>
      <ul class="treeview-menu">
          <li ><a href="masuk.php"><i class="fa fa-circle-o text-red"></i>Mutasi Masuk</a></li>
          <li ><a href="keluar.php"><i class="fa fa-circle-o text-red"></i>Mutasi Keluar</a></li>
        </ul>
      </li>
    </li>
  </ul>
  </li>

<!-- Sidemenu Kurikulum -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Kurikulum</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Penjadwalan</a>
        <ul class="treeview-menu">
          <li><a href="mapel.php"><i class="fa fa-circle-o"></i> Manajemen Mata Pelajaran</a></li>
          <li><a href="harirentang.php"><i class="fa fa-circle-o"></i> Manajemen Hari & Jam</a></li>
          <li><a href="jadwalmapel.php"><i class="fa fa-circle-o"></i> Jadwal Mapel</a></li>
          <li><a href="jadwalguru.php"><i class="fa fa-circle-o"></i> Jadwal Piket Guru</a></li>
          <li><a href="jadwaltambahan.php"><i class="fa fa-circle-o"></i> Jadwal Tambahan</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Penilaian Siswa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="nilaisiswa.php"><i class="fa fa-circle-o"></i> Nilai Siswa</a></li>
          <li><a href="kategorinilai.php"><i class="fa fa-circle-o"></i> Kategori Nilai</a></li>
          <li><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o"></i> Jenis Nilai Akhir</a></li>
          <li><a href="deskripsinilai.php"><i class="fa fa-circle-o"></i> Deskripsi Nilai</a></li>
          <li><a href="rapor.php"><i class="fa fa-circle-o"></i> Rapor</a></li>
        </ul>
      </li>
    </ul>
  </li>

<!-- Sidemenu Kepegawaian -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Kepegawaian</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li ><a href="Datapegawai.php"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
      <li ><a href="presensipegawai.php"><i class="fa fa-circle-o"></i> Presensi Pegawai</a></li>
      <li><a href="jadwalmengajar.php"><i class="fa fa-circle-o"></i>Jadwal Mengajar</a></li>
    </ul>
  </li>

<!-- Sidemenu Non Akademik -->
  <li class="treeview active">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Non akademik</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active treeview"><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">
            <li ><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
            <li ><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
            <li><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
            <li class="active"><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
            <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
          </ul>
        </li>

        <li><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
        <ul class="treeview-menu">
          <li ><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
          <li ><a href="absensi_harian.php"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
          <li><a href="pelanggaran.php"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
          <li><a href="prestai.php"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
        </ul>
        </li>
    </li>
</ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Nilai  Ekstrakurikuler Siswa SMP Yogyakarta<br></center>
        <center><small>Tahun Ajaran 2016-2017</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        
        <div class="row">
            <!-- Left col -->
            <section class="col-md-12 ">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-left">
                  <li class="active"><a href="#tab1" data-toggle="tab">Nilai Siswa</a></li>
                  <li><a href="#tab2" data-toggle="tab">Daftar Nilai Persemester</a></li>
                </ul>
                <div class="tab-content no-padding">
                  <div class="chart tab-pane active" id="tab1" style="position: relative; ">
                      
                      <div class="box">
                        <div class="box-body">
                          <select name="kelas">
                            <option value="Kelas 7A">Kelas 7A</option>
                            <option value="Kelas 8A">Kelas 8A</option>
                            <option value="Kelas 9A">Kelas 9A</option>
                          </select> 
                          <br/><br/>      
                          <table class="table table-bordered">
                            <tr>
                              <th style="width: 9px">No</th> 
                              <th>Nama</th>
                              <th>Jenis Ekstrakurikuler</th> 
                              <th>Nilai</th>
                            </tr>
                            <tr>
                              <td>1.</td> 
                              <td>Farah Venanda</td>
                              <td>
                                  <select name="Jenis Ekstrakurikuler">
                                     <option value="Bulutangkis">Bulutangkis</option>
                                     <option value="BahasaInggris">Bahasa Inggris</option>
                                     <option value="Volly">Volly</option>
                                     <option value="Tonti">Tonti</option>
                                     <option value="Olimpiade">Olimpiade IPA</option>
                                  </select>
                                  <br/>
                                  <select name="Jenis Ekstrakurikuler">
                                     <option value="Bulutangkis">Bulutangkis</option>
                                     <option value="BahasaInggris">Bahasa Inggris</option>
                                     <option value="Volly">Volly</option>
                                     <option value="Tonti">Tonti</option>
                                     <option value="Olimpiade">Olimpiade IPA</option>
                                  </select>
                              </td>
                             <td>
                                  <input type="radio" checked name="a"/>&nbsp; A &nbsp;
                                  <input type="radio" name="b"/>&nbsp; B &nbsp;
                                  <input type="radio" name="c"/>&nbsp; C &nbsp;
                                  <br/>
                                  <input type="radio" checked name="a"/>&nbsp; A &nbsp;
                                  <input type="radio" name="b"/>&nbsp; B &nbsp;
                                  <input type="radio" name="c"/>&nbsp; C &nbsp;
                              </td> 
                            </tr> 
                            <tr>
                              <td>2.</td> 
                              <td>Rasid Alfatih</td>
                              <td>
                                  <select name="Jenis Ekstrakurikuler">
                                     <option value="Bulutangkis">Bulutangkis</option>
                                     <option value="BahasaInggris">Bahasa Inggris</option>
                                     <option value="Volly">Volly</option>
                                     <option value="Tonti">Tonti</option>
                                     <option value="Olimpiade">Olimpiade IPA</option>
                                  </select>
                                  <br/>
                                  <select name="Jenis Ekstrakurikuler">
                                     <option value="Bulutangkis">Bulutangkis</option>
                                     <option value="BahasaInggris">Bahasa Inggris</option>
                                     <option value="Volly">Volly</option>
                                     <option value="Tonti">Tonti</option>
                                     <option value="Olimpiade">Olimpiade IPA</option>
                                  </select>
                              </td>
                              <td>
                                  <input type="radio" checked name="a"/>&nbsp; A &nbsp;
                                  <input type="radio" name="b"/>&nbsp; B &nbsp;
                                  <input type="radio" name="c"/>&nbsp; C &nbsp;
                                <br/>
                                <input type="radio" checked name="a"/>&nbsp; A &nbsp;
                                  <input type="radio" name="b"/>&nbsp; B &nbsp;
                                  <input type="radio" name="c"/>&nbsp; C &nbsp;
                              </td> 
                            </tr>
                            <tr>
                              <td>3.</td> 
                              <td>Adnan Rachman</td>
                              <td>
                                  <select name="Jenis Ekstrakurikuler">
                                     <option value="Bulutangkis">Bulutangkis</option>
                                     <option value="BahasaInggris">Bahasa Inggris</option>
                                     <option value="Volly">Volly</option>
                                     <option value="Tonti">Tonti</option>
                                     <option value="Olimpiade">Olimpiade IPA</option>
                                  </select>
                              </td>
                              <td>
                                  <input type="radio" checked name="a"/>&nbsp; A &nbsp;
                                  <input type="radio" name="b"/>&nbsp; B &nbsp;
                                  <input type="radio" name="c"/>&nbsp; C &nbsp;
                              </td> 
                            </tr> 
                          </table>
                        </div>
                        <div class="box-footer clearfix">
                          <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                      </div>
                      <div class="box">
                        <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                              <th style="width: 10px">No</th>
                              <th>Nama</th>
                              <th>Jenis Ekstrakurikuler</th> 
                              <th>Nilai</th>
                            </tr>
                            <tr>
                              <td>1.</td> 
                              <td>Farah Venanda</td>
                              <td>
                                  Volly
                                  <br/>
                                  Tonti
                              </td>
                              <td>
                                 A <br/> A
                              </td>
                            </tr> 
                            <tr>
                              <td>2.</td> 
                              <td>Rasid Alfatih</td>
                              <td>
                                  Basket
                                  <br/>
                                  Voli
                              </td>
                              <td>
                                 A </br> B
                              </td>
                            </tr>
                            <tr>
                              <td>3.</td> 
                              <td>Adnan Rachman</td>
                              <td>
                                  Basket
                              </td>
                              <td>
                                 B
                              </td>
                            </tr>
                          </table>
                        </div>
                        <div class="box-footer clearfix">
                          <a href="#" class="btn btn-primary">Kembali</a>
                          <a href="#" class="btn btn-primary">Next</a>
                        </div>
                      </div>
                      
            
                  </div>
                  <div class="chart tab-pane" id="tab2" style="position: relative; ">
                       <div class="box">
                        <div class="box-body">
                        <!-- <br><center><h4>Daftar Nilai Ekstrakurikuler Siswa Persemester</center></h4></br> -->
                        <select name="Semester">
                            <option value="Semester 1">Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                          </select>
                          <select name="Kelas">
                            <option value="Kelas 7A">Kelas 7A</option>
                            <option value="Kelas 7B">Kelas 7B</option>
                            <option value="Kelas 7C">KelaS 7C</option>
                          </select>
                        <select name="tahun">
                            <option value="2015/2016">2015/2016</option>
                            <option value="2016/2017">2016/2017</option>
                            <option value="2017/2018">2017/2018</option>
                            <option value="2018/2019">2018/2019</option>
                          </select> 
                          <br/><br/>  
                            
                        <table class="table table-bordered">
                            <tr>
                              <th>No</th>
                              <th>NIS</th>
                              <th>Nama</th>
                              <th>Jenis Ekstrakurikuler</th>
                              <th>Nilai</th>
                              <th>Jenis Ekstrakurikuler</th>
                              <th>Nilai</th>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>125</td> 
                              <td>Shella Afiya</td>
                              <td>Kaligrafi</td>
                              <td>A</td>
                              <td>Olimpiade IPA</td>
                              <td>A</td>
                            </tr> 
                            <tr>
                              <td>2</td>
                              <td>076</td> 
                              <td>Afifah Syahira</td>
                              <td>Teater</td>
                              <td>A</td>
                              <td>Bulutangkis</td>
                              <td>A</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>128</td> 
                              <td>Adnan Rachman</td>
                              <td>Basket</td>
                              <td>B</td>
                            </tr></table>
                        </div>
                        <div class="box-footer clearfix">
                          <a href="#" class="btn btn-primary">PRINT</a>
                        </div>

                        <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                          <li><a href="#">&laquo;</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">&raquo;</a></li>
                      </ul>
                      </div>
                      </div>
                      
                  </div>
                    
                    
                 
                    
                </div>
              </div>
            </section>
        </div>

        
    </section>
    <!-- /.content -->
  </div>
  
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
<script>
  $(function () {
    // $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</html>

