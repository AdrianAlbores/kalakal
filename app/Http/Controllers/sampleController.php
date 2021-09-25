<?php

namespace App\Http\Controllers;

use App\Models\CryptList;
use App\Models\WalletDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use  Illuminate\Database\Eloquent\Collection;

class sampleController extends Controller
{
    public function sample()
    {


        return response()->json($this->wallets(auth()->user()->wallet->details));
    }
    protected function wallets($wallets, $crypt = 'bitcoin', $currency = 'php', $symbol = 'BTC')
    {
        $client = new CoinGeckoClient();
        $cryptList = CryptList::all();
        // $cryptList = CryptList::whereIn('id', $wallets->pluck('crypt_list_id'))->get();
        $ids = $cryptList->pluck('name')->implode(',');
        $coins = collect($client->coins()->getMarkets('php', ['ids' => $ids]));
        $data = [];
        foreach ($cryptList as $crypt) {
            $wallet = $wallets->where('crypt_list_id', $crypt->id)->first();
            $coin = $coins->where('id', '=', $crypt->name)->first();
            $data[] = [
                'title' => $coin ? $coin['symbol'] : $crypt->short_key,
                'prefix' => $coin ? '$'/*$coin['symbol']*/ : '₱' /*$wallet->currency*/,
                'value'  => (float) number_format(($wallet? $wallet->amount : 0) / ($coin ? $coin['current_price'] : 1), 8, '.', ''),
                'suffix' => $coin ? number_format($coin['price_change_percentage_24h'], 2) . '%' : '',
                'status' => $coin ?  ($coin['price_change_percentage_24h'] > 0 ? '' : 'danger') : '',
                'icon' => $coin ? $coin['image'] : '',
            ];
        }
        return $data;
    }
}
