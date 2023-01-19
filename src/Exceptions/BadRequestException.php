<?php

namespace Dminustin\LSNE\CorePackage\Exceptions;

class BadRequestException extends BaseException
{
    protected $code = 400;
    protected $message = 'Bad request';
}
