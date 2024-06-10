     <!-- Main content -->
     <section class="content">
          <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Input Data</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>  </div>
        </div>
        <form action="<?php echo base_url('lupa/tambah') ?>" <?php echo validation_errors() ?>method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="input_nama" value="<?php echo set_value('input_nama'); ?>" placeholder="Nama Lengkap" >
                </div>
                  <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" class="form-control"  name="input_nip" value="<?php echo set_value('input_nip');?>" placeholder="Nip Anda" >
                </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" class="form-control"  name="input_nik" value="<?php echo set_value('input_nik');?>" placeholder="Nik Anda" >
                </div>
                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control"  name="input_email" value="<?php echo set_value('input_email');?>" placeholder="Email Anda" >
                </div>
                <div class="form-group">
                    <label for="NoHp">No HP/Whatsapp</label>
                    <input type="number" class="form-control"  name="input_nohp" value="<?php echo set_value('input_nohp');?>" placeholder="Masukan No HP" >
                </div>
                <div class="form-group">
                    <label for="unit">Unit Kerja</label>
                    <input type="text" class="form-control"  name="input_unit" value="<?php echo set_value('input_unit');?>" placeholder="Masukan UNit Kerja" >
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control"  name="input_status" value="<?php echo set_value('input_status');?>" placeholder="Lupa Email / Lupa Password " >
                </div>
                <div>
                    <input type="submit" name="submit" value="Tambah Data" class="btn btn-primary">
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