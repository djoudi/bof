<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\EvaluationsBackup;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       // $wilayas = Wilaya::withCount('users')->get();
      //  $wilayas = Wilaya::withCount('evaluations')->paginate(10);

      // dd($wilayas);
       // return view('admin',compact('wilayas'));

        return redirect('admin/dash');
    }

    public function copyData(Request $request)
    {
      // Copy data from Table A1 to Table A2
      // Assuming you have models for Table A1 and Table A2, replace them accordingly
      // For example, if your models are `A1` and `A2`, you can use: A1::all() and A2::create()

      \DB::beginTransaction();

      try {
          $dataToCopy = Evaluation::all();

          foreach ($dataToCopy as $item) {
            EvaluationsBackup::create($item->toArray());
          }

          // Clear data from Table A1
          Evaluation::truncate();

          \DB::commit();
          flash()
          ->translate('ar')
          ->addSuccess('تمت العملية بنجاح.', 'تهانينا!');
          return back()->with('successMessage', 'Data copied successfully!');

         // return response()->json(['success' => true]);
      } catch (\Exception $e) {
          \DB::rollback();

          //return response()->json(['success' => false, 'error' => $e->getMessage()]);
          flash()
          ->translate('ar')
          ->addError('   او لا يوجد تقييمات لم تتم العملية.', 'خطأ ');
          return back()->with('errorMessage', 'An error occurred while copying data.');

         // return redirect()->route('error')->with('errorMessage', 'An error occurred while copying data.');
      }
  }

public function stats() 
 {
  $listwilayas = [];

  return view('admin_dash_stats',compact('listwilayas'));
  
}
    
    public function dash()
    {
       $listwilayas = Wilaya::all();
   
    /*
   // performance_level   0 1 2    هل إستجاب محتوى الدورة لمستوى تطلعاتكم

  //  contenu_pedagogique_module   0 1 2 3      المحتوى البيداغوجي للمقياس

    //contenu_et_les_missions   0  1 2 3    مدى علاقة و إرتباط المحتوى بمهامكم
   // volume_horaire   0  1 2 3      الحجم الساعي المخصص للمقياس
   // documentation   0  1 2 3       الوثائق البيداغوجية المقدمة
   // force_formateur   0  1       قدرة المكون على إيصال المعلومات
   // reponse_formateur   0  1      قدرة المكون على الإجابة على تساؤلات المتكونين
    //relation   0  1         علاقة المكون بالمتكونين
   // debat   0  1              المناقشة
   // exemple   0  1         الإستعانة بأمثلة توضيحية
    //exercice   0  1        تمارين تطبيقية
   // situation_des_salles   0  1 2 3     تبادل الخبرات المهنية
   // logistique   0  1 2 3        تحليل الواقع العملي
   // restauration_aux_centres   0  1 2 3      تقييمكم لوضعية القاعات بمركز التكوين
    restauration_aux_hotel   0  1 2 3      تقييمكم لظروف الإيواء و الإطعام بالفندق
   */
  $wilayaData = Evaluation::select('evaluations.id as Num')
    
     // ->leftJoin('evaluations', 'wilayas.id', '=', 'evaluations.wilaya_id')
    
      ->selectRaw('COUNT(evaluations.contenu_pedagogique_module) as count_contenu_pedagogique')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.performance_level = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_performance_level0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.performance_level = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_performance_level1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.performance_level = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_performance_level2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions3')
  
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.force_formateur = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_force_formateur0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.force_formateur = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_force_formateur1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.reponse_formateur = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_reponse_formateur0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.reponse_formateur = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_reponse_formateur1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.relation = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_relation0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.relation = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_relation1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.debat = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_debat0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.debat = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_debat1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exemple = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exemple0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exemple = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exemple1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exercice = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exercice0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exercice = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exercice1')

      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.experience = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_experience0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.experience = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_experience1')

      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.analyse = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_analyse0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.analyse = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_analyse1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel3')
      ->groupBy('evaluations.id')
      //->where('wilayas.id', $wilayaId) // Add this line for filtering by wilaya_id
      ->get();

      //  return response()->json($wilayaData);
    
    //dd($wilayaData->get());
 

   

//dd($wilayas);
       
        return view('admin_dash',compact('listwilayas'));
    }
    public function calculatePercentageForValue($columnName, $value)
    {
        $totalRows = self::count(); // Total number of rows in the table

        if ($totalRows === 0) {
            return 0; // Avoid division by zero
        }

        $occurrences = self::where($columnName, $value)->count(); // Number of occurrences of the value in the column

        // Calculate the percentage
        $percentage = ($occurrences / $totalRows) * 100;

        return round($percentage, 2); // Round to two decimal places
    }

    /**
     * Get percentages for all values in each evaluation column.
     *
     * @return array
     */
    public function getAllValuePercentages()
    {
        $valuePercentages = [];

        // Specify the columns for which you want to calculate percentages
        $columns = [
            'performance_level',
            'contenu_pedagogique_module',
            'contenu_et_les_missions',
            // ... add other column names here ...
            'restauration_aux_hotel',
        ];

        // Specify the values for which you want to calculate percentages (0, 1, 2, 3)
        $values = [0, 1, 2, 3];

        foreach ($columns as $column) {
            foreach ($values as $value) {
                $valuePercentages[$column][$value] = $this->calculatePercentageForValue($column, $value);
            }
        }

        return $valuePercentages;
    }







    public function getWilayaData($wilayaId)
    {
      $wilayaData = Wilaya::select('wilayas.id as wilaya_id', 'wilayas.name_ar as wilaya_name')
    
      ->leftJoin('evaluations', 'wilayas.id', '=', 'evaluations.wilaya_id')
      ->selectRaw('COUNT(evaluations.contenu_pedagogique_module) as count_contenu_pedagogique')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.performance_level = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_performance_level0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.performance_level = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_performance_level1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.performance_level = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_performance_level2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_pedagogique_module = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_pedagogique3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.contenu_et_les_missions = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_contenu_et_les_missions3')
  
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.volume_horaire = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_volume_horaire3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.force_formateur = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_force_formateur0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.force_formateur = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_force_formateur1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.documentation = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_documentation3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.reponse_formateur = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_reponse_formateur0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.reponse_formateur = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_reponse_formateur1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.relation = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_relation0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.relation = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_relation1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.debat = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_debat0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.debat = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_debat1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exemple = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exemple0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exemple = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exemple1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exercice = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exercice0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.exercice = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_exercice1')

      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.experience = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_experience0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.experience = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_experience1')

      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.analyse = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_analyse0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.analyse = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_analyse1')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.situation_des_salles = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_situation_des_salles3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.logistique = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_logistique3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_centres = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_centres3')
  
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 0 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel0')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 1 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel1')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 2 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel2')
      ->selectRaw('ROUND((COALESCE(COUNT(CASE WHEN evaluations.restauration_aux_hotel = 3 THEN 1 END), 0) / COUNT(evaluations.id)) * 100, 2) as percent_restauration_aux_hotel3')
      ->groupBy('wilayas.id', 'wilayas.name_ar')
      ->where('wilayas.id', $wilayaId) // Add this line for filtering by wilaya_id
      ->first();

        return response()->json($wilayaData);
    }
}
