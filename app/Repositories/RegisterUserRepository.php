<?php


namespace App\Repositories;


use App\Helpers\Helper;
use App\Models\EOGuestUser;


class RegisterUserRepository
{
    protected $eoGuestUser;

    public function __construct(EOGuestUser $eoGuestUser)
    {
        $this->eoGuestUser = $eoGuestUser;
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
        return $this->eoGuestUser::with('user')->where($request);
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
        return $builder->whereIn((new $this->eoGuestUser)->primaryKey?:'id',$ids);
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
        return $this->eoGuestUser::all();
    }

     public function create($request){
           //  dd($request);
           $data = $this->eoGuestUser::create($request);
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
