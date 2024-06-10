
    <!-- Main content -->
    <section class="content">

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tapera Pensiun</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Nomor Hp</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php 
                  $no=1;
                  if(!empty($pensiun)){
                    foreach ($pensiun as $data){
                      echo" 
                      <tr>
                      <td>".$no++."</td>
                        <td>".$data->nama."</td>
                        <td>".$data->nip."</td>
                        <td>".$data->nohp."</td>
                        <td>".$data->status."</td>
                        <td>
                          <a href='".base_url('home/ubah/'.$data->id_pensiun)."' class='btn btn-sm btn-primary'><i class='fas fa-edit' title='edit'></i></a>
                          <a href='".base_url('home/hapus/'.$data->id_pensiun)."' class='btn btn-sm btn-danger' title='hapus data'><i class='fa fa-trash-alt'></i></a>
                        
                        </td>
                      </tr>";
                    }
                  }else{
                    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                  }
                  ?>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


