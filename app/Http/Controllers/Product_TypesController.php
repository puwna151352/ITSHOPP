<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\productType;
class ProductTypeController extends Controller

{
    public function __construct()
{
$this->middleware('auth', ['only' => ['create', 'store', 'edit',
'delete']]);
// or
$this->middleware('auth', ['except' => ['index', 'show']]);
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_ty = ProductType::all();
        return view('product_type.index',compact('product_ty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}