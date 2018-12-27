<div class="row">
	<div class="card col-md-6 mx-auto">
		<div class="card-header">
			<h3 class="text-center">Tambah User Baru</h3>
		</div>
		<form action="<?=base_url('user/add')?>" method="post">
			<div class="card-body">
				<div class="form-group">
				  <label class="form-control-label" for="input-1">Nama</label>
				  <input name="name" id="input-1" type="text" class="form-control" placeholder="Nama">
				</div>
				<div class="form-group">
				  <label class="form-control-label" for="input-2">Username</label>
				  <input name="username" id="input-2" type="text" class="form-control" placeholder="Username">
				</div>
			     <div class="form-group">
			       <label for="exampleFormControlSelect1">Level</label>
			       <select class="form-control" name="level">
			         <option value="0">Member</option>
			         <option value="1">Admin</option>
			       </select>
			     </div>
				<div class="form-group">
				  <label class="form-control-label" for="input-3">Password</label>
				  <input name="password" id="input-3" type="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
				  <label class="form-control-label" for="input-4">Confirm Password</label>
				  <input name="confirm" id="input-4" type="password" class="form-control" placeholder="Confirm Password">
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
</div>