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
    @if($val->reply!='')
    <div style="padding-left: 5%">
        <div class="panel panel-default">
            <div class="panel-heading " style="font-size: 16px;">
               Stephen Paul
            </div>
            <div class="panel-body" style="font-size: 14px;">
                {{ $val->reply }}
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection