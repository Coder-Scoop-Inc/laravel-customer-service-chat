<?php

namespace Coderscoop\Chat\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Description of ChatFacade
 *
 * @author tesa
 */
class ChatFacade extends Facade
{
    public static function getFacadeAccessor() 
    {
        return 'chat';
    }
}
