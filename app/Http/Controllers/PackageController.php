<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TravelPackage;

class PackageController extends Controller
{
    public function index()
    {
        $packages = TravelPackage::all();
        return view('packages.index', compact('packages'));
    }
    public function detail($id)
    {
        $detail = TravelPackage::find($id);
        return view('packages.detail', compact('detail'));
    }
}
