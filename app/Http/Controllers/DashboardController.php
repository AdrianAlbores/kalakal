<?php

namespace App\Http\Controllers;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Models\CryptList;
use App\Models\WalletDetails;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //


    public function cryptlist()
    {
        $cryptList = CryptList::all()->pluck('name')->implode(',');
        // $cryptList = CryptList::all();
        $data = $this->Coingeko();
        dd($cryptList);

        return response()->json($cryptList);
    }

    protected function Coingeko()
    {
        // $cryptList = CryptList::all();
        $client = new CoinGeckoClient();
        // $client->coins()->getCoin('bitcoin', ['tickers' => 'false', 'market_data' => 'false']);
        // $data = $client->simple()->getTokenPrice('ethereum','0xE41d2489571d322189246DaFA5ebDe1F4699F498', 'usd,rub');
        // $data = $client->coins()->getCoin('ethereum',  );
        $cryptList = CryptList::all()->pluck('name');
        // return $cryptList;
        // dd($cryptList);
        $data = [];
        foreach ($cryptList as $coinl) {
            $coin = $client->coins()->getCoin($coinl);
            if ($coin) {
                $data[] = [
                    'title' => $coin['symbol'],
                    'prefix' => '$',
                    'value'  => (float) number_format($coin['market_data']['current_price']['usd'], 2, '.', ''),
                    'suffix' => number_format($coin['market_data']['price_change_percentage_24h'], 2) . '%',
                    'status' => $coin['market_data']['price_change_percentage_24h'] > 0 ? '' : 'danger',
                    'icon' => $coin['image']['small'],
                ];
            }
        }
        return $data;
    }
    public function DashboardItems()
    {
        $Wallet = auth()->user()->wallet;
        $wallets = $Wallet ? $Wallet->details : [];
        $wallet = $this->wallet($wallets);
        $withdrawal = $this->withdrawal(null);
        $stat = $this->stats($wallets);
        return [
            'Wallet' => $wallet,
            'Withdrawal' => $withdrawal,
            'stats' => $stat
        ];
    }
    protected function wallet($wallets, $crypt = 'bitcoin', $currency = 'php', $symbol = 'BTC')
    {
        $client = new CoinGeckoClient();
        $exchage = $client->simple()->getPrice($crypt, $currency);
        $data = [];
        foreach ($wallets as $wallet) {
            $data[] = [
                'exchage' => (float)number_format($wallet->amount / $exchage[$crypt][$currency], 8),
                'amount' => $wallet->amount
            ];
        }
        $data = collect($data);
        return [
            'currency' => strtoupper($currency),
            'amount' => number_format($data->sum('amount'), 2) . ' ' . strtoupper($currency),
            'exchange' => number_format($data->sum('exchage'), 8) . ' ' . $symbol,
            'symbol' => $symbol,
        ];
    }
    protected function withdrawal($walletId, $crypt = 'bitcoin', $currency = 'php', $symbol = 'BTC')
    {
        return [
            'currency' => strtoupper($currency),
            'amount' => number_format(0, 2) . ' ' . strtoupper($currency),
            'exchange' => number_format(0, 8) . ' ' . $symbol,
            'symbol' => $symbol,
        ];
    }
    protected function stats($wallets, $currency = "php")
    {
        $client = new CoinGeckoClient();
        $cryptList = CryptList::all();
        $ids = $cryptList->pluck('name')->implode(',');
        $coins = collect($client->coins()->getMarkets($currency, ['ids' => $ids]));
        $data = [];
        foreach ($cryptList as $crypt) {
            $wallet = $wallets ? $wallets->where('crypt_list_id', $crypt->id)->first() : null;
            $coin = $coins->where('id', '=', $crypt->name)->first();
            $data[] = [
                'title' => strtoupper($coin ? $coin['symbol'] : $crypt->short_key),
                // 'prefix' => $coin ? '$'/*$coin['symbol']*/ : '₱' /*$wallet->currency*/,
                'value'  => (float) number_format(($wallet? $wallet->amount : 0) / ($coin ? $coin['current_price'] : 1), 8, '.', ''),
                'suffix' => ($coin ? ($coin['price_change_percentage_24h'] > 0 ? '+' : '-'): '').($coin ? number_format($coin['price_change_percentage_24h'], 2) . '%' : ''),
                'status' => $coin ?  ($coin['price_change_percentage_24h'] > 0 ? '' : 'danger') : '',
                // 'icon' => $coin ? $coin['image'] : '',
            ];
        }
        return $data;
    }
}
