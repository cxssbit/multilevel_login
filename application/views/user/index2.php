<ul class="nav justify-content-end mb-4">
  <li class="nav-item">
    <a class="nav-link btn btn-primary" href="<?=base_url('user/add')?>">Tambah User Baru</a>
  </li>
</ul>
<div class="row" id="myDIV">
  <?php $no=0; foreach($user as $data){ $no++;?>
  <div class="col-md-4" id="myBox">
    <div class="card card-user">
      <div class="card-body">
        <p class="card-text">
          <div class="author">
            <div class="block block-one"></div>
            <div class="block block-two"></div>
            <div class="block block-three"></div>
            <div class="block block-four"></div>
            <a href="javascript:void(0)">
              <img class="avatar" src="<?=base_url('assets/images/'.$data->image)?>" alt="...">
              <h5 class="title"><?=$data->name?></h5>
            </a>
            <p class="description">
              <?php if($data->level==0){echo "Member";}else{echo "Admin";}?>
            </p>
          </div>
        </p>
      </div>
      <div class="card-footer">
        <div class="button-container">
          <a class="btn btn-primary btn-round btn-icon" href="<?=base_url('user/edit/'.$data->id);?>">
            <i class="tim-icons icon-pencil"></i>
          </a>
          <button class="btn btn-lg btn-info btn-round btn-icon" data-toggle="modal"><i class="tim-icons icon-zoom-split"></i></button>
          <button class="btn btn-primary btn-round btn-icon" data-toggle="modal" data-target="#modal-<?=$data->id?>">
            <i class="tim-icons icon-trash-simple"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <?php } ?> 
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