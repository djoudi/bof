










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
                                            <div class="row">
                                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                                    <div class="d-flex flex-row">
                                                        <div class="avatar bg-light-primary me-2">
                                                            <div class="avatar-content">
                                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                                            </div>
                                                        </div>
                                                        <div class="my-auto">
                                                            <h4 class="fw-bolder mb-0">54</h4>
                                                            <p class="card-text font-small-3 mb-0"> قدرة المكون على الإجابة على تساؤلات المتكونين</p>
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
                                        <label  class="form-label" for="wilaya">الولاية</label>
                                        <select class="form-select" name="wilaya_id"  id="wilaya" >
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
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>الولاية</th>
                                                            {{-- <th>عدد المتربصين</th> --}}
                                                            <th>التفييم </th>                                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($wilayas as $wilaya)
                                                        <tr class="divider-primary">
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                   
                                                                    <div>
                                                                        <div class="fw-bolder">{{ $wilaya->wilaya_name }}</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="d-flex align-items-center">
                                                                   
                                                                    <span> {{ $wilaya->count_contenu_pedagogique }}    </span>
                                                                </div>
                                                            </td> --}}
                                                            <td class="text-nowrap">
                                                                <div class="d-flex flex-column">
                                                                    <p  class="fw-bolder text-primary">هل إستجاب محتوى الدورة لمستوى تطلعاتكم</p>
                                                                
                                                                    <div class="mb-25">
                                                                        <span class="fw-bolder d-block mb-2">مرضي جدا</span>
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ optional($wilaya)->percent_force_formateur0 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_force_formateur0 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_force_formateur0 ?? 0 }}%</div>
                                                                        </div>
                                                                        <span class="fw-bolder">{{ optional($wilaya)->percent_force_formateur0 ?? 0 }}%</span>
                                                                    </div>
                                                                
                                                                    <div class="mb-25">
                                                                        <span class="fw-bolder d-block mb-2">مرضي</span>
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ optional($wilaya)->percent_force_formateur1 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_force_formateur1 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_force_formateur1 ?? 0 }}%</div>
                                                                        </div>
                                                                        <span class="fw-bolder">{{ optional($wilaya)->percent_force_formateur1 ?? 0 }}%</span>
                                                                    </div>
                                                                
                                                                    <div class="mb-25">
                                                                        <span class="fw-bolder d-block mb-2">مرضي جزئيا</span>
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{ optional($wilaya)->percent_force_formateur2 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_force_formateur2 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_force_formateur2 ?? 0 }}%</div>
                                                                        </div>
                                                                        <span class="fw-bolder">{{ optional($wilaya)->percent_force_formateur2 ?? 0 }}%</span>
                                                                    </div>
                                                                
                                                                    <div class="mb-25">
                                                                        <span class="fw-bolder d-block mb-2">غير مرضي</span>
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{ optional($wilaya)->percent_force_formateur3 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_force_formateur3 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_force_formateur3 ?? 0 }}%</div>
                                                                        </div>
                                                                        <span class="fw-bolder">{{ optional($wilaya)->percent_force_formateur3 ?? 0 }}%</span>
                                                                    </div>
                                                                </div>
                                                            {{-- ------------------------------------------                                                                 --}}
                                                            <div class="d-flex flex-column">
                                                                <p class="fw-bolder text-primary">المحتوى البيداغوجي للمقياس </p>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">مرضي جدا</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_pedagogique0 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_pedagogique0 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_pedagogique0 ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_pedagogique0 ?? 0 }}%</span>
                                                                </div>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">مرضي</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_pedagogique1 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_pedagogique1 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_pedagogique1 ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_pedagogique1 ?? 0 }}%</span>
                                                                </div>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">مرضي جزئيا</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_pedagogique2 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_pedagogique2 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_pedagogique2 ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_pedagogique2 ?? 0 }}%</span>
                                                                </div>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">غير مرضي</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_pedagogique3 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_pedagogique3 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_pedagogique3 ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_pedagogique3 ?? 0 }}%</span>
                                                                </div>
                                                            </div>
                                                            {{-- ------------------------------------------                                                                 --}}

                                                            <div class="d-flex flex-column">
                                                                <p  class="fw-bolder text-primary">المحتوى البيداغوجي للمقياس </p>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">مرضي جدا</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_et_les_missions0 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_et_les_missions0  ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_et_les_missions0  ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_et_les_missions0  ?? 0 }}%</span>
                                                                </div>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">مرضي</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_et_les_missions1 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_et_les_missions1  ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_et_les_missions1  ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_et_les_missions1  ?? 0 }}%</span>
                                                                </div>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">مرضي جزئيا</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_et_les_missions2 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_et_les_missions2  ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_et_les_missions2  ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_et_les_missions2  ?? 0 }}%</span>
                                                                </div>
                                                            
                                                                <div class="mb-25">
                                                                    <span class="fw-bolder d-block mb-2">غير مرضي</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ optional($wilaya)->percent_contenu_et_les_missions3 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_contenu_et_les_missions3  ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_contenu_et_les_missions3  ?? 0 }}%</div>
                                                                    </div>
                                                                    <span class="fw-bolder">{{ optional($wilaya)->percent_contenu_et_les_missions3  ?? 0 }}%</span>
                                                                </div>
                                                            </div>


                                                            {{-- ------------------------------------------                                                                 --}}
                                                            {{-- ------------------------------------------                                                                 --}}
                                                            {{-- ------------------------------------------                                                                 --}}
                                                            {{-- ------------------------------------------                                                                 --}}
                                                            {{-- ------------------------------------------                                                                 --}}
                                                            {{-- ------------------------------------------                                                                 --}}
                                                            {{-- ------------------------------------------                                                                 --}}
                                                
                                                   
                                                            </td>
                                                           
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                          
                                        </div>
                                      
                                    </div>
                                    {{ $wilayas->links() }}
                                </div>
                                <!--/ Company Table Card -->
        
            
                            </div>



                            
                        </section>

                    </div>
                </div>

            </div> 

        </div>
        @endsection