<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Message extends Model
{
   protected $fillable = ['name','email','message'];


   public function scopeTwoMinuteAgo(Builder $query){
      
         $query->where('created_at','<=',Carbon::parse('2 minutes ago'));
   }
}
