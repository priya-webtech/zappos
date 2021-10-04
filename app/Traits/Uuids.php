<?php

namespace App\Traits;



trait Uuids

{

    /**

     * Boot function from Laravel.

     */

/*    protected static function boot()

    {

        parent::boot();

        static::creating(function ($model) {

            if (empty($model->uuid)) {

                $latestUser = $model->orderBy('created_at','DESC')->first();

                $model->uuid = 100000+$latestUser->id+1;

            }

        });

    }*/

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {

                $latestUser = $model->orderBy('created_at','DESC')->first();
                if(!empty($latestUser)) {
                    $model->uuid = 100000+$latestUser->id+1;
                }
            }
        });
    }

    /**

     * Get the value indicating whether the IDs are incrementing.

     *

     * @return bool

     */

//    public function getIncrementing()

//    {

//        return false;

//    }

    /**

     * Get the auto-incrementing key type.

     *

     * @return integer

     */

    public function getKeyType()

    {

        return 'integer';

    }

}