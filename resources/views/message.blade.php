@if(Session::has('messageset'))
	        <br/>
	        <div class="col-md-6 col-md-offset-3">
		       <div class="alert alert-success">
		         <button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            {{ Session::get('messageset') }}
		        </div>
	        </div>			
@endif

  @if( count($errors)>0 )
  			<br/>
			<div class=" col-md-6 col-md-offset-3 alert alert-danger" role="alert">
     			<button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Errors:</strong>
				<ul>
					@foreach($errors->all() as $error)
					  <li>{{ $error}}</li>
					@endforeach	
				</ul>
			</div>
  @endif