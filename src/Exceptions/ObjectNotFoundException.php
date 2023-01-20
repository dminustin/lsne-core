<?php

namespace Dminustin\LSNE\CorePackage\Exceptions;

class ObjectNotFoundException extends BaseException
{
    protected $code = 404;
    protected $message = 'Object not found';
}
