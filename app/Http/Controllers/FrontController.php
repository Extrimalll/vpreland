<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view( 'home');
    }

    public function kitchen(string $group)
    {
        $result = $this->getKitchen($group);
        return view( 'kitchen', ['kitchen' => $result]);
    }




    public function getKitchen($country)
    {

        $groups = DB::select('SELECT g.*,t.id_group_tags,t.tagname FROM `group_kitchen` g 
                                LEFT JOIN `tags` t ON g.id_tags = t.id_group_tags WHERE g.country = :country', ['country' => $country]);

        $result = [];

        foreach ($groups as $group) {
            $data = [];
            $data['id'] = $group->id;
            $data['name'] = $group->name;
            $data['country'] = $group->country;
            $data['id_tags'] = $group->id_tags;
            $data['tagname'] = $group->tagname;
            $result[] = $data;
        }
        return $result;
    }

    public function addTag(Request $request)
    {
        $tag_name = $request->input('tag');
        $id_tags = $request->input('id_tags');

        $query = DB::insert('insert into tags (id_group_tags, tagname) values (?, ?)', [$id_tags, $tag_name]);

        if($query == true)
            return true;
        else
            return false;
    }

    public function removeTag(Request $request)
    {
        $tag_name = $request->input('tag');

        $query = DB::table('tags')->where('tagname', $tag_name)->delete();

        if($query == true)
            return true;
        else
            return false;
    }
}
