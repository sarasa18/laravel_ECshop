<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ItemController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('user.index', compact('products'));
    }
}
