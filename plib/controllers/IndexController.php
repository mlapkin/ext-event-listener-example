<?php
// Copyright 1999-2017. Plesk International GmbH.
class IndexController extends pm_Controller_Action
{
    public function indexAction()
    {
        $this->view->pageTitle = 'Event Listener Example';
        $actions = json_decode(pm_Settings::get('actions', '[]'), true);
        $this->view->actions = $actions;
    }
}
