<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'info_id',
        'email',
        'status'
    ];

    public function info() {

        return $this->hasOne(Info::class);
    }

    public function review() {

        return $this->hasOne(InfoReview::class , 'email_id' , 'id');
    }

}
