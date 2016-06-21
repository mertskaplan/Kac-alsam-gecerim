<!DOCTYPE html>

<?php
	$domain = "http://lab.mertskaplan.com"; // or subDomain without "/"
	$root = "/kac-alsam-gecerim/";
	$rewriteRule = ""; // default: ?note=
?>

<html lang="tr-TR" ng-app="myApp" ng-controller="myCtrl">
<head>
	<title>Kaç alsam geçerim?</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="author" content="mertskaplan">
	<meta name="copyright" content="MIT">
	<meta name="robots" content="index, follow">

	<meta property="og:locale" content="tr_TR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Kaç alsam geçerim?">
	<meta property="og:description" content="İşte o çok merak edilen sorunun yanıtını hızlıca alabileceğiniz site.">
	<meta property="og:url" content="<?php echo $domain . $root; ?>" ng-if="!examOneNote">
	<meta property="og:url" content="<?php echo $domain . $root . $rewriteRule; ?>{{examOneNote}}" ng-if="examOneNote">

	<link rel="canonical" href="<?php echo $domain . $root; ?>" ng-if="!examOneNote">
	<link rel="canonical" href="<?php echo $domain . $root . $rewriteRule; ?>{{examOneNote}}" ng-if="examOneNote">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Skranji:400,700&subset=latin,latin-ext" type="text/css">
	<link rel="stylesheet" href="<?php echo $domain . $root; ?>css/styles.css">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
<div class="bg">
	<div class="container-full write">
		<div class="row logoRow">
			<div class="col-md-offset-1 col-md-10 col-lg-offset-3 col-lg-6 text-center">
				<h1 class="logo">Kaç alsam geçerim?</h1>
				<input id="schoolType" ng-model="schoolType" data-toggle="toggle" data-on="Üniversite" data-off="İlkokul / Lise" data-onstyle="primary" data-offstyle="info" type="checkbox" checked>
			</div>
		</div>
		<div class="row inputRow">
			<div class="col-xs-6 col-md-offset-1 col-md-5 col-lg-offset-3 col-lg-3">
				<div class="uniDiv form-group has-success">
					<label id="langExamOneWeighted" class="control-label" for="examOneWeighted">Vize notu ağırlığım:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-percent"></i></span>
						<input type="text" class="form-control input-lg text-center" id="examOneWeighted" ng-model="examOneWeighted" required>
					</div>
				</div>
				<div class="highDiv hide form-group has-success">
					<label id="langExamOneWeighted" class="control-label" for="highExamOneWeighted">İlk yazılı notu ağırlığım:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-percent"></i></span>
						<input type="text" class="form-control input-lg text-center" id="highExamOneWeighted" ng-model="highExamOneWeighted" required>
					</div>
				</div>
				<div class="uniDiv form-group has-success">
					<label id="langExamTwoWeighted" class="control-label" for="examTwoWeighted">Final notu ağırlığım:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-percent"></i></span>
						<input type="text" class="form-control input-lg text-center" id="examTwoWeighted" ng-model="examTwoWeighted" required>
					</div>
				</div>
				<div class="highDiv hide form-group has-success">
					<label id="langExamTwoWeighted" class="control-label" for="highExamTwoWeighted">İkinci yazılı notu ağırlığım:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-percent"></i></span>
						<input type="text" class="form-control input-lg text-center" id="highExamTwoWeighted" ng-model="highExamTwoWeighted" required>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-5 col-lg-3">
				<div class="form-group has-warning">
					<label id="langExamOneNote" class="control-label" for="examOneNote">Vize notum:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-file-text"></i></span>
						<input type="text" class="form-control input-lg text-center" id="examOneNote" ng-model="examOneNote" autofocus>
					</div>
				</div>
				<div class="uniDiv form-group has-error">
					<label id="langExamPassNote" class="control-label" for="examPassNote">Geçme notum:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
						<input type="text" class="form-control input-lg text-center" id="examPassNote" ng-model="examPassNote" required>
					</div>
				</div>
				<div class="highDiv hide form-group has-error">
					<label id="langExamPassNote" class="control-label" for="highExamPassNote">Geçme notum:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
						<input type="text" class="form-control input-lg text-center" id="highExamPassNote" ng-model="highExamPassNote" required>
					</div>
				</div>
			</div>
		</div>
		<div class="uniDiv row resultRow">
			<div class="col-md-offset-1 col-md-10 col-lg-offset-3 col-lg-6 text-center">
				<h1 class="resultH1" ng-if="examOneNote.length > 0 && examOneNote >= 0"><p>{{(100/examTwoWeighted)*(examPassNote-((examOneWeighted*examOneNote)/100)) | number:0}}</p><small>alsam geçerim</small></h1>
			</div>
		</div>
		<div class="highDiv hide row resultRow">
			<div class="col-md-offset-1 col-md-10 col-lg-offset-3 col-lg-6 text-center">
				<h1 class="resultH1" ng-if="examOneNote.length > 0 && examOneNote >= 0"><p>{{(100/highExamTwoWeighted)*(highExamPassNote-((highExamOneWeighted*examOneNote)/100)) | number:0}}</p><small>alsam geçerim</small></h1>
			</div>
		</div>
		<div class="shareDiv">
			<div class="share facebook" data-toggle="tooltip" data-original-title="Facebook'ta paylaş!">
				<a ng-if="!examOneNote" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $domain . $root; ?>">
					<i aria-hidden="true" class="fa fa-facebook"></i>
				</a>
				<a ng-if="examOneNote" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $domain . $root . $rewriteRule; ?>{{examOneNote}}">
					<i aria-hidden="true" class="fa fa-facebook"></i>
				</a>
			</div>
			<div class="share twitter" data-toggle="tooltip" data-original-title="Twitter'da paylaş!">
				<a ng-if="!examOneNote" href="https://twitter.com/home?status=Kaç alsam geçerim? <?php echo $domain . $root; ?>">
					<i aria-hidden="true" class="fa fa-twitter"></i>
				</a>
				<a ng-if="examOneNote" href="https://twitter.com/home?status=Kaç alsam geçerim? <?php echo $domain . $root . $rewriteRule; ?>{{examOneNote}}">
					<i aria-hidden="true" class="fa fa-twitter"></i>
				</a>
				
			</div>
		</div>
	</div>
	<div class="container-full bgShow">
		<div class="author">coded with <a title="PHP, HTML, CSS, JS, XML" data-placement="top" data-toggle="tooltip" class="tip" data-original-title="PHP, HTML, CSS, JS, XML">❤</a> by <a target="_blank" href="http://mertskaplan.com/">mertskaplan</a> under <a class="license" title="" data-placement="top" data-toggle="tooltip" rel="license" href="<?php echo $domain . $root; ?>LICENSE" data-original-title="GNU General Public License, version 3">GPLv3</a> license | <a target="_blank" href="https://github.com/mertskaplan/Kac-alsam-gecerim">GitHub</a></div>
	</div>
