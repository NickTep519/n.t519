@extends('dashboard.base')

@section('title', config('app.name'). '-posts')

@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Works List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="">Works</a></li>
                                <li class="breadcrumb-item active">Works List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-sm">
                                    <div>
                                        <a href="{{route('works.create')}}"><button type="button" class="btn btn-light mb-4" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Work</button></a>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex gap-1">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datepicker-range">
                                            <span class="input-group-text"><i class="bx bx-calendar-event"></i></span>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-link text-body shadow-none dropdown-toggle" href="invoices-list.html#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>
                                          
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="invoices-list.html#">Action</a></li>
                                                <li><a class="dropdown-item" href="invoices-list.html#">Another action</a></li>
                                                <li><a class="dropdown-item" href="invoices-list.html#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive mt-4 mt-sm-0">
                                <table class="table align-middle table-nowrap table-check">
                                    <thead>
                                        <tr class="bg-transparent">
                                            <th>ID</th>
                                            <th>Titre</th>
                                            <th>Problematique</th>
                                            <th>Content</th>
                                            <th>Lien</th>
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($works as $work)
                                        <tr>

                                            <td> {{ $work->id }} </td>

                                            <td> {{ $work->title }} </td>

                                            <td> {{  Str::limit($work->problematic, 10)  }} </td>
                                            
                                            <td> {{ Str::limit($work->description, 6) }} </td>

                                            <td> {{ Str::limit($work->link, 6) }} </td>
                                               
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="{{route('works.edit', $work)}}">Edit</a></li>
                                                        <li><a class="dropdown-item" href="{{route('works.show', $work)}}">Print</a></li>
                                                        <li><a class="dropdown-item" href="{{route('works.destroy', $work)}}">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr><!-- end tr -->                                            
                                        @endforeach


                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div>

                            <div class="row g-0 text-center text-sm-start">
                                <div class="col-sm-6">
                                    <div>
                                        <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    <ul class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">

                                        <li class="page-item disabled">
                                            <a href="{{ $works->previousPageUrl() }}" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>

                                        @for ($i = 1; $i <= $works->lastPage(); $i++)
                                        <li class="page-item">
                                            <a href="{{ $works->url($i) }}" class="page-link">{{ $i }}</a>
                                        </li>     
                                        @endfor
                                       
                                       
                                        <li class="page-item">
                                            <a href="{{ $works->nextPageUrl() }}" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>

                                    </ul>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <!-- Modal -->
            <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form>
                                <div>
                                    <ul class="wizard-nav mb-5">
                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Customer Info">
                                                    <i class="bx bx-user-circle"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Invoice Details">
                                                    <i class="bx bx-file"></i>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Order Summery">
                                                    <i class="bx bx-edit"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Customer Information</h5>
                                            <p class="card-title-desc">Fill all information below</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="customerinfo-name-input" class="form-label">Customer Name :</label>
                                                        <input type="text" class="form-control" placeholder="Enter Name" id="customerinfo-name-input">
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="customerinfo-email-input" class="form-label">Email :</label>
                                                        <input type="email" class="form-control" placeholder="Enter Email" id="customerinfo-email-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    
                                                    <div class="mb-3">
                                                        <label for="customerinfo-phone-input" class="form-label">Phone :</label>
                                                        <input type="text" class="form-control" placeholder="Enter Phone" id="customerinfo-phone-input">
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="mb-3">
                                                <label for="customerinfo-address-input" class="form-label">Address :</label>
                                                <textarea class="form-control" placeholder="Enter Address" id="customerinfo-address-input" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="wizard-tab">
                                        
                                        <div class="text-center mb-4">
                                            <h5>Invoice Details</h5>
                                            <p class="card-title-desc">Fill Invoice Details.</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
    
                                                    <div class="mb-3">
                                                        <label for="invoicenumberinput" class="form-label">Invoice #</label>
                                                        <input type="text" class="form-control" placeholder="Enter Invoice" id="invoicenumberinput">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Invoice Date</label>
                                                        <input type="text" class="form-control" placeholder="Enter Date" id="datepicker-invoice">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="invoicedescriptioninput" class="form-label">Description (Optional)</label>
                                                        <input type="text" class="form-control" placeholder="Enter Description" id="invoicedescriptioninput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Payment method :</label>
                                                        <select class="form-select">
                                                            <option selected>Select Payment method</option>
                                                            <option value="CR">Credit / Debit Card</option>
                                                            <option value="PY">Paypal</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Order Summery</h5>
                                            <p class="card-title-desc">Fill Order Summery Details.</p>
                                        </div>
                                        <div>
                                            <div class="table-responsive">
                                                <table class="table table-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Item name</th>
                                                            <th scope="col">Description</th>
                                                            <th scope="col" width="120px">Price</th>
                                                            <th scope="col" width="120px">Quantity</th>
                                                            <th scope="col" width="120px">Total</th>
                                                            <th scope="col" class="text-center">Action</th>
                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" placeholder="Enter Name" type="text">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <textarea class="form-control" placeholder="Enter Description" rows="2"></textarea>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" placeholder="Enter Price" type="text">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" placeholder="Enter Quantity" type="text">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" type="text"  value="0.00" readonly>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <a href="invoices-list.html#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" placeholder="Enter Name" type="text">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <textarea class="form-control" placeholder="Enter Description" rows="2"></textarea>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" placeholder="Enter Price" type="text">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" placeholder="Enter Quantity" type="text">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input class="form-control" type="text"  value="0.00" readonly>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <a href="invoices-list.html#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-3 col-md-4">
                                                    <div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Sub Total : <span class="float-end fw-normal text-body">0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Discount  : <span class="float-end fw-normal text-body"> - 0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Shipping Charge  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Tax  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Total  : <span class="float-end"> 0.00</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
</div>
    
@endsection