<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Entree extends Model
{
    public function __construct()
    {
        $main = DB::select('select name from mains order by random() limit ?', [1]);
        $sides = DB::select('select name from sides order by random() limit ?', [2]);
        $adjectives = DB::select('select name from adjectives order by random() limit ?', [3]);

        $this->description = ucfirst($adjectives[0]->name) . ' ' . $main[0]->name . ' with ' . $adjectives[1]->name . ' ' . $sides[0]->name . ' and ' . $adjectives[2]->name . ' ' . $sides[1]->name;
    }




}
