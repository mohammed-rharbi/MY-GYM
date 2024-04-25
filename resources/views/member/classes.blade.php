@extends('layouts.app')

@section('title', 'Classes')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4">Upcoming Classes</h1>

            <div class="idance">
                <div class="schedule content-block">
                    <div class="container">
                        <h2 data-aos="zoom-in-up" class="aos-init aos-animate">Schedule</h2>

                        <div class="timetable">

                            <!-- Schedule Top Navigation -->
                            <nav class="nav nav-tabs">
                                <a class="nav-link active">Mon</a>
                                <a class="nav-link">Tue</a>
                                <a class="nav-link">Wed</a>
                                <a class="nav-link">Thu</a>
                                <a class="nav-link">Fri</a>
                                <a class="nav-link">Sat</a>
                                <a class="nav-link">Sun</a>
                            </nav>

                            @if ($classes->isEmpty())
		
                            <h4 class="text-dark text-center mt-5">No classes found</h4>
                    
                            @endif
                            <div class="tab-content">
                                <div class="tab-pane show active">
                                    <div class="row">


                                        @foreach($classes as $class)
                                        <div class="col-md-6">
                                            <div class="timetable-item">
                                                <div class="timetable-item-img">
                                                    <img src="/storage/{{ $class->classroom->image }}" alt="Contemporary Dance" class="img-fluid rounded">
                                                </div>
                                                <div class="timetable-item-main">
                                                    <div class="timetable-item-name">{{ $class->title }}</div>
                                                    <div class="timetable-item-description">{{ $class->description }}</div>
                                                    <div class="timetable-item-time">{{ $class->startTime }} - {{ $class->endTime }}</div>
                                                    <div class="timetable-item-date">{{ $class->date }}</div>
                                                    <a href="{{ route('Class_details', $class->id) }}" class="btn btn-primary mt-3">See More</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .idance .classes-details ul.timetable {
        margin: 0 0 22px;
        padding: 0;
    }

    .idance .classes-details ul.timetable li {
        list-style: none;
        font-size: 15px;
        color: #7f7f7f;
    }

    .idance .timetable {
        max-width: 900px;
        margin: 0 auto;
    }

    .idance .timetable-item {
        border: 1px solid #d8e3eb;
        padding: 15px;
        margin-top: 20px;
        position: relative;
        display: block;
    }

    @media (min-width: 768px) {
        .idance .timetable-item {
            display: flex;
        }
    }

    .idance .timetable-item-img {
        overflow: hidden;
        height: 100px;
        width: 100px;
        display: none;
    }

    .idance .timetable-item-img img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    @media (min-width: 768px) {
        .idance .timetable-item-img {
            display: block;
        }
    }

    .idance .timetable-item-main {
        flex: 1;
        position: relative;
        margin-top: 12px;
    }

    @media (min-width: 768px) {
        .idance .timetable-item-main {
            margin-top: 0;
            padding-left: 15px;
        }
    }

    .idance .timetable-item-time,
    .idance .timetable-item-date {
        font-size: 14px;
        margin-bottom: 4px;
    }

    .idance .timetable-item-name {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .idance .btn-primary {
        width: 100%;
    }

    .idance .schedule .nav-tabs {
        border-bottom: 2px solid #104455;
    }

    .idance .schedule .nav-link {
        flex: 1;
        font-size: 14px;
        text-align: center;
        text-transform: uppercase;
        color: #3d3d3d;
        font-weight: 500;
        border-radius: 2px 2px 0 0;
        padding-left: 0;
        padding-right: 0;
        cursor: pointer;
    }

    @media (min-width: 768px) {
        .idance .schedule .nav-link {
            font-size: 16px;
        }
    }

    .idance .schedule .nav-link.active {
        background: #104455;
        border-color: #104455;
        color: #fff;
    }

    .idance .schedule .nav-link.active:focus {
        border-color: #104455;
    }

    .idance .schedule .nav-link:hover:not(.active) {
        background: #46c1be;
        border-color: #46c1be;
        color: #fff;
    }

    .idance .schedule .tab-pane {
        padding-top: 10px;
    }
</style>
