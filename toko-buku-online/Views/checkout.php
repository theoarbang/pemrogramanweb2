<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container">
    <h2>Review Order</h2>
    <hr />
    <h5>Bumi Manusia</h5> @1
    <h5>Rp45,000</h5>

    <h2 class="mt-3">Alamat pengiriman</h2>
    <hr />
    <h5>Jl. Muaro Jambi - Muaro Bulian KM 16, Sungai Duren.</h5>

    <h2 class="mt-3">Metode Bayar</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BCA James Bond</h5>
    <h5>Rek. 1122334455</h5>

    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
            <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>