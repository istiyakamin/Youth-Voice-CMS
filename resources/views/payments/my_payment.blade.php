@extends('layouts.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/utility/highlight/styles/googlecode.css')}}">
@endsection

@section('content')

@php
    $start    = (new DateTime(Auth()->user()->join_date))->modify('first day of this month');
    $end      = (new DateTime(now()))->modify('first day of next month');
    $interval = DateInterval::createFromDateString('1 month');
    $join_date   = new DatePeriod($start, $interval, $end);
    if (Auth()->user()->position == 'General Member') {
        $membership_fees = 200;
    } elseif (Auth()->user()->position == 'Senior Member') {
        $membership_fees = 300;
    } elseif (Auth()->user()->position == 'Campus Compass') {
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

<div style="display:flex; flex-direction: column; ">
    <div class="tables-datatables-page" style="order:2">
        <div class="col-md-12">
                            <div class="panel panel-visible">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        <span class="glyphicon glyphicon-tasks"></span>Payment Datatable</div>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table table-striped table-bordered table-hover" id="datatable3" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Monthly</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            
                                            <tr>
                                                <th>SL</th>
                                                <th>Monthly</th>
                                                <th>Status</th>
                                                <th>Amount</th>
    
                                            </tr>
                                            
                                            
                                        </tfoot>
                                        <tbody>
                                            
                                            @php
                                                $monthly_payment_status = round($payment_sum/$membership_fees);
                                                
                                            @endphp
                                            @foreach ($join_date as $single_date)

                                                <tr>
                                                <td>{{ ++$sl }}</td>
                                                <td>{{ $single_date->format("F, Y") }}</td>
                                                <td>
                                                    @php
                                                        $monthly_payment_status-- ;
                                                    @endphp
                                                    @if ($monthly_payment_status >= 0)
                                                        <div class="btn .btns .ladda-button btn-success btn-xs .btn-gradient wrapped">
                                                            PAYMENT SUCCESSFUL    
                                                        </div>       

                                                    @else

                                                        <div class="btn .ladda-button .btns btn-danger btn-xs .btn-gradient wrapped">
                                                                PAYMENT DUE    
                                                        </div> 
                                                    @endif
                                                    
                                                </td>
                                                <td>
                                                    {{ $membership_fees . ' TAKA' }}
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="row mb10" style="order:1">
        <div class="col-md-4">
            <div class="panel bg-alert light of-h mb10">
                <div class="pn pl20 p5">
                    <div class="icon-bg"> <i class="glyphicons glyphicons-fullscreen"></i> </div>
                <h2 class="mt15 lh15">
                    <b>
                        {{ $total_membership_fees = $sl*$membership_fees }} TAKA
                    </b>
                </h2>
                    <h5 class="text-muted">Total payment</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel bg-info light of-h mb10">
                <div class="pn pl20 p5">
                    <div class="icon-bg"> <i class="glyphicons glyphicons-circle_ok"></i> </div>
                    <h2 class="mt15 lh15">
                        <b>
                            
                            {{ $payment_sum }} TAKA
                        </b>
                    </h2>
                    <h5 class="text-muted">Payment Complete</h5>
                </div>
            </div>
        </div>
        @php
            $total_due = $total_membership_fees-$payment_sum;
        @endphp
        <div class="col-md-4">
            <div class="panel @if ($total_due < 0) bg-success @else bg-danger @endif light of-h mb10">
                <div class="pn pl20 p5">
                    <div class="icon-bg">
                        <i class="fa fa-bar-chart-o"></i></div>
                    <h2 class="mt15 lh15"> 
                        <b>
                            {{abs($total_due)}} TAKA
                        </b> 
                    </h2>
                    <h5 class="text-muted">@if ($total_due < 0) Advance Payment @else Payement Due @endif</h5>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection

@section('script')
	<script type="text/javascript" src="{{asset('/vendor/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/vendor/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>

	<script>
		$(document).ready(function(){
			
			$('#datatable3').dataTable({
				"ordering": false,
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": "",
                        "sNext": ""
                    }
                },
                "iDisplayLength": 25,
                "aLengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                "sDom": 'T<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                "oTableTools": {
                    "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                }
            });
		})
	</script>
	
@endsection
