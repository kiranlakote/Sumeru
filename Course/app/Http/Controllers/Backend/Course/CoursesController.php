<?php

namespace App\Http\Controllers\Backend\Course;

use App\Models\Course\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Backend\Course\CreateResponse;
use App\Http\Responses\Backend\Course\EditResponse;
use App\Repositories\Backend\Course\CourseRepository;
use App\Http\Requests\Backend\Course\ManageCourseRequest;
use App\Http\Requests\Backend\Course\CreateCourseRequest;
use App\Http\Requests\Backend\Course\StoreCourseRequest;
use App\Http\Requests\Backend\Course\EditCourseRequest;
use App\Http\Requests\Backend\Course\UpdateCourseRequest;

/**
 * CoursesController
 */
class CoursesController extends Controller
{
    /**
     * variable to store the repository object
     * @var CourseRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param CourseRepository $repository;
     */
    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Course\ManageCourseRequest  $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageCourseRequest $request)
    {
        return new ViewResponse('backend.courses.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateCourseRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Course\CreateResponse
     */
    public function create(CreateCourseRequest $request)
    {
        return new CreateResponse('backend.courses.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCourseRequestNamespace  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreCourseRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('admin.courses.index'), ['flash_success' => trans('alerts.backend.courses.created')]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Course\Course  $course
     * @param  EditCourseRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Course\EditResponse
     */
    public function edit(Course $course, EditCourseRequest $request)
    {
        return new EditResponse($course);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCourseRequestNamespace  $request
     * @param  App\Models\Course\Course  $course
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $course, $input );
        //return with successfull message
        return new RedirectResponse(route('admin.courses.index'), ['flash_success' => trans('alerts.backend.courses.updated')]);
    }
    
}
