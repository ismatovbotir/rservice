<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $host = $request->path();
        $ipAddress = $request->ip();
        


        //if ($host == 'api/telegram') {
            $id = '1936361';
            $data = $request->all();

            $response = Http::withBody(json_encode(
                [
                    "chat_id" => $id,
                    "text" => $host.' : '.$ipAddress,
                    "parse_mode" => "HTML"
                ]
            ))
                ->post("https://api.telegram.org/bot7751472944:AAGY7ySG0s7sOukbnwx2jlLcTPvHYdhcFfI/sendMessage");


            return response()->json([
                'status' => 'ok',
                'host' => $host
            ], 200);
        //} else {
          //  return 0;
       // }
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
