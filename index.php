<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Beautiful JavaScript
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.7.5/beautify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.7.5/beautify-css.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.7.5/beautify-html.js"></script> -->


<script src="highlight.js"></script>
<script src="../js/googleapi.js"></script>

 <title>l33tb0mb3r's Online Source Code Viewer</title>
     <body>
    	<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2><a href="">Online Source Code Viewer</a></h2>
					<form role="form" action="" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="url" size='70' placeholder="Place your URL">
						</div>

						<div class="row">
							<div class="form-group col-xs-6" align ="left">
							<input type="submit" name="submit" class="btn btn-primary" value="Go =>">
                      		</div>
						</div>

						</form>

						<div id="source" class=""><!--alert alert-info-->
						  <?php include 'vs.php';?>
						</div>

						<div class="well" align="center">Copyright 2018 by l33tb0mb3r. All Rights Reserved.</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			//document.getElementById("source").innerHTML = html_beautify(document.getElementById("source"));
			    w3CodeColor(document.getElementById("source"));</script>
		</body>
	</html>
