<?php


namespace App\Repositories;


use App\Helpers\Helper;
use App\Models\Event\EOEvent;

class EventRepository
{
    protected $eoEvent;

    public function __construct(EOEvent $eoEvent)
    {
        $this->eoEvent = $eoEvent;
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
        return $this->eoEvent::with('user')->where($request);
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
        return $builder->whereIn((new $this->eoEvent)->primaryKey?:'id',$ids);
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
           $data = $this->eoEvent::create($request);
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
