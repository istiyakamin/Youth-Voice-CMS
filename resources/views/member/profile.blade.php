@extends('layouts.app')

@section('content')

@php
    $start    = (new DateTime(Auth()->user()->join_date))->modify('first day of this month');
    $end      = (new DateTime(now()))->modify('first day of next month');
    $interval = DateInterval::createFromDateString('1 month');
    $join_date   = new DatePeriod($start, $interval, $end);
    if ($member->position == 'General Member') {
        $membership_fees = 200;
    } elseif ($member->position == 'Senior Member') {
        $membership_fees = 300;
    } elseif ($member->position == 'Campus Compass') {
        $membership_fees = 100;
    } else {
        $membership_fees = 500;
    }
    
    $payment_sum = 0;
    $sl = 0;
@endphp 

@foreach ($login_user_payment_info as $payment_info)
    @php
        $payment_sum += $payment_info->amount
    @endphp
@endforeach


    <div class="row">
        <div class="col-md-6">
            <div class="w200 text-center pr30" style="float:left">
                <img src="{{asset('images/profile_picture/' . $member->profile_picture)}}" style="border-radius:25%" width="165" height="165" class="responsive">
            </div>
            <div class="va-t m30">

                    <h2 class=""> {{ $member->name }} <small> Profile </small></h2>
                    <p class="fs15 mb20">{{ $member->address }}</p>

                    <ul class="list-inline list-unstyled">

                        @isset($member->facebook)
                            <li>
                                <a href="{{ $member->facebook }}" target="_blank" title="facebook Profile">
                                    <span class="fa fa-facebook-square fs35 text-primary"></span>
                                </a>
                            </li>
                        @endisset
                    
                        @isset($member->twitter)
                            <li>
                                <a href="$member->twitter" target="_blank" title="twitter Profile">
                                    <span class="fa fa-twitter-square fs35 text-info"></span>
                                </a>
                            </li>
                        @endisset
                        @isset($member->linkedin)
                            <li>
                                <a href="$member->linkedin" target="_blank" title="Linkedin Profile">
                                    <span class="fa fa-linkedin-square fs35 text-danger"></span>
                                </a>
                            </li>
                        @endisset

                        <li>
                            <a href="mailto:{{$member->email}}" target="_top" title="email link">
                                <span class="fa fa-envelope-square fs35 text-muted"></span>
                            </a>
                        </li>
                        
                    </ul>

                </div>
        </div>
        <div class="col-md-6" >
                <div class="panel">
                        <div class="panel-body pn">
                            <table class="table">
                                <thead>
                                    <tr class="primary">
                                        <th>#</th>
                                        <th colspan="2">Details information of {{ $member->name }}</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Name</td>
                                        <td>{{ $member->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Age</td>
                                        <td>Not Permitted</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Email</td>
                                        <td>{{ $member->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Join Date</td>
                                        <td>{{ $member->join_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Occupation</td>
                                        <td>{{ $member->occupation }}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>YV Position</td>
                                        <td>{{ $member->position }}</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Total Payment</td>
                                        <td>
                                            @foreach ($join_date as $single_date)
                                                @php
                                                    ++$sl
                                                @endphp
                                            @endforeach
                                            {{ $total_membership_fees = $sl*$membership_fees }} TAKA </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Payment Complete</td>
                                        <td>{{ $payment_sum }} TAKA</td>
                                    </tr>
                                    @php
                                        $total_due = $total_membership_fees-$payment_sum;
                                    @endphp
                                    <tr>
                                        <td>8</td>
                                        <td>@if ($total_due < 0) Advance Payment @else Payement Due @endif</td>
                                        <td>{{abs($total_due)}} TAKA</td>
                                    </tr>

                                    
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>

              

              
@endsection