@extends('front.layout.main')
@section('breadcrumb_first')
services
@stop
@section('breadcrumb_second')
List
@stop
@section('content')
<link rel="stylesheet" href="{{asset('/assets/front/jqStep/css/jquery.steps.css')}}">

<!-- widget grid -->
{{ Form::model($services,array('class'=>'default-form','files'=>true))}}

    <div class="col-xs-12">
      <div class="col-lg-6 col-md-6">
        {{ Form::label('title', 'title', array('class' => 'input'))}}
        {{ Form::text('title', $services->title, $attributes = array('class'=>'form-control'))}}
        {{ $errors->addEdit->first('title') }}
      </div>   
      <div class="col-lg-6 col-md-6">
          {{ Form::label('cat_id', 'cat_id', array('class' => 'input'))}}
          {{ Form::select('cat_id',$cat, $services->cat_id, $attributes = array('class'=>'form-control'))}}
          {{ $errors->addEdit->first('cat_id') }}
      </div>                        
    </div>                  
    <div class="col-xs-12">
       <div class="col-lg-6 col-md-6">
              {{ Form::label('subCat_id', 'subCat_id', array('class' => 'input'))}}
              {{ Form::select('subCat_id',$subcategory, $services->subCat_id, $attributes = array('class'=>'form-control'))}}
              {{ $errors->addEdit->first('subCat_id') }}          
       </div>
    </div>                          
    <div class="col-xs-12">
      <div class="col-lg-6 col-md-6">
          {{ Form::label('description', 'description', array('class' => 'input'))}}
          {{ Form::textarea('description', $services->description, $attributes = array('class'=>'form-control'))}}
          {{ $errors->addEdit->first('description') }}
      </div> 
      <div class="col-lg-6 col-md-6">
            {{ Form::label('file', 'file', array('class' => 'input'))}}
            {!! Form::file('images[]', array('multiple'=>true,'id'=>"images_up")) !!}
            {{ $errors->addEdit->first() }}
            <div class="col col-12">
       
                  <div id="dvPreview">

                    </div>
            </div>  
            <input type="hidden" name="del"  id="delimg" value=""/>
      </div>   
    </div>  
    <div class="col-xs-12">
    {{ Form::submit('Submit',$attributes = array('class'=>'btn btn-primary') )}}

    <div class="widget-body no-padding">
            <div class="col-xs-12">
              <ul>
            <ul class="gallery" id="images" >
                @foreach($services->getServiceImages() as $value)
                <li class="pull-left text-center" id="<?= $value->id ?>">
                  <div class="col-xs-2">
                      <img class="imgF margin-10" src="/uploads/miny_{{$value->image}}" alt="">
                      <a href="#" class="deleteImges btn btn-danger"  data-id="{{$value->id}}" >X</a>
                      @if($value->mine == 0)
                        <a href="#" class="btn btn-primary setMain"  data-services="{{$services->id}}" data-id="{{$value->id}}" >Set as main imges</a>
                      @else
                        <span  class="btn btn-info disabledSetMain" data-services="{{$services->id}}" data-id="{{$value->id}}"  disabled >main</span>
                      @endif
                  </div>
                </li>
                @endforeach
                </ul>
            </div>
    </div>

        @section('scripts')
                <!-- PAGE RELATED PLUGIN(S) -->
        <script type="text/javascript">
            // DO NOT REMOVE : GLOBAL FUNCTIONS!
            $(document).ready(function () {
            file = document.querySelector('input[type=file]');
            $(".deleteImges").on("click",function(e) {
                    e.preventDefault();
                    elem = $(this);
                    id = $(this).data("id");
                    $.ajax({
                        url: '/service/deleteImages/'+id,
                        type: 'get',
                        success: function (data) {
                            elem.parent().remove();  
                        }
                })
            })
            $(document).on("click",".setMain",function(e) {
                    e.preventDefault();
                    elem = $(this);
                    id = $(this).data("id");
                    services = $(this).data("services");
                    $.ajax({
                        url: '/service/setMainImages/'+id+"/"+services,
                        type: 'get',
                        success: function (data) {
                          if(data == "true"){
                             $(".disabledSetMain").removeClass('disabledSetMain').removeClass('setMain').removeClass('btn-info').addClass('btn-primary').addClass('setMain').text('Set as main imges').removeAttr('disabled');     
                              elem.text('main').removeClass('setMain').addClass("disabledSetMain").addClass('btn-info').attr('disabled', 'disabled');
                          }
                        }
                })
            })
            $("#cat_id").on("change",function(e) {
                   e.preventDefault();
                   id =  $( "#cat_id option:selected" ).val();
                   $.ajax({
                       url: '/service/getSubCat/'+id,
                       type: 'get',
                       dataType: "json",
                       success: function (data) {
                        $("#subCat_id").html("");
                        $.each( data, function( key, value ) {
                            $("#subCat_id").append('<option value="'+key+'" >'+value+'</option>')
                        });
                       }
                   })
            })
       
     })

            var images = document.getElementById("images_up");
            images.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < images.files.length; i++) {
                        var file = images.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.fileName = file.name;
                            reader.onload = function (e) {
                                var img = new Image();
                                var deleted = document.createElement("i");
                                deleted.setAttribute("class", "delete fa fa-trash ");
                                img.src = e.target.result;
                                img.setAttribute("name", e.target.fileName);
                                var ratio = img.naturalHeight / img.naturalWidth ;
                                img.width = "100";
                                img.height = img.width*ratio ;
                                img.style.marginRight = "5px";
                                dvPreview.appendChild(img);
                                dvPreview.appendChild(deleted);
                            }
                            reader.readAsDataURL(file);
                        } else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            }
            $(document).on('click', '.delete', function() {
                   name = $(this).prev().attr("name");
                $("#delimg").val($('#delimg').val() + name+",")
                //$('#delimg').val($('#delimg').val() + ','+name);
                $(this).fadeOut();
                $(this).prev().fadeOut();
            })

</script>
@stop

@stop
