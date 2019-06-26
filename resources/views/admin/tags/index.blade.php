@extends('layouts.app')

@section('content')
<div class = "container">
	<div class = "row">
		<div class="col-md-8 col md-offset-2">
			<div class="panel panel-default">
				<div style="margin-top:50px;" class="panel-heading">
					Lista de Etiquetas
					<a style="margin-left: 550px;" href=" {{ route('tags.create') }}" 
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
						@foreach($tags as $tag)
						<tr>
							<td>{{ $tag->id }}</td>
							<td>{{ $tag->name }}</td>
							<td width="10px">
								<a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-success">
									ver
								</a>	
							</td>
							<td width="10px">
								<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-primary">
									Editar
								</a>	
							</td>
							<td width ="10px">
								{!! Form::open(['route'=>['tags.destroy', $tag->id], 'method'=> 'DELETE']) !!}
								<button class="btn btn-sm btn-danger">
									Eliminar
								</button>

								{!! Form::close() !!}
							</td>	
						</tr>

						@endforeach
					</tbody>
				</table>
				{{ $tags->render() }}
			</div>
		</div>
		
	</div>
</div>


@endsection