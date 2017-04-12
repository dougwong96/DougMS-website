<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>dougMS</title>
	<meta name="description" content="" />
	<meta name="keywords" content=""/>
	<link href="../static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../static/css/custom.css" rel="stylesheet" type="text/css">
	<!--link href="static/images/favicon.png" rel="shortcut icon" type="image/x-icon" /-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="robots" content="index,follow" />
	<!--[if lt IE 9]>
		<script src="static/js/ie/html5shiv.js"></script>
		<script src="static/js/ie/respond.min.js"></script>
	<![endif]-->
	<!--[if gte IE 9]>
		<style type="text/css">
			.gradient {
				filter: none;
			}
		</style>
	<![endif]-->
</head>
    <body>
    <div class="container">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DougMS</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="#">Forums</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:document.getElementById('sporter04').focus()">Login</a></li>
                <li><a href="?base=main&amp;page=register">Register</a></li>
            </ul>
        </div>
    </div>
   </nav>
    <div class="container title">
        <h1>DougMS</h1>
    </div>
		<div class="row">
			<div class="col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Control Panel</h3>
					</div>
					<div class="panel-body">
						<form id="loginform">
							<div class="form-group">
								<input id="sporter04" class="form-control" placeholder="Username" type="text">
							</div>
							<div class="form-group">
								<input id="sporter05" class="form-control" placeholder="Password" type="password">
							</div>
							<div class="form-group">
                                <button class="btn btn-block btn-violet" type="submit">Login</button>
                            </div>
						</form>
                        <div id="message"></div>
					</div>
				</div>
				<div id="servinfo" class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Server Info</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-6">
								<p>Version:</p>
								<p>Players:</p>
								<p>Rates:</p>
							</div>
							<div class="col-xs-6 text-right">
								<p><a href="?base=main&amp;page=download">62</a></p>
								<p>256</p><!-- If server is offline it says Offline -->
								<p>2, 1, 1</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Download</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="media download-block">

							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container copyright">
			<div class="col-lg-12">
                <p>Copyright © 2015 DougMS. <br>
			</div>
		</div>
	</footer>
	<script src="static/js/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="static/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>