<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImgaeRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Repositories\ImageRepository;
use App\Repositories\RegisterUserRepository;
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
            $response =  $this->registerUserRepository->create($input);
            /*return   $this->eventRepository->create($input);*/
            return $this->successResponse($response,'created',201);
        }


}
