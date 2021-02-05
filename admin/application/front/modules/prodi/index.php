<div class="breadcrumbs ace-save-state" id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="ace-icon fa fa-home home-icon"></i>
      <a href="dashboard">Home</a>
    </li>

    <li>
      <a href="prodi">Program Studi</a>
    </li>
  </ul><!-- /.breadcrumb -->
</div>

<div class="page-content">

   <div class="page-header">
    <h1>
      Manajemen Program Studi
      <small>
        <i class="ace-icon fa fa-angle-double-right"></i>
        Tambah, Edit &amp; Hapus
      </small>
      <a href="prodi-form" title="Tambah Data Prodi" class="btn btn-white btn-info btn-bold btn-lg pull-right"><i class="ce-icon fa fa-plus-square bigger-120"></i> Tambah Prodi</a>
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->
          <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
          </div>
          <div class="table-header">
           Daftar Program Studi
          </div>
          <div>
            <table id="dt_a" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="95" class="center">#</th>
                  <th>Nama Program Studi</th>
                  <th width="200">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
              $sql = $db->query("select * from alternatif order by id_alternatif asc");
              $sql->data_seek(0);
              $no = 1;
              while ($row = $sql->fetch_assoc()) {
                ?>
                
                <tr>
                  <td class="center"><?php echo $no++ ?></td>
                  <td><?php echo $row['nama_alternatif'] ?></td>
                  <td class="center">
                    <div class="action-buttons">
                      <a class="green" title="Ubah Prodi" href="prodi-edit/<?php echo $row['id_alternatif']?>" role="button">
                        <i class="ace-icon fa fa-pencil bigger-200"></i>
                      </a>

                     <a class="red" title="Hapus Prodi"  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="prodi-delete/<?php echo $row['id_alternatif']?>">
                        <i class="ace-icon fa fa-trash-o bigger-200"></i>
                      </a>

                    </div>
                  </td>
                </tr>
              <?php
               }
              ?>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    <!-- PAGE CONTENT ENDS -->
  </div><!-- /.col -->