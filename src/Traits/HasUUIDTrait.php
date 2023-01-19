<?php

namespace Dminustin\LSNE\CorePackage\Traits;

use Illuminate\Support\Str;

trait HasUUIDTrait
{
    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->id = Str::orderedUuid()->toString();
//                $model->{$model->getKeyName()} = Str::orderedUuid()->toString();
            }
        });
    }
}