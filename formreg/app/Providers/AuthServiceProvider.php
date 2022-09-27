<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('organisation-only', function($user){
            if ($user->role == 1){
                return true;
            }
            return false;
        });

        Gate::define('individual-only', function($user){
            if ($user->role == 2){
                return true;
            }
            return false;
        });



        // Gate::define('view-input', function($user, $id){
        //     return $user->role = 1 === $id->user->role;
        // });
    }
}
