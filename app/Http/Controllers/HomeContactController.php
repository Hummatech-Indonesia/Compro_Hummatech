<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\BackgroundInterface;
use App\Contracts\Interfaces\ProfileInterface;
use App\Http\Requests\StoreContactUsRequest;
use App\Services\ContactService;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    private BackgroundInterface $background;
    private ContactService $service;
    private ProfileInterface $profile;

    public function __construct(BackgroundInterface $background, ContactService $service, ProfileInterface $profile)
    {
        $this->background = $background;
        $this->service = $service;
        $this->profile = $profile;
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
        $profile = $this->profile->First();
        $data = $this->service->sendMail($request, $profile->email);
        return back()->with('berhasil','Pesan anda sudah terkirim!');
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
