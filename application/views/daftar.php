<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url(); ?>assets/home/img/favicon.png" sizes="16x16" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Daftar | Aset Academy</title>
  </head>
  <body>

    <main>
      <section class="form">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-lg-8">
              <div class="card">
                <a class="back" href="<?php echo site_url(''); ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                <div class="card-body pt-4">
                  <form role="form" method="post" action="<?php echo base_url().'home/tambah'; ?>">
                    <h3>Daftar</h3>
                    <p>Silahkan Isi Form Pendaftaran Untuk melanjutkan</p>
                    <div class="mb-3 mt-4">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required="">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email Aktif" name="email" required="">
                    </div>
                    <div class="mb-3">
                      <label for="hp" class="form-label">No HP</label>
                      <input type="number" class="form-control" id="hp" placeholder="WA/Telegram" name="no" required="">
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Alamat Tinggal" name="alamat" required="">
                    </div>
                    <div class="mb-3">
                      <label for="alasan" class="form-label">Alasan</label>
                      <textarea class="form-control" id="alasan" rows="3" placeholder="Alasan Kamu Bergabung" name="alasan" required=""></textarea>
                    </div>
                    <div class="d-grid gap-2 mt-5">
                      <button class="btn btn-primary"  type="submit">Daftar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/main.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
