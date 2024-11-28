<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // select * from users
        $services = Service::get();
        $title = "Data Paket Laundry";
        return view('paket.index', compact('services', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Paket Laundry';
        return view('paket.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::create($request->all()); //or
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        Alert::success('Yowww', 'Data berhasil ditambah :D');

        return redirect()->to('service');
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
        $title = "Edit Paket Laundry";
        $service = Service::find($id);
        
        return view('paket.edit', compact('title','service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $service = Service::find($id);

        $service->service_name = $request->service_name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();

        Alert::success('Yowww', 'Data berhasil diubah :D');
        return redirect()->to('service');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id)->delete();
        Alert::success('Yowww', 'Data berhasil dihapus :)');
        return redirect()->to('service');
    }

    public function delete($id)
    {
        $service = Service::find($id)->delete();
        // Alert::success('Yowww', 'Data berhasil dihapus :)');
        return redirect()->to('service');
    }

    
    
}
