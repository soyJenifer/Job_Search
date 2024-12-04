<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        if ($request->action === 'delete')
        {
            $this->destroy($request->id);
            return Redirect::to(route('index'));
        }
        if ($request->action === 'pause')
        {
            $this->edit($request->id, 0);
            return Redirect::to(route('index'));
        }
        if ($request->action === 'resume')
        {
            $this->edit($request->id, 1);
            return Redirect::to(route('index'));
        }
        $offers = Offer::all();
        return view('index', compact('offers'));

    }
}
