<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function thisIsUserObject(){

/*        Belongs to nes rysys - vienas user turi daug postu, vienas prie daug ->post.user_
        Antras argumentas stulpelio pavadinimas is lenteles post (nes cia modelis POST),
        pagal kuri prijungiam kita lentele App\User tai User modelis, t.y. lentele user*/

            return $this->belongsTo('App\User', 'user');
    }
    public function categoryObject(){
        return $this->belongsTo('App\Category', 'category');
    }
    public function fileObject(){
        return $this->hasMany('App\File');
    }
}
