@extends('admin/layout/app')
@section('title', ' Blog List')

@section('content')
        <div class="content">
         
                   @if (session('status'))
                      <div class="alert alert-success kingfont">
                       {{ session('status') }}
                      </div>
                    @endif
                    @if (session('deletesms'))
                      <div class="alert alert-danger kingfont">
                       {{ session('deletesms') }}
                      </div>
                    @endif

            <div class="row mb-4 gx-6 gy-3 align-items-center">
              <div class="col-auto">
                
                <h2 class="mb-0">Blogs<span class="fw-normal text-700">(32)</span></h2>
              </div>
              <div class="col-auto">
            <a class="btn btn-primary px-5" href="{{url('admin/create-new-blog')}}" role="button">Create New Blog</a>
            </div>
            </div>
            <div class="row g- justify-content-between align-items-end mb-4">
              <div class="col-12 col-sm-auto">
                <ul class="nav nav-links mx-n3">
                  <li class="nav-item"><a class="nav-link pe-2 py-0 active" aria-current="page" href="#">All <span class="text-700 fw-semi-bold">(32)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Ongoing <span class="text-700 fw-semi-bold">(14)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Cancelled<span class="text-700 fw-semi-bold">(2)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Finished<span class="text-700 fw-semi-bold">(14)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Postponed<span class="text-700 fw-semi-bold">(2)</span></a></li>
                </ul>
              </div>
             
            </div>
            <div class="table " style="">
             <table id="example" class="table table-striped  " style="width:100%">
        <thead>
            <tr>
              @php $i=1;@endphp

                <th>#</th>
                <th>Blog Title</th>
                <th>Category</th>
                <th>Featured Image</th>
                <th>Pulish  date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($allblogs as $blogs)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ $blogs->blogtitle }}</td>
                <td>{{ $blogs->category }}</td>
                <td><img src="/featuredimage/{{ $blogs->featuredimage }}" width="40px" height="40px" style="border-radius:100px"></td>
                <td> {{ date("d/M/Y", strtotime($blogs->created_at)) }} </td>
                <td ><button type="button" class="btn btn-outline-success">Active</button></td>
                <td>
                  <a class="btn btn-primary" href="/admin/edit/{{$blogs->id }}" role="button">Edit</a>
                  <a class="btn btn-warning" href="view/{{ $blogs->id }}" role="button">View</a>
                  <a class="btn btn-danger" href="/admin/delete/{{ $blogs->id }}" role="button">Delete</a>
                  

                 </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
            </div>
            
               
          @endsection