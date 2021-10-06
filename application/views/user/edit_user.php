<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $user['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">username</label>
                    <input type="text" class="form-control" name="username" value="<?= $user['username']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="text" class="form-control" name="password" value="<?= $user['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?= $user['nama_lengkap']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <select name="level" class="form-control">
                      <option value="admin" <?php if($user['level']=="admin"){echo "selected";} ?> class="form-control">admin</option>
                      <option value="kepala desa" <?php if($user['level']=="kepala desa"){echo "selected";} ?> class="form-control">kepala desa</option>
                      <option value="bpd" <?php if($user['level']=="bpd"){echo "selected";} ?> class="form-control">BPD</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>