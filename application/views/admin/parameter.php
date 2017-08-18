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
                        <span class="hidden-xs-up" id="del-confirm-message"><?=message_display(4,"parameter",false)?></span>
                        <?=message_display_panel(message_display(5, "parameter"));?>
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
                                    <td class="parameter_name"><?=$v['parameter_name']?></td>
                                    <td class="parameter_type"><?=$v['parameter_type']?></td>
                                    <td class="parameter_value"><?=$v['parameter_value']?></td>
                                    <td><?=$v['created_date']?></td>
                                    <td><?=$v['created_by']?></td>
                                    <td><button data-toggle="modal" data-target="#updateModal" type="button" class="btn btn-link btn-sm upd-btn">Ubah</button><button type="button" class="btn btn-link btn-sm text-danger del-btn">Hapus</button></td>
                                </tr>
                                <?php  }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                  <button id="add-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">Tambah Parameter</button>
                  <!-- -->
                  <!-- Modal -->
                  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Parameter</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="parameter_name">Nama</label>
                              <input type="text" class="form-control" id="parameter_name" placeholder="Nama parameter">
                            </div>
                            <div class="form-group">
                              <label for="parameter_type">Tipe</label>
                              <input type="text" class="form-control" id="parameter_type" placeholder="Tipe parameter">
                            </div>
                            <div class="form-group">
                              <label for="parameter_value">Nilai</label>
                              <input type="text" class="form-control" id="parameter_value" placeholder="Nilai parameter">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- -->
                </div>
            </div>
        </div>
   <!-- /.container-fluid -->
</div>
