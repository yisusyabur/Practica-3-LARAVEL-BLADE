<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $masters = [
            ['name' => 'Sergio Panti'],
            ['name' => 'Rafael Yabur'],
            ['name' => 'Raymundo Romero'],
            ['name' => 'Maria ignot'],
            ['name' => 'Mariowo'],
            ['name' => 'Katia hernandez'],
            ['name' => 'Citlali chavez'],
            ];
            return view('maestros', compact('masters'));
    }
}
