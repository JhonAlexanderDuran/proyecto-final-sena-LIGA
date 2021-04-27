@foreach($escuelas as $escuela)
	<tr>
		<td> {{$escuela->name}} </td>
		<td> {{$escuela->document}} </td>
		<td> {{$escuela->photo}} </td>
		<td>
			@if(Auth::user()->role == 'Admin')
							<a href="{{url('escuela/'.$escuela->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
							<a href="{{url('escuela/'.$escuela->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<a href="{{url('escuela/'.$escuela->id.'/payments')}}" class="btn btn-outline-primary"> <i class="fas fa-dollar-sign"></i></a>
							<a href="{{url('escuela/'.$escuela->id.'/assistance')}}" class="btn btn-outline-primary"> <i class="fas fa-calendar-alt"></i></a>
							<form action="{{url('escuela/'.$escuela->id)}}" method="post" style="display: inline">
								{!! csrf_field() !!}
								{!! method_field('delete') !!}
								<button class="btn btn-outline-danger btn-delete"><i class="fa fa-trash" type="button"></i></button>
							</form>
						@endif
		</td>
	</tr>
@endforeach