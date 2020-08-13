<?php


namespace App\Repositories;


use App\Helpers\Helper;
use App\Models\EOGuestUser;
use http\Env\Request;


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
            $isExist = $this->checkEmail($request);
            if($isExist == true){
                //$data = $this->eoGuestUser::where('email', '=', $request["email"]);
                //dd($data->get());
                $data = $this->eoGuestUser::update($request);
                //$data->update($data);


            }else{
                $data = $this->eoGuestUser::create($request);
            }

            // dd($data);
         $data->isExist = $isExist;
           return response($data,201);
        }

        public function checkEmail($request){
            //dd($request);

            if($this->eoGuestUser::where('email', '=', $request["email"])->exists()){
              return true;


            }
            return false;
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
