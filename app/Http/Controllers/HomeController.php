<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    // BLOG
    public function blog()
    {
        return view('view-blog.blog');
    }
    public function blogDetail()
    {
        return view('view-blog.blogdetail');
    }

    public function blogVideo()
    {
        return view('view-blog.blogvideo');
    }

    // PROJECT
    public function project()
    {
        return view('view-project.project');
    }

    public function projectGallery()
    {
        return view('view-project.projectgallery');
    }

    // LIBRARY

    public function library()
    {
        return view('view-lib.library');
    }

    public function legalDoc()
    {
        return view('view-lib.legal');
    }

    public function detailsLib()
    {
        return view('view-lib.libraryDetail');
    }

    
    public function quotation()
    {
        return view('view-quotation.quotation');
    }









}
