<section>
	        <div class="inner_wrapper">
          <div class="container">
            <div class="inner_section">
          <div class="row">
              <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                {!! Html::image('assets/img/'.$page->images,'',array('class'=>'img-circle delay-03s animated wow zoomIn')) !!}</div>
                <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                  <div class=" delay-01s animated fadeInDown wow animated">
                    {!! $page->text !!}
                </div>  
               </div>
              </div>
              <div class="back_button_page"><a href="/" class="btn btn-primary btn-lg active" >Back</a></div>
            </div>
          </div> 
          </div>
	
</section>