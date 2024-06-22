@extends('layouts.dash')

@section('content')
    <div class="content-header row">
        <h2> لوحة التحكم</h2>

    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <section id="dashboard-ecommerce">
                    <div class="row match-height">


                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">نتائج التقييمات</h4>
                                    <div class="d-flex align-items-center">
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row mb-3">
                                       

                                             <!-- Customers Chart Card -->
                                <div class="col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-end">
                                            <h4 class="card-title">Customers</h4>
                                            <div class="dropdown chart-dropdown">
                                                <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Last 7 Days
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem3">
                                                    <a class="dropdown-item" href="#">Last 28 Days</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="customer-chart" class="mt-2 mb-1"></div>
                                            <div class="pt-25">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="circle" class="font-medium-1 text-primary"></i>
                                                        <span class="fw-bold ms-75">New</span>
                                                    </div>
                                                    <span>690</span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-1">
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="circle" class="font-medium-1 text-warning"></i>
                                                        <span class="fw-bold ms-75">Returning</span>
                                                    </div>
                                                    <span>258</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="circle" class="font-medium-1 text-danger"></i>
                                                        <span class="fw-bold ms-75">Referrals</span>
                                                    </div>
                                                    <span>149</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Customers Chart Card -->

                                    </div>


                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>



                    <div class="row match-height">
                       
                     


                    </div>




                </section>

            </div>
        </div>

    </div>

    </div>
@endsection


@push('custom-js')
 <!-- BEGIN: Page JS-->
 <script src="../../../app-assets/js/scripts/cards/card-analytics.js"></script>
 <!-- END: Page JS-->

    <script>
    </script>
@endpush
