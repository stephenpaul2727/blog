@extends('layouts.home')

@section('content')
<div class="container-fluid bg-3">
    <div class="container">
        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        <h3 class="margin">Create new message</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! BootForm::open()->action(route('message.store'))->style('font-size:15px;')->post() !!}
        {!! BootForm::textarea('Message','description') !!}
        {!! BootForm::submit('Submit')->style('display:block;margin:0px auto;') !!}
        {!! BootForm::close() !!}
    </div>
</div>
@endsection