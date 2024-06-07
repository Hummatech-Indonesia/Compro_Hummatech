<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\BackgroundInterface;
use App\Http\Requests\StoreContactUsRequest;
use App\Services\ContactService;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    private BackgroundInterface $background;
    private ContactService $service;

    public function __construct(BackgroundInterface $background, ContactService $service)
    {
        $this->background = $background;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $background = $this->background->getByType('Hubungi Kami');

        return view('landing.contact', compact('background'));
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
        $data = $this->service->sendMail($request);
        return back()->with('success','Pesan anda sudah terkirim!');
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
