<?php

namespace Models\Seo;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'model_id', 'model_type', 'heading', 'title', 'meta_title', 'meta_desc'
    ];
    /*
     * ФУНКЦИИ
     */
    public static function getSeoByObject($object)
    {
        return Seo::where([
            'model_type' => get_class($object),
            'model_id'   => $object->id
        ])->first();
    }

    /*
     * Мутаторы
     */
    public function getSeoTitleAttribute()
    {
        return $this->title ?? config('app.name');
    }

    public function getSeoHeadingAttribute()
    {
        return $this->heading;
    }

    public function getSeoMetaTitleAttribute()
    {
        return $this->meta_title;
    }

    public function getSeoMetaDescAttribute()
    {
        return $this->meta_desc;
    }
}
