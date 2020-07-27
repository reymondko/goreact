<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Intervention\Image\Facades\Image;
use App\Models\Uploads;
use DB;
use DataTables;
use Response;
use Auth;
use Carbon\Carbon;
class UploadsController extends Controller
{
    private $file_path;
 
    public function __construct()
    {
        $this->file_path = public_path('/uploads');
    }
    /**
     * Show the application Events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/uploads');
    }

    public function createEventPhotosPage($step,$total,$event_id)
    {
        
        $photos=Uploads::all();
        return view('layouts/events/create/eventphotos')->with('event',$events)->with('step',$step)->with('total',$total)->with('data', $data);
    }

    
    /**
     * Saving images uploaded through XHR Request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function uploadFile(Request $request)
    {
       
        if($request->hasFile('file')) {
            // Upload path
            $destinationPath = 'uploads/';
     
            // Create directory if not exists
            if (!file_exists($destinationPath)) {
               mkdir($destinationPath, 0755, true);
            }
     
                
            $files = $request->file('file');

            if (!is_array($files)) {
                $files = [$files];
            }
    
            if (!is_dir($this->file_path)) {
                mkdir($this->file_path, 0777);
            }
    
            for ($i = 0; $i < count($files); $i++) {
                // Get file extension
                $file = $files[$i];
                $extension = $file->getClientOriginalExtension();
        
                // Valid extensions
                $validextensions = array("jpeg","jpg","png","mp4");
        
                // Check extension
                if(in_array(strtolower($extension), $validextensions)){
                    // Rename file 
                    $fileName = str_slug(Carbon::now()->toDayDateTimeString()).rand(11111, 99999) .'.' . $extension;
                    
                    //$orig_save_name = $name . '_orig.' . $photo->getClientOriginalExtension();
                    // Uploading file to given path
                    $file->move($this->file_path , $fileName);  

                    $upload = new Uploads();
                    $upload->filename = $fileName;
                    $upload->filetype = $extension;
                    $upload->original_name = basename($file->getClientOriginalName());
                    $upload->file_url = $this->file_path . '/' .$fileName;    
                    $user= Auth::user();
                    $upload->user_id =$user->id;
                    $upload->save();
                }
            }
                    
        }
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }

    /**
     * Remove the images from the storage.
     *
     * @param Request $request
     */
    public function destroyFile(Request $request)
    {
        $filename = $request->id;
        $uploaded_image = Uploads::where('original_name', basename($filename))->first();
 
        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }
 
        $file_path = $this->file_path . '/' . $uploaded_image->filename;
 
        if (file_exists($file_path)) {
            unlink($file_path);
        }
 
        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }
 
        return Response::json(['message' => 'File successfully delete'], 200);
    }

    public function deleteFile(Request $request)
    {
        $id = $request->file_id;
        $uploaded_image = Uploads::where('id', $id)->first();
 
        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }
 
        $file_path = $this->file_path . '/' . $uploaded_image->filename;
 
        if (file_exists($file_path)) {
            unlink($file_path);
        }
 
        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }
 
        return Response::json(['message' => 'File successfully delete'], 200);
    }

    

    public function fetchUploads()
    {
        $uploads = Uploads::all();
        return Response::json(array('success' => true, 'uploads' => $uploads), 200);

    }
}