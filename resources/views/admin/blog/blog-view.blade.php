@extends('admin/layout/app')
@section('title', ' Create New Blog')
@section('content')
        <div class="content">

<div class="container text-center pb-5"><h1> View Blog</h1></div>

         
 <div class="table " style="">
           
        @foreach ($blog as $blogs)
                <div class="container-fluid">
                <h3>{{ucfirst($blogs->blogtitle)}}</h3>
                <p>{!! $blogs->description  !!}</p>

                </div>
           
        @endforeach
</div>



  @endsection