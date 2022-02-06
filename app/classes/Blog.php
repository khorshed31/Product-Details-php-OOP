<?php


namespace App\classes;


class Blog
{
    protected $blogs;

    public function getAllBlog(){

        return [
            0 => [
                'title'         => 'A new Blog',
                'description'   => 'Blog Description',
                'author'        => 'Khorshed',
                'image'         => '1.jpg'
            ],
            1 => [
                'title'         => 'Another Blog',
                'description'   => 'Blog Description',
                'author'        => 'Alom',
                'image'         => '2.jpg'
            ],
            2 => [
                'title'         => 'About Bangladesh',
                'description'   => 'Blog Description',
                'author'        => 'Emon',
                'image'         => '3.jpg'
            ],
        ];
    }

}