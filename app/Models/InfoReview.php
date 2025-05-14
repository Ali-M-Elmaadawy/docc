<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'info_id',
        'admin_id',
        'email_id',
        'status'
    ];

    public function admin() {

        return $this->belongsTo(Admin::class);
    }

}
