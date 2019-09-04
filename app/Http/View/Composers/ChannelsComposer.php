<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Channels;

class ChannelsComposer
{

    public function compose(View $view)
    {
        $view->with('channels', Channels::all());
    }

}