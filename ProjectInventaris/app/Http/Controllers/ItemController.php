<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //kita buat fungsi untuk menampilkan halaaan formulir 
        return view ('items.create');//memanggil
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //menyimpan data yang diinputkan ke tabel
        Item::create(
            [
                'code' => $request->code,
                'item_name' => $request->item_name,
                'category' => $request->category,
                'stok' => $request->stok,
                'condition' => $request->condition,
                'room_location' => $request->room_location
            ]
        );
        //arahkan ke halaman form setelah data berhasil disimpan
        return redirect()->back()->with('success', 'Item created successfully.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
