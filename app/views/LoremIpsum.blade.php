@extends('_master')


	
@section('childcontent')
	@if ($error=='false')
		
		<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($NumElements);
		?>
		
		<section id='content'>
			<blockquote>
				<?php echo implode('<p>', $paragraphs); ?>
			</blockquote>
		</section>
	@endif
@stop

	


@section ('errormessageLoremIpsum')
	@if ($error=='true')
		<?php echo "Please input a number between 1 and 50"?>
	@endif
@stop



@section('script')
	
	<script>
		document.getElementById("optLoremIpsum").checked = true;
		SelectRadioButton();
	
	 	var element=document.getElementById("content");
	    if (element!=null)
	    {
	        element.style.display = 'block';
	    }
    </script>
@stop