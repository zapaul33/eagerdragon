@extends('layouts.dashboard')

@section('content')
    <div class="title-block">
        <h1 class="title"> Notifications List </h1>
    </div>
    <section class="section">
        <div class="row">
            @include('notification.partials.table')
        </div>
    </section>
@endsection
 
