<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Buku Online</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
  </head>
  <body>

    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-end">
            <a href="<?= base_url() ?>chart" class="btn btn-secondary">Keranjang belanja <span class="badge text-bg-warning">4</span></a>
            </div>
        </div>
    </div>

    <?= $this->renderSection('main') ?>

    <footer class="bg-danger-subtle py-3">
        <div class="container">
            Copyright 2024. Toko Buku Online Kelas B. All Rights reserved.
        </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
