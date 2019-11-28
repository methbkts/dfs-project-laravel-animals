@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        {{ config('app.name', 'Alexandria') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
