<?php


namespace App\Repositories;


use App\Helpers\Helper;
use App\Models\EOImage;


class ImageRepository
{
    protected $eoImage;

    public function __construct(EOImage $eoImage)
    {
        $this->eoImage = $eoImage;
    }
    /**
     * Retrive all the Profiles in according to filters
     * @filter
     *
     * @return
     * @filter function
     *
     */
    public function filter($request){
        return $this->eoImage::with('user')->where($request);
    }
    /**
     * Retrive by Ids
     * @Get
     *
     * @return
     * @GETbYiD function
     *
     */
    public function getByIds($builder,$ids){
        return $builder->whereIn((new $this->eoImage)->primaryKey?:'id',$ids);
    }
    /**
     * all profiles
     * @Get
     *
     * @return
     * @GETbYiD function
     *
     */
    public function all(){
        return $this->eoImage::all();
    }

     public function create($request){
             //dd($request);
           $data = $this->eoImage::create($request);
           return response([],201);
        }
    /**
     * Store the profile in according to request
     * @store
     *
     * @return
     * @filter function
     *
     */

}
