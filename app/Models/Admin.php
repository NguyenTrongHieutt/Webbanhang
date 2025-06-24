<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

     protected $table = 'tbl_admin'; // chỉ định tên bảng
    protected $primaryKey = 'admin_id'; // nếu khóa chính không phải là 'id'
    public $timestamps = false; // nếu bảng không có created_at, updated_at

    // Thêm các trường fillable nếu cần
    protected $fillable = [
        'admin_email', 'admin_password', // ... các trường khác
    ];
    public function getAuthPassword() {
        return $this->admin_password;
    }
}

