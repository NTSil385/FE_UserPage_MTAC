<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('guestPage.welcome');
    }

    // BLOG
    public function blog()
    {
        return view('guestPage.view-blog.blog');
    }
    public function blogDetail()
    {
        return view('guestPage.view-blog.blogdetail');
    }

    public function blogVideo()
    {
        return view('guestPage.view-blog.blogvideo');
    }

    // PROJECT
    public function project()
    {
        return view('guestPage.view-project.project');
    }

    public function projectGallery()
    {
        return view('guestPage.view-project.projectgallery');
    }

    // LIBRARY

    public function library()
    {
        return view('guestPage.view-lib.library');
    }

    public function legalDoc()
    {
        return view('guestPage.view-lib.legal');
    }

    public function detailsLib()
    {
        return view('guestPage.view-lib.libraryDetail');
    }

    
    public function quotation()
    {
        return view('guestPage.view-quotation.quotation');
    }









}
