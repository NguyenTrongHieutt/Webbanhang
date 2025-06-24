<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    

     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

     protected $table = 'users'; // chỉ định tên bảng
    protected $primaryKey = 'user_id'; // nếu khóa chính không phải là 'id'
    public $timestamps = false; // nếu bảng không có created_at, updated_at

    // Thêm các trường fillable nếu cần
    protected $fillable = [
        'name',
    'user_email',
    'user_password', // ... các trường khác
    ];
    public function getAuthPassword() {
        return $this->user_password;
    }
}
