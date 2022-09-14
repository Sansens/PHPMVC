<?php

class Guru extends Controller {
    public function index()
    {
        $data['judul'] = "Guru";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}