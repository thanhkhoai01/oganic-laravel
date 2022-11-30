<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    public function getProductsbByCateoryId($id){
        $products = DB::table('products')->where('categoryId','=',$id);
        return $products;
    }
}
