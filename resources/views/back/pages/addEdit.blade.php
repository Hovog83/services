@extends('back.layout.main')
@section('breadcrumb_first')
    pages
@stop
@section('breadcrumb_second')
    List
@stop
    @section('content')
            <!-- widget grid -->
    <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
                    <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"
                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>

                        <h2>pages form </h2>

                    </header>

                    <!-- widget div-->
                    <div>
                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->
                        </div>
                        <!-- end widget edit box -->
                        <!-- widget content -->
                        <div class="widget-body no-padding">

                        {{ Form::model($pages,array('class'=>'smart-form'))}}

                        <div class="col-xs-12">
                          <section class="col col-4">
                            {{ Form::label('title', 'title', array('class' => 'input'))}}
                            {{ Form::text('title', $pages->title, $attributes = array('class'=>'form-control'))}}
                            {{ $errors->addEdit->first('title') }}
                          </section>                           
                          <section class="col col-4">
                            {{ Form::label('slug', 'slug', array('class' => 'input'))}}
                            {{ Form::text('slug', $pages->slug, $attributes = array('class'=>'form-control'))}}
                            {{ $errors->addEdit->first('slug') }}
                          </section>  
                        </div>          
                        <div class="col-xs-12">
                          <section class="col col-4">
                            {{ Form::label('order', 'order', array('class' => 'input'))}}
                            {{ Form::number('order', $pages->order, $attributes = array('class'=>'form-control'))}}
                            {{ $errors->addEdit->first('order') }}
                          </section>                           
                          <section class="col col-4">
                              {{ Form::label('html', 'html', array('class' => 'input'))}}
                              {{ Form::textarea('html', $pages->html, $attributes = array('class'=>'form-control'))}}
                              {{ $errors->addEdit->first('html') }}
                          </section>  
                        </div>
                        <div class="col-xs-12">
                        {{ Form::submit('Submit',$attributes = array('class'=>'btn btn-primary') )}}
                        </div>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->
            </article>
            <!-- END COL -->
        </div>
        <!-- end row -->
    </section>
    @stop
    @section('scripts')
            <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{{asset('/back/js/plugin/jquery-form/jquery-form.min.js')}}"></script>


    <script type="text/javascript">

        // DO NOT REMOVE : GLOBAL FUNCTIONS!

        $(document).ready(function () {
            pageSetUp();
        })
    </script>
@stop