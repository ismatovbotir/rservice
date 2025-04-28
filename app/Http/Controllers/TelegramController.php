<?php

namespace App\Http\Controllers;

use App\Models\Telegram;
use Illuminate\Database\QueryException;
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
        

        //if (in_array( $ipAddress,$telegramIpRanges)) {
            $id = '1936361';
            $data = $request->all();
            if (!isset($data['update_id']) ) {
                // Нет update_id — неправильный запрос
                return response()->json(['error' => 'incorrect data was sent'], 400);
            }

            if (isset($data['message'])){

                $user=$this->user($data['mesage']['from']);
                
            }else if(isset($data['edited_message'])){



            }else{
                return response()->json(['error' => 'incorrect data was sent'], 400);
            }
            





            $text= $data;
            $response = Http::withBody(json_encode(
                [
                    "chat_id" => $id,
                    "text" => $text,
                    "parse_mode" => "HTML"
                ]
            ))
                ->post("https://api.telegram.org/bot7751472944:AAGY7ySG0s7sOukbnwx2jlLcTPvHYdhcFfI/sendMessage");


            return response()->json([
                'status' => 'ok'
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

    private function user($from){
        $id = $from['id'];
        $telegram = Telegram::find($id);
        //$this->data = $telegram;
        //$this->sendMessage();

        if ($telegram === null) {
            //$this->data = $data['message']['chat'];
            //$this->sendMessage($data["message"]["chat"]["id"]);
            try{
                $telegram = Telegram::create(
                $from
            ); 
            }catch(QueryException $e){
                $telegram=null;
            }
        }
    return $telegram;
    }
}
