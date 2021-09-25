<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletDetails extends Model
{
    use HasFactory;
    public function detail(){
        return $this->hasOne(CryptList::class, 'id', 'crypt_list_id');
    }
}
