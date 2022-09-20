@extends('admin/layout/app')
@section('title', ' Create New Blog')
@section('content')
        <div class="content">
          
          <h2 class="mb-4">Create a new blog</h2>
          <div class="row">
            <div class="col-xl-9">
     

              <form class="row g-3 mb-6" action="{{url('/admin/save-create-new-blog')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 col-md-8">
                  <div class="form-floating">
                    <input class="form-control @error('blogtitle') is-invalid @enderror" name="blogtitle" id="floatingInputGrid" 
                    type="text" value="{{old('blogtitle')}}" placeholder="Blog title" />
                    @error('blogtitle')
                  <p>This field Required 😡</p>
                       @enderror     
                    <label for="floatingInputGrid">Blog Title</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating">
                    <select class="form-select" name="category" id="floatingSelectTask">
                      @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->category}}</option>
                      @endforeach
                    </select>
                    <label for="floatingSelectTask">Category</label></div>
                </div>
                 <div class="mb-3">
                  <label class="form-label"  >Upload Image</label>
                 <input class="form-control @error('blogtitle') is-invalid @enderror" type="file"  value="{{old('blogtitle')}}" name="featuredimage" id="file" onchange="loadFile(event)"  />
                 @error('featuredimage')
                  <p>This field Required 😡</p>
                    @enderror
                 <p><img id="output" width="200" /></p>
                </div>
                <div class="col-12 gy-6">
                  <div class="form-floating">
                    <label for="floatingProjectOverview">project overview</label>
                    <textarea class="form-control col-sm-6 col-md-4 @error('description') is-invalid @enderror" 
                    id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px"  
                    name="description"> </textarea>
                     @error('description')
                  <p>This field Required 😡</p>
                    @enderror
                    </div>
                </div>
               <div class="col-12 text-end">
                  <div class="row g-3">
                    <div class="col-8"><button type="submit" class="btn btn-lg btn-phoenix-primary px-5">Cancel</button></div>
                    <div class="col-4"><button class="btn btn-lg btn-primary w-100">Publish</button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
           <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });

var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};

  </script>
           @endsection