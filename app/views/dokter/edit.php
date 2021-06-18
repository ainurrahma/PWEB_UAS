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
        <form role="form" action="<?= base_url; ?>/dokter/updatedokter" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data['dokter']['id']; ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nomor Dokter</label>
              <input type="text" class="form-control" placeholder="input nomor" name="id" value="<?= $data['dokter']['id']; ?>">
            </div>
            <div class="form-group">
              <label>Nama Dokter</label>
              <input type="text" class="form-control" placeholder="input nama" name="nama" value="<?= $data['dokter']['nama']; ?>">
            </div>
            <div class="form-group">
              <label>Lokasi Prakter</label>
              <input type="text" class="form-control" placeholder="input lokasi praktek" name="lokasi" value="<?= $data['dokter']['lokasi']; ?>">
            </div>
            <div class="form-group">
              <label>Spesialis</label>
              <input type="text" class="form-control" placeholder="input spesialis" name="spesialis" value="<?= $data['dokter']['spesialis']; ?>">
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