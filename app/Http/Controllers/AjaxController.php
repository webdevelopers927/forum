<?php

namespace App\Http\Controllers;

use App\Classes\MarkupGenerator;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Tag;

class AjaxController extends Controller
{
    public function search() {
        $tag_id = null;
    	if(request("tag")) {
    		$tag = request("tag");
	    	$tag_id = Tag::firstWhere("name", $tag);
    	}
        $questions = Question::with(["category", "tags", "comments"])->filter([request(["category", "q"]), $tag_id])->simplePaginate(10);
        return MarkupGenerator::Generate($questions);
    }
}
