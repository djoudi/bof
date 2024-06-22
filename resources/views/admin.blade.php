@extends('layouts.dash')

@section('content')
  <div class="content-header row">
                <h2> </h2>
            
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
               <!-- Small Table start -->
               <div class="row" id="table-small">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> نتائج تقييمات كل ولاية</h4>
                        </div>
                     
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>الولاية</th>
                                        <th>عدد المتربصين</th>
                                        <th>التقييم </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wilayas as $wilaya)
                                    <tr>
                                        <td>
                                            <span class="fw-bold"> {{ $wilaya->name_ar }}</span>
                                        </td>
                                        <td>
                                        {{ $wilaya->evaluations_count }}    
                                        </td>
                                        <td> </td>
                                     
                                    </tr>
                                        
                                    @endforeach
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Small Table end -->

                    </div>
                </div>

            </div> 

        </div>
        @endsection