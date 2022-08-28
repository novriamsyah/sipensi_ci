<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            Tambah Pasien
        </h1>
        <hr />
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <form name="pasien_baru_form_edit" action="<?php echo base_url();?>admin/pasien/update_pasien" method="post">
                        <input name="id_daftar" value="<?php echo $queryPasienDetail->id_daftar ?>" type="hidden">
                    <div class="form-group">
                        <label for="">Desa</label>
                        <input name="desa" value="<?php echo $queryPasienDetail->desa ?>" class="form-control" type="text" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input name="kecamatan" value="<?php echo $queryPasienDetail->kecamatan ?>" class="form-control" type="text" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Faskes</label>
                        <select name="jenis_faskes" class="form-control" type="text" autocomplete="off" required>
                            <option value="">--Jenis Faskes --</option>
                            <option value="Pukesmas" <?php if($queryPasienDetail->jenis_faskes == "Pukesmas") : echo "selected"; endif; ?>>Puskesmas</option>
                            <option value="Klinik" <?php if($queryPasienDetail->jenis_faskes == "Klinik") : echo "selected"; endif; ?>>Klinik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input name="nik" value="<?php echo $queryPasienDetail->nik ?>" class="form-control" type="number" autocomplete="off" required>
                    </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input name="nama" value="<?php echo $queryPasienDetail->nama ?>" class="form-control" type="text" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" class="form-control" type="text" autocomplete="off" required>
                        <option value="">--Jenis Kelamin --</option>
                        <option value="Laki-laki" <?php if($queryPasienDetail->jk == "Laki-laki") : echo "selected"; endif; ?>>Laki-Laki</option>
                        <option value="Perempuan" <?php if($queryPasienDetail->jk == "Perempuan") : echo "selected"; endif; ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                        <label for="">Umur</label>
                        <input name="umur" value="<?php echo $queryPasienDetail->umur ?>" class="form-control" type="number" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input name="tgl_lahir" value="<?php echo $queryPasienDetail->tgl_lahir ?>" class="form-control" type="date" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">No. HP</label>
                    <input name="nohp" value="<?php echo $queryPasienDetail->nohp ?>" class="form-control" type="number" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input name="alamat" value="<?php echo $queryPasienDetail->alamat ?>" class="form-control" type="text" autocomplete="off" required>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-lg btn-success col-md-6 col-sm-6" type="submit">Ubah</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <!-- <button class="btn btn-lg btn-info col-md-6 col-sm-6" type="">Batal</button> -->
                            <a href="<?=base_url('admin/pasien')?>" class="btn btn-lg btn-info col-md-6 col-sm-6" role="button">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php if($this->session->flashdata('gagal')) : ?>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: 'Peringatan',
        text: 'Data NIK Telah digunakan',
        showConfirmButton: false,
        timer: 6000
        })
    </script>
<?php endif; ?>

<script>
     $(function() {
      $("form[name='pasien_baru_form_edit']").validate({
        rules: {
            desa: "required",
          kecamatan: {
            required: true,
          },
          jenis_faskes: "required",
          nik: "required",
          nama: "required",
          jk: "required",
          umur: "required",
          tgl_lahir: "required",
          nohp: "required",
          alamat: "required",
        },
        messages: {
            desa: "<span style='color: red;'>Nama desa tidak boleh kosong</span>",
          kecamatan: "<span style='color: red;'>Nama kecamatan tidak boleh kosong</span>",
          jenis_faskes: "<span style='color: red;'>Jenis Faskes tidak boleh kosong</span>",
          nik: "<span style='color: red;'>NIK tidak boleh kosong</span>",
          nama: "<span style='color: red;'>Nama tidak boleh kosong</span>",
          jk: "<span style='color: red;'>Jenis kelamin tidak boleh kosong</span>",
          umur: "<span style='color: red;'>Umur tidak boleh kosong</span>",
          tgl_lahir: "<span style='color: red;'>Tanggal lahir tidak boleh kosong</span>",
          nohp: "<span style='color: red;'>Nomor HP tidak boleh kosong</span>",
          alamat: "<span style='color: red;'>Alamat tidak boleh kosong</span>",
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
</script>