<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $fillable = [
        "order",
        "menu_name",
        "add_on_name",
        "icon",
        "route",
        "dropdown",
        "is_default",
        "role_access"
    ];
    public function sub_menus()
    {
        return $this->hasMany(SubMenu::class);
    }
}
