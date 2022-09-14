<?php
class Blog_model {
    private $blog = [
        [
            "penulis" => "Muhammad Zaitun Rohmat Sanjaya",
            "judul" => "Belajar phpmvc",
            "tulisan" => "Models"
        ],
        [
            "penulis" => "Muhammad Zaitun Rohmat Sanjaya",
            "judul" => "Belajar phpmvc",
            "tulisan" => "Views"
        ],
        [
            "penulis" => "Muhammad Zaitun Rohmat Sanjaya",
            "judul" => "Belajar phpmvc",
            "tulisan" => "Controller"
        ]
        ];
        public function getAllBlog()
        {
            return $this->blog;
        }
}