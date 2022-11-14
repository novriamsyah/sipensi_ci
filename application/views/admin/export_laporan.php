<table>
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
