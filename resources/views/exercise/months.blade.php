@extends('layouts.layouts')



@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> month which has the highest number of days : {{$model['name']}}
                    </h4>
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
                            @forelse($model['exercises'] as $item)
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
