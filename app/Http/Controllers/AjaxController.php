<?php

namespace App\Http\Controllers;

use App\Classes\MarkupGenerator;
use App\Classes\UserInfo;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Tag;

class AjaxController extends Controller
{
    public function search() {
        $url = url()->current();
        $username = request()->get("user");
        $id = UserInfo::get_id($username);
        $tag_id = null;
    	if(request("tag")) {
    		$tag = request("tag");
	    	$tag_id = Tag::firstWhere("name", $tag);
    	}
        $questions = Question::with(["category", "tags", "comments"])
        ->filter([request(["category", "q"]), $tag_id])
        ->where("user_id", $id)
        ->simplePaginate(10);
        // if()
        return MarkupGenerator::Generate($questions);
    }
}
