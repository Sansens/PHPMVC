<?php
class Siswa extends Controller {
    public function index()
    {
        $data['judul'] = "Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllBlogById($id);
        $this->view('templates/header', $data);
        $this->view('datasiswa/index', $data);
        $this->view('templates/footer');
    }
}