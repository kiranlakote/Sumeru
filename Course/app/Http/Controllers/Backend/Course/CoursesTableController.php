<?php

namespace App\Http\Controllers\Backend\Course;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Course\CourseRepository;
use App\Http\Requests\Backend\Course\ManageCourseRequest;

/**
 * Class CoursesTableController.
 */
class CoursesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var CourseRepository
     */
    protected $course;

    /**
     * contructor to initialize repository object
     * @param CourseRepository $course;
     */
    public function __construct(CourseRepository $course)
    {
        $this->course = $course;
    }

    /**
     * This method return the data of the model
     * @param ManageCourseRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCourseRequest $request)
    {
        return Datatables::of($this->course->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('name', function ($course) {
                return $course->name;
            })
            ->addColumn('code', function ($course) {
                return $course->code;
            })
            ->addColumn('start_date', function ($course) {
                return Carbon::parse($course->start_date)->toDateString();
            })
            ->addColumn('end_date', function ($course) {
                return Carbon::parse($course->end_date)->toDateString();
            })
            ->addColumn('batch', function ($course) {
                return $course->batch;
            })
            ->addColumn('fee', function ($course) {
                return $course->fee;
            })
            ->addColumn('place', function ($course) {
                return $course->place;
            })
            ->addColumn('city', function ($course) {
                return $course->city;
            })
            ->addColumn('state', function ($course) {
                return $course->state;
            })
            ->addColumn('pincode', function ($course) {
                return $course->pincode;
            })

            ->addColumn('created_at', function ($course) {
                return Carbon::parse($course->created_at)->toDateString();
            })
            ->addColumn('actions', function ($course) {
                return $course->action_buttons;
            })
            ->make(true);
    }
}
