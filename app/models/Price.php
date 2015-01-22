<?php

class Price extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'prices';

    public function products()
    {
        return $this->hasMany('Product');
    }

    public function countries()
    {
        return $this->hasMany('Country');
    }
}
