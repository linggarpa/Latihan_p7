<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <div class="register">
        <div class="title">Form Input Siswa</div>
        <div class="content_regis">
            <form action="<?= base_url('siswa/cetak'); ?>" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap " required>
                    </div>
                    <div class="input-box">
                        <span class="details">NIS</span>
                        <input type="number" name="nis" placeholder="Masukkan NIS" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Kelas</span>
                        <input type="text" name="kelas" placeholder="Masukkan Kelas" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tanggal Lahir</span>
                        <input type="date" name="tgl_lhr" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tempat Lahir</span>
                        <input type="text" name="tmpt_lhr" placeholder="Masukkan Tempat Lahir" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat</span>
                        <input type="text" name="alamat" placeholder="Masukkan Alamat Anda" required>
                    </div>
                </div>
                <div class="jekel-details">
                    <input type="radio" name="jk" value="Laki-Laki" id="jk-1">
                    <input type="radio" name="jk" value="Perempuan" id="jk-2">
                    <span class="jekel-title">Jenis Kelamin</span>
                    <div class="category">
                        <label for="jk-1" style="margin-right: 10px">
                            <span class="jk one"></span>
                            <span class="jekel">Laki-Laki</span>
                        </label>
                        <label for="jk-2">
                            <span class="jk two"></span>
                            <span class="jekel">Perempuan</span>
                        </label>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Agama</span>
                        <select class="sl_agama" name="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>