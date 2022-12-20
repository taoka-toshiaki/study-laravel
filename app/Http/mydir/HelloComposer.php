<?php
namespace App\Http\mydir;
use Illuminate\View\View;

class HelloComposer
{
    public function compose(View $view)
    {
        $view->with('view_msg',$view->getName());
    }
}