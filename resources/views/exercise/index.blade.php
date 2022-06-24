@extends('layouts.layouts')



@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Exercises
                        <small>  </small>
                    </h4>
                </div>
                <div class="card-body">
                    @include('partials.error')
                    <form method="post" id="form1" action="{{route('exercise.store')}}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="mb-1">
                                    <input type="text" required name="exercise_name" class="form-control" id="basicInput" placeholder="Enter Exercise" />
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="mb-1">
                                    <input type="number" required name="hours" class="form-control" id="basicInput" placeholder="Enter hours" />
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="mb-1">
                                    <input type="number" name="mints" required class="form-control" id="basicInput" placeholder="Enter Mints" />
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="mb-1">
                                    <button class="btn btn-success" type="submit">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <p class="ml-4">this data only current day you can choose any day</p>
                            <form method="get" id="form2" action="{{route('exercise.index')}}">
                                @csrf
                                <div class="input-group">
                                    <button class="btn btn-outline-primary disabled" type="button">
                                        <i data-feather="search"></i>
                                    </button>
                                    <input type="text" value="{{request()->search}}" name="search" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                    <button class="btn btn-outline-primary" type="submit" >get !</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>Exercise Name</th>
                            <th>Hours</th>
                            <th>Mints</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($model as $item)
                                <tr>
                                    <td>{{$item->exercise_name}}</td>
                                    <td>{{$item->hours}}</td>
                                    <td>{{$item->mints}}</td>
                                    <td>{{$item->created_at}}</td>

                                </tr>

                        @empty
                            <tr>
                                <td class="py-2" colspan="8">
                                    <p class="text-center"> No Found Record</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
{{--                <div class="m-1">--}}
{{--                    {{$model->appends(request()->query())->links()}}--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Bordered table end -->


@endsection
