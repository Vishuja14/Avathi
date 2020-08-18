<?php


namespace App\Repositories;


use App\Helpers\Helper;
use App\Models\EOUser;


class UserRepository
{
    protected $eoUser;

    public function __construct(EOUser $eoUser)
    {
        $this->eoUser = $eoUser;
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
        return $this->eoUser::with('user')->where($request);
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
        return $builder->whereIn((new $this->eoUser)->primaryKey?:'id',$ids);
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
        return $this->profile::all();
    }

     public function create($request){
           //  dd($request);
           $data = $this->eoUser::create($request);
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
