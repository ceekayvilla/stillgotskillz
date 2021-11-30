<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;

use App\Contracts\CategoryContract;
use App\Repositories\CategoryRepository;
use App\Contracts\ParticipantContract;
use App\Repositories\ParticipantRepository;
use App\Contracts\PortfolioContract;
use App\Repositories\PortfolioRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
       // BaseContract::class => BaseRepository::class,
        CategoryContract::class     => CategoryRepository::class,
        ParticipantContract::class  => ParticipantRepository::class,
        PortfolioContract::class  => PortfolioRepository::class,
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
