<div class="container text-center">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['guru']['nama_kakomli'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['guru']['jum_siswa'];?></h6>
        <p class="card-text"><?= $data['guru']['komli'];?></p>
        <p class="card-text"><?= $data['guru']['tgl_berdiri'];?></p>
        <a href="<?=BASE_URL;?>/siswa" class="btn btn-primary card-link"></button>kembali</a>
    </div>
    </div>
</div>