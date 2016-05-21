@extends('app')
@section('content')
         <!-- Example Toolbar -->
         <div class="col-sm-12">
         <div class="example-wrap">
           <h4 class="example-title">Toolbar</h4>
           <p>Use <code>toolbar</code> option to define the custom toolbars.</p>
           <div class="example">
             <div class="btn-group hidden-xs" id="exampleToolbar" role="group">
               <button type="button" class="btn btn-outline btn-default">
                 <i class="icon wb-plus" aria-hidden="true"></i>
               </button>
               <button type="button" class="btn btn-outline btn-default">
                 <i class="icon wb-heart" aria-hidden="true"></i>
               </button>
               <button type="button" class="btn btn-outline btn-default">
                 <i class="icon wb-trash" aria-hidden="true"></i>
               </button>
             </div>
             <table id="exampleTableToolbar" data-mobile-responsive="true">
               <thead>
                 <tr>
                   <th data-field="name">Name</th>
                   <th data-field="star">Star</th>
                   <th data-field="license">License</th>
                   <th data-field="description">Description</th>
                   <th data-field="url">Url</th>
                 </tr>
                 <tr>
                   <td>Ari Widya</td>
                   <td>Ari Widya</td>
                   <td>Ari Widya</td>
                   <td>Ari Widya</td>
               </thead>
             </table>
           </div>
         </div>
         <!-- End Example Toolbar -->
       </div>

@endsection
