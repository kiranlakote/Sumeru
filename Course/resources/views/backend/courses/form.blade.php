<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('name', 'Name', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => 'Name', 'required' => 'required']) }} 
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('code', 'Code', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('code', null, ['class' => 'form-control box-size', 'placeholder' => 'Code', 'required' => 'required']) }} 
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('start_date', 'Start Date', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             @if(!empty($courses->start_date))
                {{ Form::date('start_date', \Carbon\Carbon::parse($courses->start_date), ['class' => 'form-control box-size', 'required' => 'required']) }}
            @else
                {{ Form::date('start_date', null, ['class' => 'form-control box-size', 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
       {{ Form::label('end_date', 'End Date', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             @if(!empty($courses->end_date))
                {{ Form::date('end_date', \Carbon\Carbon::parse($courses->end_date), ['class' => 'form-control box-size', 'required' => 'required']) }}
            @else
                {{ Form::date('end_date', null, ['class' => 'form-control box-size', 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('batch', 'Batch', ['class' => 'col-lg-2 control-label required']) }}

       <?php  $batchs = array('Morning' => 'Moring',  'Afternoon'=> 'Afternoon', 'Evening' => 'Evening'); ?>
 
        
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
            {!!Form::select('batch', $batchs, null, ['class' => 'form-control box-size',  'required' => 'required'])!!}
 
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('fee', 'Fee', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('fee', null, ['class' => 'form-control box-size', 'placeholder' => 'Fee',  'required' => 'required']) }}  
        </div><!--col-lg-10-->
    </div><!--form-group-->
    
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('place', 'Place', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('place', null, ['class' => 'form-control box-size', 'placeholder' => 'Place',  'required' => 'required']) }}  
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('city', 'City', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('city', null, ['class' => 'form-control box-size', 'placeholder' => 'City',  'required' => 'required']) }}  
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('state', 'State', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('state', null, ['class' => 'form-control box-size', 'placeholder' => 'State',  'required' => 'required']) }}  
        </div><!--col-lg-10-->
    </div><!--form-group-->

    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('pincode', 'Pincode', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('pincode', null, ['class' => 'form-control box-size', 'placeholder' => 'Pincode',  'required' => 'required']) }}  
        </div><!--col-lg-10-->
    </div><!--form-group-->
       

        

</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
