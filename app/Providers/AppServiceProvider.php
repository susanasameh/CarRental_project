<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Contact;




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

        // View::composer('admin/includes/topNavigation', function ($view) {
        //     $unreadMessage = Contact::where('unreadMessage', 0)->count();
        //     //session
        //     $view->with("unreadMessage", $unreadMessage);
        // });

        //  View::composer('admin/includes/topNavigation', function ($view) {
        //     $unreadMessage = Contact::where('unreadMessage', 0)->count();
        //     $unreadContacts = Contact::where('unreadMessage', 0)->get();
        //     //session
        //     $view->with("unreadMessage", $unreadMessage,$unreadContacts);
        // });

        // View::composer('admin/includes/topNavigation', function ($view) {
        //     $unreadContacts = Contact::where('unreadMessage', 0)->get();
        //     //session
        //     $view->with("unreadContacts", $unreadContacts);
        // });
       

        View::composer('admin/includes/topNavigation', function ($view) {
            $unreadMessage = Contact::where('unreadMessage', 0)->count();
            $unreadContacts = Contact::where('unreadMessage', 0)->take(3)->latest()->get();
            $view->with([
                'unreadMessage' => $unreadMessage,
                'unreadContacts' => $unreadContacts
                ]);
            });


         // Fixing Bootstrap Pagination Style
         Paginator::useBootstrap();

          if (!$this->app->environment('production')) {
            $this->app->register('App\Providers\FakerServiceProvider');
        }
        
    }
}
