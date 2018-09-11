@extends('layouts.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/utility/highlight/styles/googlecode.css')}}">

    
@endsection

@section('content')
<div class="tables-datatables-page">
	<div class="col-md-12">
                        <div class="panel panel-visible">
                            <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                    <span class="glyphicon glyphicon-tasks"></span>Exportable Datatable</div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table table-striped table-bordered table-hover" id="datatable3" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Which month payment</th>
                                            <th>Payment Date</th>
                                            <th>Payment Method</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    	
                                		<tr>
                                            <th>Name</th>
                                            <th>Which month payment</th>
                                            <th>Monthly</th>
                                            <th>Status</th>
                                            <th>Amount</th>

                                        </tr>
                                    	
                                        
                                    </tfoot>
                                    <tbody>

                                        @foreach ($payment_list as $single_payment)
                                            <tr>
                                                <td>{{ $single_payment->user->name }}</td>
                                                <td>{{ $single_payment->which_month_payment }}</td>
                                                <td>{{ $single_payment->payment_date}}</td>
                                                <td>{{ $single_payment->payment_method}}</td>
                                                <td>{{ $single_payment->amount}}</td>
                                            </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
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
                "iDisplayLength": 10,
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
