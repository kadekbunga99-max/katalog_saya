<?php

namespace App\Providers;
use App\Services\Keranjang;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
          // Kirim jumlah item keranjang ke navbar, di setiap halaman
    View::composer('user_front.partials.navbar', function ($view) {
        $view->with('jumlahKeranjang', Keranjang::totalItem());
    });
    }
}
