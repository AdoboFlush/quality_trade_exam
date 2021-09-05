<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Exceptions\CustomApiException;

class ProductController extends Controller
{

    // Handles GET functions
    public function index_get(Request $request){

        $keyword = $request->keyword;
        $response = [];
        $status = 'success';

        try{

            if($keyword == 'view'){

                $id = $request->id;
                $page = $request->page;
                $limit = !empty($request->limit) ? $request->limit : 10;
    
                if(!empty($id) && is_numeric($id)){
                    $product = Product::find($id);
                    $message = $product;
                }else{
                    if(is_numeric($page) && is_numeric($limit)){
                        $offset = $page > 1 ? ( ($page - 1) * $limit ) - 1 : 0;
                        $products = Product::offset($offset)->limit($limit)->get();
                        $message = $products;
                    }else{
                        throw new CustomApiException('Invalid Parameter Values');
                    }
                }
    
            }else{
                throw new CustomApiException('Invalid API Keyword');
            }

        }catch(CustomApiException $e){
            $message = $e->getMessage();
            $status = 'error';
        }

        $response = ['status' => $status, 'message' => $message];
        return $response; 

    }

    // Handles POST functions
    public function index_post(Request $request){

        $keyword = $request->keyword;
        if($keyword == 'store'){

        }
        elseif($keyword == 'update'){

        }
        elseif($keyword == 'delete'){
            Product::destroy($id);
        }

    }


}
