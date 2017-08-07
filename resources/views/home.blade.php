@extends('layouts.home')

@section('content')
<div class="container" style="margin-top: 10%; margin-bottom: 10%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default margin">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome @if( Auth::check() )
                        {{ Auth::user()->name }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
