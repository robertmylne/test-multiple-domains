<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function first()
    {
        return $this->siteID;
    }

    public function second()
    {
        return $this->siteID;
    }

    public function third()
    {
        return $this->siteID;
    }
}
