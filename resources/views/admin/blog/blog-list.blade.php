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
                
                <h2 class="mb-0">Blogs<span class="fw-normal text-700">( @php echo $all;@endphp)</span></h2>
              </div>
              <div class="col-auto">
            <a class="btn btn-primary px-5" href="{{url('admin/create-new-blog')}}" role="button">Create New Blog</a>
            </div>
            </div>
            <div class="row g- justify-content-between align-items-end mb-4">
              <div class="col-12 col-sm-auto">
                
            <ul class="nav nav-links mx-n3">
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Hollywood<span class="text-700 fw-semi-bold">(@php echo $hollywood;@endphp)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Explore<span class="text-700 fw-semi-bold">(@php echo $explore;@endphp)</span></a></li>
                 
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Tranding<span class="text-700 fw-semi-bold">(@php echo $tranding;@endphp)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Job<span class="text-700 fw-semi-bold">
                  (@php echo $job;@endphp)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-0" href="#">Bollywood<span class="text-700 fw-semi-bold">(@php echo $bollywood;@endphp)</span></a></li>
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

               <td>
                <div class="form-check form-switch">
                <input data-id="{{$blogs->id}}" class="form-check-input statuscheck" type="checkbox" role="switch" id="flexSwitchCheckChecked{{$blogs->id }}" {{ $blogs->status ? 'checked' : '' }} >
              <label class="form-check-label" for="flexSwitchCheckChecked{{$blogs->id }}"></label>   </div>            
                </td>
                <td>
                  <a class="btn btn-primary" href="/admin/edit/{{$blogs->id }}" role="button">Edit</a>
                  <a class="btn btn-warning" href="/admin/blog-view/{{ $blogs->id }}" role="button">View</a>
                  <a class="btn btn-danger" href="/admin/delete/{{ $blogs->id }}" role="button">Delete</a>
                  

                 </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>  
              
        </tfoot>
    </table>
            </div>
            
               
          @endsection