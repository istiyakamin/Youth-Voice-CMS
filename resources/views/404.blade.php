@extends('layouts.app')

@section('content')


            <h1 class="error-title"> 404! </h1>
            <h2 class="error-subtitle">Page Not Found for You.</h2>
            @if (session('message'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="fa fa-warning pr10"></i>
                <strong>{{ session('message') }}</strong></div>
            @endif
        
    
@endsection