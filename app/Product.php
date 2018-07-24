<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/21/2018
 * Time: 7:51 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = true;
    public function getCatNameAttribute(){
        if($this->categoryId == 3){
            return 'Bánh sinh nhật';
        }elseif ($this->categoryId == 2){
            return'Bánh mặn';
        }elseif ($this->categoryId == 1){
            return'Bánh ngọt';
        };
    }
}