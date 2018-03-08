@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <form action="/" class="form-inline" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="form-control form-control-search" type="text" name="title" placeholder="Search">
                <button class="btn btn-default" type="submit">Search</button>
                @if(!empty($message_search))
                    <div class="alert-danger">
                        {!! $message_search !!}
                    </div>
                @endif
            </form>
        </div>
    </div>
    <div class="container" style="user-select: none;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(!empty($message))
                    <div class="alert-success">
                        {!! $message !!}
                    </div>
                @endif
                    <div style="margin: 10px;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;">#</th>
                                    <th scope="col" style="text-align: center;">Title</th>
                                    <th scope="col" style="text-align: center;">Author</th>
                                    <th scope="col" style="text-align: center;">Status</th>
                                    <th scope="col" style="text-align: center;">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr style="cursor: pointer;" class="popup-content" data-parameter="{!! $task->id !!}">
                                        <th style="text-align: center;">{!! $task->id !!}</th>
                                        <td style="text-align: center;">{!! $task->title !!}</td>
                                        <td style="text-align: center;">{!! $task->author !!}</td>
                                        <td style="text-align: center;">{!! $task->status !!}</td>
                                        <td style="text-align: center;">{!! $task->description !!}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            {!! $tasks->render() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function() {
        var viewed = {};

        $('.popup-content').click(function () {
            var flag_viewed = true;
            var task_id = this.getAttribute('data-parameter');
            $.each(viewed,function(id, data) {
                if(id == task_id) {
                    $.magnificPopup.open({
                        type: 'inline',
                        closeOnContentClick: false,
                        items: {
                            src: data,
                            type: 'inline'
                        }
                    });
                    flag_viewed = false;
                }
            });
            if(flag_viewed)
                $.ajax({
                    url: '/task/' + task_id,
                    dataType: 'html',
                    success: function (data) {
                        $.magnificPopup.open({
                            type: 'inline',
                            closeOnContentClick: false,
                            items: {
                                src: data,
                                type: 'inline'
                            }
                        });
                        viewed[task_id] = data;
                    }
                });
        });

    });
</script>
@stop



