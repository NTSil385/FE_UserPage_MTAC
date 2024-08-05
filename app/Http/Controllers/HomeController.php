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
        return view('blog');
    }
    public function blogDetail()
    {
        return view('blogdetail');
    }

    public function blogVideo()
    {
        return view('blogvideo');
    }

    // PROJECT
    public function project()
    {
        return view('project');
    }

    public function projectGallery()
    {
        return view('projectgallery');
    }

    // LIBRARY

    public function library()
    {
        return view('library');
    }

    public function legalDoc()
    {
        return view('legal');
    }

    public function detailsLib()
    {
        return view('libraryDetail');
    }

    
    public function quotation()
    {
        return view('quotation');
    }









}
