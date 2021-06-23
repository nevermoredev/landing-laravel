@if($pages)

<div style="margin: 0px 50px 0px 50px;" >
	{!! Html::link(route('pagesAdd'),'Добавление новой страницы')  !!}
	<table class="table table-hover table-striped" >
		<thead>
			<tr>
				<th>№ п\п</th>
				<th>Имя</th>
				<th>Псевдоним</th>
				<th>Текст</th>
				<th>Дата создания</th>
				<th>Удалить</th>
			</tr>
		</thead>
		<tbody>	
			@foreach($pages as $k => $page)
			<tr>
				<td>{{ $page->id }}</td>
				<td>{!! Html::link( route('pagesEdit',['page'=>$page->id]),'Edit     '.$page->name,['alt'=>$page->name])  !!}</td>
				<td>{{ $page->alias }}</td>
				<td>{{ $page->text }}</td>
				<td>{{ $page->create_at }}</td>
				<td>
				{!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]), 'class'=>'form-horizontal','method'=>'POST' ]) !!}
				{{ method_field('delete') }}
				{!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
				{!! Form::close() !!}
			</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endif
</div
