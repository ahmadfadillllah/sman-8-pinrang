<?php

namespace App\Http\Controllers;

use App\Models\HubungiKami;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.home');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function contactpost(Request $request)
    {
        try {
            HubungiKami::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'web' => $request->web,
                'jenis' => $request->jenis,
                'pesan' => $request->pesan,
            ]);

            return redirect()->back()->with('success', 'Pesan telah dikirim');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
