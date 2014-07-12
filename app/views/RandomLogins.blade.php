@extends('_master')

@section('customcss')
	<style>
	
		.container {
			margin-top:15px;
		}
	
		.users {
			margin-top:15px;
		}
	
		.user {
			margin-bottom:5px;
		}
	
		.name {
			font-weight:bold;
		}
		
		.profile {
			font-style:italic;
		}
	
	</style>
@stop


@section('childcontent')
	@if ($error=='false')
		<?php $faker = Faker\Factory::create();	?>

		<section class='users' id='content'>
			@for ($i=0;$i < $NumElements;$i++)
				<div class="user">
					
					<div class="name">{{$faker->name}}</div>
					<div class="profile">DOB: {{$faker->dateTimeThisCentury->format('Y-m-d')}}</div>
					<div class="profile">Address:{{$faker->address}}</div>
					
				</div>

			@endfor
			
		</section>

	@endif
@stop

	


@section ('errormessageRandomUsers')
	@if ($error=='true')
		<?php echo "Please input a number between 1 and 50"?>
	@endif
@stop



@section('script')
	
	<script>
		document.getElementById("optRandomLogins").checked = true;
		SelectRadioButton();
	
		var element=document.getElementById("content");
	    if (element!=null)
	    {
	        element.style.display = 'block';
	    }

	  </script>
@stop