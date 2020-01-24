<?php

namespace App\Http\Controllers;
use App\ProfileImage;
use App\PackageReview;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileImageController extends Controller
{
    function index(Request $request) {
   		
		$profileImage = new ProfileImage();
        $profileImage->profileID = request('profileID');
        $profileImage->imageRef = request('imageRef');
        $profileImage->save();
        return $request;
	}

 function update(Request $request){
       $imageRef = request('imageRef');
	   $associate_id = request('profileID');
	   $res = "";
         $data=array(
            'imageRef' =>$imageRef
			);
			$data_details=array(
            'profile_image_ref' =>$imageRef
			);


			 $data_insert=array(
				'profileID' =>$associate_id,
				'imageRef' =>$imageRef
			
			);


			$expert_account = DB::table('profile_images')
             ->select('id')
             ->where('profileID','=',  $associate_id);
			 

			if ($expert_account->first()) {
				DB::table('profile_images')->where('profileID', $associate_id)->update($data);
				DB::table('expert_details')->where('associate_id', $associate_id)->update($data_details);
			}else{
				DB::table('profile_images')->insert($data_insert);
			}
			
            return $res;
   }


	function getProfileImageRef(Request $request){
		$associate_id = $request->associate_id;
		$expertAccount = ProfileImage::where('profileID', $associate_id)->get();

		if(count($expertAccount) === 0 ){
			return "No Image";
		}else{
			return ($expertAccount[0]->imageRef);
		}

	}

	function AverageRatingExpert(Request $request){
		$associate_id = $request->associate_id;
		$allReview = PackageReview::where('associate_id', $associate_id)->get();
		$ratingSum = 0;
		$totalRating = count($allReview);

		foreach ($allReview as $key => $value) {
			$ratingSum = $ratingSum + $value;
		}
		if($ratingSum === 0){
			return 0;
		}else{
			return $ratingSum / $totalRating;
		}
	}
}
