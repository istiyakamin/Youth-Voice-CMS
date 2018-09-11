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
                                    <span class="glyphicon glyphicon-tasks"></span>Member Datatable</div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table table-striped table-bordered table-hover" id="datatable3" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Ocupation</th>
                                            <th>Position</th>
                                            <th>Join date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    	
                                		<tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Ocupation</th>
                                            <th>Position</th>
                                            <th>Join date</th>
                                            <th>Action</th>
                                        </tr>
                                    	
                                        
                                    </tfoot>
                                    <tbody>
                                        @foreach ($all_member as $single_member)
                                        <tr>
                                            <td>{{$single_member->name}}</td>
                                            <td>{{$single_member->email}}</td>
                                            <td>{{$single_member->occupation}}</td>
                                            <td>{{$single_member->position}}</td>
                                            <td>{{$single_member->join_date}}</td>
                                            <td>
                                            	<a href="{{ url('/profile').'/'.$single_member->id }}" class="btn btn-info">Show</a>
                                            	<a href="{{ url('/profile').'/'.$single_member->id }}" class="btn btn-danger disabled">Delete</a>
                                            </td>
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
