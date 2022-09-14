@extends('admin/layout/app')
@section('title', ' Blog List')
@section('content')
        <div class="content">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
              <li class="breadcrumb-item active">Default</li>
            </ol>
          </nav>
          <div id="projectSummary" data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
            <div class="row mb-4 gx-6 gy-3 align-items-center">
              <div class="col-auto">
                <h2 class="mb-0">Projects<span class="fw-normal text-700">(32)</span></h2>
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
              <div class="col-12 col-sm-auto">
                <div class="d-flex align-items-center">
                  <div class="search-box me-3">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search projects" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div><a class="btn btn-phoenix-primary px-3 me-2 border-0 text-900" type="button" href="project-list-view.html"><span class="fa-solid fa-list"></span></a><a class="btn btn-phoenix-primary px-3" type="button" href="project-card-view.html"><svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H3.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z" fill="#3874ff"></path>
                      <path d="M0 5.5C0 5.22386 0.223858 5 0.5 5H3.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z" fill="#3874ff"></path>
                      <path d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z" fill="#3874ff"></path>
                      <path d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z" fill="#3874ff"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="table-responsive scrollbar">
              <table class="table fs--1 mb-0 border-top border-200">
                <thead>
                  <tr>
                    <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="projectName" style="width:30%;">PROJECT NAME</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">ASSIGNESS</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="task" style="width:12%;">TASK</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="statuses" style="width:10%;">STATUS</th>
                    <th class="sort align-middle text-end" scope="col" style="width:10%;">ACTION</th>
                  </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="text-decoration-none fw-bold fs-0" href="#">Project Doughnut Dungeon</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                     3
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Nov 17, 2020</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">May 21, 2028</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">287</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">145 / 145</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs--2 badge-phoenix-success">completed</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="text-decoration-none fw-bold fs-0" href="#">Water resistant mosquito killer gun</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      8
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Mar 08, 2021</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Sep 15, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">125</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">148 / 223</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 66.3677130044843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs--2 badge-phoenix-warning">inactive</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="text-decoration-none fw-bold fs-0" href="#">Execution of Micky the foul mousie</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      3
        
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Nov 17, 2020</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Sep 23, 2026</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">72</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">277 / 539</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 51.39146567717996%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs--2 badge-phoenix-primary">ongoing</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="text-decoration-none fw-bold fs-0" href="#">Harnessing stupidity from Jerry</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                        85
                      </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 01, 2016</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Apr 04, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">91</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">169 / 394</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 42.89340101522843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs--2 badge-phoenix-danger">Critical</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="text-decoration-none fw-bold fs-0" href="#">Making the Butterflies shoot each other dead</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      22
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Dec 24, 2019</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 15, 2024</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">134</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">600 / 600</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs--2 badge-phoenix-primary">ongoing</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="text-decoration-none fw-bold fs-0" href="#">The chewing gum attack</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                     5
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Aug 4, 2018</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Oct 22, 2023</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">24</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">600 / 600</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary">Cancelled</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="text-decoration-none fw-bold fs-0" href="#">Olga Dies Dreaming by Xóchitl González</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      85
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 01, 2018</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 04, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">80</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">150 / 294</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 51.02040816326531%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs--2 badge-phoenix-danger">Critical</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs--1 border-bottom border-200">
              <div class="d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              </div>
              <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
              </div>
            </div>
          </div>
          @endsection