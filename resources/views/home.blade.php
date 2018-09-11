@extends('layouts.app')

@section('content')
<div class="row mb10">
    <div class="col-md-3">
        <div class="panel bg-alert light of-h mb10">
            <div class="pn pl20 p5">
                <div class="icon-bg"> <i class="fa fa-users"></i> </div>
                <h2 class="mt15 lh15"> <b>{{ $total_member }}</b> </h2>
                <h5 class="text-muted">Total Member</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel bg-info light of-h mb10">
            <div class="pn pl20 p5">
                <div class="icon-bg"> <i class="fa fa-twitter"></i> </div>
                <h2 class="mt15 lh15"> <b>348</b> </h2>
                <h5 class="text-muted">Tweets</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel bg-danger light of-h mb10">
            <div class="pn pl20 p5">
                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                <h2 class="mt15 lh15"> <b>267</b> </h2>
                <h5 class="text-muted">Reach</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel bg-warning light of-h mb10">
            <div class="pn pl20 p5">
                <div class="icon-bg"> <i class="fa fa-envelope"></i> </div>
                <h2 class="mt15 lh15"> <b>714</b> </h2>
                <h5 class="text-muted">Comments</h5>
            </div>
        </div>
    </div>
</div>
@endsection