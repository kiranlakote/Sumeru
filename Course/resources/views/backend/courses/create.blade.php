@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.courses.management') . ' | ' . trans('labels.backend.courses.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.courses.management') }}
        <small>{{ trans('labels.backend.courses.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.courses.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-course']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.courses.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.courses.partials.courses-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.courses.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.courses.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!-- form-group -->
            </div><!--box-body-->
        </div><!--box box-success-->
    {{ Form::close() }}
@endsection
