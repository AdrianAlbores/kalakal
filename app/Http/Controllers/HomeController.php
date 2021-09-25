<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use Auth;
use App\Models\Menu;
use Spatie\Permission\Models\Role;
use App\Models\CryptList;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Models\WalletDetails;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth');
    }

    public function __invoke()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $menu = Menu::with('sub_menus')->get();
        \JavaScript::put([
            'user' => $user->name,
            'role' => $user->roles->first(),
            'menu' => $menu,
        ]);

        return view('home');
    }

}
