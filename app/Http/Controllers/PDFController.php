<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Document;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
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

    public function confirmDate()
    {
        $user = Auth::user();
        $people = People::find($user->id);

        if($date==confirmdate){
            return $pdf->download('CertificadoLaboral.pdf');
        }
    }

    public function generatePDF()
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


        $user = Auth::user();
        $people = People::find($user->id);

        $salary = $people->salary;
        $salary = convertNumberToWords($salary);
        $data = [
            'title' => 'CERTIFICA',
            'name' => $user->name,
            't_doc' => $people->documents->type,
            'contract' => $people->contracts->contract,
            'doc' => $people->doc,
            'id_roles' => $user->id_roles,
            'date_i' => $people->date_i,
            'salary' => $salary,
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