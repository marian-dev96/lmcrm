<div class="panel panel-default">
        <div class="panel-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>icon</th>
                        <th>date</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>email</th>
                    </tr>
                    </thead>
                    <tbody>
                    
					@foreach($leads as $lead)
                        <tr onclick="info_table({{ $lead['id'] }})">
                            <td></td>
                            <td>{{ $lead['date'] }}</td>
                            <td>{{ $lead['name'] }}</td>
                            <td>{!! $lead['phone'] !!}</td>
                            <td>{{ $lead['email'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
				
				<div class="row">
					<div id="info_table" class="col-xs-4"></div>	
				</div>
        </div>
    </div>
	
	
