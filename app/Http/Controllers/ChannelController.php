<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use Validator;

class ChannelController extends Controller
{
    public function save(Request $req)
    {
        $valid = Validator::make($req->all(), [
            'category' => 'required'
        ]);
        if ($valid->fails()) {
            return response()->json(

                ['error' => $valid->errors()],
                401
            );
        }
        $cha = new Channel;
        $cha->name = $req->name;
        $cha->category = $req->category;
        $cha->save();
    }
}
