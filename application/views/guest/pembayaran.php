<?php if($this->session->flashdata('nomor') === null): ?>

<div class='container-fluid'>
    <div class='row justify-content-center my-3'>
        <div class='col-md-5 '>
        <div class='alert alert-danger'>
            <h4>Anda Telah Refresh Halaman !!</h4>
            <p>Silahkan Lakukan Pemesanan Kembali Jika Belum mendapat Kode Pembayaran</p>
        </div>
    </div>
</div>

<?php else: ?>

<div class='container-fluid'>
    <div class='row justify-content-center my-3'>
        <div class='col-md-5 '>
        <div class='alert alert-danger'>
            <h4 class='text-center'>PERINGATAN !!! <br> JANGAN REFRESH HALAMAN INI, UNTUK MENGHINDARI KEGAGALAN SISTEM <!DOCTYPE html>!</h4>
        </div>
            <div class='card'> 
                <div class='card-body'>
                    <h1 class='text-success'>Selamat!</h1>
                    <h3>Anda Berhasil Melakukan Pemesanan Tiket!</h3>
                    <hr>
                    <h5 class='text-danger text-center '>Silahkan Lakukan Pembayaran Sesuai Detail Berikut</h5>
                    <br>
                    <h3 class='text-center'>A0234567897658</h3>
                    <p class='text-center font-weight-bold mb-0'>a/n PT. Kereta Jatox tbk.</p>
                    <p class='text-center'>BNI Syariah Kode Bank : 002</p>

                    <hr>

                    <h5 class='text-center'>Total Yang Harus Dibayar</h5>
                    <h2 class='text-center'><?= $this->session->flashdata('total') ?></h2>
                    <br>
                    <h5 class='text-center'>Kode Pembayaran Anda</h5>
                    <h2 class='text-center'><?= $this->session->flashdata('nomor') ?></h2>
                    <br><br>
                    <h4 class='text-center'>TERIMA KASIH</h4>
                    <p class='text-danger'>*Jika Sudah Transfer Lakukan Konfirmasi Pembayaran pada link 
                        <a target="blank" href="<?= base_url('konfirmasi') ?>">Konfirmasi Pembayaran </a> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>