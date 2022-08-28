<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
        <i class="fa fa-calendar"></i> Data Jadwal
        </h1>
        <hr />
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <div class="form-group" style="margin-bottom: 30px;">
                    <a class="btn btn-lg btn-success" href="<?=base_url('admin/jadwal/tambah_jadwal')?>" role="button">Tambah Jadwal</a>
                            <!-- <button class="btn btn-lg btn-success" type="submit">Tambah Jadwal</button> -->
                        </div>
                        <table class="table table-striped table-hover table-bordered bg-white" id="tabelpasien2" style="background-color: #ffffff;">
                            <thead>
                            <tr>
                                <td>No</td>
                                <td>ID Jadwal</td>
                                <td>Jam Mulai</td>
                                <td>Jam Tutup</td>
                                <td>Hari</td>
                                <td>Nama Faskes</td>
                                <td>Pilih</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php
                                    $number = 0;
                                    foreach($all_jadwal as $data) {

                                    $number = $number + 1;
                                       
                                ?>
                            <td><?php echo $number ?></td>
                            <td><?php echo $data->id_jadwal ?></td>
                            <td><?php echo $data->jam_mulai ?></td>
                            <td><?php echo $data->jam_tutup ?></td>
                            <td><?php echo $data->hari ?></td>
                            <td><?php echo $data->jenis_faskes ?></td>
                            <td>
                                <a class="btn btn-info" href="<?=base_url('admin/jadwal/edit_jadwal')?>/<?php echo $data->id ?>" role="button">EDIT</a>
                                <a href="#" class="btn btn-danger" data-delete-url="<?=base_url('admin/jadwal/hapus_jadwal')?>/<?php echo $data->id ?>" role="button" onclick="hapus_konfirmasi(this)">Hapus</a>
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