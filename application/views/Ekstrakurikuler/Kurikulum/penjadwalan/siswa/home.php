<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a href="<?php echo base_url();?>kurikulum/siswa/home">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <div class="col-md-12 ">

        <!-- Profile Image -->
        <div class="box box-primary box-dashboard">
          <div class="box-body box-profile">
            <h3 class="profile-username text-center">Selamat Datang <?php echo $nama ?></h3>
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>/assets/penjadwalan/superadmin/fotoguru/<?php echo $foto ?>" alt="User profile picture">

            <h3 class="profile-username text-center"><?php echo $nama ?></h3>

            
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>