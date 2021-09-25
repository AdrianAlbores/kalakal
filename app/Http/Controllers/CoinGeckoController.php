<?php

namespace App\Http\Controllers;

use App\Models\CryptList;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Http\Request;

class CoinGeckoController extends Controller
{
    //
    private $cleint;

    public function __construct($client = null)
    {
        $this->getClient = new CoinGeckoClient();
    }

    public function getClient(){
        return $this->cleint;
    }

    public function testN(){
        $cryptList = CryptList::all()->pluck('name')->implode(',');
        $data = $this->getExchangeRateUSDPHP();
        return $data;
    }
    

    public function getExchangeRateUSDPHP(){
        $cryptList = CryptList::all()->pluck('name')->implode(',');
        $data = $this->getClient->simple()->getPrice($cryptList, 'usd,php');
        return $data;
    }

    public function getExchangeRate(){
        $cryptList = CryptList::all()->pluck('name','short_key');
        // $cryptList = CryptList::all()->pluck('name')->implode(',');
        $list = $cryptList->implode(',');
      
        
        $shrtkey =strtolower($cryptList->keys()->implode(','));
        $lists = implode(',',$this->getSupportedVsCurrencies());
        $data = $this->getClient->simple()->getPrice($list,$lists);
        return $data;
    }

    public function getSupportedVsCurrencies(){
        return $this->getClient->simple()->getSupportedVsCurrencies();
    }


    

}
