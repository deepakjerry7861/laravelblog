@extends('admin/layout/app')
@section('title', ' Add Category')
@section('content')
        <div class="content">
          
          <h2 class="mb-4">Add Category</h2>
          <div class="row">
            <div class="col-xl-9">
     

            <form class="row g-3 mb-6" action="{{url('admin/save-category')}} " method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 col-md-8">
                  <div class="form-floating">
                    <input class="form-control @error('category') is-invalid @enderror" name="category" id="floatingInputGrid" 
                    type="text" value="{{old('category')}}" placeholder="Blog title" required />
                    @error('category')
                  <p>This field Required 😡</p>
                       @enderror     
                    <label for="floatingInputGrid">Blog Title</label></div>
                </div>
               
                              
               <div class="col-12">
                  <div class="row g-3">
                  <div class="col-4"><button type="submit" class="btn btn-lg  btn-primary px-5">Add Category</button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
         

         <div class=" container table " style="">
             <table id="example" class="table table-striped text-center " >
        <thead>
            <tr>
              @php $i=1;@endphp

                <th>#</th>
                <th>Blog Title</th>
                <th>Category</th>
                
            </tr>
        </thead>
        <tbody>
          @foreach ($category as $blogs)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$blogs->category }}</td>
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