@extends('app')
@section('content')

<div class="col-sm-6">
   <!-- Example Basic Form Without Label -->
   <div class="example-wrap">
     <h4 class="example-title">Basic Form Without Label</h4>
     <div class="example">
         <div class="form-group row">
           <form action="{{ url('guru/task/save') }}" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="id">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="col-sm-6">
                          <input type="text" class="form-control" name="title" placeholder="Tittle"
             autocomplete="off"/>
           </div>

         </div>
         <div class="container">
     <div class="row">
         <div class='col-sm-6'>
             <div class="form-group" name="start">
                 <div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class='col-sm-6'>
                 <div class="form-group" name="finish">
                     <div class='input-group date' id='datetimepicker1'>
                         <input type='text' class="form-control" />
                         <span class="input-group-addon">
                             <span class="glyphicon glyphicon-calendar"></span>
                         </span>
                     </div>
                 </div>
             </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="example-wrap">
                <div class="example">
                         <select data-plugin="selectpicker" multiple data-selected-text-format="count">
                           <option>Low</option>
                           <option>Medium</option>
                           <option>High</option>
                         </select>
                       </div>
                     </div>
                   </div>
         <div class="form-group">
           <input type="text" class="form-control" name="check" placeholder="Checked By"
           autocomplete="off" />
         </div>
         <div class="form-group">
           <textarea class="form-control" name="content" placeholder="Description"></textarea>
         </div>
         <div class="form-group">
           <div class="checkbox-custom checkbox-default">
             <input type="checkbox" id="progres" name="progres" checked
             autocomplete="off" />
             <label for="inputCheckboxAgree">On Progres</label>
           </div>
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-primary">Save</button>
         </div>
       </form>
     </div>
   </div>
   <!-- End Example Basic Form Without Label -->
 </div>
            </div>
            <script>
            (function() {
              // Reset Current
              $('#inlineDatepicker').datepicker();
              $("#inlineDatepicker").on("changeDate", function(event) {
                $("#inputHiddenInline").val(
                  $("#inlineDatepicker").datepicker('getFormattedDate')
                );
              });
            })();
</script>
@endsection
