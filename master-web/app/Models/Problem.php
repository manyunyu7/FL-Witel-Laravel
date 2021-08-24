<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $append = ['divisi_name'];

    function getDivisiNameAttribute()
    {
        return $this->getDivisionName($this->id_divisi);
    }
    function getDivisionName($id)
    {
        $name = "";
        switch ($id) {
            case '1':
                $name = "CME";
                break;
            case '2':
                $name = "SERVICE NODE";
                break;
            case '3':
                $name = "TRANSPORT";
                break;

            default:
                # code...
                break;
        }
        return $name;
    }
}
