     <!-- Main content -->
     <section class="content">
          <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit data lupa akun</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>  </div>
        </div>
        <form action="<?php echo base_url("lupa/ubah/".$lupa->id) ?>" <?php echo validation_errors() ?>method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="input_nama" value="<?php echo set_value('input_nama', $lupa->nama); ?>" placeholder="Nama Lengkap" >
                </div>
                  <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" class="form-control"  name="input_nip" value="<?php echo set_value('input_nip',$lupa->nip);?>" placeholder="Nip Anda" >
                </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" class="form-control"  name="input_nik" value="<?php echo set_value('input_nik',$lupa->nik);?>" placeholder="Nik Anda" >
                </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control"  name="input_email" value="<?php echo set_value('input_email',$lupa->email);?>" placeholder="Email Anda" >
                </div>
                <div class="form-group">
                    <label for="NoHp">No HP/Whatsapp</label>
                    <input type="number" class="form-control"  name="input_nohp" value="<?php echo set_value('input_nohp',$lupa->nohp);?>" placeholder="Masukan No HP" >
                </div>
                <div class="form-group">
                    <label for="unit">unit</label>
                    <input type="text" class="form-control"  name="input_unit" value="<?php echo set_value('input_unit',$lupa->unit);?>" placeholder="Masukan Unit Kerja" >
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control"  name="input_status" value="<?php echo set_value('input_status' , $lupa->status);?>" placeholder="Dikirim / Belum Dikirim " >
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
