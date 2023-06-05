<?php
  
namespace App\Http\Controllers;

use App\Models\Certificates;
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\User;
use App\Models\Document;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function generatePDF(Request $request, $id)
    {
        $meses_en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $meses_es = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
        
        $month = date('F');
        $month_es = str_replace($meses_en, $meses_es, $month);

        function convertNumberToWords($number)
        {
            $units = [
                '', 'un', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',
                'once', 'doce', 'trece', 'catorce', 'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve'
            ];
        
            $tens = [
                '', '', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'
            ];
        
            $hundreds = [
                '', 'ciento', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos',
                'setecientos', 'ochocientos', 'novecientos'
            ];
        
            if ($number == 0) {
                return 'cero';
            }
        
            if ($number < 0) {
                return 'menos ' . convertNumberToWords(abs($number));
            }
        
            $words = '';
        
            if (($number / 1000000) >= 1) {
                $words .= convertNumberToWords((int)($number / 1000000)) . ' millón ';
                $number %= 1000000;
            }
        
            if (($number / 1000) >= 1) {
                $words .= convertNumberToWords((int)($number / 1000)) . ' mil ';
                $number %= 1000;
            }
        
            if (($number / 100) >= 1) {
                $words .= $hundreds[(int)($number / 100)] . ' ';
                $number %= 100;
            }
        
            if ($number >= 20) {
                $words .= $tens[(int)($number / 10)] . ' ';
                $number %= 10;
            }
        
            if ($number > 0) {
                $words .= $units[$number] . ' ';
            }
            
            return trim($words);
        
        }


        $user = User::find($id);
        $people = People::find($user->id);
        
        if($request->contract == "on" ){
            $contract = $people->contracts->contract;
        }else{
            $contract = 0;
        }
        if($request->date_i == "on"){
            $date_i = $people->date_i;
        }else{
            $date_i = 0;
        }
        if($request->pay_per_hour == "on"){
            $pay_per_hour = $people->pay_per_hour;
            $pay_per_hour = convertNumberToWords($pay_per_hour);
        }else{
            $pay_per_hour = 0;
        }
        if($request->salary == "on"){
            $salary = $people->salary;
            $salary = convertNumberToWords($salary);
        }else{
            $salary = 0;
        }

        $data = [
            'title' => 'CERTIFICA',
            'name' => $user->name,
            't_doc' => $people->documents->type,
            'contract' => $contract,
            'doc' => $people->doc,
            'id_roles' => $user->id_roles,
            'date_i' => $date_i,
            'salary' => $salary,
            'pay_per_hour' => $pay_per_hour,
            'date_f' => $people->date_f,
            'onus' => $people->onus,
            'area' => $people->area,
            'day' => date('d'),
            'month' => $month_es,
            'year' => date('Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    

        $certificate = new Certificates();
        date_default_timezone_set("America/Bogota");
        $certificate->fecha_descarga = date("y.m.d"); 
        $certificate->hora_descarga = date("H:i:s"); 
        $certificate->des_por = $user->name;
        $certificate->id_roles = $user->id_roles;
        $certificate->id_users = $user->id;
        $confirmdate = $request->confirmdate;

        if($user->id_roles == '2'){
            $certificate->save();
            return $pdf->download('CertificadoLaboral.pdf');
        }else{

            if($confirmdate == $people->date){
                
                $certificate->save();
                return $pdf->download('CertificadoLaboral.pdf');

            }else{
                return '<script language="javascript">alert("Fecha de expedición errónea");window.location.href="home"</script>';
            }
            
        }

    }

}