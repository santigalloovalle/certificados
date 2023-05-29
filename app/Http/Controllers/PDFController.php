<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generatePDF()
    {
        $meses_en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $meses_es = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
        
        $month = date('F');
        $month_es = str_replace($meses_en, $meses_es, $month);




        $user = Auth::user();
        $people = People::find($user->id);

        $salary = $people->salary;

        $data = [
            'title' => 'CERTIFICA',
            'name' => $user->name,
            't_doc' => $people->documents->type,
            'contract' => $people->contracts->contract,
            'doc' => $people->doc,
            'id_roles' => $user->id_roles,
            'date_i' => $people->date_i,
            'salary' => $salaryp = People::convertNumberToWords($salary),
            'date_f' => $people->date_f,
            'onus' => $people->onus,
            'area' => $people->area,
            'day' => date('d'),
            'month' => $month_es,
            'year' => date('Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('CertificadoLaboral.pdf');
    }
}