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
                      <option selected="selected">Uncategorized</option>
                      <option value="Travel">Travel</option>
                       <option value="Technical">Technical</option>
                      <option value="Sports">Sports</option>
                      <option value="Education">Education</option>
                      <option value="Bollywood">Bollywood</option>
                    </select><label for="floatingSelectTask">Category</label></div>
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
                    <textarea class="form-control col-sm-6 col-md-4 @error('blogtitle') is-invalid @enderror" 
                    id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px"  
                    name="description"></textarea>
                     @error('description')
                  <p>This field Required 😡</p>
                    @enderror
                    </div>
                </div>
               <div class="col-12 text-end">
                  <div class="row g-3">
                    <div class="col-8"><button type="submit" class="btn btn-lg btn-phoenix-primary px-5">Cancel</button></div>
                    <div class="col-4"><button class="btn btn-lg btn-primary w-100">Save</button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
           @endsection