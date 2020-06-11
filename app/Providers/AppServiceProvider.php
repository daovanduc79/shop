<?php

namespace App\Providers;

use App\Http\Service\PetService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(PetService $petService)
    {
        $pets = $petService->all();
        View::share('pets', $pets);

        $cart = Session::get('cart');
        View::share('cart', $cart);
    }

}
