<?php

namespace Database\Seeders;

use App\Models\CryptList;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CryptListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cryptlist = [ 
            [
                'fullname'      => 'Bitcoin',
                'name'      => 'bitcoin',
                'short_key'     => 'BTC',
                'created_at'    => Carbon::now(),
            ],
            [
                'fullname'       => 'Ethereum',
                'name'      => 'ethereum',
                'short_key'  => 'ETH',
                'created_at'    => Carbon::now(),
            ],
            [
                'fullname'       => 'Smooth Love Potion',
                'name'      => 'smooth-love-potion',
                'short_key'  => 'SLP',
                'created_at'    => Carbon::now(),
            ],
            [
                'fullname'       => 'Dogecoin',
                'name'      => 'dogecoin',
                'short_key'  => 'DOGE',
                'created_at'    => Carbon::now(),
            ],
            [
                'fullname'       => 'Tether',
                'name'      => 'tether',
                'short_key'  => 'USDT',
                'created_at'    => Carbon::now(),
            ],
            [
                'fullname'       => 'Censilyo',
                'name'      => 'censilyo',
                'short_key'  => 'CNS',
                'created_at'    => Carbon::now(),
            ]
            
        ];

        foreach($cryptlist as $list){
            CryptList::insert($list);
        }
    }
}
