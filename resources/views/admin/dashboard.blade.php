@extends('layouts.admin-app')
@section('title' , 'Dashboard')    
@section('content')    


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
<!--                    <div class="row">
                        <div class="col-12"><h1 class="fs-1 mb-2 mt-2"> Welcome!</h1></div>
                    </div>  end row-->
<!--
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xxl-2">
                            <select class="form-select rounded-pill fs-16 min-height-50 main-shadow bg-white" aria-label="Default select example">
                                <option selected="">Stores</option>
                                <option value="1">Item 01</option>
                                <option value="2">Item 02</option>
                                <option value="3">Item 03</option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 col-xxl-10 float-end">
                            <div class="rounded-pill filter-main-menu float-end main-shadow">
                                <ul class="list-group list-group-horizontal-md float-end">
                                    <li class="list-group-item border-0 fs-16 "><a href="#">Day</a></li>
                                    <li class="list-group-item border-0 fs-16  border-start"><a href="#"> Month</a></li>
                                    <li class="list-group-item border-0 fs-16  border-start"><a href="#">Year</a></li>
                                    <li class="list-group-item border-0 fs-16  border-start"><a href="#">Specific Time</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->

                    <div class="row h-100 mt-3 staticts">
                        <div class="col-lg-4 col-md-6">
                            <div class="card rounded-4 card-animate">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-md flex-shrink-0">
                                            <span class="avatar-title bg-white border border-second text-main-color rounded-circle fs-1">
                                                <i class="las la-box"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class=" mb-0 fs-1"><span class="counter-value" data-target="">{{App\Models\Email::count()}}</span></h4>
                                            <p class=" fw-semibold fs-16 text-muted mb-1"> Emails</p>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->

                        </div><!-- end col -->
                   
                    

                    </div><!-- end row -->

<!--                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card rounded-4">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Sale</h4>
                                </div> end card header 

                                <div class="card-body">
                                    <div id="column_chart" data-colors='["--primary-color", "--second-color", "--main-color"]' class="apex-charts" dir="ltr"></div>
                                </div> end card-body 
                            </div> end card 
                        </div>
                         end col 
                    </div>
                     end row 

                    <div class="row h-100">
                        <div class="col-lg-6 col-md-6">
                            <div class="card rounded-4 card-animate card-height-100">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class=" mb-0 fs-1"><span class="fs-2">Total Sold Products</span></h4>
                                            <p class="text-uppercase fw-semibold fs-16 text-muted mb-1">Milk</p>
                                        </div>
                                        <div class="avatar-md flex-shrink-0">
                                            <span class="avatar-title bg-white text-second-color fs-1">
                                                24
                                            </span>
                                        </div>
                                    </div>
                                </div> end card body 
                            </div> end card 
                        </div> end col 

                        <div class="col-lg-6 col-md-6">
                            <div class="card rounded-4 card-animate card-height-100">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class=" mb-0 fs-1"><span class="fs-2">Top Users</span></h4>
                                            <p class="text-uppercase fw-semibold fs-16 text-muted mb-1">Ali</p>
                                        </div>
                                        <div class="avatar-md flex-shrink-0">
                                            <span class="avatar-title bg-white  text-second-color fs-1">
                                                41
                                            </span>
                                        </div>
                                    </div>
                                </div> end card body 
                            </div> end card 
                        </div> end col 
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card rounded-4">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Stock alerts <a href="#" class="float-end fs-16 text-main-color"> See all</a></h4>
                                </div> end card header 

                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">Code</th>
                                                        <th scope="col" class="text-center">Product</th>
                                                        <th scope="col" class="text-center">Level</th>
                                                        <th scope="col" class="text-center">Exp. date</th>
                                                        <th scope="col" class="text-center">Cost</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>102</td>
                                                        <td class="text-center">Tomato</td>
                                                        <td class="text-center"><span class="badge bg-success fs-14 min-width-120">Undamaged</span></td>
                                                        <td class="text-center">1/1/2023</td>
                                                        <td class="text-center">150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>102</td>
                                                        <td class="text-center">Tomato</td>
                                                        <td class="text-center"><span class="badge bg-success fs-14 min-width-120">Undamaged</span></td>
                                                        <td class="text-center">1/1/2023</td>
                                                        <td class="text-center">150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>102</td>
                                                        <td class="text-center">Tomato</td>
                                                        <td class="text-center"><span class="badge bg-primary fs-14 min-width-120">damaged</span></td>
                                                        <td class="text-center">1/1/2023</td>
                                                        <td class="text-center">150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>102</td>
                                                        <td class="text-center">Tomato</td>
                                                        <td class="text-center"><span class="badge bg-success fs-14 min-width-120">Undamaged</span></td>
                                                        <td class="text-center">1/1/2023</td>
                                                        <td class="text-center">150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>102</td>
                                                        <td class="text-center">Tomato</td>
                                                        <td class="text-center"><span class="badge bg-success fs-14 min-width-120"> Undamaged</span></td>
                                                        <td class="text-center">1/1/2023</td>
                                                        <td class="text-center">150</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> end card-body 
                            </div>
                        </div>
                         end col 
                    </div>
                     end row 

                    <div class="row h-100">
                        <div class="col-xxl-7 col-xl-7 col-lg-6">
                            <div class="card card-height-100 rounded-4">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Charts</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart_wrap"><div id="chart_div"></div></div>
                                </div>
                            </div>
                             end card 
                        </div>

                        <div class="col-xxl-5 col-xl-5 col-lg-6">
                            <div class="card card-height-100 rounded-4">
                                <h4 class="card-title mb-4"> Top Visits</h4>
                                <div class="d-flex position-relative">
                                    <img src="../assets/images/users/avatar-3.jpg" class="flex-shrink-0 me-3 avatar-md rounded-circle" alt="...">
                                    <div>
                                        <h5 class="mt-0 fs-18"><b>Ahmed Mohamed</b></h5>
                                        <p class="fs-15 mb-0 text-gray-color">ahmedMohammed@hotnail.com</p>
                                    </div>
                                </div>

                                <hr class="border-bottom border-main m-spec">
                                <div class="d-flex position-relative">
                                    <img src="../assets/images/users/avatar-3.jpg" class="flex-shrink-0 me-3 avatar-md rounded-circle" alt="...">
                                    <div>
                                        <h5 class="mt-0 fs-18"><b>Ahmed Mohamed</b></h5>
                                        <p class="fs-15 mb-0 text-gray-color">ahmedMohammed@hotnail.com</p>
                                    </div>
                                </div>

                                <hr class="border-bottom border-main m-spec">
                                <div class="d-flex position-relative">
                                    <img src="../assets/images/users/avatar-3.jpg" class="flex-shrink-0 me-3 avatar-md rounded-circle" alt="...">
                                    <div>
                                        <h5 class="mt-0 fs-18"><b>Ahmed Mohamed</b></h5>
                                        <p class="fs-15 mb-0 text-gray-color">ahmedMohammed@hotnail.com</p>
                                    </div>
                                </div>

                                <hr class="border-bottom border-main m-spec">
                                <div class="d-flex position-relative">
                                    <img src="../assets/images/users/avatar-3.jpg" class="flex-shrink-0 me-3 avatar-md rounded-circle" alt="...">
                                    <div>
                                        <h5 class="mt-0 fs-18"><b>Ahmed Mohamed</b></h5>
                                        <p class="fs-15 mb-0 text-gray-color">ahmedMohammed@hotnail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                         end col 
                    </div>
                     end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

           
        </div>
        <!-- end main content-->


@endsection
