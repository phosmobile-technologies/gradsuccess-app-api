<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageReview;


class ApplicationReviewController extends Controller
{
   	function index(Request $request) {
   		
		$appReview = new PackageReview();
        $appReview->associate_id = request('associate_id');
        $appReview->form_id = request('form_id');
        $appReview->rating = request('rating');
        $appReview->comment = request('comment');
 
        $appReview->save();
 
        return $request;
	}
}
