<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">LPJ Desa</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">LPJ Desa</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah LPJ</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Desa</th>
                      <th>File LPJ</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($lpj as $dat) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $dat['nama_desa']; ?></td>
                      <td><a href="<?= base_url('uploads/') . $dat['file_lpj']; ?>">File LPJ</a></td>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah LPJ</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('Laporan/tambahlpj') ?>" method="POST" enctype="multipart/form-data">
                 <div class="form-group">
                    <label>Nama Desa</label>
                     <select class="form-control" name="id_desa">
                      <?php foreach ($desa as $dat) { ?>
                        <option value="<?= $dat['id_desa']; ?>"><?= $dat['nama_desa']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                 <div class="form-group">
                    <label>File LPJ</label>
                     <input type="file" name="file" class="form-control">
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