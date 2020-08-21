<?php 

$hasil = $data->getDb()->query("SELECT * FROM daftar_mapel ORDER BY nama");
$mapel = $hasil->fetchAll();

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Admin</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Daftar Materi</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul Materi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $query = $data->getDb()->query("SELECT * FROM materi");
                        $materi = $query->fetchAll();
                        // print_r($guru);
                        $no = 1;
                        foreach ($materi as $mt) :
                    ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="../user.php?page=tampil-materi&id=<?= $mt['id']; ?>" target="_blank"><?= tampilJudul($mt['judul']); ?></a></td>
                      <td>
                        <div class="btn-group btn-group-sm">
                          <a href="user.php?page=edit-materi&id=<?= $mt['id']; ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                          <a href="javascript:hapusData(<?= $mt['id']; ?>)" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php
                      $no++;
                      endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script language="JavaScript" type="text/javascript">
      function hapusData(id){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'delete-materi.php?id=' + id;
        }
      }
    </script>
