<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuProductRequest;
use App\Http\Requests\UpdateMenuProductRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\MenuProduct;
use Illuminate\Http\Request;

class MenuProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(MenuProduct::all(), 200);
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
    public function store(StoreMenuProductRequest $request)
    {
        $menuProduct = MenuProduct::create($request->validated());
        //return redirect()->route('menu-products.show', $menuProduct->id);
        return response()->json($menuProduct, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuProduct $menuProduct)
    {
        return response()->json($menuProduct, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuProduct $menuProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuProductRequest $request, MenuProduct $menuProduct)
    {
        $menuProduct->update($request->validated());
        return response()->json($menuProduct, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuProduct $menuProduct)
    {
        $menuProduct->delete();
        return response()->json(['message' => 'Menu product deleted successfully', 'status' => 200]);
    }
}
