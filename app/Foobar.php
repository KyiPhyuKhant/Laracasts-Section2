<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Foobar extends Model
{
    public function name(Request $request)
    {
        $vals = array('one', 'two');

        if ($val) {
            return 'good';
        }
    }
}
