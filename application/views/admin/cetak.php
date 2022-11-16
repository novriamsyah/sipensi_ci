
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            <i class="fa fa-user"></i> Data Pasien
        </h1>
        <hr />
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <div class="form-group" style="margin-bottom: 50px">
                    </div>
                    <table class="table table-striped table-hover table-bordered bg-white" id="tabelpasien1" style="background-color:#ffffff">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Pasien</td>
                                <td>NIK</td>
                                <td>Jenis Kelamin</td>
                                <td>Umur</td>
                                <td>No. HP</td>
                                <td>Alamat</td>
                                <td>Desa</td>
                                <td>Jenis Faskes</td>
                                <td>Pilih</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $number = 0;
                                    foreach($queryAllData as $data) {

                                    $number = $number + 1;
                                       
                                ?>
                            <td><?php echo $number ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td><?php echo $data->nik ?></td>
                            <td><?php echo $data->jk ?></td>
                            <td><?php echo $data->umur ?></td>
                            <td><?php echo $data->nohp ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->desa ?></td>
                            <td><?php echo $data->jenis_faskes ?></td>
                            <td class="text-center">
                            <a class="btn btn-info" target="_blank" href="<?=base_url('admin/cetak/pdf_cetak')?>/<?php echo $data->id_daftar ?>" role="button" >Cetak</a>
                            </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                    </table>
            </div>
        </div>
    </section>
</div>

<script>
    function hapus_konfirmasi(event) {
        Swal.fire({
            title: 'Konfirmasi Hapus !',
            text: 'Apakah kamu yakin untuk menghapus data ini',
            icon: 'warning',
            customClass: 'lebar_swal',
            showCancelButton: true,
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Hapus',
            confirmButtonColor: 'red'
        }).then(dialog => {
            if (dialog.isConfirmed){
                window.location.assign(event.dataset.deleteUrl);
            }
        });
    }
</script>

<?php if($this->session->flashdata('berhasil')) : ?>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Selamat',
        text: 'Data berhasil ditambahkan',
        showConfirmButton: false,
        timer: 5000
        })
    </script>
<?php endif; ?>

<?php if($this->session->flashdata('dihapus')) : ?>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Selamat',
        text: 'Data berhasil dihapus',
        showConfirmButton: false,
        timer: 5000
        })
    </script>
<?php endif; ?>

<?php if($this->session->flashdata('diubah')) : ?>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Selamat',
        text: 'Data berhasil diubah',
        showConfirmButton: false,
        timer: 5000
        })
    </script>
<?php endif; ?>
