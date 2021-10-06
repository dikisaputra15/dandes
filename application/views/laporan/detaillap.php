<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Detail Dana Keluar</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Detail Dana Keluar</h6>
            </div>
            <div class="card-body">
              
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal Keluar</th>
                      <th>Kebutuhan</th>
                      <th>Jumlah Biaya</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($laporan as $dat) : ?>
                    <tr>
                      <td><?= $dat['tgl_keluar']; ?></td>
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

