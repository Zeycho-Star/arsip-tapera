     <!-- Main content -->
     <section class="content">
          <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Ubah Data</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>  </div>
        </div>
        <form action="<?php echo base_url("home/ubah/".$pensiun->id_pensiun) ?>" <?php echo validation_errors() ?>method="POST">
        <?php $id=$this->session->userdata('id_user'); 
          $idUser=array_column($id,'id_user');
              // echo $idUser[0];
        ?>
                <div class="card-body">
                  <div class="form-group">
                  <input type="hidden" name="id_user" id="id_user" value=<?php echo set_value('id_user',$idUser[0]); ?> >
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="input_nama" value="<?php echo set_value('input_nama', $pensiun->nama); ?>" placeholder="Nama Lengkap" >
                </div>
                  <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" class="form-control"  name="input_nip" value="<?php echo set_value('input_nip',$pensiun->nip);?>" placeholder="Nip Anda" >
                </div>
                <div class="form-group">
                    <label for="NoHp">No HP/Whatsapp</label>
                    <input type="number" class="form-control"  name="input_nohp" value="<?php echo set_value('input_nohp',$pensiun->nohp);?>" placeholder="Masukan No HP" >
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control"  name="input_status" value="<?php echo set_value('input_status' , $pensiun->status);?>" placeholder="Dikirim / Belum Dikirim " >
                </div>
                <div>
                    <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
                </div>

              </form>
        <!-- /.card-body -->
        <!--div class="card-footer">
          Footer
        </div>
        <-- /.card-footer-->
      </div>
      <!-- /.card -->


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
