<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Http\Requests\ImgaeRequest;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;

class EOImageController extends Controller
{
    protected $request;
    /**
     * @var ImageRepository
     */
    protected $repo;
    protected $imageRepository;

    /**
     * ExamController constructor.
     * @param Request $request
     * @param ImageRepository $repo
     */
    public function __construct(
        Request $request,
        ImageRepository $imageRepository
    ) {
        $this->request = $request;
        $this->imageRepository = $imageRepository;
    }
    public function store(ImgaeRequest $request){
         // dd($request);
        $input = $request->all();
        $response =  $this->imageRepository->create($input);
        /*return   $this->eventRepository->create($input);*/
        return $this->successResponse($response,'created',201);
    }
}
