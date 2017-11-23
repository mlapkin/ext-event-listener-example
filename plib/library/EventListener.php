<?php
// Copyright 1999-2017. Plesk International GmbH.
class Modules_EventListenerExample_EventListener implements EventListener
{
    public function filterActions()
    {
        return json_decode(pm_Settings::get('actions', '[]'), true);
    }

    public function handleEvent($objectType, $objectId, $action, $oldValue, $newValue)
    {
        pm_Log::info("Event '{$action}' is successfully handled.");
    }
}
return new Modules_EventListenerExample_EventListener();
