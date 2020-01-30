<?php

namespace App\Repositories\Backend\Course;

use DB;
use Carbon\Carbon;
use App\Models\Course\Course;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseRepository.
 */
class CourseRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Course::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.courses.table').'.id',
                config('module.courses.table').'.name',
                config('module.courses.table').'.code',
                config('module.courses.table').'.start_date',
                config('module.courses.table').'.end_date',
                config('module.courses.table').'.batch',
                config('module.courses.table').'.fee',
                config('module.courses.table').'.place',
                config('module.courses.table').'.city',
                config('module.courses.table').'.state',
                config('module.courses.table').'.pincode',
                config('module.courses.table').'.created_at',
                config('module.courses.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        if (Course::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.courses.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Course $course
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Course $course, array $input)
    {
    	if ($course->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.courses.update_error'));
    }

}
