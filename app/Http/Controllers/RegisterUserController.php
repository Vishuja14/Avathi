<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImgaeRequest;
use App\Http\Requests\OtpRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UserRequest;
use App\Repositories\ImageRepository;
use App\Repositories\RegisterUserRepository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    protected $request;
    /**
     * @var RegisterUserRepository
     */
    protected $repo;
    protected $registerUserRepository;
    protected $userRepository;

    /**
     * ExamController constructor.
     * @param Request $request
     * @param RegisterUserRepository $repo
     */
    public function __construct(
        Request $request,
        RegisterUserRepository $registerUserRepository,
        UserRepository $userRepository
    ) {
        $this->request = $request;
        $this->registerUserRepository = $registerUserRepository;
        $this->userRepository = $userRepository;
    }
    public function store(Request $request){
        // dd($request);
        $input = $request->all();
        $today = today();
        $input["otp"] = mt_rand(1000,9999);
        $input["created_date"] = today()->format('Y-m-d');
        $input["created_time"] = Carbon::now()->toDateTimeString();
            $response =  $this->registerUserRepository->create($input);
            return $this->successResponse($response,'created',201);
        }

    public function verifyOtp(OtpRequest $request){
        // dd($request);
        $input = $request->all();
        $response =  $this->registerUserRepository->verify($input);
        return $this->successResponse($response,'verify',201);
    }
    public function registerGuestToUser(UserRequest $request){
        // dd($request);
        $input = $request->all();
        $response =  $this->registerUserRepository->guestToUser($input);

        //dd($response);
        return $this->successResponse($response,'registered',201);
    }


}
