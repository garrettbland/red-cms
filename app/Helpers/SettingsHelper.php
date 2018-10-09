<?php

/**
* Retrieve settings value by key
*
* @param $key
*/

function setting($key)
{
    return array_get(app('settings'), $key);
}
