@extends('dashboard.base')

@section('title', config('app.name'))

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Welcome !</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Symox</a></li>
                                <li class="breadcrumb-item active">Welcome !</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="text-center py-3">
                                <ul class="bg-bubbles ps-0">
                                    <li><i class="bx bx-grid-alt font-size-24"></i></li>
                                    <li><i class="bx bx-tachometer font-size-24"></i></li>
                                    <li><i class="bx bx-store font-size-24"></i></li>
                                    <li><i class="bx bx-cube font-size-24"></i></li>
                                    <li><i class="bx bx-cylinder font-size-24"></i></li>
                                    <li><i class="bx bx-command font-size-24"></i></li>
                                    <li><i class="bx bx-hourglass font-size-24"></i></li>
                                    <li><i class="bx bx-pie-chart-alt font-size-24"></i></li>
                                    <li><i class="bx bx-coffee font-size-24"></i></li>
                                    <li><i class="bx bx-polygon font-size-24"></i></li>
                                </ul>
                               <div class="main-wid position-relative">
                                    <h3 class="text-white">Nick Tep Dashboard</h3>

                                    <h3 class="text-white mb-0"> Welcome Back, Nick Tep! </h3>

                                    <p class="text-white-50 px-4 mt-4">.Dev Laravel</p>
                                    
                                    <div class="mt-4 pt-2 mb-2">
                                        <a href="{{route('home')}}" class="btn btn-success">Home <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-primary rounded">
                                            <i class="mdi mdi-shopping-outline text-primary font-size-24"></i>
                                        </span>
                                    </div>
                                    <p class="text-muted mt-4 mb-0">Today Orders</p>
                                    <h4 class="mt-1 mb-0">3,89,658 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 10%</sup></h4>
                                    <div>
                                        <div class="py-3 my-1">
                                            <div id="mini-1" data-colors='["#3980c0"]'></div>
                                        </div>
                                        <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Day</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Week</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Month</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-success rounded">
                                            <i class="mdi mdi-eye-outline text-success font-size-24"></i>
                                        </span>
                                    </div>
                                    <p class="text-muted mt-4 mb-0">Today Visitor</p>
                                    <h4 class="mt-1 mb-0">1,648,29 <sup class="text-danger fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 19%</sup></h4>
                                    <div>
                                        <div class="py-3 my-1">
                                            <div id="mini-2" data-colors='["#33a186"]'></div>
                                        </div>
                                        <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Day</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Week</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Month</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-primary rounded">
                                            <i class="mdi mdi-rocket-outline text-primary font-size-24"></i>
                                        </span>
                                    </div>
                                    <p class="text-muted mt-4 mb-0">Total Expense</p>
                                    <h4 class="mt-1 mb-0">6,48,249 <sup class="text-success fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 22%</sup></h4>
                                    <div>
                                        <div class="py-3 my-1">
                                            <div id="mini-3" data-colors='["#3980c0"]'></div>
                                        </div>
                                        <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Day</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Week</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Month</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="avatar">
                                        <span class="avatar-title bg-soft-success rounded">
                                            <i class="mdi mdi-account-multiple-outline text-success font-size-24"></i>
                                        </span>
                                    </div>
                                    <p class="text-muted mt-4 mb-0">New Users</p>
                                    <h4 class="mt-1 mb-0">$5,265,3 <sup class="text-danger fw-medium font-size-14"><i class="mdi mdi-arrow-down"></i> 18%</sup></h4>
                                    <div>
                                        <div class="py-3 my-1">
                                            <div id="mini-4" data-colors='["#33a186"]'></div>
                                        </div>
                                        <ul class="list-inline d-flex justify-content-between justify-content-center mb-0">
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Day</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Week</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Month</a></li>
                                            <li class="list-inline-item"><a href="index-dark.html" class="text-muted">Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap align-items-center">
                                <h5 class="card-title mb-0">Earnings By Item</h5>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-reset" href="index-dark.html#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="index-dark.html#">Monthly</a>
                                            <a class="dropdown-item" href="index-dark.html#">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-xl-0">
                            <div id="earning-item" data-colors='["#33a186","#3980c0"]' class="apex-chart"></div>

                        </div>
                    </div>
                    
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap align-items-center">
                                <h5 class="card-title mb-0">Manage Orders</h5>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-reset" href="index-dark.html#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted font-size-12">Sort By: </span> <span class="fw-medium"> Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="index-dark.html#">Monthly</a>
                                            <a class="dropdown-item" href="index-dark.html#">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-xl-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-centered align-middle table-nowrap mb-0">
                                    <thead >
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Voir..</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                        <tr>
                                            <td> {{$contact->id}} </td>
                                            <td> {{$contact->name}} </td>
                                            <td>
                                                <i class="mdi mdi-circle font-size-10 me-1 align-middle text-secondary"></i> {{ $contact->email }}
                                            </td>
                                            <td>
                                                {{ $contact->phone }}
                                            </td>
                                            <td>
                                               {{ Str::limit($contact->message, 5)  }}
                                            </td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <a href="{{route('contact.show', $contact)}}" >
                                                        <i class="mdi mdi-circle font-size-10 me-1 align-middle text-secondary"></i> 
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                         <div class="row">
                             <div class="col-lg-5">
                                     <div class="card">
                                         <div class="card-header">
                                             <div class="d-flex flex-wrap align-items-center">
                                                 <h5 class="card-title mb-0">Order Activity</h5>
                                                 <div class="ms-auto">
                                                     <div class="dropdown">
                                                         <a class="font-size-16 text-muted dropdown-toggle" href="index-dark.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                             <i class="mdi mdi-dots-horizontal"></i>
                                                         </a>
                                                         <div class="dropdown-menu">
                                                             <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                             <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                             <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="card-body px-0">
                                             <ol class="activity-feed mb-0 px-4" data-simplebar style="max-height: 377px;">
                                                 <li class="feed-item">
                                                     <div class="d-flex justify-content-between feed-item-list">
                                                         <div>
                                                             <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                             <p class="text-muted mt-0 mb-0">James Raphael</p>
                                                         </div>
                                                         <div>
                                                             <p class="text-muted mb-0">1 hour ago</p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="feed-item">
                                                     <div class="d-flex justify-content-between feed-item-list">
                                                         <div>
                                                             <h5 class="font-size-15 mb-1">You have 5 pending order.</h5>
                                                             <p class="text-muted mt-0 mb-0">Delivered</p>
                                                         </div>
                                                         <div>
                                                             <p class="text-muted mb-0">6 hour ago</p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="feed-item">
                                                     <div class="d-flex justify-content-between feed-item-list">
                                                         <div>
                                                             <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                             <p class="text-muted mt-0 mb-0">Pick Up</p>
                                                         </div>
                                                         <div>
                                                             <p class="text-muted mb-0">1 day ago</p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="feed-item">
                                                     <div class="d-flex justify-content-between feed-item-list">
                                                         <div>
                                                             <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                             <p class="text-muted mt-0 mb-0">In Transit</p>
                                                         </div>
                                                         <div>
                                                             <p class="text-muted mb-0">Yesterday</p>
                                                         </div>
                                                     </div>
                                                 </li>
                             
                                                 <li class="feed-item">
                                                     <div class="d-flex justify-content-between feed-item-list">
                                                         <div>
                                                             <h5 class="font-size-15 mb-1">You have 1 pending order.</h5>
                                                             <p class="text-muted mt-0 mb-0">Dispatched</p>
                                                         </div>
                                                         <div>
                                                             <p class="text-muted mb-0">2 hour ago</p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="feed-item pb-1">
                                                     <div class="d-flex justify-content-between feed-item-list">
                                                         <div>
                                                             <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                             <p class="text-muted mt-0 mb-0">Order Received</p>
                                                         </div>
                                                         <div>
                                                             <p class="text-muted mb-0">Today</p>
                                                         </div>
                                                     </div>
                                                 </li>
                             
                                             </ol>
         
                                         </div>
                                     </div>
                             </div>
 
                             <div class="col-lg-7">
                                 <div class="card">
                                     <div class="card-header">
                                         <div class="align-items-center d-flex">
                                             <h4 class="card-title mb-0 flex-grow-1">Top Users</h4>
                                             <div class="flex-shrink-0">
                                                 <div class="dropdown">
                                                     <a class=" dropdown-toggle" href="index-dark.html#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                     </a>
                             
                                                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                         <a class="dropdown-item" href="index-dark.html#">Members</a>
                                                         <a class="dropdown-item" href="index-dark.html#">New Members</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Old Members</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
 
                                     <div class="card-body px-0 pt-2">
                                         <div class="table-responsive px-3" data-simplebar style="max-height: 393px;">
                                             <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                 <tbody>
                                                     <tr>
                                                         <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                         <td>
                                                             <h6 class="font-size-15 mb-1">Glenn Holden</h6>
                                                             <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                         </td>
                                                         <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                                         <td><span class="badge badge-soft-danger font-size-12">Cancel</span></td>
                                                         <td>
                                                             <div class="dropdown">
                                                                 <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                     <i class="mdi mdi-dots-vertical"></i>
                                                                 </a>
                         
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                                 </div>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td><img src="assets/images/users/avatar-5.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                         <td>
                                                             <h6 class="font-size-15 mb-1">Lolita Hamill</h6>
                                                             <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                         </td>
                                                         <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                                         <td><span class="badge badge-soft-success font-size-12">Success</span></td>
                                                         <td>
                                                             <div class="dropdown">
                                                                 <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                     <i class="mdi mdi-dots-vertical"></i>
                                                                 </a>
                         
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                                 </div>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td><img src="assets/images/users/avatar-6.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                         <td>
                                                             <h6 class="font-size-15 mb-1">Robert Mercer</h6>
                                                             <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                         </td>
                                                         <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                                         <td><span class="badge badge-soft-info font-size-12">Active</span></td>
                                                         <td>
                                                             <div class="dropdown">
                                                                 <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                     <i class="mdi mdi-dots-vertical"></i>
                                                                 </a>
                         
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                                 </div>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td><img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                         <td>
                                                             <h6 class="font-size-15 mb-1">Marie Kim</h6>
                                                             <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                         </td>
                                                         <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                         <td><span class="badge badge-soft-warning font-size-12">Pending</span></td>
                                                         <td>
                                                             <div class="dropdown">
                                                                 <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                     <i class="mdi mdi-dots-vertical"></i>
                                                                 </a>
                         
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                                 </div>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td><img src="assets/images/users/avatar-8.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                         <td>
                                                             <h6 class="font-size-15 mb-1">Sonya Henshaw</h6>
                                                             <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                         </td>
                                                         <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                         <td><span class="badge badge-soft-info font-size-12">Active</span></td>
                                                         <td>
                                                             <div class="dropdown">
                                                                 <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                     <i class="mdi mdi-dots-vertical"></i>
                                                                 </a>
                         
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                                 </div>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td><img src="assets/images/users/avatar-2.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                         <td>
                                                             <h6 class="font-size-15 mb-1">Marie Kim</h6>
                                                             <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Australia</p>
                                                         </td>
                                                         <td class="text-muted"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                         <td><span class="badge badge-soft-success font-size-12">Success</span></td>
                                                         <td>
                                                             <div class="dropdown">
                                                                 <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                     <i class="mdi mdi-dots-vertical"></i>
                                                                 </a>
                         
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                                 </div>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td><img src="assets/images/users/avatar-1.jpg" class="avatar-sm rounded-circle " alt="..."></td>
                                                         <td>
                                                             <h6 class="font-size-15 mb-1">Sonya Henshaw</h6>
                                                             <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India</p>
                                                         </td>
                                                         <td class="text-muted"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                         <td><span class="badge badge-soft-danger font-size-12">Cancel</span></td>
                                                         <td>
                                                             <div class="dropdown">
                                                                 <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                     <i class="mdi mdi-dots-vertical"></i>
                                                                 </a>
                         
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                     <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                                     <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                                 </div>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </div> <!-- enbd table-responsive-->
                                     </div>
                                 </div>
                             </div>
                    </div>
                </div>
                <div class="col-xl-4">
 
                    <div class="card">
                        <div class="card-header">
                             <div class="align-items-center d-flex">
                                 <h4 class="card-title mb-0 flex-grow-1">Top Countries</h4>
                                 <div class="flex-shrink-0">
                                     <div class="dropdown">
                                         <a class=" dropdown-toggle" href="index-dark.html#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <span class="text-muted">View All<i class="mdi mdi-chevron-down ms-1"></i></span>
                                         </a>
                 
                                         <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                             <a class="dropdown-item" href="index-dark.html#">Members</a>
                                             <a class="dropdown-item" href="index-dark.html#">New Members</a>
                                             <a class="dropdown-item" href="index-dark.html#">Old Members</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <div class="card-body pt-1">
 
                             <div class="table-responsive">
                                 <table class="table table-centered align-middle table-nowrap mb-0">
                                   
                                     <tbody>
                                         <tr>
                                             <td><img src="assets/images/flags/us.jpg" alt="user-image" class="me-3" height="18">US</td>
                                             <td>
                                                 26,568.84
                                             </td>
                                             <td>
                                               <i class="bx bx-trending-up text-success"></i>
                                             </td>
                                             <td>
                                                 40%
                                             </td>
                                             <td>
                                                 <div class="dropdown">
                                                     <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi mdi-dots-vertical"></i>
                                                     </a>
             
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                     </div>
                                                 </div>
                                             </td>
                                         </tr>
 
                                         <tr>
                                             <td><img src="assets/images/flags/germany.jpg" alt="user-image" class="me-3" height="18">German</td>
                                             <td>
                                                 36,485.52
                                             </td>
                                             <td>
                                               <i class="bx bx-trending-up text-success"></i>
                                             </td>
                                             <td>
                                                 50%
                                             </td>
                                             <td>
                                                 <div class="dropdown">
                                                     <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi mdi-dots-vertical"></i>
                                                     </a>
             
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                     </div>
                                                 </div>
                                             </td>
                                         </tr>
 
                                         <tr>
                                             <td><img src="assets/images/flags/italy.jpg" alt="user-image" class="me-3" height="18">Italy</td>
                                             <td>
                                                 17,568.84
                                             </td>
                                             <td>
                                               <i class="bx bx-trending-down text-danger"></i>
                                             </td>
                                             <td>
                                                 20%
                                             </td>
                                             <td>
                                                 <div class="dropdown">
                                                     <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi mdi-dots-vertical"></i>
                                                     </a>
             
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                     </div>
                                                 </div>
                                             </td>
                                         </tr>
 
                                         <tr>
                                             <td><img src="assets/images/flags/spain.jpg" alt="user-image" class="me-3" height="18">Spain</td>
                                             <td>
                                                 75,521.28
                                             </td>
                                             <td>
                                               <i class="bx bx-trending-up text-success"></i>
                                             </td>
                                             <td>
                                                 70%
                                             </td>
                                             <td>
                                                 <div class="dropdown">
                                                     <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi mdi-dots-vertical"></i>
                                                     </a>
             
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <a class="dropdown-item" href="index-dark.html#">Action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Another action</a>
                                                         <a class="dropdown-item" href="index-dark.html#">Something else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="index-dark.html#">Separated link</a>
                                                     </div>
                                                 </div>
                                             </td>
                                         </tr>
                                         
                                     </tbody>
                                 </table>   
                             </div> 
 
                        </div>
                    </div>
 
                    <div class="card best-product">
                     <div class="card-body">
                      <div class="row align-items-center justify-content-start">
                          <div class="col-lg-8">
                              <h5 class="card-title best-product-title">Best Selling Product</h5>
                              <div class="row align-items-end mt-4">
                                  <div class="col-4">
                                      <div class="mt-1">
                                          <h4 class="font-size-20 best-product-title">2,562</h4>
                                          <p class="text-muted mb-0">Sold</p>
                                      </div>
                                  </div>
                                  <div class="col-4">
                                      <div class="mt-1">
                                          <h4 class="font-size-20 best-product-title">4,652</h4>
                                          <p class="text-muted mb-0">Stock</p>
                                      </div>
                                  </div>
 
                                  <div class="col-4">
                                      <div class="mt-1">
                                          <a href="index-dark.html" class="btn btn-primary btn-sm">Buy
                                              Now</a>
                                      </div>
                                  </div>
                                 </div>
                          </div>
                        
                      </div>
                     </div>
                 </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-3">
                                <h5 class="card-title mb-0">Sales Statistics</h5>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-reset" href="index-dark.html#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="index-dark.html#">Monthly</a>
                                            <a class="dropdown-item" href="index-dark.html#">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div>
                                     <div id="sales-statistics" data-colors='["#eff1f3","#eff1f3","#eff1f3","#eff1f3","#33a186","#3980c0","#eff1f3","#eff1f3","#eff1f3", "#eff1f3"]' class="apex-chart"></div>
                                </div>
                              </div>
                               <div class="col-xl-4">
                                   <div class="">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                    <div class="flex-1 ms-2">
                                                        <p class="mb-0">Product Order</p>
                                                        <h5 class="mt-1 mb-0 font-size-16">43,541.58</h5>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="badge badge-soft-primary">25.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 border-top pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                    <div class="flex-1 ms-2">
                                                        <p class="mb-0">Product Pending</p>
                                                        <h5 class="mt-1 mb-0 font-size-16">17,351.12</h5>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="badge badge-soft-primary">17.4%<i class="mdi mdi-arrow-down ms-2"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 border-top pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                                    <div class="flex-1 ms-2">
                                                        <p class="mb-0">Product Cancelled</p>
                                                        <h5 class="mt-1 mb-0 font-size-16">32,569.74</h5>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="badge badge-soft-success">16.3%<i class="mdi mdi-arrow-up ms-1"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 border-top pt-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex">
                                                    <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                    <div class="flex-1 ms-2">
                                                        <p class="mb-0">Product Delivered</p>
                                                        <h5 class="mt-1 mb-0 font-size-16">67,356.24</h5>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="badge badge-soft-primary">65.7%<i class="mdi mdi-arrow-up ms-1"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                               
                           </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center">
                                <h5 class="card-title mb-0">Sales By Category</h5>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-reset" href="index-dark.html#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="index-dark.html#">Monthly</a>
                                            <a class="dropdown-item" href="index-dark.html#">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <canvas class="mx-auto" id="sales-category" height="281" data-colors='["#3980c0","#51af98", "#4bafe1", "#B4B4B5", "#f1f3f4"]'></canvas>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="px-2">
                                        <div class="d-flex justify-content-between align-items-center mt-sm-0 mt-2">
                                            <div class="d-flex">
                                                <i class="mdi mdi-circle font-size-10 mt-1 text-primary"></i>
                                                <div class="flex-1 ms-2">
                                                    <p class="mb-0 text-truncate">Watch OS 8</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="fw-bold">35.0%</span>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <div class="d-flex">
                                                <i class="mdi mdi-circle font-size-10 mt-1 text-success"></i>
                                                <div class="flex-1 ms-2">
                                                    <p class="mb-0 text-truncate">Iphone 12</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="fw-bold">15.0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                   <div class="px-2">
                                        <div class="d-flex justify-content-between align-items-center mt-sm-0 mt-2">
                                            <div class="d-flex">
                                                <i class="mdi mdi-circle font-size-10 mt-1 text-info"></i>
                                                <div class="flex-1 ms-2">
                                                    <p class="mb-0 text-truncate">Horror Book</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="fw-bold">8.0%</span>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <div class="d-flex">
                                                <i class="mdi mdi-circle font-size-10 mt-1 text-secondary"></i>
                                                <div class="flex-1 ms-2">
                                                    <p class="mb-0 text-truncate">Smart 4k TV</p>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="fw-bold">7.0%</span>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> &copy; Symox.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
    
@endsection