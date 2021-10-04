<?php

namespace App\Traits;



trait Ccids

{

  

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->ccid)) {

                $latestUser = $model->orderBy('created_at','DESC')->first();
                if(!empty($latestUser)) {
                    $model->ccid = 100000+$latestUser->id+1;
                }
            }
        });
    }



    public function getKeyType()

    {

        return 'integer';

    }

}