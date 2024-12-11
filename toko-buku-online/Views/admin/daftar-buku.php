<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5">Daftar Buku</h2>

<div class="mb-3">
    <a href="<?= base_url('admin/daftar-buku/tambah')?>" class="btn btn-primary">Tambah Buku</a>
</div>

<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Cover</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Social Intelligent</td>
                <td>Daniel Golemant</td>
                <td>Gramedia</td>
                <td>2024</td>
                <td>
                    <img src="<?= base_url('images/buku1.jpg')?>" alt="" style="width: 150px; height: auto;">
                </td>
                <td>
                    Rp150.000
                </td>
                <td>
                    <a href="<?= base_url('admin/daftar-buku/edit')?>" class="btn btn-success">Edit</a>
                    <a href="<?= base_url('admin/daftar-buku/hapus')?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>