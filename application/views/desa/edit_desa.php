<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Desa</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Desa</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id desa</label>
                    <input type="text" class="form-control" name="id_desa" value="<?= $desa['id_desa']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Desa</label>
                    <input type="text" class="form-control" name="nama_desa" value="<?= $desa['nama_desa']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $desa['alamat']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kepala Desa</label>
                    <input type="text" class="form-control" name="kepala_desa" value="<?= $desa['kepala_desa']; ?>">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>