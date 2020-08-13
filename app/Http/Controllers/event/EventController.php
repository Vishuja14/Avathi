<?php

namespace App\Http\Controllers\event;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use App\Repositories\EventRepository;


class EventController extends Controller
{
    protected $request;
       /**
        * @var ExamRepository
        */
       protected $repo;
       protected $eventRepository;

       /**
        * ExamController constructor.
        * @param Request $request
        * @param ExamRepository $repo
        */
       public function __construct(
         Request $request,
          EventRepository $eventRepository
       ) {
           $this->request = $request;
          $this->eventRepository = $eventRepository;
       }
 public function store(EventRequest $request){

          $input = $request->all();
     $response =  $this->eventRepository->create($input);
         /*return   $this->eventRepository->create($input);*/
     return $this->successResponse($response,'created',201);
    }
     /**
          * @return \App\Http\Controllers\Response
          */
        /* public function createEvents() {
              $input = $request->all();
                    return $this->successResponse($response,'created',201);
         }*/
}
