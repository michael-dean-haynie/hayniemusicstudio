<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $table = "page_content";

    static function updateContent($id, $newContent)
    {
        $content = \App\PageContent::find($id);
        $content->content = $newContent;
        $content->save();
    }
}
