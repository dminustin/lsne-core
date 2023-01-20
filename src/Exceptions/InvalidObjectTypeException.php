<?php

namespace Dminustin\LSNE\CorePackage\Exceptions;

class InvalidObjectTypeException extends BaseException
{
    protected $code = 400;
    protected $message = 'Invalid object type';
}