</div>
	<script>
		$('#schoolType').change(function(){		
			var schoolType = this.checked ? '1' : '0';
			if (schoolType == '1') {				
				$('.uniDiv').removeClass("hide");
				$('.highDiv').addClass("hide");
			}
			else {
				$('.uniDiv').addClass("hide");
				$('.highDiv').removeClass("hide");
			}
		});

		var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
			$scope.examOneWeighted = 40;
			$scope.examTwoWeighted = 60;
			$scope.examPassNote = 60;
			$scope.highExamOneWeighted = 50;
			$scope.highExamTwoWeighted = 50;
			$scope.highExamPassNote = 45;
			$scope.examOneNote = "<?php if($_GET['note']) {echo $_GET["note"];} ?>";
		});
		
		var
		bgRoot = 'https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-',
		images = [
			'214152.jpg', // nR
			'208122.jpg', // nHD
			'358540.jpg',
			'94801.jpg',
			'179968.jpg',
			'157975.jpg',
			'32379.jpg',
			'32379.jpg', // bonus for up ;)
			'32418.jpg',
			'224683.jpg', // nHD
			'35136.jpg', // nHD
			'32603.jpg',
			'237370.jpg', // nHD
			'15497.jpg',
			'232429.jpg', // nHD
			'145178.jpg',
			'195753.jpg',
			'2842.jpg', // nR
			'209360.jpg',
			'359043.jpg', // nHD
			'250411.png', // nHD
			'32362.jpg', // nR
			'357878.jpg', // nR
			'27275.jpg'
		];
		$('.bg').css({'background': 'transparent url(' + bgRoot + images[Math.floor(Math.random() * images.length)] + ') no-repeat fixed center center / cover'});

	</script>
	
</body>
</html>
