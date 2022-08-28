<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
            Ketersediaan Stock Vaksin
        </h1>
        <hr />
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <a class="btn btn-lg btn-success" href="<?=base_url('admin/stok/ubah_stok')?>" role="button">Ubah Stok</a> 
            </div>
                <table class="table table-striped table-hover table-bordered bg-white" style="background-color: #ffffff;">
                <thead>
                    <tr>
                        <td>Astrazeneca</td>
                        <td>Pfizer</td>
                        <td>Moderna</td>
                        <td>Spurnik V</td>
                        <td>Sinopharm</td>
                        <td>Sinovac</td>
                    </tr>
                </thead>   
                <tbody>
                    <tr>
                    <td><?php echo $queryAllData[0]->jumlah ?></td>
                    <td><?php echo $queryAllData[1]->jumlah ?></td>
                    <td><?php echo $queryAllData[2]->jumlah ?></td>
                    <td><?php echo $queryAllData[3]->jumlah ?></td>
                    <td><?php echo $queryAllData[4]->jumlah ?></td>
                    <td><?php echo $queryAllData[5]->jumlah ?></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php if($this->session->flashdata('diubah')) : ?>
    <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Selamat',
        text: 'Data stok berhasil diubah',
        showConfirmButton: false,
        timer: 5000
        })
    </script>
<?php endif; ?>