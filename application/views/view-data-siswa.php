<html>

<head>
    <title>Tampil Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <div class="container">
        <h2>Tampil Data Siswa</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="no">1</td>
                    <td id="nama"><?= $nama; ?></td>
                    <td id="nis"><?= $nis; ?></td>
                    <td id="kelas"><?= $kelas; ?></td>
                    <td id="tgl_lhr"><?= $tgl_lhr; ?></td>
                    <td id="tmpt_lhr"><?= $tmpt_lhr; ?></td>
                    <td id="alamat"><?= $alamat; ?></td>
                    <td id="jk"><?= $jk; ?></td>
                    <td id="agama"><?= $agama; ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a class="btn" href="<?= base_url('siswa'); ?>">Kembali</a>
    </div>

</body>

</html>