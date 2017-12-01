<?php
// Copyright 1999-2017. Plesk International GmbH.
class Modules_EventListenerExample_ActionLog extends pm_Hook_ActionLog
{
    public function getEvents()
    {
        return [
            'test_action' => 'Test Action for the Event Listener',
        ];
    }
}
