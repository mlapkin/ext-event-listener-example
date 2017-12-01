<?php
// Copyright 1999-2017. Plesk International GmbH.
class Modules_EventListenerExample_ApiCli extends pm_Hook_ApiCli
{
    public function setCommand()
    {
        pm_Settings::set('actions', json_encode($this->getActions()));
        $this->stdout('OK');
        $this->stdout(PHP_EOL);
    }

    private function getActions()
    {
        $option = $this->getOption('actions');
        if (!$option) {
            return [];
        }

        $actions = json_decode($option, true);
        if (!$actions) {
            return [];
        }

        return $actions;
    }

    public function submitCommand()
    {
        pm_ActionLog::submit('test_action');
    }
}
