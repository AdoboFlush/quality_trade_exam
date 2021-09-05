<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Exceptions\CustomApiException;
use Validator;


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
        $response = [];
        $status = 'success';
        $message = 1;

        try{

            if($keyword == 'add'){

                $request_data = json_decode($request->payload, true);
                if(empty($request_data)){
                    throw new CustomApiException('No input json payload received');
                }

                $product = new Product();
                $rules = [
                    'name'=> 'required|unique:products|max:255',
                    'price'=>'required|numeric|between:0.00,99999999.99',
                    'description'=>'required'
                ];
            
                $validator = Validator::make($request_data, $rules);
                if ($validator->passes()) {
                    $validated_data = $validator->validated();
                    $message = $product->saveProduct($validated_data);
                } else {
                    $error_arr = [];
                    foreach ($validator->errors()->all() as $message) {
                        $error_arr[] = $message;
                    }
                    $error_msg = json_encode($error_arr);
                    throw new CustomApiException($error_msg);
                    $status= 'error';
                }

            }
            elseif($keyword == 'update'){

                $request_data = json_decode($request->payload, true);
                if(empty($request_data)){
                    throw new CustomApiException('No input json payload received');
                }

                $product = new Product();
                $rules = [
                    'id'=>'required|numeric',
                    'name'=> 'required|unique:products|max:255',
                    'price'=>'required|numeric|between:0.00,99999999.99',
                    'description'=>'required'
                ];
            
                $validator = Validator::make($request_data, $rules);
                if ($validator->passes()) {
                    $validated_data = $validator->validated();
                    $message = $product->updateProduct($validated_data);
                } else {
                    $error_arr = [];
                    foreach ($validator->errors()->all() as $message) {
                        $error_arr[] = $message;
                    }
                    $error_msg = json_encode($error_arr);
                    throw new CustomApiException($error_msg);
                    $status= 'error';
                }

            }
            elseif($keyword == 'delete'){

                $request_data = json_decode($request->payload, true);
                if(empty($request_data)){
                    throw new CustomApiException('No input json payload received');
                }

                $product = new Product();
                $rules = [
                    'id'=>'required|numeric'
                ];
            
                $validator = Validator::make($request_data, $rules);
                if ($validator->passes()) {
                    $validated_data = $validator->validated();
                    $id = $validated_data['id'];
                    $message = Product::destroy($id);
                } else {
                    $error_arr = [];
                    foreach ($validator->errors()->all() as $message) {
                        $error_arr[] = $message;
                    }
                    $error_msg = json_encode($error_arr);
                    throw new CustomApiException($error_msg);
                    $status= 'error';
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


}
