<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            Tambah Jadwal
        </h1>
        <hr />
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <form name="jadwal_baru_form_edit" action="<?php echo base_url();?>admin/jadwal/update_jadwal" method="post">
                <input name="id" value="<?php echo $queryJadwalDetail->id ?>" type="hidden">
                <div class="form-group">
                    <label for="">ID Jadwal</label>
                    <input name="id_jadwal" class="form-control" type="text"  value="<?php echo $queryJadwalDetail->id_jadwal ?>" autocomplete="off" readonly>
                </div>  
                    
                <div class="form-group" >
                    <label for="">Jam Mulai</label>
                    <input name="jam_mulai" class="form-control timepicker" type="text" id="datetime" value="<?php echo $queryJadwalDetail->jam_mulai ?>" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                        <label for="">Jam Tutup</label>
                        <input name="jam_tutup" class="form-control timepicker" type="text" id="datetime2" value="<?php echo $queryJadwalDetail->jam_tutup ?>" autocomplete="off" required>
                </div>
                <div class="form-group">
                        <label for="">Hari</label>
                        <select name="hari" class="form-control" type="text" autocomplete="off" required>
                            <option value="">--Pilih Hari --</option>
                            <option value="Senin" <?php if($queryJadwalDetail->hari == "Senin") : echo "selected"; endif; ?>>Senin</option>
                            <option value="Selasa" <?php if($queryJadwalDetail->hari == "Selasa") : echo "selected"; endif; ?>>Selasa</option>
                            <option value="Rabu" <?php if($queryJadwalDetail->hari == "Rabu") : echo "selected"; endif; ?>>Rabu</option>
                            <option value="Kamis" <?php if($queryJadwalDetail->hari == "Kamis") : echo "selected"; endif; ?>>Kamis</option>
                            <option value="Jumat" <?php if($queryJadwalDetail->hari == "Jumat") : echo "selected"; endif; ?>>Jum'at</option>
                            <option value="Sabtu" <?php if($queryJadwalDetail->hari == "Sabtu") : echo "selected"; endif; ?>>Sabtu</option>
                            <option value="Minggu" <?php if($queryJadwalDetail->hari == "Minggu") : echo "selected"; endif; ?>>Minggu</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="">Jenis Faskes</label>
                        <select name="jenis_faskes" class="form-control" type="text" autocomplete="off" required>
                            <option value="">--Jenis Faskes --</option>
                            <option value="Pukesmas" <?php if($queryJadwalDetail->jenis_faskes == "Pukesmas") : echo "selected"; endif; ?>>Puskesmas</option>
                            <option value="Klinik" <?php if($queryJadwalDetail->jenis_faskes == "Klinik") : echo "selected"; endif; ?>>Klinik</option>
                        </select>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-lg btn-success col-md-6 col-sm-6" type="submit">Ubah</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <!-- <button class="btn btn-lg btn-info col-md-6 col-sm-6" type="reset">Batal</button> -->
                            <a href="<?=base_url('admin/jadwal')?>" class="btn btn-lg btn-info col-md-6 col-sm-6" role="button">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
     $(function() {
      $("form[name='jadwal_baru_form_edit']").validate({
        rules: {
            jam_mulai: "required",
          jam_tutup: "required",
          hari: "required",
          jenis_faskes: "required",
        },
        messages: {
            jam_mulai: "<span style='color: red;'>Jam mulai tidak boleh kosong</span>",
          Jam_tutup: "<span style='color: red;'>Jam tutup tidak boleh kosong</span>",
          jenis_faskes: "<span style='color: red;'>Jenis Faskes tidak boleh kosong</span>",
          hari: "<span style='color: red;'>Hari tidak boleh kosong</span>",
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
</script>
