<?php

namespace App\Providers;

use App\Modules\ImageUpload\CloudinaryImageManager;
use App\Modules\ImageUpload\ImageManagerInterface;
use App\Modules\ImageUpload\LocalImageManager;
use Illuminate\Support\ServiceProvider;
use Cloudinary\Cloudinary;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $cloudinary = new Cloudinary(
            [
                'cloud' => [
                    'cloud_name' => 'n07t21i7',
                    'api_key'    => '123456789012345',
                    'api_secret' => 'abcdeghijklmnopqrstuvwxyz12',
                ],
            ]
        );

        // 本番環境とそれ以外の環境で、画像系の関数の内容を変える
        if ($this->app->environment('production')) {
            $this->app->bind(ImageManagerInterface::class, CloudinaryImageManager::class);
        } else {
            $this->app->bind(ImageManagerInterface::class, LocalImageManager::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
