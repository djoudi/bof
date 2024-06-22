<div class="card">
    <div class="card-body">
        <div class="row pb-50">
            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-1 mt-lg-0">
                <div class="mb-1 mb-lg-0">
                    <h2 class="fw-bolder mb-25">152</h2>
                    <p class="card-text fw-bold mb-2">متربص</p>
                    <div class="font-medium-2">
                       
                    </div>
                </div>
            </div>
           
        </div>
        <hr>
        <div class="row avg-sessions pt-50">
            <h4>تجربة</h4>
            <div class="col-6 mb-2">
                <p class="mb-50">مرضي جدا: %25"</p>
                <div class="progress progress-bar-primary" style="height: 6px">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 50%"></div>
                </div>
            </div>
            <div class="col-6 mb-2">
                <p class="mb-50">مرضي:  %45</p>
                <div class="progress progress-bar-warning" style="height: 6px">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width: 60%"></div>
                </div>
            </div>
            <div class="col-6">
                <p class="mb-50">مرضي جزئيا : %90</p>
                <div class="progress progress-bar-danger" style="height: 6px">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width: 70%"></div>
                </div>
            </div>
            <div class="col-6">
                <p class="mb-50">غير مرضي: %25</p>
                <div class="progress progress-bar-success" style="height: 6px">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width: 90%"></div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- -------------------------------------- --}}

               {{-- ----------------- --}}
               <div class="card">
                <div class="card-body">
                    <div class="row pb-50">
                        <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-1 mt-lg-0">
                            <div class="mb-1 mb-lg-0">
                                <h2 class="fw-bolder mb-25">{{ $wilaya->wilaya_name ?? "Noo" }}</h2>
                                <h2 class="fw-bolder mb-25">152</h2>
                                <p class="card-text fw-bold mb-2">متربص</p>
                                <div class="font-medium-2">
                                   
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <hr>
                    {{-- ------------------------------------------ --}}
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ optional($wilaya)->percent_force_formateur0 ?? 0 }}%;" aria-valuenow="{{ optional($wilaya)->percent_force_formateur0 ?? 0 }}" aria-valuemin="0" aria-valuemax="100">{{ optional($wilaya)->percent_force_formateur0 ?? 0 }}%</div>
                    </div>
                    <span class="fw-bolder">{{ optional($wilaya)->percent_force_formateur0 ?? 0 }}%</span>
                    {{-- ------------------------------------------ --}}

                    <div class="row avg-sessions pt-50">
                        <h4>تجربة</h4>
                        <div class="col-6 mb-2">
                            <p class="mb-50">مرضي جدا: %25"</p>
                            <div class="progress progress-bar-primary" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <p class="mb-50">مرضي:  %45</p>
                            <div class="progress progress-bar-warning" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-50">مرضي جزئيا : %90</p>
                            <div class="progress progress-bar-danger" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-50">غير مرضي: %25</p>
                            <div class="progress progress-bar-success" style="height: 6px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                

                    
                </div>
            </div>
            {{-- ----------------- --}}



            
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
       
            
               
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>