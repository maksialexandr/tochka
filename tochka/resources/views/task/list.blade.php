@extends('layouts.app')
@section('content')
    <div class="container" style="user-select: none;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div style="margin: 10px;">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">#</th>
                            <th scope="col" style="text-align: center;">Title</th>
                            <th scope="col" style="text-align: center;">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)
                            <tr style="cursor: pointer;" class="popup-content" data-parameter="{!! $task->id !!}">
                                <th style="text-align: center;">{!! $task->id !!}</th>
                                <td style="text-align: center;">{!! $task->title !!}</td>
                                <td style="text-align: center;">{!! $task->date !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop