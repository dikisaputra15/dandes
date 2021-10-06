<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Dana Keluar</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dana Keluar</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Dana Keluar</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal Keluar</th>
                      <th>Nama Desa</th>
                      <th>Kebutuhan</th>
                      <th>Jumlah Biaya</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($danakeluar as $dat) : ?>
                    <tr>
                      <td><?= $dat['tgl_keluar']; ?></td>
                      <td><?= $dat['nama_desa']; ?></td>
                      <td><?= $dat['kebutuhan']; ?></td>
                      <td><?= $dat['jml_biaya']; ?></td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Dana Masuk</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('Dana_keluar/tambahdanakeluar') ?>" method="POST">
                   <div class="form-group">
                    <label>Tanggal Keluar</label>
                     <input class="form-control form-control-sm mb-3" type="date" name="tgl_keluar" id="tgl_keluar" required>
                  </div>
                   <div class="form-group">
                    <label>Nama Desa</label>
                     <select class="form-control" name="id_desa">
                      <?php foreach ($desa as $dat) { ?>
                        <option value="<?= $dat['id_desa']; ?>"><?= $dat['nama_desa']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Kebutuhan" name="kebutuhan" id="kebutuhan" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Jumlah Biaya" name="jml_biaya" id="jml_biaya" required>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>