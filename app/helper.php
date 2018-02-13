<?php
// My common functions
function somethingOrOther()
{
    return (mt_rand(1,2) == 1) ? 'something' : 'other';
}

	function getImage($slug)
    {
        //
		$asset = new File;
		$asset = File::where('file_slugs', $slug)->first();
		$file_location = $asset->file_location;
		$contents = Storage::url($file_location);
		return '<img src="'.$contents.'" height="50px">';
		//return response()->download($contents);


    }
?>