@extends('layouts.client')
@section('content')
  <link rel="stylesheet" href="{{ asset('/home/css/lib.css') }}">   
  <link rel="stylesheet" href="{{asset('./home/dflip/css/dflip.min.css')}}">
  <link rel="stylesheet" href="{{asset('./home/dflip/css/themify-icons.min.css')}}">
  <div class="body">
      <div class="row">
        <div class="container-header">
          <img width="1900px" height="550px" src="{{asset('./home/img/lib.png')}}" alt="hinh-anh-doi-tac">
        </div>
      </div>
        <div class="row"  style="margin-top: 10px; font-size: 22px; font-weight: 500; text-align: center;" >
            <div class="title">[Sổ Tay] Chương trình Trường Học Xanh: đồng hành cùng Nhà trường xây dựng trường học thân thiện, bền vững </div>
        </div>
      <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
            <div class="_df_book" height=700 source="{{asset('./home/file/filetest.pdf')}}"></div>
      </div>
        
    </div>
   
@endsection