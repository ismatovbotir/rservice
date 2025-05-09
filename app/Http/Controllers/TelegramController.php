<?php

namespace App\Http\Controllers;

use App\Models\Telegram;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    
    public $text='';
    public $tUser;
    public $error='';
    public $keyboard='';
    

    private function sendMessage($id = '1936361'){

        if ($this->keyboard==''){
           $response = Http::withBody(json_encode(
            [
                "chat_id" => $id,
                "text" => $this->text,
                "parse_mode" => "HTML"
            ]
        ))
            ->post("https://api.telegram.org/bot7751472944:AAGY7ySG0s7sOukbnwx2jlLcTPvHYdhcFfI/sendMessage");

 
        }else{
            $response = Http::withBody(json_encode(
                [
                    "chat_id" => $id,
                    "text" => $this->text,
                    'reply_markup'=>$this->keyboard
                ]
            ))
                ->post("https://api.telegram.org/bot7751472944:AAGY7ySG0s7sOukbnwx2jlLcTPvHYdhcFfI/sendMessage");
    
     

        }
        

    }
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
            
            $data = $request->all();
            $this->text=json_encode($data);
            $this->sendMessage();
            if (!isset($data['update_id']) ) {
                // Нет update_id — неправильный запрос
                //return response()->json(['error' => 'incorrect data was sent'], 400);
            }

            if (isset($data['message'])){

                $telegramUser=$this->user($data['message']['from']);

                if($telegramUser==null){

                    $this->text="Could not find and create user";
                    $this->sendMessage($data['message']['from']['id']);

                   
                }else{
                    if($telegramUser->phone==null){
                        if(isset($data['message']['contact'])){
                            if($data['message']['contact']['user_id']==$telegramUser->id){
                                Telegram::where('id',$telegramUser->id)->update([
                                    'phone'=>$data['message']['contact']['phone_number']
                                ]);
                                $this->text="Raqamingiz royixatga kiritildi, murojaat kiritish uchun iltimos email yuboring";
                                $this->keyboard=json_encode([
                                    'remove_keyboard' => true
                                ]);
                            }else{
                                $this->text="Bu sizning raqam emas(yoki telegramdan boshqa raqam ishlatasiz).Iltimos qaytada nyuboring";
                            }
                            $this->sendMessage();

                           
                            return response()->json([
                                'status' => 'ok'
                            ], 200);

                        }
                        
                        
                        $this->text="Royxatdan otish uchun telefon raqamingizni yuboring";
                        $this->keyboard= json_encode([
                            'keyboard' => [
                                [
                                    [
                                        'text' => 'Royxatdan otish uchun  📲 Telefon raqamni ulashish',
                                        'request_contact' => true,
                                    ]
                                ]
                            ],
                            'resize_keyboard' => true,
                            'one_time_keyboard' => true
                        ]);



                        $this->sendMessage($telegramUser->id);
                        return response()->json([
                            'status' => 'ok'
                        ], 200);
                    }

                    $text=$data['message']['text'];
                    
                   
                    

                    
                    
                    //$this->text=json_encode($telegramUser);
                    //$this->sendMessage();
                }
                
            }else if(isset($data['edited_message'])){
                $user=$this->user($data['edited_message']['from']);

                if($user==null){
                    return response()->json(['error' => $this->text], 401);
                }else{

                    return response()->json(['client' => $user]);
                }



            }else{
                return response()->json(['error' => 'incorrect data was sent'], 400);
            }
            





            $this->text= $data;
            //$this->sendMessage();
            

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
        //$this->text = $telegram;
        //$this->sendMessage();

        if ($telegram == null) {
            
           

            try{
                $telegram = Telegram::create(
                $from
            ); 
            }catch(QueryException $e){
                $this->text=$e->getMessage();
                
            }
        }
        return $telegram;
    }
}
