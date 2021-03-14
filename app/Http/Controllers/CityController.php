<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $citys = City::orderBy('created_at', 'desc')->paginate(10);

        return view('welcome', compact('citys'));
    }

    public function search(Request $request)
    {
        $search = $request->input('query');

        $citys = City::where('id', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%')
            ->orWhere('city', 'like', '%' . $search . '%')
            ->orWhere('state', 'like', '%' . $search . '%')
            ->orWhere('country', 'like', '%' . $search . '%')
            ->paginate(10);

        return view('welcome', compact('citys', 'search'));
    }
}
