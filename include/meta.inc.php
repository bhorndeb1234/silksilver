<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="page-name" content="<?php echo strtolower($sPageNm);?>">

<link rel="shortcut icon" href="<?php echo $sPath; ?>favicon.ico">
<link href="<?php echo $sPath; ?>theme/01/css/main.css" rel="stylesheet">
<link href="<?php echo $sPath; ?>theme/01/css/header_footer.css" rel="stylesheet">
<link href="<?php echo $sPath; ?>theme/01/css/table_data.css" rel="stylesheet">

<?php if($bUseSelect2) echo "<link rel='stylesheet' href='".path."/jQuery/select/select2.css'>"; ?>

<link href="<?php echo path; ?>/framework/bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo path; ?>/framework/bootstrap/3.1.1/css/bootstrap-theme.css" rel="stylesheet">

<?php if($bLoading) echo "<link rel='stylesheet' href='".path."/framework/rushshop/1.1.0/css/loading.css'>"; ?>
<?php if($bConfirm) echo "<link rel='stylesheet' href='".path."/framework/rushshop/1.1.0/css/confirm.css'>"; ?>

<?php if($bUseFontsAwesome) echo "<link rel='stylesheet' href='".path."/ico/font-awesome/css/font-awesome.min.css'>"; ?>

<link rel="stylesheet" href="<?php echo path;?>/jQuery/lightbox/jquery.fancybox.css">

<script src="<?php echo path; ?>/jQuery/main/jquery.core.js"></script>
<script src="<?php echo path; ?>/framework/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php $bInc=isset($bInc)?$bInc:0; if(!$bInc) exit("<div class='alert alert-danger' role='alert' style='text-align:center;'><i class='fa fa-warning fa-lg'></i> Direct Access not Permitted !!!.</div>");?>

<link href="<?php echo path; ?>/css/fonts.css" rel="stylesheet">

<?php
	if($bUseFonts){
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false){
?>			<?php /*
			<script src="<?php echo path;?>/jQuery/main/cufon-yui.js"></script>
			<script src="<?php echo path;?>/jQuery/main/fonts/RSU.font.js"></script>
			<script src="<?php echo path;?>/jQuery/main/fonts/DB_Adman.font.js"></script>
			<script src="<?php echo path;?>/jQuery/main/fonts/titillium-text.cufonfonts.js"></script>
			<script src="<?php echo path;?>/jQuery/main/fonts/bebas-neue.cufonfonts.js"></script>
			<script src="<?php echo path;?>/jQuery/main/fonts/droid-sans.cufonfonts.js"></script>
			*/?>
<?php	}
	}
?>

<script src="<?php echo path;?>/js/fn_guard.js"></script>
<script src="<?php echo $sPath; ?>theme/01/js/main.js"></script>

<?php if($bUseAutoComplete) echo "<script src='".path."/framework/bootstrap/3.1.1/js/bootstrap3-typeahead.js'></script>";?>
<?php if($bUseSelect2) echo "<script src='".path."/jQuery/select/select2.js'></script>";?>

<script src="<?php echo $sPath; ?>/theme/01/js/header_footer.js"></script>
<script src="<?php echo path;?>/jQuery/lightbox/jquery.fancybox.pack.js"></script>
<script src="<?php echo path;?>/jQuery/validate/jquery.validate.js"></script>