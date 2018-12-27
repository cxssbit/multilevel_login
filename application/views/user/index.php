<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <div class="row">
          <div class="col-8">
              <h3 class="mb-0">Data User</h3>
          </div>
          <div class="col-4 text-right">
              <a href="<?=base_url('user/add')?>" class="btn btn-sm btn-info">Tambah User</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table tablesorter " id="">
          <thead class=" text-primary">
            <tr>
              <th class="text-center">#</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Level</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php $no=0; foreach($user as $data){ $no++;?>
            <tr>
              <td class="text-center"><?=$no?></td>
              <td><?=$data->name?></td>
              <td><?=$data->username?></td>
              <td><?php if($data->level==0){echo "member";}else{echo "admin";}?></td>
              <td class="text-center">
                  <a class="btn btn-sm btn-info btn-round btn-icon" href="<?=base_url('user/edit/'.$data->id);?>">
                    <i class="tim-icons icon-pencil"></i>
                  </a>
                  <button class="btn btn-sm btn-danger btn-round btn-icon" data-toggle="modal" data-target="#modal-<?=$data->id?>">
                    <i class="tim-icons icon-trash-simple"></i>
                  </button>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>  
</div>

<?php foreach ($user as $modal){?>
<div class="modal fade" id="modal-<?=$modal->id?>" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data ini akan dihapus secara permanent
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="<?=base_url('user/delete/'.$modal->id);?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>