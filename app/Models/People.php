<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function contracts(){
        return $this->belongsTo(Contract::class, 'id_contracts');
    }
    public function documents(){
        return $this->belongsTo(Document::class, 'id_documents');
    }
    public function payments(){
        return $this->belongsTo(Payment::class, 'id_payments');
    }
    public function users(){
        return $this->belongsTo(User::class, 'id_users');
    }
    public function roles(){
        return $this->belongsTo(Role::class, 'id_roles');
    }
    

    public function convertNumberToWords($number)
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
}
