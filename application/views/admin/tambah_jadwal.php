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
                <form name="jadwal_baru_form" action="<?php echo base_url();?>admin/jadwal/simpan_jadwal" method="post">
                    
                <div class="form-group">
                    <label for="">ID Jadwal</label>
                    
                    <input name="id_jadwal" class="form-control" type="text"  value="<?php echo $jadwal_id ?>" autocomplete="off" readonly>
                </div>  
                    
                <div class="form-group" >
                    <label for="">Jam Mulai</label>
                    <input name="jam_mulai" class="form-control timepicker" type="text" id="datetime" placeholder="jam:menit:detik" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                        <label for="">Jam Tutup</label>
                        <input name="jam_tutup" class="form-control timepicker" type="text" id="datetime2" placeholder="jam:menit:detik" autocomplete="off" required>
                </div>
            
                <!-- <div class="form-group">
                    <label for="">Hari</label>
                    <input name="hari" class="form-control" type="text" placeholder="senin" autocomplete="off" required>
                </div> -->
                <div class="form-group">
                        <label for="">Hari</label>
                        <select name="hari" class="form-control" type="text" autocomplete="off" required>
                            <option value="">--Pilih Hari --</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="">Jenis Faskes</label>
                        <select name="jenis_faskes" class="form-control" type="text" autocomplete="off" required>
                            <option value="">--Jenis Faskes --</option>
                            <option value="Pukesmas">Puskesmas</option>
                            <option value="Klinik">Klinik</option>
                        </select>
                    </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-lg btn-success col-md-6 col-sm-6" type="submit">Tambah</button>
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
      $("form[name='jadwal_baru_form']").validate({
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