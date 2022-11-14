<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            Ubah Stok Vaksin
        </h1>
        <hr />
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <form name="stok_baru_form" action="<?php echo base_url();?>admin/stok/simpan_stok" method="post">

                <div class="form-group">
                        <label for="">Jenis Vaksin</label>
                        <select name="jenis_vaksin" class="form-control" type="text" autocomplete="off" required>
                            <option value="">--Pilih Jenis Vaksin --</option>
                            <option value="Astrazeneca">Astrazeneca</option>
                            <option value="Pfizer">Pfizer</option>
                            <option value="Moderna">Moderna</option>
                            <option value="Spurnik V">Spurnik V</option>
                            <option value="Sinopharm">Sinopharm</option>
                            <option value="Sinovac">Sinovac</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="">Jumlah</label>
                        <input name="jumlah" class="form-control" type="number" autocomplete="off" required>
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
                            <a href="<?=base_url('admin/stok')?>" class="btn btn-lg btn-info col-md-6 col-sm-6" role="button">Kembali</a>
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
      $("form[name='stok_baru_form']").validate({
        rules: {
          jenis_vaksin: "required",
          jumlah: "required",
        },
        messages: {
            jenis_vaksin: "<span style='color: red;'>Jenis vaksin tidak boleh kosong</span>",
            jumlah: "<span style='color: red;'>Jumlah tidak boleh kosong</span>",
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
</script>