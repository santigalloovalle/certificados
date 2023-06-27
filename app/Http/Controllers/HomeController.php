<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Certificates;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $people = Auth::user();
        switch ($people->id_roles) {
            case '2':
                return view('users.admins.index');
                break;
            case '1':
                $error = ['name'=>"423",'desc'=>"Locked"];
                $people = DB::table('people')->where('id_users', $people->id)->first();
                $users = Auth::user();
                if ($people->doc == '0') {
                    return redirect(route('people.edit',$people->id));
                }
                else{
                    if ($people->id_contracts == '1'){
                        return view('home');
                    }
                    else{
                        return redirect(route('users.index', compact('people')));
                    }
                }
                break;
            default:
            return view('users.index');
            break;
        }
    }
    public function historial()
    {
        return view('historial');
    }

    public function error()
    {
        return view('auth.error');
    }
    public function generateWord($request, $id)

    {
        return $request;
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


        $user = DB::table('users')->where('id', $id)->first();
        $people2 = DB::table('people')->where('id', $id)->first();
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

            $name = $user->name." ".$user->last;

            $day = date('d');
            $month = $month_es;
            $year = date('Y');

        $certificate = new Certificates();
        date_default_timezone_set("America/Bogota");
        $certificate->download_date = date("y.m.d"); 
        $certificate->download_hour = date("H:i:s"); 
        $certificate->id_people = $people2->id;
        $certificate->id_users = Auth::user()->id;
        $confirmdate = $request->confirmdate;

        if(Auth::user()->id_roles == '2'){
            $certificate->save();
            return view('myWord',compact('user','people','name','day','month','year','contract','salary','pay_per_hour','date_i'));
        }else{

            if($confirmdate == $people->date){
                
                $certificate->save();
                return view('myWord');

            }else{
                return '<script language="javascript">alert("Fecha de expedición errónea");window.location.href="/home"</script>';
            }
            
        }

    }

}
