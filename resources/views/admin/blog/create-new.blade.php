@extends('admin/layout/app')
@section('title', ' Create New Blog')
@section('content')
        <div class="content">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
              <li class="breadcrumb-item active">Default</li>
            </ol>
          </nav>
          <h2 class="mb-4">Create a project</h2>
          <div class="row">
            <div class="col-xl-9">
              <form class="row g-3 mb-6">
                <div class="col-sm-6 col-md-8">
                  <div class="form-floating"><input class="form-control" id="floatingInputGrid" type="text" placeholder="Project title" /><label for="floatingInputGrid">Project title</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                      <option selected="selected">Select task view</option>
                      <option value="1">technical</option>
                      <option value="2">external</option>
                      <option value="3">organizational</option>
                    </select><label for="floatingSelectTask">Defult task view</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectPrivacy">
                      <option selected="selected">Select privacy</option>
                      <option value="1">Data Privacy One</option>
                      <option value="2">Data Privacy Two</option>
                      <option value="3">Data Privacy Three</option>
                    </select><label for="floatingSelectPrivacy">Project privacy</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectTeam">
                      <option selected="selected">Select team</option>
                      <option value="1">Team One</option>
                      <option value="2">Team Two</option>
                      <option value="3">Team Three</option>
                    </select><label for="floatingSelectTeam">Team </label></div>
                </div>

                <div class="col-sm-6 col-md-4">
                  <textarea>
     Welcome to TinyMCE!
  </textarea>
                </div>
                
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectAssignees">
                      <option selected="selected">Select assignees </option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select><label for="floatingSelectAssignees">People </label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectAdmin">
                      <option selected="selected">Select admin</option>
                      <option value="1">Data Privacy One</option>
                      <option value="2">Data Privacy Two</option>
                      <option value="3">Data Privacy Three</option>
                    </select><label for="floatingSelectAdmin">Project Lead</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><input class="form-control" id="floatingInputStartDate" type="date" placeholder="Project title" /><label for="floatingInputStartDate">Start date</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><input class="form-control" id="floatingInputDeadline" type="date" placeholder="Project title" /><label for="floatingInputDeadline">Deadline</label></div>
                </div>
                <div class="col-12 gy-6">
                  <div class="form-floating"><textarea class="form-control" id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px"></textarea><label for="floatingProjectOverview">project overview</label></div>
                </div>
                <div class="dropzone dropzone-multiple p-0 mb-5 dz-clickable dz-file-processing dz-file-complete" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                  
                  <div class="dz-preview d-flex flex-wrap"></div>
                  <div class="dz-message text-600" data-dz-message="data-dz-message"> Drag your photo here <span class="text-800">or </span><button class="btn btn-link p-0">Browse from device </button><br><img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="40" alt=""></div>
                </div>
                <div class="col-md-6 gy-6">
                  <div class="form-floating"><select class="form-select" id="floatingSelectAdmin">
                      <option selected="selected">Select admin</option>
                      <option value="1">Client One</option>
                      <option value="2">Client Two</option>
                      <option value="3">Client Three</option>
                    </select><label for="floatingSelectAdmin">client</label></div>
                </div>
                <div class="col-md-6 gy-6">
                  <div class="form-floating"><input class="form-control" id="floatingInputBudget" type="text" placeholder="Budget" /><label for="floatingInputBudget">Budget</label></div>
                </div>
                <div class="col-12 gy-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option value="">Add tags</option>
                    <option>Stupidity</option>
                    <option>Jerry</option>
                    <option>Not_the_mousie</option>
                    <option>Rick</option>
                    <option>Biology</option>
                    <option>Neurology</option>
                    <option>Brainlessness</option>
                  </select></div>
                <div class="col-12 text-end">
                  <div class="row g-3">
                    <div class="col-8"><button class="btn btn-lg btn-phoenix-primary px-5">Cancel</button></div>
                    <div class="col-4"><button class="btn btn-lg btn-primary w-100">Create project</button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
           @endsection