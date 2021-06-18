  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Dokter</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <?php
          Flasher::Message();
          ?>
        </div>
      </div>
      <!-- Default box -->

      <div class="card">
        <div class="card-header">
          <div class="btn-group float-right"><a href="<?= base_url; ?>/dokter/tambah" class="btn float-right btn btn-primary">Tambah Dokter</a></div>
        </div>

      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>ID</th>
              <th>Nama Dokter</th>
              <th>Lokasi</th>
              <th>spesialis</th>
              <th style="width: 150px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['dokter'] as $row) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['lokasi']; ?></td>
                <td><?= $row['spesialis']; ?></td>
                <td>
                  <a href="<?= base_url; ?>/dokter/edit/<?= $row['id'] ?>" class="btn btn-success btn-sm">Edit</a> 
                  <a href="<?= base_url; ?>/dokter/hapus/<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?');">Hapus</a>
                </td>
              </tr>
            <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
  </div>
  <!-- /.card-body -->
  <!-- /.card-footer-->
  </div>
  <!-- /.card -->

  </section>