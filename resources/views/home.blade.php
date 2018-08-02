@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="app">
                <passport-clients class="mb-4"></passport-clients>
                <passport-authorized-clients class="mb-4"></passport-authorized-clients>
                <passport-personal-access-tokens class="mb-4"></passport-personal-access-tokens>
            </div>
        </div>
    </div>
</div>
@endsection
