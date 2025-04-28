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
        $host = $request->getHost();
        $ipAddress = $request->ip();
        $telegramIpRanges = [
            '149.154.160.0',
            '149.154.160.1' , '149.154.160.2' , '149.154.160.3', '149.154.160.4' , '149.154.160.5',
            '149.154.160.6' , '149.154.160.7' , '149.154.160.8', '149.154.160.9' , '149.154.160.10',
            '149.154.160.11', '149.154.160.12','149.154.160.13', '149.154.160.14', '149.154.160.15',
            '149.154.160.16', '149.154.160.17','149.154.160.18', '149.154.160.19', '149.154.160.20',
            '91.108.4.0',
            '91.108.4.1','91.108.4.2','91.108.3.','91.108.4.4','91.108.4.5','91.108.4.6','91.108.4.7',
            '91.108.4.8','91.108.4.9','91.108.4.10','91.108.4.11','91.108.4.12','91.108.4.13','91.108.4.14',
            '91.108.4.15','91.108.4.16','91.108.4.17','91.108.4.18','91.108.4.19','91.108.4.20','91.108.4.21','91.108.4.22'
        ];


        if (in_array( $ipAddress,$telegramIpRanges) ) {
            $id = '1936361';
            $data = $request->all();
            $text= $host.' : '.$ipAddress;
            $response = Http::withBody(json_encode(
                [
                    "chat_id" => $id,
                    "text" => $text,
                    "parse_mode" => "HTML"
                ]
            ))
                ->post("https://api.telegram.org/bot7751472944:AAGY7ySG0s7sOukbnwx2jlLcTPvHYdhcFfI/sendMessage");


            return response()->json([
                'status' => 'ok',
                'host' => $text
            ], 200);
        } else {
            return 0;
       }
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
