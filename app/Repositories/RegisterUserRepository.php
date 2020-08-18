<?php


namespace App\Repositories;


use App\Helpers\Helper;
use App\Mail\EmailVerification;
use App\Mail\SendOtpEmail;
use App\Models\EOGuestUser;
use App\Models\EOUser;
use http\Env\Request;
use Illuminate\Support\Facades\Mail;


class RegisterUserRepository
{
    protected $eoGuestUser;

    public function __construct(EOGuestUser $eoGuestUser, EOUser $eoUser)
    {
        $this->eoGuestUser = $eoGuestUser;
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
            $user = $this->eoUser::select('primary_key')->where('email','=',$request["email"]);
            $user = $user->get()->pluck('primary_key');
            $data = $this->eoUser::find($user->get(0));
            //dd($request);
            $data->update($request);
            $data->isExist = $isExist;
            //dd($data["otp"]);
            Mail::to($data["email"])->send(new SendOtpEmail($data["otp"]));

        }
        else{
            $data = $this->eoGuestUser::create($request);
            $data->isExist = $isExist;
            //dd($data["email"]);
            Mail::to($data["email"])->send(new SendOtpEmail($data));
        }
        //env()

        return response($data,201);
    }
    public function verify($request){
        $isExist = $this->checkEmail($request);
        if($isExist == true){
            if ($request["className"] == "EOGuestUser"){

                $user = $this->eoGuestUser::select('primary_key')->where('email','=',$request["email"]);
                $user = $user->get()->pluck('primary_key');
                $data = $this->eoGuestUser::find($user->get(0));
                // dd($data["otp"]);
                if ($data["otp"] == $request["otp"]){
                    $data->isOtpMatched = true;
                    $success['isOtpMatched'] = $data["isOtpMatched"];

                }else{
                    $data->isOtpMatched = false;
                    $success['isOtpMatched'] = $data["isOtpMatched"];

                }
                return response($success,201);
            }else{
                $user = $this->eoUser::select('primary_key')->where('email','=',$request["email"]);
                $user = $user->get()->pluck('primary_key');
                $data = $this->eoUser::find($user->get(0));

                if ($data["otp"] == $request["otp"]){
                    $data->isOtpMatched = true;
                    $success['isOtpMatched'] = $data["isOtpMatched"];

                }else{
                    $data->isOtpMatched = false;
                    $success['isOtpMatched'] = $data["isOtpMatched"];

                }
                return response($data,201);
            }


        }



    }
    public function guestToUser($request){


        $user = $this->eoGuestUser::select('primary_key')->where('primary_key','=',$request["guestUserPk"]);
        $user = $user->get()->pluck('primary_key');
        $data = $this->eoGuestUser::find($user->get(0));
        // dd($data["email"]);

        $request['email'] = $data["email"];
        // dd($request);

        $data1 = $this->eoUser::create($request);

        // dd($data);

        return response($data,201);
    }

    public function checkEmail($request){
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
