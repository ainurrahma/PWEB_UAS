  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Dokter</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title']; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url; ?>/dokter/simpandokter" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>id</label>
              <input type="text" class="form-control" placeholder="nomor dokter" name="id">
            </div>
            <div class="form-group">
              <label>Nama Dokter</label>
              <input type="text" class="form-control" placeholder="Nama Dokter" name="nama">
            </div>
            <div class="form-group">
              <label>Lokasi</label>
              <input type="text" class="form-control" placeholder="Lokasi Praktek" name="lokasi">
            </div>
            <div class="form-group">
              <label>Spesialis</label>
              <input type="text" class="form-control" placeholder="Dokter Spesialis" name="spesialis">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>


    </section>
    <!-- /.content -->