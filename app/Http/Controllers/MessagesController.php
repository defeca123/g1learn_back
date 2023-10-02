<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topics;
use App\Models\Messages;
use App\Models\User;

class MessagesController extends Controller
{
    public function index() {
        $messages = Messages::all();

        foreach ($messages as $i => $message) {
            $message->user_name = User::where('id', $message->user_id)->get('name');
            $message->topic_name = Topics::where('id', $message->topic_id)->get('name');
            
        }

        return $messages;
    }

    public function Messages(Request $req) {
        Messages::create([
            
            
            'value' => $req->value,
            'topic_id' => $req->topic_id,
            'user_id' => $req->user_id

        ]);
        
        
        return response (['OK', 200]);
    }

    public function update(Request $req) { 
        $value = Messages::find($req->id);
        $value->value = $req->value;
        

       $value->save(); 

        return response('Message Update');

    }
    public function delete(Request $req) {
        $value = Messages::find($req->id);
        $value->delete();

        return response('Message eraser');
    }
}
