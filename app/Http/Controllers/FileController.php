<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\File;


class FileController extends Controller
{
    public function upload(Request $request)
	{
		if (Input::file('file')->isValid())
		{
			$extension = Input::file('file')->getClientOriginalExtension();
			
			$size = Input::file('file')->getClientSize();
			if($extension == 'jpg' || $extension == 'png' || $extension == 'zip' || $extension == 'mp3' || $extension == 'mp4'){
				$path = Input::file('file')->store('public/files_storage');
				$fileslug = md5($path);
				$files = new File;
				$files->file_location = $path;
				$files->file_sizes	 = $size;
				$files->file_slugs = $fileslug;
				$files->save();
				//$lastInsertedId = $files->id;
				return redirect('files/'.$fileslug);	
			}else{
				return $extension.' file not allowed';
			}
		}
	}
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//
		return redirect()->back();
        
    }


    public function download($slug)
    {
        //
		$asset = new File;
		$asset = File::where('file_slugs', $slug)->first();
		$file_location = $asset->file_location;
		$contents = Storage::url($file_location);
		return '<img src="'.$contents.'" height="50px">';
		//return response()->download($contents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		if(!empty($id))
		{
			$asset = new File;
			$asset = File::where('file_slugs', $id)->first();
			$file_location = $asset->file_location;
			$file_slug = $asset->file_slugs;
			$file_type= $asset->file_type;
			$contents = Storage::url($file_location);
			$link = $contents;
			return view('success', ["downloadlink"=>$link]);
			

		}else{
			return redirect()->back();
		}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	public function test()
	{
		return view('test' []);
	}
}
