<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Laporan Dana Desa</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Dana Desa</h6>
            </div>
            <div class="card-body">
             
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
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($laporan as $dat) : ?>
                    <tr>
                      <td><?= $dat['tgl_masuk']; ?></td>
                      <td><?= $dat['nama_instansi']; ?></td>
                      <td><?= $dat['nama_desa']; ?></td>
                      <td><?= $dat['saldo_awal']; ?></td>
                      <td><?= $dat['keperluan']; ?></td>
                      <td><?= $dat['sisa_saldo']; ?></td>
                      <td> 
                          <a href="<?= base_url('Laporan/detaildana/') . $dat['id_desa']; ?>" class="btn btn-danger">Detail</a>
                      </td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

