<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">SANJAYA_SMKN 2</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/blog">Komli</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/guru">Data Guru</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/datasiswa">Data Siswa</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
        </div>
      </div>
    </div>
  </nav>