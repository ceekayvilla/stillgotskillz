<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

use App\Contracts\CategoryContract;
use App\Repositories\CategoryRepository;
use App\Contracts\AttributeContract;
use App\Repositories\AttributeRepository;
use App\Contracts\BrandContract;
use App\Repositories\BrandRepository;
use App\Contracts\ProductContract;
use App\Repositories\ProductRepository;
use App\Contracts\SlideshowContract;
use App\Repositories\SlideshowRepository;
use App\Contracts\BenefitContract;
use App\Repositories\BenefitRepository;
use App\Contracts\RoleContract;
use App\Repositories\RoleRepository;
use App\Contracts\PermissionContract;
use App\Repositories\PermissionRepository;
use App\Contracts\UserContract;
use App\Repositories\UserRepository;
use App\Contracts\ProfileContract;
use App\Repositories\ProfileRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        CategoryContract::class => CategoryRepository::class,
        AttributeContract::class => AttributeRepository::class,
        BrandContract::class => BrandRepository::class,
        ProductContract::class => ProductRepository::class,
        SlideshowContract::class => SlideshowRepository::class,
        BenefitContract::class => BenefitRepository::class,
        RoleContract::class => RoleRepository::class,
        PermissionContract::class => PermissionRepository::class,
        UserContract::class => UserRepository::class,
        ProfileContract::class => ProfileRepository::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach($this->repositories as $interface => $implementation){
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
