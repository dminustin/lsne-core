<?php

namespace Dminustin\LSNE\CorePackage;

use Illuminate\Support\Facades\Facade;

class PackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lsne-tags';
    }
}
