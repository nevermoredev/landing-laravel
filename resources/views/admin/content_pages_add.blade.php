<div class="container-fluid col-sm-10" > 
	
	{!! Form::open([
					'url'=>route('pagesAdd'), 
					'class'=>'form-horizontal',
					'method'=>'POST',
					'enctype'=>'multipart/form-data' 
					]) !!}

		<div class="form-group row">
			{!! Form::label('name','Название:',[
				'class'=>'control-label col-sm-4'
				]) !!}
				<div class="col-sm-6">
					{!! Form::text('name',old('name'),[
						'class'=>'form-control text-center',
						'placeholder'=>'Ввидите название страницы'
						]) !!}
				</div>
		</div>
		<div class="form-group row">
			{!! Form::label('alias','Псевдоним:',[
				'class'=>'control-label col-sm-4'
				]) !!}
				<div class="col-sm-6">
					{!! Form::text('alias',old('alias'),[
						'class'=>'form-control text-center',
						'placeholder'=>'Ввидите псевдоним страницы'
						]) !!}
				</div>
		</div>
		<div class="form-group row">
			{!! Form::label('text','Описание:',[
				'class'=>'control-label col-sm-2'
				]) !!}
				<div class="col-sm-10">
					{!! Form::textarea('text',old('text'),[
						'id'=>'editor',
						'class'=>'form-control text-center'
						]) !!}
				</div>
		</div>
		<div class="form-group row ">
			{!! Form::label('images','Изображение:',[
				'class'=>'control-label col-sm-4'
				]) !!}
				<div class="col-sm-4">
					{!! Form::file('images',[
						'class'=>'filestyle',
						'data-Text'=>'Выбрать',
						'data-placeholder'=>'Добавьте изображение'
						]) !!}
			</div>
		</div>
		<div class="form-group text-center">
			<div class="col-sm-6-offset-2">
				{!! Form::button('Сохранить',[
					'class'=>'btn btn-primary',
					'type'=>'submit'
					])  !!}
			</div>
		</div>
	{!! Form::close() !!}
	<script>
		CKEDITOR.replace('editor');
	</script>
</div>