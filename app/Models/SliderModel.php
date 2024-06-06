<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{

    use HasFactory;


    protected $table = 'slider';


    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecord()
    {
        return self::select('slider.*','users.name as created_by_name')
        ->join('users', 'users.id', '=', 'slider.created_by')
        ->where('slider.is_delete', '=', 0)
        ->orderBy('slider.id', 'desc')
        ->paginate(20);
}



static public function getRecordActive()
{
    return self::select('slider.*')
    ->join('users', 'users.id', '=', 'slider.created_by')
    ->where('slider.is_delete', '=', 0)
    ->where('slider.status', '=', 0)
    ->orderBy('slider.name', 'asc')
    ->get();


}






}
