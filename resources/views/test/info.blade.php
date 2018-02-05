<table class="table table-striped table-bordered table-hover" id="table_info">
	
	<tr>
		<th>icon</th>
		<td>d</td>	
	</tr>
	<tr>
		<th>date</th>
		<td>{{ $lead['date'] }}</td>	
	</tr>
	<tr>
		<th>name</th>
		<td>{{ $lead['name'] }}</td>	
	</tr>
	<tr>
		<th>phone</th>
		<td>{{ $phone }}</td>	
	</tr>
	<tr>
		<th>email</th>
		<td>{{ $lead['email'] }}</td>	
	</tr>
	
	@foreach($mores as $key => $more)
		<tr>
			<th>{{ $key }}</th>
			<td>
			@foreach($more as $val)
					
				{{ $val }}
				
			@endforeach
			</td>
		</tr>
		@endforeach
	
	
</table>