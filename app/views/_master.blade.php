<!doctype html>
<html>

<head>
	
	<title>Developer's Best Friend</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
    <script src="js/formevents.js"></script>
    <?php $data=""; ?>
    @yield('customcss')

    <style>
    	.errormessage{font-weight:bold; color:red; font-size:large }
    </style>

</head>

<body>
	<div class="container">
		<h1>Developer's Best Friend</h1><br><br>
		<form method="POST">
				
				<input id="optLoremIpsum" id="radio1" onclick="SelectRadioButton()" type="radio" name="radioGroup1" value="1">
				<label for="radio1" class="RadioButtonLabels">Lorem Ipsum Generator</label></br>
				<div id="divLorenIpsum" style="display:none">
					<blockquote class="bg-warning"> In publishing and graphic design, lorem ipsum is a placeholder 
						text commonly used to demonstrate the graphic elements of a document 
						or visual presentation. By replacing the distraction of meaningful 
						content with filler text of scrambled Latin it allows viewers to focus 
						on graphical elements such as font, typography, and layout
					</blockquote>
					<label for="txtNumParagraphs" class="TestBoxLabels">Input number of Paragraphs (MAX 50!)</label>
					<div class="row">
						<div class="col-xs-2">
							<input maxlength="3" type="text" id="txtNumParagraphs" name="txtNumParagraphs" class="form-control">
						</div>

						<div class="col-xs-10 errormessage">@yield('errormessageLoremIpsum')</div>

					</div>
				</div>
		
				<input id="optRandomLogins" id="radio2 "onclick="SelectRadioButton()" type="radio" name="radioGroup1" value="2">
				<label for="radio2" class="RadioButtonLabels">Random User Generator</label></br>
				
				<div id="divRandomLogins" style="display:none" class="form-group">
					<label for="txtNumberRandomLogins" class="TestBoxLabels">Input Number of Random User Names(MAX 50)</label>
					<div class="row">
						
						<div class="col-xs-2">
							<input type="text" name="txtNumberRandomLogins" class="form-control" id="txtNumberRandomLogins">
						</div>

						<div class="col-xs-10 errormessage">@yield('errormessageRandomUsers')</div>

					</div>
				</div>
				<div class="row">
					<div class="col-xs-1">
						<input type="submit" class="btn btn-primary" name="btnSubmit">
					</div>
					<div class="col-xs-1">
						<input type="submit" class="btn btn-default" name="btnReset" value="Reset">
					</div>
					
				</div>
		</form>
		<br><br><br>
		@yield('childcontent')
	</div>
	
	@yield('script')

	<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
