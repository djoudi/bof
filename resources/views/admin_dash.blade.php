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
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <p class="card-text font-small-3 mb-0">هل إستجاب محتوى الدورة لمستوى
                                                        تطلعاتكم
                                                    </p>
                                                    <span class="fw-bolde mb-0 p-1">25 مرضي </span>
                                                    <span class="fw-bolde mb-0 p-1">25 غير مرضي</span>
                                                    <span class="fw-bolde mb-0 p-1">25 مرضي نوعما</span>
                                                    <span class="fw-bolde mb-0 p-1">25  مرضي جيدا</span>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">25</h4>
                                                    <p class="card-text font-small-3 mb-0">تمارين تطبيقية</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">12</h4>
                                                    <p class="card-text font-small-3 mb-0">تحليل الواقع العملي</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">147</h4>
                                                    <p class="card-text font-small-3 mb-0">تبادل الخبرات المهنية</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="fw-bolde mb-0">هل إستجاب محتوى الدورة لمستوى تطلعاتكم</h6>
                                                    <p class="card-text font-small-3 mb-0">هل إستجاب محتوى الدورة لمستوى
                                                        تطلعاتكم
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">25</h4>
                                                    <p class="card-text font-small-3 mb-0">تمارين تطبيقية</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">12</h4>
                                                    <p class="card-text font-small-3 mb-0">تحليل الواقع العملي</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">147</h4>
                                                    <p class="card-text font-small-3 mb-0">تبادل الخبرات المهنية</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>



                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="wilaya">الولاية</label>
                                <select class="form-select" name="wilaya_id" id="wilaya">
                                    @foreach ($listwilayas as $listwilaya)
                                        <option value="{{ $listwilaya->id }}">{{ $listwilaya->name_ar }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Company Table Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="table-responsive">



                                        <div id="wilayaContent">
                                            <!-- Loading message -->
                                            {{-- <p id="loadingMessage">اختر الولاية من أجل مشاهدة التقييمات</p> --}}
                                            <div class="spinner-border text-primary" role="status" id="loadingMessage">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <!-- Dynamic content will be inserted here -->
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!--/ Company Table Card -->


                    </div>




                </section>

            </div>
        </div>

    </div>

    </div>
@endsection


@push('custom-js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener to the dropdown
            document.getElementById('wilaya').addEventListener('change', function() {
                // Display loading message
                //    document.getElementById('loadingMessage').style.display = 'block';
                var loadingMessage = document.getElementById('loadingMessage');
                if (loadingMessage) {
                    loadingMessage.style.display = 'block';
                }
                // Get the selected wilaya_id
                var selectedWilayaId = this.value;

                //   console.log(selectedWilayaId);

                // Using Fetch to get data dynamically based on the selected wilaya_id
                fetch('get-wilaya-data/' + selectedWilayaId) // Replace with your actual route
                    .then(response => response.json())
                    .then(data => {
                        // Update the content dynamically
                        console.log(data);
                        document.getElementById('wilayaContent').innerHTML = `
                            <div class="card">
                                                    <div class="card-body">
                                                        <div class="row pb-50">
                                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-1 mt-lg-0">
                                                                <div class="mb-1 mb-lg-0">
                                                                    <h2 class="fw-bolder mb-25"> ${data.wilaya_name}</h2>
                                                                    <h2 class="fw-bolder mb-25">${data.count_contenu_pedagogique}</h2>
                                                                    <p class="card-text fw-bold mb-2">متربص</p>
                                                                    <div class="font-medium-2">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                      
                                                    
                                                       
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>هل إستجاب محتوى الدورة لمستوى تطلعاتكم</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50"> أعلى من المستوى المنتظر: ${data.percent_performance_level0 == null ? '0' : data.percent_performance_level0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_performance_level0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_performance_level0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">في المستوى المنتظر:  ${data.percent_performance_level1 == null ? '0' : data.percent_performance_level1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_performance_level1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_performance_level1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50"> أدنى من المستوى المنتظر : ${data.percent_performance_level2 == null ? '0' : data.percent_performance_level2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_performance_level2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_performance_level2}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>المحتوى البيداغوجي للمقياس </h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_contenu_pedagogique0 == null ? '0' : data.percent_contenu_pedagogique0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_pedagogique0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_pedagogique0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_contenu_pedagogique1 == null ? '0' : data.percent_contenu_pedagogique1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_pedagogique1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_pedagogique1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_contenu_pedagogique2 == null ? '0' : data.percent_contenu_pedagogique2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_pedagogique2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_pedagogique2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_contenu_pedagogique3 == null ? '0' : data.percent_contenu_pedagogique3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_pedagogique3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_pedagogique3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>مدى علاقة و إرتباط المحتوى بمهامكم </h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_contenu_et_les_missions0 == null ? '0' : data.percent_contenu_et_les_missions0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_et_les_missions0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_et_les_missions0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_contenu_et_les_missions1 == null ? '0' : data.percent_contenu_et_les_missions1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_et_les_missions1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_et_les_missions1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_contenu_et_les_missions2 == null ? '0' : data.percent_contenu_et_les_missions2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_et_les_missions2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_et_les_missions2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_contenu_et_les_missions3 == null ? '0' : data.percent_contenu_et_les_missions3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_contenu_et_les_missions3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_contenu_et_les_missions3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        
                                                        
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4> الحجم الساعي المخصص للمقياس </h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_volume_horaire0 == null ? '0' : data.percent_volume_horaire0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_volume_horaire0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_volume_horaire0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_volume_horaire1 == null ? '0' : data.percent_volume_horaire1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_volume_horaire1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_volume_horaire1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_volume_horaire2 == null ? '0' : data.percent_volume_horaire2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_volume_horaire2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_volume_horaire2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_volume_horaire3 == null ? '0' : data.percent_volume_horaire3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_volume_horaire3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_volume_horaire3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->
                                                               
                                                        
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>    الوثائق البيداغوجية المقدمة </h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_documentation0 == null ? '0' : data.percent_documentation0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_documentation0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_documentation0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_documentation1 == null ? '0' : data.percent_documentation1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_documentation1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_documentation1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_documentation2 == null ? '0' : data.percent_documentation2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_documentation2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_documentation2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_documentation3 == null ? '0' : data.percent_documentation3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_documentation3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_documentation3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                                 
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>قدرة المكون على إيصال المعلومات </h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_force_formateur0 == null ? '0' : data.percent_force_formateur0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_force_formateur0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_force_formateur0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_force_formateur1 == null ? '0' : data.percent_force_formateur1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_force_formateur1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_force_formateur1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                                  
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>قدرة المكون على الإجابة على تساؤلات المتكونين</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_reponse_formateur0 == null ? '0' : data.percent_reponse_formateur0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_reponse_formateur0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_reponse_formateur0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_reponse_formateur1 == null ? '0' : data.percent_reponse_formateur1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_reponse_formateur1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_reponse_formateur1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>علاقة المكون بالمتكونين</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_relation0 == null ? '0' : data.percent_relation0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_relation0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_relation0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_relation1 == null ? '0' : data.percent_relation1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_relation1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_relation1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>المناقشة</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_debat0 == null ? '0' : data.percent_debat0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_debat0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_debat0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_debat1 == null ? '0' : data.percent_debat1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_debat1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_debat1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>الإستعانة بأمثلة توضيحية</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_exemple0 == null ? '0' : data.percent_exemple0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_exemple0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_exemple0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_exemple1 == null ? '0' : data.percent_exemple1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_exemple1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_exemple1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>تمارين تطبيقية</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_exercice0 == null ? '0' : data.percent_exercice0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_exercice0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_exercice0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_exercice1 == null ? '0' : data.percent_exercice1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_exercice1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_exercice1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4> تبادل الخبرات المهنية</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_experience0 == null ? '0' : data.percent_experience0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_experience0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_experience0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_experience1 == null ? '0' : data.percent_experience1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_experience1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_experience1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        
                                                        
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>تحليل الواقع العملي</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">     نعم: ${data.percent_analyse0 == null ? '0' : data.percent_analyse0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_analyse0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_analyse0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  لا:  ${data.percent_analyse1 == null ? '0' : data.percent_analyse1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_analyse1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_analyse1}%"></div>
                                                                </div>
                                                            </div>
                                                          
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->
 
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>    تقييمكم لوضعية القاعات بمركز التكوين</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_situation_des_salles0 == null ? '0' : data.percent_situation_des_salles0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_situation_des_salles0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_situation_des_salles0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_situation_des_salles1 == null ? '0' : data.percent_situation_des_salles1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_situation_des_salles1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_situation_des_salles1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_situation_des_salles2 == null ? '0' : data.percent_situation_des_salles2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_situation_des_salles2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_situation_des_salles2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_situation_des_salles3 == null ? '0' : data.percent_situation_des_salles3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_situation_des_salles3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_situation_des_salles3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>تقييمكم للوسائل المادية و المعلوماتية المستعملة في قاعات التدريس</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_logistique0 == null ? '0' : data.percent_logistique0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_logistique0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_logistique0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_logistique1 == null ? '0' : data.percent_logistique1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_logistique1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_logistique1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_logistique2 == null ? '0' : data.percent_logistique2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_logistique2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_logistique2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_logistique3 == null ? '0' : data.percent_logistique3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_logistique3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_logistique3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->

                                                        
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>تقييمكم لخدمات الإطعام المقدمة في مركز التكوين</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_restauration_aux_centres0 == null ? '0' : data.percent_restauration_aux_centres0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_centres0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_centres0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_restauration_aux_centres1 == null ? '0' : data.percent_restauration_aux_centres1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_centres1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_centres1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_restauration_aux_centres2 == null ? '0' : data.percent_restauration_aux_centres2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_centres2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_centres2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_restauration_aux_centres3 == null ? '0' : data.percent_restauration_aux_centres3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_centres3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_centres3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->
       
                                                        <hr>
                                                        <div class="row avg-sessions pt-50">
                                                            <h4>تقييمكم لظروف الإيواء و الإطعام بالفندق</h4>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">    جداً مرضي: ${data.percent_restauration_aux_hotel0 == null ? '0' : data.percent_restauration_aux_hotel0} %</p>
                                                                <div class="progress progress-bar-primary" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_hotel0}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_hotel0}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-2">
                                                                <p class="mb-50">  مرضي:  ${data.percent_restauration_aux_hotel1 == null ? '0' : data.percent_restauration_aux_hotel1} %</p>
                                                                <div class="progress progress-bar-warning" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_hotel1}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_hotel1}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-50">  مرضي جزئياً : ${data.percent_restauration_aux_hotel2 == null ? '0' : data.percent_restauration_aux_hotel2} %</p>
                                                                <div class="progress progress-bar-danger" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_hotel2}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_hotel2}%"></div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <p class="mb-50"> غير مرضي : ${data.percent_restauration_aux_hotel3 == null ? '0' : data.percent_restauration_aux_hotel3} %</p>
                                                                <div class="progress progress-bar-info" style="height: 6px">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow=" ${data.percent_restauration_aux_hotel3}" aria-valuemin="0" aria-valuemax="100" style="width:  ${data.percent_restauration_aux_hotel3}%"></div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <!--  ------------------------------- -->




                                                        
                                                    </div>
                                                </div>



                                <!-- Add more dynamic content as needed -->
                            `;

                        // Hide loading message
                        //   document.getElementById('loadingMessage').style.display = 'none';
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                        // Handle error and hide loading message
                        document.getElementById('loadingMessage').innerHTML = 'Error loading data.';
                    });
            });
        });
    </script>
@endpush
