<?php

namespace App\Http\Controllers;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Models\CryptList;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    

    public function cryptlist(){
        $cryptList = CryptList::all();
        $data = $this->Coingeko();
        return response()->json($data);
    }

    protected function Coingeko(){
        // $cryptList = CryptList::all();
        $client = new CoinGeckoClient();
        // $client->coins()->getCoin('bitcoin', ['tickers' => 'false', 'market_data' => 'false']);
        // $data = $client->simple()->getTokenPrice('ethereum','0xE41d2489571d322189246DaFA5ebDe1F4699F498', 'usd,rub');
        // $data = $client->coins()->getCoin('ethereum', ['tickers' => 'false', 'market_data' => 'false']);
        $cryptList = CryptList::all()->pluck('name');
        // return $cryptList;
        // dd($cryptList);
        $data = [];
        foreach($cryptList as $coinl){
            $coin = $client->coins()->getCoin($coinl);
            $data[] = [
                'title' => $coin['symbol'],
                'prefix' => '$',
                'value'  => (float) number_format($coin['market_data']['current_price']['usd'],2,'.',''),
                'suffix' => number_format($coin['market_data']['price_change_percentage_24h'],2).'%',
                'status' => $coin['market_data']['price_change_percentage_24h'] > 0 ? '' : 'danger',
                'icon' => $coin['image']['small'],
            ];
        }
        return $data;
    }
}
