<?php


namespace App\classes;


class FileUpload
{
    protected $img;
    protected $imgName;
    protected $directory;

    public function __construct($post = null)
    {
        if ($post){
            $this->img = $post;
        }
    }
    public function index()
    {
        $this->imgName = $_FILES['image']['name'];
        $this->directory = 'assets/img/upload/'.$this->imgName;
        move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);
        return 'Data Stored Successfully';
    }
}