@extends(config('crewlogix.slots.extend_admin_layout'))

@section('main') 
<!-- START Container Fluid -->
<div class="container-fluid"> 
  
  <!--Page Heading-->
  <div class="page-heading sm-p-l-25 sm-p-r-25">
    <h1>Edit Slot</h1>
  </div>
  <!--End Page Heading--> 
  
  <!--Start Form row-->
  <div class="row"> 
    <!--Start Form col-md-12-->
    <div class="col-md-12"> {!! Form::open(array('url' => route('slots.admin.update.slot'),'id' => 'form-personal', 'method'=>'post','enctype'=>'multipart/form-data')) !!} 

    {{ Form::hidden('id',$data->id) }}
      <!--Page Content Inner--> 
      <!--Start Error & Success message-->
        <div class=""> @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
            <button class="close" data-dismiss="alert"></button>
            <strong>Success: </strong>{{Session::get('success')}} </div>
          @endif

          @if(Session::has('fail'))
              <div class="alert alert-danger" role="alert">
              <button class="close" data-dismiss="alert"></button>
              <strong>Success: </strong>{{Session::get('fail')}} </div>
          @endif      
            
          @if(Session::has('serverError'))
          <div class="alert alert-danger" role="alert">
            <button class="close" data-dismiss="alert"></button>
            <strong>Error: </strong> {{Session::get('serverError')}}
          </div>
          @endif
          </div>
        <!--End Error & Success message-->
      
      

          <!--Start grey box 1-->
      <div class="bg-grey"> 
        <div class="content-box">
          <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
            <div class="content-heading  no-padding">
              <h2>Slot Information</h2>
            </div>
            

            <table class="table slots-table">
              <tr>
                <td><lable>Slot Name</lable></td>
                <td>
                    <div class="form-group form-group-default required"> 
                    {!! Form::text('name',$data['name'], ['class'=>'form-control slot-title', 'required'=>'required', 'maxlength'=>'150'])!!} </div>
                    @if($errors->has('title'))
                         <label class="error">{{ $errors->first('title') }}</label>
                    @endif
                </td>
              </tr>
              <tr>
                <td>Price</td>
                <td>
                <div class="form-group form-group-default required"> 
                  {!! Form::number('price',$data['price'], 
                    [
                      'class'=>'form-control', 
                      'required'=>'required', 
                      'maxlength'=>'150'
                    ]) 
                  
                  !!} 
                </div>
                @if($errors->has('price'))
                  <label class="error">{{ $errors->first('price') }}</label>
                @endif
                </td>
              </tr>
              <tr>
                <td><lable>Device Type</lable></td>
                <td>
                   <div class="form-group form-group-inline required">
                  <label for="web">
                    <input id="web" 
                        @if(!empty($data['type']) && $data['type'] == 'web') 
                            checked="" 
                        @endif 
                      type="radio" name="type" value="web">
                    <small>Web</small>
                  </label>  
                  <label for="mobile">
                    <input id="mobile" type="radio"
                      @if(!empty($data['type']) && $data['type'] == 'mobile') 
                            checked="" 
                      @endif 

                     name="type" value="mobile">
                    <small>Mobile</small>  
                  </label>

                </div>
               
                </td>
              </tr>
              <tr>
                <td><label>Dimension</label></td>
                 <td>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group  form-group-default required">
                        <label>Height</label> 
                        {!! Form::number('height',$data['height'], 
                          [
                            'class'=>'form-control', 
                            'required'=>'required', 
                            'maxlength'=>'150'
                          ]) 
                        
                      !!} 
                      @if($errors->has('height'))
                        <label class="error">{{ $errors->first('height') }}</label>
                      @endif 
                      </div>
                    </div>

                    <div class="col-md-6 "> 
                      <div class="form-group form-group-default required">
                        <label>Width</label> 
                        {!! Form::number('width',$data['width'], 
                          [
                            'class'=>'form-control', 
                            'required'=>'required', 
                            'maxlength'=>'150'
                          ]) 
                        
                        !!} 
                      @if($errors->has('width'))
                        <label class="error">{{ $errors->first('width') }}</label>
                      @endif
                        
                      </div>
                    </div>
                </div> 
                </td>
              </tr>
              <tr>
                <td><label>Location</label></td>
                <td>
                <div class="form-group form-group-default required"> 
                    
                    <?php $options = config('crewlogix.slots.admin.slot.options'); ?>
                    {!! Form::select('location',$options,$data['location'], 
                    [
                      'class'=>'form-control', 
                      'required'=>'required'
                    ]) 
                  !!} 
                </div>
                @if($errors->has('location'))
                  <label class="error">{{ $errors->first('location') }}</label>
                @endif
                </td>
              </tr>
              <tr>
                <td><lable>Description</lable></td>
                <td>
                  <div class="form-group form-group-default "> 
                  {!! Form::textarea('description',$data['description'], 
                    [
                      'class'=>'form-control',
                      'maxlength'=>'500'
                    ]) 
                  
                  !!} 
                </div>
                @if($errors->has('description'))
                  <label class="error">{{ $errors->first('description') }}</label>
                @endif
                </td>
              </tr>
            </table>



        
          <!--Start grey box 3-->
          <div class="p-t-20">
            <div class="row">
                  <div class="col-sm-12">
                <div class="description-label checkbox check-success col-md-12 col-sm-12 sm-p-l-30">
                      <input type="checkbox" value="{{\Config::get('global.status.published')}}" id="active" name="status"  
                      {!! ( $data->status && $data->status == config('crewlogix.slots.admin.slot.status'))? 'checked="checked"':'' !!}>
                      <label for="active">You want to active this slot</label></div>
                </div>
                </div>
           </div>

            <!--form fields end--> 
          </div>


         <!--  <div class="col-lg-4 col-md-6 col-sm-4 form-message p-l-25 sm-p-l-0">
            <h3 class="m-t-0">{{trans('help.admin.heading')}}</h3>

            </div> -->

        </div>
      </div>

  
       <!--End grey box 3-->
      <!--Submit Button-->
      <div class="form-buttons-wrap sm-p-l-30 sm-p-r-30"> <a href="{{url('/cms',array(), $secure = null)}}" class="btn btn-back pull-left" title="Cancel">Cancel</a> {!! Form::submit('Update', ['class'=>'btn btn-success pull-right', 'title'=>'Update'])!!} </div>
      
      <!--Page Content Inner--> 
      {!! Form::close() !!} </div>
    <!--End Form col-md-12--> 
  </div>
  <!--End Form row--> 
</div>
<!-- END container fluid--> 

@stop