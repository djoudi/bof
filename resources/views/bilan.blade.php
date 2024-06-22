@extends('layouts.dash')

@section('content')
  <div class="content-header row">
                <h2 class="text-center text-danger mb-2">حصيلة عمليات التكوين المبادر بها من طرف الولاية والبلديات التابعة لها الخاصة بالسداسيين الأول و
                    الثاني لسنة 2023                     </h2>
            
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                       
                           <!-- Basic multiple Column Form section start -->
   <section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form class="form"  method="POST" action="{{ route('bilan.store') }}">
                        @csrf
                        <div class="row">


                            <div class="col-md-6 col-12" >
                                <div class="mb-1">
                                    <label  class="form-label" for="formation">التكوين</label>
                                    <select  class="form-select"  name="formation" id="formation">
                                        <option>اختر</option>
                                        @foreach ($data['formation'] as $value=>$label )
                                            <option value="{{ $value }}"> {{ $label }} </option>
                                        @endforeach
                                    </select>
                                    @error('formation') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="type_formation">موضوع التكوين </label>
                                    <input type="text" name="type_formation"  id="type_formation" class="form-control"  />
                                </div>
                            </div>

                            {{-- <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="nom_ecole"> مكان التكوين  </label>
                                    <input type="text" name="nom_ecole"  id="nom_ecole" class="form-control"  />
                                </div>
                            </div>
                          --}}


                     
                          <div class="col-md-6 col-12" >
                                <div class="mb-1" >
                                    <label  class="form-label" for="wilaya">الولاية</label>
                                    <select  class="form-select" name="wilaya_id"  id="wilaya" >
                                         <option> اختر الولاية </option> 

                                        @foreach ($wilayas as $wilaya)
                                        <option value="{{ $wilaya->id }}">{{ $wilaya->name_ar }}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label  class="form-label" for="commune">البلدية</label>
                                    <select class="form-select" name="commune_id"  id="commune">
                                      
                                    </select>
                                </div>
                            </div> 

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label  class="form-label" for="center">مكان التكوين </label>
                                    <select class="form-select" name="center_id"  id="center">
                                        <option>اختيار مكان التكوين </option>
                                        @foreach ($centers as $center)
                                        <option value="{{ $center->id }}">{{ $center->nom_ar }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                           


                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label  class="form-label" for="grade"> الرتبةأو الوظيفة المعنية</label>
                                    <select class="form-select" name="grade_id"  id="grade">
                                        <option>اختيار الرتبة </option>
                                        @foreach ($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>


                                <fieldset class="border rounded-3 p-3 row  align-items-center" x-data="{
                                    num_male: 0,
                                    num_fmale: 0,
                                    get sum() {
                                        return parseFloat(this.num_male) + parseFloat(this.num_fmale);
                                    }
                                }">
                                    <legend>عدد الموظفين المكونين</legend>
                                    <div class="col-4">
                                        <label class="sr-only" for="male">ذكر </label>
                                        <input type="number" name="num_male" class="form-control" id="male"  x-model="num_male" placeholder="ذكر ">
                                      </div>
                                      <div class="col-4">
                                          <label class="sr-only" for="fmale">أنثى </label>
                                          <input type="number" name="num_fmale" class="form-control" id="fmale"  x-model="num_fmale" placeholder="أنثى ">
                                        </div>
                                        <div class="col-4">
                                          <label class="sr-only" for="total">المجموع </label>
                                          <input type="number" name="num_total"  class="form-control" id="total" x-model="sum"  placeholder="المجموع " readonly>
                                        </div>
                                         
                                </fieldset>
                         
                               
                               
                               

                            

                        

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="date_fromation">   تاريخ انطلاق التكوين</label>
                                    <input type="date" name="date_fromation" id="date_fromation" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="duree"> مدة التكوين  </label>
                                    <input type="text" name="duree"  id="duree" class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="responsables_formation">المشرفين على التكوين </label>
                                    <input type="text" name="responsables_formation"  id="responsables_formation" class="form-control" />
                                </div>
                            </div>

                           

                          



                         


                  
                           
                            <div class="col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="observations">ملاحظات</label>
                                    <textarea class="form-control" value="observations" id="observations" rows="3" placeholder="إقتراحات"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1">إرسال</button>
                                <button type="reset" class="btn btn-outline-secondary">إعادة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Floating Label Form section end -->


                    </div>
                </div>

            </div> 

        </div>
        @endsection


        @push('custom-js')
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
     document.getElementById('wilaya').addEventListener('change', function () {
            var selectedWilayaId = this.value;
    
            if (selectedWilayaId !== '') {
                // Make an AJAX request to get communes for the selected wilaya
                axios.get(`get-communes/${selectedWilayaId}`)
                    .then(function (response) {
                        var communes = response.data;
    
                        // Clear existing options
                        var communeSelect = document.getElementById('commune');
                        communeSelect.innerHTML = '<option value="0">اختيار البلدية</option>';
    
                        // Populate the commune dropdown with the new options
                        communes.forEach(function (commune) {
                            var option = document.createElement('option');
                            option.value = commune.id;
                            option.text = commune.name_ar;
                            communeSelect.add(option);
                        });
                    })
                    .catch(function (error) {
                        console.error('Error fetching communes', error);
                    });
            } else {
                // If no wilaya is selected, clear and disable the commune dropdown
                document.getElementById('commune').innerHTML = '<option value="0">اختيار البلدية</option>';
            }
        });
</script>
       
        @endpush