<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topics;

class TopicsController extends Controller
{
    public function index_topics() {
        $topic = Topics::all();

        return $topic; 

    }
    public function create_topics(Request $req) {
            
        Topics::create([
               'name' => $req->name  

            ]);
            return response('Topic Create');
    }   

}
