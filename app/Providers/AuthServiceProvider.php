<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
        
        $this->registerPolicies();
        Gate::before(fn ($user, $ability) => $user->hasGroup('Super Admin') ? true : null);
        /*         Gate::define('viewAny', 'App\\Policies\\UserPolicy@viewAny');
        Gate::define('view', 'App\\Policies\\UserPolicy@view');
        Gate::define('create', 'App\\Policies\\UserPolicy@create');
        Gate::define('update', 'App\\Policies\\UserPolicy@update');
        Gate::define('delete', 'App\\Policies\\UserPolicy@delete');
        Gate::define('restore', 'App\\Policies\\UserPolicy@restore');
        Gate::define('forceDelete', 'App\\Policies\\UserPolicy@forceDelete'); */
        /*        Gate::before(function ($user) {
            return $user->hasRole('super-admin') ? true : null;
        }); */
        /*         Gate::resource('users','App\\Policies\\UserPolicy');
        Gate::resource('roles','App\\Policies\\RolePolicy');
        Gate::resource('permissions','App\\Policies\\PermissionPolicy'); */
        /*         Gate::policy(\App\Models\User::class,'App\Policies\UserPolicy');
        Gate::policy(\App\Models\Role::class,'App\Policies\RolePolicy');
        Gate::policy(\App\Models\Permission::class,'App\Policies\PermissionPolicy'); */
    }
}
