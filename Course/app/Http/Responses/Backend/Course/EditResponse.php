<?php

namespace App\Http\Responses\Backend\Course;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Course\Course
     */
    protected $courses;

    /**
     * @param App\Models\Course\Course $courses
     */
    public function __construct($courses)
    {
        $this->courses = $courses;
    }

    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.courses.edit')->with([
            'courses' => $this->courses
        ]);
    }
}