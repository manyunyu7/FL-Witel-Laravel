<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CME_PotensiPerangkat extends Model
{
    use HasFactory;
    protected $append = ['lokasi_name'];

    function getLokasiNameAttribute()
    {
        return $this->getDivisionName($this->divisi_cme);

    }
    function getDivisionName($id)
    {
        $name = "";
        switch ($id) {
            case '1':
                $name = "AHMAD YANI";
                break;
            case '2':
                $name = "TANJUNG SARI";
                break;
            case '3':
                $name = "SUMEDANG";
                break;
            case '4':
                $name = "UJUNG BERUNG";
                break;
            case '5':
                $name = "TURANGGA";
                break;
            case '6':
                $name = "TEGALEGA";
                break;

            case '7':
                $name = "DAGO";
                break;

            case '8':
                $name = "HEGARMANAH";
                break;

            case '9':
                $name = "GEGERKALONG";
                break;

            case '10':
                $name = "LEMBONG";
                break;

            case '11':
                $name = "KOPO";
                break;

            case '12':
                $name = "CIJAWURA";
                break;

            default:
                # code...
                break;
        }
        return $name;
    }
}
