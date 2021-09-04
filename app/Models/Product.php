<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function saveProduct($data){

        $model = $this;
        $model->name = $data['name'];
        $model->price = $data['price'];
        $model->description = $data['description'];
        $model->save();
        return $model->id;

    }

    public function updateProduct($data){
        
        $model = $this;
        $model = $this->find($data['id']);
        $model->name = $data['name'];
        $model->price = $data['price'];
        $model->description = $data['description'];
        $model->save();
        return $model->id;

    }


}
