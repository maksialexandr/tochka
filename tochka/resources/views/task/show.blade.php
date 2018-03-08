@extends('layouts.app')
@section('content')
    @if(!empty($task))
        {!! $task !!}
    @endif
@stop