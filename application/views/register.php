<html>

<head>
    <meta charset="utf-8">
    <title>Login | Batik Sumba</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquaery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
    <style>
        .login-container {
            width: 530px;
            height: 900px;
        }
    </style>
</head>

<body style="background-image: url('<?php echo base_url(); ?>assets/img/bg.png'); background-size: cover;>
    <div class=" container positioncenter">
    <div class="login-container">
        <p>
        <h5><b>Pendaftaran Akun</h5>
        </p>
        <div id="output"></div>
        <div class="form-box">
            <form action="<?php echo base_url(); ?>login/aksi_login" method="post">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input name="namalengkap" class="form-control" type="text" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input name="tgl_lahir" class="form-control" type="date" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" class="form-control" type="text" autocomplete="off" required>
                        <option value="">--Jenis Kelamin --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">No. HP</label>
                    <input name="HP" class="form-control" type="text" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input name="alamat" class="form-control" type="text" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="username" class="form-control" type="text" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input name="password" class="form-control" type="password" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="">Ulangi Password</label>
                    <input name="ulangipassword" class="form-control" type="password" autocomplete="off" required>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-lg btn-success col-md-6 col-sm-6" type="submit">Daftar</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-lg btn-info col-md-6 col-sm-6" type="reset">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <h2><?php echo $this->session->flashdata('message'); ?></h2> <?php echo $this->session->flashdata('message'); ?>
    </div>
    </div>

</body>
<script src="<?php echo base_url(); ?>/assets/other/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/datatables/datatables.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/pages/dashboard2.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>/assets/other/bs-confirmation-master/bootstrap-confirmation.min.js"></script>

</html>