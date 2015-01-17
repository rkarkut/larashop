<?php

class BaseController extends Controller
{
    function __construct()
    {
//        View::share('success', $success);
    }


    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

}
