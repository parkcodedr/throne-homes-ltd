<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;

class ImageLibSmart extends Model
{
    public function imageLib($multipleimgpath,$targetfolder,$admin_id,$content_id,$newWidth,$newHeight){
    	if(strtolower($this->CheckLocationStatus()['status'])=='offline'){
	  //   	$path = join('',explode(':::','C:\laragon\www\reiz\public\:::'.$targetfolder));
			// if( ! file_exists($path)) {
			//     mkdir($path, 0644);
			// }
	  //   	$setchmod = chmod(join('',explode(':::','C:\laragon\www\reiz\public\:::'.$targetfolder)), 0644);
    	}

		$checkorigin=0;
        $checkorigin = substr_count($targetfolder, ":::form");
        if($checkorigin>0){
	        $originalImage= $multipleimgpath;
	        if($checkorigin==0){
	            $originalNamePre = explode($targetfolder.'/',$originalImage);
	            $roomnamePre = explode(":::form",$targetfolder);
	            $roomname = $roomnamePre[1];
	            $originalNameNewPre = explode('.',$originalNamePre[1]);
	            $originalName = $roomname.'.'.$originalNameNewPre[1];
	        }
	        if($checkorigin>0){

	            //Get room path/ modify room path
	            $targetfolderpre = explode(":::form",$targetfolder);
	            $targetfolder = $targetfolderpre[0];

	            //$filenameWithExt = $request->file('aptimg')->getClientOriginalName();
	            $filenameWithExt = $originalImage->getClientOriginalName();

	            //Get just filename
	            $filename = $targetfolderpre[1];

	            //Get just Ext
	            //$extension = $request->file('aptimg')->getClientOriginalExtension();
	            $extension = $originalImage->getClientOriginalExtension();

	            $originalName = $filename.'.'.$extension;
	        }
			// Define upload path
			if(strtolower($this->CheckLocationStatus()['status'])=='offline' || $checkorigin==0){
				$thumbnailPath = public_path(join('',explode(':::',join('\:::',explode('/',$targetfolder)).'\:::')));
				$thumbnailImage = Image::make($originalImage);
				$thumbnailImage->resize($newWidth,$newHeight);
				$thumbnailImage->save($thumbnailPath.$admin_id.'_'.$content_id.'_'.$originalName); 
			}
			if(strtolower($this->CheckLocationStatus()['status'])=='online' && $checkorigin>0){
				//$thumbnailPath = '/home/daomnitraders/public_html/hms/'.$targetfolder;
				$thumbnailPath = $targetfolder;
				$thumbnailImage = Image::make($originalImage);
				$thumbnailImage->resize($newWidth,$newHeight);
				$thumbnailImage->save($thumbnailPath.$admin_id.'_'.$content_id.'_'.$originalName); 
			}

			// Save Orginal Image
			// $thumbnailImage->save($originalPath.$admin_id.'_'.$content_id.'_'.$originalName);
			
			// Resize and save image
			$thumbnailImage->resize($newWidth,$newHeight);
			$thumbnailImage->save($thumbnailPath.$admin_id.'_'.$content_id.'_'.$originalName); 
	    	return $admin_id.'_'.$content_id.'_'.$originalName;
	    }

    	if($checkorigin==0){
    		//   	$path = join('',explode(':::','C:\laragon\www\reiz\public\:::'.$targetfolder));
			// if( ! file_exists($path)) {
			//     mkdir($path, 0644);
			// }
	  		//   	$setchmod = chmod(join('',explode(':::','C:\laragon\www\reiz\public\:::'.$targetfolder)), 0644);

			$originalImage= $multipleimgpath;
			$originalNamePre = explode($targetfolder.'/',$originalImage);
			$originalName = $originalNamePre[1];
			// Define upload path
			$thumbnailPath = public_path(join('',explode(':::',join('\:::',explode('/',$targetfolder)).'\:::')));

			$thumbnailImage = Image::make($originalImage);

			// Save Orginal Image
			// $thumbnailImage->save($originalPath.$admin_id.'_'.$content_id.'_'.$originalName);

			// Resize and save image
			$thumbnailImage->resize($newWidth,$newHeight);
			$thumbnailImage->save($thumbnailPath.$admin_id.'_'.$content_id.'_'.$originalName); 
	    	return $admin_id.'_'.$content_id.'_'.$originalName;
    	}
    }

    public function CheckLocationStatus(){
        $status = 'server_error';
        $countlocalhost = substr_count(url()->current(), 'localhost');
        if($countlocalhost<=0){
            $status = 'online';
        }
        if($countlocalhost>0){
            $status = 'offline';
        }
        return ["status"=>$status];
    }
}
