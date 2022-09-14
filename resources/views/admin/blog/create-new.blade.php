@extends('admin/layout/app')
@section('title', ' Create New Blog')
@section('content')
        <div class="content">
          
          <h2 class="mb-4">Create a new blog</h2>
          <div class="row">
            <div class="col-xl-9">
              <form class="row g-3 mb-6">
                <div class="col-sm-6 col-md-8">
                  <div class="form-floating"><input class="form-control" id="floatingInputGrid" type="text" placeholder="Blog title" /><label for="floatingInputGrid">Blog Title</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                      <option selected="selected">uncategorized</option>
                      <option value="1">Travel</option>
                       <option value="2">Technical</option>
                      <option value="3">Sports</option>
                      <option value="3">Education</option>
                      <option value="3">Bollywood</option>
                    </select><label for="floatingSelectTask">Category</label></div>
                </div>

                 <div class="mb-3">
                  <label class="form-label"  >Upload Image</label>
                 <input class="form-control" type="file"  name="image" id="file" onchange="loadFile(event)"  />
                 <p><img id="output" width="200" /></p>
                </div>
                <div class="col-12 gy-6">
                  <div class="form-floating">

                    <label for="floatingProjectOverview">project overview</label>
                    <textarea class="form-control col-sm-6 col-md-4" id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px"></textarea>
                    </div>
                </div>
              
                <div class="col-12 text-end">
                  <div class="row g-3">
                    <div class="col-8"><button class="btn btn-lg btn-phoenix-primary px-5">Cancel</button></div>
                    <div class="col-4"><button class="btn btn-lg btn-primary w-100">Save</button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
           @endsection