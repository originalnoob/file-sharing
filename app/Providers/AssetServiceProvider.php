<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\File;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
	public function getImage($slug)
	{
		$asset = new File;
		$asset = File::where('file_slugs', $slug)->first();
		$file_location = $asset->file_location;
		$contents = Storage::url($file_location);
		return '<img src="'.$contents.'" height="50px">';
	}
}
