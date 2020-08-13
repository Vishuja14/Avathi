<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImgaeRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Repositories\ImageRepository;
use App\Repositories\RegisterUserRepository;
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

    /**
     * ExamController constructor.
     * @param Request $request
     * @param RegisterUserRepository $repo
     */
    public function __construct(
        Request $request,
        RegisterUserRepository $registerUserRepository
    ) {
        $this->request = $request;
        $this->registerUserRepository = $registerUserRepository;
    }
    public function store(RegisterUserRequest $request){
        // dd($request);
            $input = $request->all();
            //$otp = mt_rand(1000,9999);
            //dd($otp);
        $today = today();
        $input["otp"] = mt_rand(1000,9999);
        $input["created_date"] = today()->format('Y-m-d');
        $input["created_time"] = Carbon::now()->toDateTimeString();

            $response =  $this->registerUserRepository->create($input);
            return $this->successResponse($response,'created',201);
        }


}
