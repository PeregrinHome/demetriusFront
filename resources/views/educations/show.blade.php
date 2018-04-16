<?php
/**
 * @var \App\Models\Courses\Course       $course
 * @var \App\Models\Educations\Education $education
 */
?>
@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>
            {{ $education->getName() }}
        </h1>

        {!! $education->getDescriptionTop() !!}
        {!! $education->getDescriptionBottom() !!}
    </div>


@stop