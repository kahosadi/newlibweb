<!--<script src="<?=site_url()?>assets/vendor/ckeditor/ckeditor.js"></script>
<script src="<?=site_url()?>assets/vendor/ckeditor/init.js"></script>
<textarea id="editor"></textarea>
<script>
	initEditor();
</script>-->
<div class="content-wrapper py-3">
  <div class="container-fluid">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active">Parameter</li>
    </ol>
    <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Parameter
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Nilai</th>
                                    <th>Dibuat pada</th>
                                    <th>Dibuat oleh</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th>Nama</th>
                                  <th>Tipe</th>
                                  <th>Nilai</th>
                                  <th>Dibuat pada</th>
                                  <th>Dibuat oleh</th>
                                  <th>&nbsp;</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                  foreach($var as $v){
                                ?>
                                <tr id="param<?=$v['id']?>">
                                    <td><?=$v['parameter_name']?></td>
                                    <td><?=$v['parameter_type']?></td>
                                    <td><?=$v['parameter_value']?></td>
                                    <td><?=$v['created_date']?></td>
                                    <td><?=$v['created_by']?></td>
                                    <td><button type="button" class="btn btn-link btn-sm">Ubah</button><button type="button" class="btn btn-link btn-sm text-danger">Hapus</button></td>
                                </tr>
                                <?php  }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>

    </div>
   <!-- /.container-fluid -->
</div>
