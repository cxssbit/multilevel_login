<div class="row">
	<div class="card col-md-6 mx-auto">
		<div class="card-header">
			<h3 class="text-center">Edit User</h3>
		</div>
		<form action="<?=base_url('user/edit/'.$data->id)?>" method="post">
			<div class="card-body">
				<div class="form-group">
				  <label class="form-control-label" for="input-1">Nama</label>
				  <input name="name" id="input-1" type="text" class="form-control" placeholder="Nama" value="<?=$data->name?>">
				</div>
				<div class="form-group">
				  <label class="form-control-label" for="input-2">Username</label>
				  <input name="username" id="input-2" type="text" class="form-control" placeholder="Username" value="<?=$data->username?>">
				</div>
			     <div class="form-group">
			       <label for="exampleFormControlSelect1">Level</label>
			       <select class="form-control" name="level">
			         <option value="0">Member</option>
			         <option value="1" <?php if($data->level==1){echo "selected";}?>>Admin</option>
			       </select>
			     </div>
				<div class="form-group">
				  <label class="form-control-label" for="input-3">Password</label>
				  <input name="password" type="password" class="form-control" placeholder="Password" value="<?=$this->encryption->decrypt($data->password)?>" id="password">
				</div>
				<div class="form-group">
				  <label class="form-control-label" for="input-4">Confirm Password</label>
				  <input name="confirm" type="password" class="form-control" placeholder="Confirm Password" value="<?=$this->encryption->decrypt($data->password)?>" id="password1">
				</div>
			</div>
			<div class="card-footer">
				<div class="form-group">
					<a class="btn btn-danger" href="<?=base_url('user')?>">Batal</a>
					<button type="submit" class="btn btn-primary float-right">Save</button>
				</div>
			</div>
		</form>
	</div>
<div class="col-md-4">
      <div class="card card-user">
        <div class="card-body">
          <p class="card-text">
            </p><div class="author">
              <div class="block block-one"></div>
              <div class="block block-two"></div>
              <div class="block block-three"></div>
              <div class="block block-four"></div>
              <label for="image">
              <div class="overhover avatar">
                <img class="" src="<?=base_url('assets/images/'.$data->image)?>" alt="...">
                <div class="overlay">
                  <div class="text">Hello World</div>
                </div>
              </div>
                <h5 class="title"><?=$data->name?></h5>
              </label>
            <p class="description">
              <?php if($data->level==0){echo "member";}else{echo "admin";}?>
            </p>
            </div>
          <div class="card-description text-center">
			<form action="<?=base_url('upload/index/'.$data->id)?>" method="post" enctype="multipart/form-data">
				<input type="file" name="userfile" id="image" hidden>
				<button class="btn btn-primary btn-block mt-3">Change Image</button>
			</form>
          </div>
        </div>
      </div>
    </div>
</div>