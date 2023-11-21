<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Ong;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Gate::define('vaga-ong-user', function (User $user, Ong $ong){
        //     return $user->id === $ong->id;
        // });

        // Gate::define('vaga-ong-user', function (User $user, Vaga $vaga) {
        //     return $user->id === $vaga->ong_id;
        // });
    }
}
