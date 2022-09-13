@extends('admin/layout/app')
@section('title', ' Admin Page')
@section('content')

        <div class="content pt-5">
          <div class="row gy-3 mb-6 justify-content-between">
            <div class="col-md-9 col-auto">
              <h2 class="mb-2 text-1100">Projects Dashboard</h2>
              <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
            </div>
            <div class="col-md-3 col-auto">
              <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="fa-regular fa-calendar-alt flatpickr-icon" style="top: 0.6rem;"></span></div>
            </div>
          </div>
          <div class="row mb-3 gy-6">
            <div class="col-12 col-xxl-2">
              <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                  <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-500"></span>
                    <div class="ms-2">
                      <h2 class="mb-0">32<span class="fs-1 fw-semi-bold text-900 ms-2">Projects</span></h2>
                      <p class="text-800 fs--1 mb-0">Awating processing</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                  <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-users-alt text-success-500"></span>
                    <div class="ms-2">
                      <h2 class="mb-0">94<span class="fs-1 fw-semi-bold text-900 ms-2">Members</span></h2>
                      <p class="text-800 fs--1 mb-0">Working hard</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                  <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-500"></span>
                    <div class="ms-2">
                      <h2 class="mb-0">23<span class="fs-1 fw-semi-bold text-900 ms-2">Invoices</span></h2>
                      <p class="text-800 fs--1 mb-0">Soon to be cleared</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                  <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
                    <div class="ms-2">
                      <h2 class="mb-0">3<span class="fs-1 fw-semi-bold text-900 ms-2">Refunds</span></h2>
                      <p class="text-800 fs--1 mb-0">Fresh start</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-5">
              <div class="mx-xxl-0">
                <h3>Project: zero Roadmap</h3>
                <p class="text-700">Phase 2 is now ongoing</p>
                <div class="gantt-zero-roadmap">
                  <div class="row g-2 flex-between-center mb-3">
                    <div class="col-12 col-sm-auto">
                      <div class="d-flex">
                        <div class="d-flex align-items-end me-3"><label class="form-check-label mb-0 me-2 lh-1" for="flexSwitchCheckChecked">Progress</label>
                          <div class="form-check form-switch min-h-auto mb-0"><input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked="" data-gantt-progress="data-gantt-progress" /></div>
                        </div>
                        <div class="d-flex align-items-end flex-1"><label class="form-check-label mb-0 me-2 lh-1" for="flexSwitchCheckChecked">Links</label>
                          <div class="form-check form-switch min-h-auto flex-1 mb-0"><input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked="" data-gantt-links="data-gantt-links" /></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-auto">
                      <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale"><input class="btn-check" id="weekView" type="radio" name="scaleView" autocomplete="off" value="week" checked="" /><label class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="weekView">Week</label><input class="btn-check" id="monthView" type="radio" name="scaleView" value="month" autocomplete="off" /><label class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="monthView">Month</label><input class="btn-check" id="yearView" type="radio" name="scaleView" value="year" autocomplete="off" /><label class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="yearView">Year</label></div>
                    </div>
                  </div>
                  <div class="gantt-zero-roadmap-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-5">
              <div class="card border border-300 h-100 w-100">
                <div class="bg-holder" style="background-image:url({{url('assets/admin')}}/assets/img/spot-illustrations/20.png);background-position: top right;"></div>
                <!--/.bg-holder-->
                <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block" style="background-image:url({{url('assets/admin')}}/assets/img/spot-illustrations/21.png);background-position: bottom right; background-size: auto;"></div>
                <!--/.bg-holder-->
                <div class="card-body px-5 position-relative">
                  <div class="badge badge-phoenix fs--2 badge-phoenix-warning mb-4"><span class="fw-bold">Coming soon</span><span class="fa-solid fa-award ms-1"></span></div>
                  <h3 class="mb-5">Early bird gets the warm leads!</h3>
                  <p class="text-700 fw-semi-bold">Phoenix CRM Dashboard is coming to <br />market soon for fulfilling your every <br />CRM related needs. </p>
                </div>
                <div class="card-footer border-0 py-0 px-5 z-index-1">
                  <p class="text-700 fw-semi-bold">Follow <a href="https://themewagon.com/">ThemeWagon </a>at <br class="d-none d-xxl-block" />Bootstrap Marketplace for updates.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 pb-3 border-y border-300">
            <div class="row">
              <div class="col-12 col-xl-7 col-xxl-6">
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <h3 class="text-1100 text-nowrap">Issues Discovered</h3>
                    <p class="text-700 mb-md-7">Newly found and yet to be solved</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-bold">Issue type </p>
                      <p class="mb-0 fs--1">Total count <span class="fw-bold">257</span></p>
                    </div>
                    <hr class="bg-200 mb-2 mt-2" />
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="{{url('assets/admin')}}/assets/img/icons/green.png" alt="" height="8" width="16" />Product design</p>
                      <h5 class="mb-0 text-900">78</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="{{url('assets/admin')}}/assets/img/icons/blue.png" alt="" height="8" width="16" />Development</p>
                      <h5 class="mb-0 text-900">63</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="{{url('assets/admin')}}/assets/img/icons/skyblue.png" alt="" height="8" width="16" />QA &amp; Testing</p>
                      <h5 class="mb-0 text-900">56</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="{{url('assets/admin')}}/assets/img/icons/red.png" alt="" height="8" width="16" />Customer queries</p>
                      <h5 class="mb-0 text-900">36</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="{{url('assets/admin')}}/assets/img/icons/yellow.png" alt="" height="8" width="16" />R &amp; D </p>
                      <h5 class="mb-0 text-900">24</h5>
                    </div><button class="btn btn-outline-primary mt-5">See Details<span class="fas fa-angle-right ms-2 fs--2 text-center"></span></button>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="position-relative mb-sm-4 mb-xl-0">
                      <div class="echart-issue-chart" style="min-height:390px;width:100%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-5 col-xxl-6">
                <h3>Project: eleven Progress</h3>
                <p class="text-700 mb-0 mb-xl-3">Deadline &amp; progress</p>
                <div class="echart-zero-burnout-chart" style="min-height:320px;width:100%"></div>
              </div>
            </div>
          </div>
          <div class="mx-lg-n4 mt-3">
            <div class="row g-3">
              <div class="col-12 col-xl-6 col-xxl-7">
                <div class="card todo-list h-100">
                  <div class="card-header border-bottom-0 pb-0">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h3 class="text-1100">To do</h3>
                        <p class="mb-md-0 mb-lg-2 mb-xxl-0 text-700">Task assigned to me</p>
                      </div>
                      <div class="col-auto w-100 w-md-auto">
                        <div class="row align-items-center justify-content-between g-0">
                          <div class="col-12 col-sm-auto">
                            <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                              </form>
                            </div>
                          </div>
                          <div class="col-auto d-flex">
                            <p class="mb-0 ms-sm-3 fs--1 text-700 fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs--2"></span>23 tasks</p><button class="btn btn-link p-0 ms-3 fs--1 text-primary fw-bold text-decoration-none"><span class="fas fa-sort me-1 fw-extra-bold fs--2"></span>Sorting</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-6 pb-0 scrollbar to-do-list-body">
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" /><label class="form-check-label mb-0 fs-0 me-2" for="checkbox-todo-0">Designing the dungeon</label>
                          <div class="badge badge-phoenix fs--2 badge-phoenix-primary"><span class="fw-bold badge-label">DRAFT</span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center">
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" /><label class="form-check-label mb-0 fs-0 me-2" for="checkbox-todo-1">Hiring a motion graphic designer</label>
                          <div class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="fw-bold badge-label">URGENT !</span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button><button class="btn p-0 text-warning fs--2 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" /><label class="form-check-label mb-0 fs-0 me-2" for="checkbox-todo-2">Finalizing the geometric shapes</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" /><label class="form-check-label mb-0 fs-0 me-2" for="checkbox-todo-3">Finalizing the geometric shapes</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button><button class="btn p-0 text-warning fs--2 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" /><label class="form-check-label mb-0 fs-0 me-2" for="checkbox-todo-4">Procrastinate for a month</label>
                          <div class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="fw-bold badge-label">ON PROCESS</span><span class="ms-1" data-feather="info" style="height:9px;width:9px;"></span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" /><label class="form-check-label mb-0 fs-0 me-2" for="checkbox-todo-5">warming up</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 border-top border-bottom">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto ps-0">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input form-check-line-through mt-0 me-3 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" /><label class="form-check-label mb-0 fs-0 me-2" for="checkbox-todo-6">Make ready for release</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto pe-0">
                        <div class="d-flex ms-3 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 mb-0">2o Nov, 2021</p>
                          <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-900 px-0 me-1"><span class="fas fa-edit"></span></button><button class="btn btn-sm fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">1:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer border-0"><a class="fw-bold fs--1 mt-4 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a></div>
                </div>
              </div>
              <div class="col-12 col-xl-6 col-xxl-5">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="card-title mb-1">
                      <h3 class="text-1100">Activity</h3>
                    </div>
                    <p class="text-700 mb-4">Recent activity across all projects</p>
                    <div class="timeline-vertical timeline-with-details">
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-item-date order-1 order-md-0 me-md-4">
                              <p class="fs--2 fw-semi-bold text-600 text-end">01 DEC, 2023<br class="d-none d-md-block" /> 10:30 AM</p>
                            </div>
                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                              <div class="icon-item icon-item-sm border rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-chess text-primary-600 fs--2"></span></div><span class="timeline-bar border-end border-dashed border-400">  </span>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-item-content ps-6 ps-md-3">
                              <h5 class="fs--1 lh-sm">Assigned as a director for Project The Chewing Gum Attack</h5>
                              <p class="fs--1">by <span class="fw-semi-bold text-primary">Shantinon Mekalan</span></p>
                              <p class="fs--1 text-800 mb-5">Utilizing best practices to better leverage o{{url('assets/admin')}}/assets, we must engage in black sky leadership thinking, not the usual band-aid solution.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-item-date order-1 order-md-0 me-md-4">
                              <p class="fs--2 fw-semi-bold text-600 text-end">05 DEC, 2023<br class="d-none d-md-block" /> 12:30 AM</p>
                            </div>
                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                              <div class="icon-item icon-item-sm border rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-dove text-primary-600 fs--2"></span></div><span class="timeline-bar border-end border-dashed border-400">  </span>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-item-content ps-6 ps-md-3">
                              <h5 class="fs--1 lh-sm">Assigned as a director for Project The Chewing Gum Attack</h5>
                              <p class="fs--1">by <span class="fw-semi-bold text-primary">Shantinon Mekalan</span></p>
                              <p class="fs--1 text-800 mb-5">We must repurpose with SEO optimized functionalities, instead of using those over used frictioned kumbaya.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="timeline-item position-relative">
                        <div class="row g-md-3">
                          <div class="col-12 col-md-auto d-flex">
                            <div class="timeline-item-date order-1 order-md-0 me-md-4">
                              <p class="fs--2 fw-semi-bold text-600 text-end">15 DEC, 2023<br class="d-none d-md-block" /> 2:30 AM</p>
                            </div>
                            <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                              <div class="icon-item icon-item-sm border rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-dungeon text-primary-600 fs--2"></span></div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="timeline-item-content ps-6 ps-md-3">
                              <h5 class="fs--1 lh-sm">Archieved all the files for the Project Membrane Memories</h5>
                              <p class="fs--1">by <span class="fw-semi-bold text-primary">Sharuka Nijibum</span></p>
                              <p class="fs--1 text-800 mb-0">To get off the runway and paradigm shift, we should take brass tacks with above-the-board actionable analytics, ramp up with viral partnering, not the usual goat rodeo putting socks on an octopus.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-6 border-top border-300">
                <div id="projectSummary" data-list='{"valueNames":["project","assigness","start","deadline","calculation","projectprogress","status","action"],"page":6,"pagination":true}'>
                  <div class="row align-items-end justify-content-between pb-4 g-3">
                    <div class="col-auto">
                      <h3>Projects</h3>
                      <p class="text-700 lh-sm mb-0">Brief summary of all projects</p>
                    </div>
                  </div>
                  <div class="table-responsive ms-n1 ps-1 scrollbar">
                    <table class="table fs--1 mb-0 border-top border-200">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="project" style="width:30%;">PROJECT NAME</th>
                          <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">ASSIGNESS</th>
                          <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                          <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                          <th class="sort align-middle ps-3" scope="col" data-sort="calculation" style="width:12%;">CALCULATION</th>
                          <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                          <th class="sort align-middle ps-8" scope="col" data-sort="status" style="width:10%;">STATUS</th>
                          <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                        </tr>
                      </thead>
                      <tbody class="list" id="table-latest-review-body">
                        <tr class="position-static">
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Making the Butterflies shoot each other dead</a></td>
                          <td class="align-middle white-space-nowrap assigness ps-3">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/9.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/25.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/32.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/avatar-placeholder.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <div class="avatar-name rounded-circle "><span>+3</span></div>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start ps-3">
                            <p class="mb-0 fs--1 text-900">Dec 12, 2018</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline ps-3">
                            <p class="mb-0 fs--1 text-900">Dec 12, 2026</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation ps-3">
                            <p class="fw-bold text-1100 fs--1 mb-0">$4</p>
                            <p class="fw-semi-bold fs--2 text-700 mb-0">Cost</p>
                          <td class="align-middle white-space-nowrap ps-3 projectprogress">
                            <p class="text-800 fs--2 mb-0">145 / 145</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap ps-8 status">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div class="progress-bar bg-info" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
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
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Project Doughnut Dungeon</a></td>
                          <td class="align-middle white-space-nowrap assigness ps-3">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/22.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/28.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <div class="avatar-name rounded-circle"><span>R</span></div>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start ps-3">
                            <p class="mb-0 fs--1 text-900">Jan 9, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline ps-3">
                            <p class="mb-0 fs--1 text-900">Dec 9, 2022</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                          <td class="align-middle white-space-nowrap ps-3 projectprogress">
                            <p class="text-800 fs--2 mb-0">148 / 223</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 66.3677130044843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap ps-8 status">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div class="progress-bar bg-info" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
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
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">The Chewing Gum Attack</a></td>
                          <td class="align-middle white-space-nowrap assigness ps-3">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/34.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/59.png" alt="" />
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start ps-3">
                            <p class="mb-0 fs--1 text-900">Sep 4, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline ps-3">
                            <p class="mb-0 fs--1 text-900">Dec 4, 2021</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation ps-3">
                            <p class="fw-bold text-1100 fs--1 mb-0">$657k</p>
                            <p class="fw-semi-bold fs--2 text-700 mb-0">Estimation</p>
                          <td class="align-middle white-space-nowrap ps-3 projectprogress">
                            <p class="text-800 fs--2 mb-0">277 / 539</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 51.39146567717996%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap ps-8 status">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div class="progress-bar bg-info" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" style="width:10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
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
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Execution of Micky the foul mousie</a></td>
                          <td class="align-middle white-space-nowrap assigness ps-3">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/1.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/avatar-placeholder.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/5.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/11.png" alt="" />
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start ps-3">
                            <p class="mb-0 fs--1 text-900">Nov 1, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline ps-3">
                            <p class="mb-0 fs--1 text-900">Dec 1, 2024</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                          <td class="align-middle white-space-nowrap ps-3 projectprogress">
                            <p class="text-800 fs--2 mb-0">16 / 56</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 28.57142857142857%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap ps-8 status">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div class="progress-bar bg-info" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
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
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Harnessing stupidity from Jerry</a></td>
                          <td class="align-middle white-space-nowrap assigness ps-3">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/21.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/23.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/25.png" alt="" />
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start ps-3">
                            <p class="mb-0 fs--1 text-900">Dec 28, 2019</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline ps-3">
                            <p class="mb-0 fs--1 text-900">Nov 28, 2021</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation ps-3"><button class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                          <td class="align-middle white-space-nowrap ps-3 projectprogress">
                            <p class="text-800 fs--2 mb-0">169 / 394</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 42.89340101522843%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap ps-8 status">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div class="progress-bar bg-info" style="width:25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
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
                          <td class="align-middle time white-space-nowrap ps-0 project"><a class="text-decoration-none fw-bold fs-0" href="#">Water resistant mosquito killer gun</a></td>
                          <td class="align-middle white-space-nowrap assigness ps-3">
                            <div class="avatar-group avatar-group-dense">
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/30.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/avatar-placeholder.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/59.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <img class="rounded-circle" src="{{url('assets/admin')}}/assets/img/team/31.png" alt="" />
                              </div>
                              <div class="avatar avatar-s  rounded-circle">
                                <div class="avatar-name rounded-circle"><span>R</span></div>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap start ps-3">
                            <p class="mb-0 fs--1 text-900">Feb 24, 2020</p>
                          </td>
                          <td class="align-middle white-space-nowrap deadline ps-3">
                            <p class="mb-0 fs--1 text-900">Nov 24, 2021</p>
                          </td>
                          <td class="align-middle white-space-nowrap calculation ps-3">
                            <p class="fw-bold text-1100 fs--1 mb-0">$55k</p>
                            <p class="fw-semi-bold fs--2 text-700 mb-0">Budget</p>
                          <td class="align-middle white-space-nowrap ps-3 projectprogress">
                            <p class="text-800 fs--2 mb-0">600 / 600</p>
                            <div class="progress" style="height:3px;">
                              <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="align-middle white-space-nowrap ps-8 status">
                            <div class="progress progress-stack mt-3" style="height:3px;">
                              <div class="progress-bar bg-info" style="width:24%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage"></div>
                              <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage"></div>
                              <div class="progress-bar bg-success" style="width:35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage"></div>
                            </div>
                          </td>
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
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         @endsection