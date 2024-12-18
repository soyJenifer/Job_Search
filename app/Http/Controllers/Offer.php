<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Offer extends Controller
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
