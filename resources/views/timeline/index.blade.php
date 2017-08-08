@extends('layouts.master')

@section('content')
    <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
        @foreach($messages as $key=>$val)
            <div class="panel panel-primary">
                <div class="panel-heading" style=" font-size: 16px;">
                    {{ $val->messageperson }}
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
                            {{ $val->replyperson }}
                        </div>
                        <div class="panel-body" style="font-size: 14px;">
                            {{ $val->reply }}
                        </div>
                    </div>
                </div>
            @endif
            <a href="/login"><button type="button" class="btn btn-danger btn-sm form-control margin">Reply</button></a>
        @endforeach
    </div>
@endsection