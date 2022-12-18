<?php

namespace IchBin\Meta\Concerns;

use IchBin\Meta\Models\Meta;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasMeta
{
    protected static function bootHasMeta()
    {
        static::forceDeleted(function ($model) {
            $model->meta()->delete();
        });
    }

    public function meta(): MorphOne
    {
        return $this->morphOne(Meta::class, 'metaable');
    }
}
