<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Naufal Zul Faza', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'Author' => 'Naufal Zul Faza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Expedita voluptate perspiciatis corporis, ipsam necessitatibus,
            nulla culpa eveniet aperiam cupiditate fugiat natus accusamus officiis minima sunt placeat amet tempore ut est?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'Author' => 'Naufal Zul Faza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Expedita voluptate perspiciatis corporis, ipsam necessitatibus,
            nulla culpa eveniet aperiam cupiditate fugiat natus accusamus officiis minima sunt placeat amet tempore ut est?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'Author' => 'Naufal Zul Faza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Expedita voluptate perspiciatis corporis, ipsam necessitatibus,
            nulla culpa eveniet aperiam cupiditate fugiat natus accusamus officiis minima sunt placeat amet tempore ut est?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'Author' => 'Naufal Zul Faza',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Expedita voluptate perspiciatis corporis, ipsam necessitatibus,
            nulla culpa eveniet aperiam cupiditate fugiat natus accusamus officiis minima sunt placeat amet tempore ut est?'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
