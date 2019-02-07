<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;

class ProductController extends Controller
{
    //
    public function index() 
    {
       return ProductCollection::collection(Product::paginate(5)); 
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }


}
