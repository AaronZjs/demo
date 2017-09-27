<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{

    protected $table = 'demo';


    /*
     *   获取Demo表的数据
    */
    public function getData()
    {
        return $this->get();
        // return array('1','2');
    }

}