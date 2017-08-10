@extends('layouts.home')

@section('content')
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
    @foreach($messages as $val)
    <div class="panel panel-primary">
        <div class="panel-heading" style=" font-size: 16px;">
            {{ Auth::user()->name }}
            <p class="pull-right">{{ $val->date_modified }}</p>
        </div>
        <div class="panel-body" style="font-size: 14px;">
            {{ $val->description }}
        </div>
    </div>
    @foreach($replies as $k=>$r)
        @if($r->message_id === $val->id)
            <div style="padding-left: 5%">
                <div class="panel panel-default">
                    <div class="panel-body" style="font-size: 14px;">
                        <span style="text-decoration: underline">{{ $r->username }}</span>: {{ $r->reply_message }}<span class="pull-right">{{ $r->date_modified }}</span>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    @endforeach
</div>
@endsection