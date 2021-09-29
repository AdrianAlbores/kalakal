<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                "order" => 1,
                "menu_name" => "Dashboard",
                "add_on_name" => null,
                "icon" => null,
                "route" => "/dashboard",
                "dropdown" => 0,
                "is_default" => 1,
                "role_access" => "[\"Super-Admin\",\"User\"]",
                "sub_menus" => []
            ],
            [
                "order" => 2,
                "menu_name" => "Wallet",
                "add_on_name" => null,
                "icon" => null,
                "route" => null,
                "dropdown" => 1,
                "is_default" => 1,
                "role_access" => "[\"Super-Admin\",\"User\"]",
                "sub_menus" => [
                    [
                        "order" => 1,
                        "menu_name" => "Exchange",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/exchange",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 2,
                        "menu_name" => "Static Rewards",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/rewards",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 3,
                        "menu_name" => "Withdraw",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/withdraw",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ]
                ]
            ],
            [
                "order" => 3,
                "menu_name" => "Sportsbook",
                "add_on_name" => null,
                "icon" => null,
                "route" => "",
                "dropdown" => 1,
                "is_default" => 1,
                "role_access" => "[\"Super-Admin\"]",
                "sub_menus" => [
                    [
                        "order" => 1,
                        "menu_name" => "CSGO",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/sportsbook",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 2,
                        "menu_name" => "DOTA2",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/sportsbook",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 3,
                        "menu_name" => "Mobile Legends",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/sportsbook",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 4,
                        "menu_name" => "NBA",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/sportsbook",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 5,
                        "menu_name" => "PBA",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/sportsbook",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ]
                ]
            ],
            [
                "order" => 4,
                "menu_name" => "Earn",
                "add_on_name" => null,
                "icon" => null,
                "route" => null,
                "dropdown" => 1,
                "is_default" => 1,
                "role_access" => "[\"Super-Admin\"]",
                "sub_menus" => [
                    [
                        "order" => 1,
                        "menu_name" => "Play a game",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/game",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 2,
                        "menu_name" => "Solve a problem",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/problem",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ],
                    [
                        "order" => 3,
                        "menu_name" => "Do a dare",
                        "add_on_name" => null,
                        "icon" => null,
                        "route" => "/dare",
                        "dropdown" => 0,
                        "is_default" => 1,
                        "role_access" => "[\"Super-Admin\",\"User\"]",
                    ]
                ]
            ],
            [
                "order" => 5,
                "menu_name" => "Admin",
                "add_on_name" => null,
                "icon" => null,
                "route" => null,
                "dropdown" => 1,
                "is_default" => 1,
                "role_access" => "[\"Super-Admin\"]",
                "sub_menus" => []
            ]
        ];
        foreach($menus as $Menu){
            $menu = \App\Models\Menu::create([
                "order" => $Menu['order'],
                "menu_name" => $Menu['menu_name'],
                "add_on_name" => $Menu['add_on_name'],
                "icon" => $Menu['icon'],
                "route" => $Menu['route'],
                "dropdown" => $Menu['dropdown'],
                "is_default" => $Menu['is_default'],
                "role_access" => $Menu['role_access'],
            ]);
            foreach($Menu['sub_menus'] as $sub_menu){
                $sub_menu['menu_id'] = $menu->id;
                \App\Models\SubMenu::insert($sub_menu);
            }
        }
    }
}
