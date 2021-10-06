<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Dana Masuk</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dana Masuk</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Dana masuk</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal Masuk</th>
                      <th>Instansi</th>
                      <th>Desa</th>
                      <th>Saldo Awal</th>
                      <th>Keperluan</th>
                      <th>Sisa Saldo</th>
                      <th>File RAK</th>
                      <th>Lokasi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($danamasuk as $dat) : ?>
                    <tr>
                      <td><?= $dat['tgl_masuk']; ?></td>
                      <td><?= $dat['nama_instansi']; ?></td>
                      <td><?= $dat['nama_desa']; ?></td>
                      <td><?= $dat['saldo_awal']; ?></td>
                      <td><?= $dat['keperluan']; ?></td>
                      <td><?= $dat['sisa_saldo']; ?></td>
                      <td><a href="<?= base_url('uploads/') . $dat['file_rak']; ?>" target="__blank">File RAK</a></td>
                      <td><?= $dat['lokasi']; ?></td>
                      <td> 
                          <a href="<?= base_url('Dana_masuk/hapusdanamasuk/') . $dat['id_dana_masuk']; ?>" class="btn btn-danger">Hapus</a>
                      </td>
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
               <form action="<?= base_url('Dana_masuk/tambahdanamasuk') ?>" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>Tanggal Masuk</label>
                     <input class="form-control form-control-sm mb-3" type="date" name="tgl_masuk" id="tgl_masuk" required>
                  </div>
                  <div class="form-group">
                    <label>Nama instansi</label>
                     <select class="form-control" name="id_instansi">
                      <?php foreach ($instansi as $dat) { ?>
                        <option value="<?= $dat['id_instansi']; ?>"><?= $dat['nama_instansi']; ?></option>
                      <?php } ?>
                     </select>
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
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Jumlah Dana" name="saldo_awal" id="saldo_awal" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Keperluan" name="keperluan" id="keperluan" required>
                  </div>
                  <div class="form-group">
                    <label>File RAK</label>
                     <input type="file" name="file" class="form-control">
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Lokasi" name="lokasi" id="lokasi" required>
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