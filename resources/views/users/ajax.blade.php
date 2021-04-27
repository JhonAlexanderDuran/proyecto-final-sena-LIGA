@foreach($users as $user)
	<tr>
		<td> {{$user->name}} </td>
		<td> {{$user->document}} </td>
		<td> {{$user->email}} </td>
		<td> {{$user->phonenumber}} </td>
		<td>
			@if ($user->role == 'Admin')
				<span class="badge badge-success"> Administrador </span>
			@else
				<span class="badge badge-info"> Club </span>
			@endif
		</td>
		<td>
			<a href="{{url('user/'.$user->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
			<a href="{{url('user/'.$user->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
			<form action="{{url('user/'.$user->id)}}" method="post" style="display: inline">
				{!! csrf_field() !!}
				{!! method_field('delete') !!}
				<button class="btn btn-outline-danger btn-delete"><i class="fa fa-trash" type="button"></i></button>							
			</form>
		</td>
	</tr>
@endforeach