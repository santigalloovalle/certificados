<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class DemoController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $word = $this->numberToWord(120);
        print($word);
  
        $word = $this->numberToWord(4500);
        print($word);
  
        $word = $this->numberToWord(58010);
        print($word);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function numberToWord($num = '')
    {
        $num    = ( string ) ( ( int ) $num );
        
        if( ( int ) ( $num ) && ctype_digit( $num ) )
        {
            $words  = array( );
             
            $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
             
            $list1  = array('','uno','dos','tres','cuatro','cinco','seis','siete',
            'ocho', 'nueve', 'diez', 'once', 'doce', 'trece', 'catorce',
            'quince', 'dieciséis', 'diecisiete', 'dieciocho', 'diecinueve');
             
            $list2  = array('','diez','veinte','treinta','cuarenta','cincuenta','sesenta',
            'setenta', 'ochenta', 'noventa', 'cien');
             
            $list3  = array('','mil','millones','billones','trillones',
            'cuatrillones', 'quintillones', 'sextillones', 'septillones',
            'octillion', 'nonillion', 'decillion', 'undeciillion',
            'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion',
            'octodecillion', 'novemdecillion', 'vigintillion');
             
            $num_length = strlen( $num );
            $levels = ( int ) ( ( $num_length + 2 ) / 3 );
            $max_length = $levels * 3;
            $num    = substr( '00'.$num , -$max_length );
            $num_levels = str_split( $num , 3 );
             
            foreach( $num_levels as $num_part )
            {
                $levels--;
                $hundreds   = ( int ) ( $num_part / 100 );
                $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Ciento' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
                $tens       = ( int ) ( $num_part % 100 );
                $singles    = '';
                 
                if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 )
            {
                $commas = $commas - 1;
            }
             
            $words  = implode( ', ' , $words );
             
            $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
            if( $commas )
            {
                $words  = str_replace( ',' , ' y' , $words );
            }
             
            return $words;
        }
        else if( ! ( ( int ) $num ) )
        {
            return 'Cero';
        }
        return '';
    }
}