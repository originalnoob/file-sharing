<?php

use Illuminate\Support\Facades\Storage;
use App\File;

function getImage($slug)
    {
        //
		$asset = new File;
		$asset = File::where('file_slugs', $slug)->first();
		$file_location = $asset->file_location;
		$contents = Storage::url($file_location);
		return $contents;
		//return response()->download($contents);


    }
	
function hai()
{
	return 'Hello World';
}
?>