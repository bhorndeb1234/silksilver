<?php 
ob_start();
session_start();
?>
<?php 
$bInc=true;
include("../include/common.inc.php");
include("../system/center/fn_poll.php"); 

$lngPollIdx= isset($lngPollIdx)?$lngPollIdx:(isset($_POST['poll_idx'])?$_POST['poll_idx']:"");

$sPollSection=isset($_POST['id2'])?$_POST['id2']:'homepage';
?>
<div class="statustestpoll"></div>
<header>
	<div class="header-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<div class="header">
												
						<nav>
						<!--
							<ul id="nav-homemenu" class="nav-mainmenu active">
							
								<li>
									<a class="nav-homemenu popup-box" href="#explanation" data-placement="bottom" title="คำชี้แจง สพฐ.">
										<img class="nav-section-icon" src="../theme/01/images/home/home-icon01.png" alt="คำชี้แจง สพฐ.">
									</a>
								</li>
								

							</ul><!--end nav-homemenu-->
						<!--
						
							<ul class="nav-mainmenu">								
								<li>
									<a id="home-section" class="nav-section nav-home" rel="poll-start" data-link="<?php// echo str_replace('=','',base64_encode('home'));?>" data-placement="bottom" href="../poll/" title="หน้าแรกแบบสอบถาม">
										<img class="nav-section-icon" src="../data/poll/section/ico/nav-icon-home.png" alt="icon home">
										<div class="nav-section-text">
											หน้าแรก
										</div>
									</a>
								</li>
							<?php /*
								
								$sql=" and status='s' ";
								fnGetPollSectionList($arryList,$lngPollIdx,$sql);
								$cnt_data=count($arryList); $i=0;
								if($cnt_data>0){

									for($i=1;$i<=$cnt_data;++$i){
							*/			
							?>
								
								<li>
                                	<?php //$intIdx=empty($arryList[$i-1][0])?'':$arryList[$i-1][0]; //echo $arryList[$i-1][0];?>
                                    
									<a id="nav-section<?php //echo $i;?>" class="nav-section" href="#" rel="<?php //echo $i-1;?>" data-name="<?php //echo str_replace('=','',base64_encode('section_id'));?>" data-placement="bottom" data-link="<?php //echo str_replace('=','',base64_encode($arryList[$i-1][0]));?>" title="<?php //echo $arryList[$i-1][1]; ?>">
										<img class="nav-section-icon" src="../data/poll/section/ico/nav-icon<?php //echo $i;?>.png" alt="icon section<?php //echo $i;?>">
										<div class="nav-section-text">
											<?php //echo "ส่วนที่ ".$i;?>
										</div>
									</a>
								</li>
								
							<?php 
								/*	} //end for 
								}//end if */
							?>

							</ul>
						-->
							<div class="clearfix"></div>
						
						</nav>
						
					</div><!--end header-->
					<div class="clearfix"></div>
					
				</div><!--end col-->
			</div><!--end row-->
			
		</div><!--end container-->
	</div><!--end header-wrapper-->
</header>
<div class="clearfix"></div>

<?php 
ob_end_flush();
?>