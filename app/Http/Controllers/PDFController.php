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
    public function generatePDF()
    {
        $user = Auth::user();
        $people = People::find($user->id);
        $data = [
            'title' => 'CERTIFICA',
            'name' => $people->name,
            't_doc' => $people->documents->type,
            'doc' => $people->doc,
            'id_roles' => $user->id_roles,
            'day' => date('d'),
            'month' => date('m'),
            'year' => date('Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('CertificadoLaboral.pdf');
    }
}