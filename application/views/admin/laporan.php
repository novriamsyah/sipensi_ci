<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-center">
        <i class="fa fa-file"></i> Laporan Data Vaksinasi
        </h1>
        <hr />
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
            <form action="<?php echo base_url();?>admin/laporan/index" method="get">
            <div class="form-group">
                <label>Dari Tanggal</label>
                <input type="date" name="tgl_dari" class="form-control">            
            </div>
            <div class="form-group">
                <label>Selesai Tanggal</label>
                <input type="date" name="tgl_sampai" class="form-control">            
            </div>
            <div class="form-group">
                <button class="btn btn btn-primary btn-sm" type="submit">Cari Data</button>
            </div>
            </form>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <?php if(isset($_GET['tgl_dari'])){?>
                    <div class="text-right">
                        <a href="<?php echo base_url('admin/laporan/export?tgl_dari='.$_GET['tgl_dari'].'&tgl_sampai='.$_GET['tgl_sampai']);?>" class="btn btn btn-success btn-sm">Download Excel</a>
                    </div>
                <?php } ?>
            <br/>
            <table class="table table-striped table-hover bg-white" style="background-color: #ffffff;" id="tabelpasien">
                <thead>
                <tr>
                    <td><strong>No</strong></td>
                    <td><strong>Nama</strong></td>
                    <td><strong>NIK</strong></td>
                    <td><strong>Jenis Kelamin</strong></td>
                    <td><strong>Alamat</strong></td>
                    <td><strong>No.HP</strong></td>
                    <td><strong>Nama Faskes</strong></td>
                    <td><strong>tanggal Daftar</strong></td>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $number = 0;
                            foreach($hasil as $data) {

                            $number = $number + 1;
                                        
                        ?>
                            <td><?php echo $number ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td><?php echo $data->nik ?></td>
                            <td><?php echo $data->jk ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->nohp ?></td>
                            <td><?php echo $data->jenis_faskes ?></td>
                            <td><?php echo date('d-m-Y', strtotime($data->created_at)) ?></td>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </section>
</div>



