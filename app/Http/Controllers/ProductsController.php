<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
class ProductsController extends Controller
{
    public function index(Product $product){
    	return $product->getProducts();
    }
}