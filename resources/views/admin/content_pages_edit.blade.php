<div class="wrapper container-fluid">

{!! Form::open(['url' => route('pagesEdit',array('page'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group row justify-content-center">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Название:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-sm-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Введите название страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group row justify-content-center">
	     {!! Form::label('alias', 'Псевдоним:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-sm-8">
		 	{!! Form::text('alias', $data['alias'], ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group row justify-content-center">
	     {!! Form::label('text', 'Текст:',['class'=>'col-xs-10 control-label']) !!}
	     <div class="col-sm-9">
		 	{!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group row justify-content-center">
    	{!! Form::label('old_images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-sm-8">
			{!! Html::image('assets/img/'.$data['images'],'',['class'=>'img-circle img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_images', $data['images']) !!}
    	</div>
    </div>
    
    <div class="form-group row justify-content-center">
	     {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-sm-8">
		 	{!! Form::file('images', ['class' => 'filestyle','data-Text'=>'Выберите изображение','data-Name'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
		 </div>
    </div>
    

    
      <div class="form-group row justify-content-center">
	    <div class="col-xs-offset-2 col-sm-8">
	    <div class="back_button_page"> {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}</div>
	    </div>
	  </div>
    
{!! Form::close() !!}

<script>
            CKEDITOR.replace( 'editor', {
                uiColor: '#14B8C4',
                toolbar: [
                    [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
                    [ 'FontSize', 'TextColor', 'BGColor' ]
                ],
                width:['900px'],height:['300px']

            });

</script>
</div>