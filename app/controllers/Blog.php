<?php

class Blog extends Controller {
    public function index()
    {
        $data['judul'] = "Blog";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }
    public function detailRPL()
    {
        $data['judul'] = "DetailRPL";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/detailRPL', $data);
        $this->view('templates/footer');
    }
    public function detailAKL()
    {
        $data['judul'] = "DetailAKL";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/detailAKL', $data);
        $this->view('templates/footer');
    }
    public function detailDPIB()
    {
        $data['judul'] = "DetailDPIB";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/detailDPIB', $data);
        $this->view('templates/footer');
    }
    public function detailKGSP()
    {
        $data['judul'] = "DetailKGSP";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/detailKGSP', $data);
        $this->view('templates/footer');
    }
    public function detailTB()
    {
        $data['judul'] = "DetailTB";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/detailTB', $data);
        $this->view('templates/footer');
    }
    public function detailTPTU()
    {
        $data['judul'] = "DetailTPTU";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/detailTPTU', $data);
        $this->view('templates/footer');
    }
    public function detailTP()
    {
        $data['judul'] = "DetailTP";
        $data['blog'] = $this->model("Blog_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/detailTP', $data);
        $this->view('templates/footer');
    }
}