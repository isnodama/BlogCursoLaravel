@extends('layouts.app')

@section('content')
<div class = "container">
	<div class = "row">
		<div class="col-md-8 col md-offset-2">
			<div class="panel panel-default">
				<div style="margin-top:50px;" class="panel-heading">
					Lista de mis Entradas
					<a style="margin-left: 680px;" href=" {{ route('posts.create') }}" 
					class="btn btn-sm btn-primary pull-right">
						Crear
					</a>
				</div>
			</div>

			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="10px">ID</th>
							<th>Nombre</th>
							<th style="text-align: center; "colspan="3">Accion</th>
						</tr>	
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<td>{{ $post->id }}</td>
							<td>{{ $post->name }}</td>
							<td width="10px">
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-success">
									ver
								</a>	
							</td>
							<td width="10px">
								<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">
									Editar
								</a>	
							</td>
							<td width ="10px">
								{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=> 'DELETE']) !!}
								<button class="btn btn-sm btn-danger">
									Eliminar
								</button>

								{!! Form::close() !!}
							</td>	
						</tr>

						@endforeach
					</tbody>
				</table>
				{{ $posts->render() }}
			</div>
		</div>
		
	</div>
</div>


@endsection