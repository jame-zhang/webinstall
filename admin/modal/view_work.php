<?php if(!$p){exit();} ?> 
 <link href="css/style.min2.css?v=4.0.0" rel="stylesheet">
 <style>
td{
	
	text-align:center;
	border-color:#eeeeee;
}


.well {
	min-height: 20px;
	padding: 19px;
	margin-bottom: 20px;
	background-color: #f5f5f5;
	border: 1px solid #e3e3e3;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.05)
}

.well blockquote {
	border-color: #ddd;
	border-color: rgba(0,0,0,.15)
}

.well-lg {
	padding: 24px;
	border-radius: 6px
}

.well-sm {
	padding: 9px;
	border-radius: 3px
}

.panel {
	margin-bottom: 20px;
	background-color: #fff;
	border: 1px solid transparent;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
	box-shadow: 0 1px 1px rgba(0,0,0,.05)
}

.panel-body {
	padding: 15px
}

.panel-heading {
	padding: 10px 15px;
	border-bottom: 1px solid transparent;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px
}

.panel-heading>.dropdown .dropdown-toggle {
	color: inherit
}

.panel-title {
	margin-top: 0;
	margin-bottom: 0;
	font-size: 16px;
	color: inherit
}

.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a {
	color: inherit
}

.panel-footer {
	padding: 10px 15px;
	background-color: #f5f5f5;
	border-top: 1px solid #ddd;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px
}

.panel>.list-group,.panel>.panel-collapse>.list-group {
	margin-bottom: 0
}

.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item {
	border-width: 1px 0;
	border-radius: 0
}

.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
	border-top: 0;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px
}

.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
	border-bottom: 0;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px
}

.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
	border-top-left-radius: 0;
	border-top-right-radius: 0
}

.panel-heading+.list-group .list-group-item:first-child {
	border-top-width: 0
}

.list-group+.panel-footer {
	border-top-width: 0
}

.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table {
	margin-bottom: 0
}

.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption {
	padding-right: 15px;
	padding-left: 15px
}

.panel>.table-responsive:first-child>.table:first-child,.panel>.table:first-child {
	border-top-left-radius: 3px;
	border-top-right-radius: 3px
}

.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child {
	border-top-left-radius: 3px;
	border-top-right-radius: 3px
}

.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
	border-top-left-radius: 3px
}

.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
	border-top-right-radius: 3px
}

.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child {
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px
}

.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child {
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px
}

.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
	border-bottom-left-radius: 3px
}

.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
	border-bottom-right-radius: 3px
}

.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body {
	border-top: 1px solid #ddd
}

.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th {
	border-top: 0
}

.panel>.table-bordered,.panel>.table-responsive>.table-bordered {
	border: 0
}

.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
	border-left: 0
}

.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
	border-right: 0
}

.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
	border-bottom: 0
}

.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
	border-bottom: 0
}

.panel>.table-responsive {
	margin-bottom: 0;
	border: 0
}

.panel-group {
	margin-bottom: 20px
}

.panel-group .panel {
	margin-bottom: 0;
	border-radius: 4px
}

.panel-group .panel+.panel {
	margin-top: 5px
}

.panel-group .panel-heading {
	border-bottom: 0
}

.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body {
	border-top: 1px solid #ddd
}

.panel-group .panel-footer {
	border-top: 0
}

.panel-group .panel-footer+.panel-collapse .panel-body {
	border-bottom: 1px solid #ddd
}

.panel-default {
	border-color: #ddd
}

.panel-default>.panel-heading {
	color: #333;
	background-color: #f5f5f5;
	border-color: #ddd
}

.panel-default>.panel-heading+.panel-collapse>.panel-body {
	border-top-color: #ddd
}

.panel-default>.panel-heading .badge {
	color: #f5f5f5;
	background-color: #333
}

.panel-default>.panel-footer+.panel-collapse>.panel-body {
	border-bottom-color: #ddd
}

.panel-primary {
	border-color: #337ab7
}

.panel-primary>.panel-heading {
	color: #fff;
	background-color: #337ab7;
	border-color: #337ab7
}

.panel-primary>.panel-heading+.panel-collapse>.panel-body {
	border-top-color: #337ab7
}

.panel-primary>.panel-heading .badge {
	color: #337ab7;
	background-color: #fff
}

.panel-primary>.panel-footer+.panel-collapse>.panel-body {
	border-bottom-color: #337ab7
}

.panel-success {
	border-color: #d6e9c6
}

.panel-success>.panel-heading {
	color: #3c763d;
	background-color: #dff0d8;
	border-color: #d6e9c6
}

.panel-success>.panel-heading+.panel-collapse>.panel-body {
	border-top-color: #d6e9c6
}

.panel-success>.panel-heading .badge {
	color: #dff0d8;
	background-color: #3c763d
}

.panel-success>.panel-footer+.panel-collapse>.panel-body {
	border-bottom-color: #d6e9c6
}

.panel-info {
	border-color: #bce8f1
}

.panel-info>.panel-heading {
	color: #31708f;
	background-color: #d9edf7;
	border-color: #bce8f1
}

.panel-info>.panel-heading+.panel-collapse>.panel-body {
	border-top-color: #bce8f1
}

.panel-info>.panel-heading .badge {
	color: #d9edf7;
	background-color: #31708f
}

.panel-info>.panel-footer+.panel-collapse>.panel-body {
	border-bottom-color: #bce8f1
}

.panel-warning {
	border-color: #faebcc
}

.panel-warning>.panel-heading {
	color: #8a6d3b;
	background-color: #fcf8e3;
	border-color: #faebcc
}

.panel-warning>.panel-heading+.panel-collapse>.panel-body {
	border-top-color: #faebcc
}

.panel-warning>.panel-heading .badge {
	color: #fcf8e3;
	background-color: #8a6d3b
}

.panel-warning>.panel-footer+.panel-collapse>.panel-body {
	border-bottom-color: #faebcc
}

.panel-danger {
	border-color: #ebccd1
}

.panel-danger>.panel-heading {
	color: #a94442;
	background-color: #f2dede;
	border-color: #ebccd1
}

.panel-danger>.panel-heading+.panel-collapse>.panel-body {
	border-top-color: #ebccd1
}

.panel-danger>.panel-heading .badge {
	color: #f2dede;
	background-color: #a94442
}

.panel-danger>.panel-footer+.panel-collapse>.panel-body {
	border-bottom-color: #ebccd1
}

 </style>
        <div class="static-content-wrapper">
          <div class="static-content">
            <div class="page-content">
              <div class="container-fluid">
                <div style="height:16px"></div>
<!-- 引入封装了failback的接口--initGeetest -->

   
 
<link href="/static/assets/css/whmcs.css" rel="stylesheet">

<div class="row  border-bottom white-bg dashboard-header">

<div class="page-header" style="margin-top: -40px;">
							<h1>
								控制台
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									工单管理 &amp; #<?=$_GET['id']?>
								</small>
							</h1>
						</div><!-- /.page-header -->
<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									欢迎使用
									<strong class="green" onclick="openLog();">
										Html OS
										<small> (<?php echo file_get_contents('../version.txt'); ?>)</small>
									</strong>,全新SS+OP结合版流量控制系统.
								</div>
 
 
 
 
 <div class="container1">
		<h2><?=$data['w_title']?></h2>
		
		<div class="row text-center">
			<div class="col-md-3">
				<div class="well well-sm">
					<span class="lead">更新</span>
					<div><?=$data['w_endtime']?></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="well well-sm">
					<span class="lead">部门</span>
					<div>售后咨询</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="well well-sm">
					<span class="lead">优先级别</span>
					<div>低</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="well well-sm">
					<span class="lead">状态</span>
					<div><span style="color:#779500"><?php if($data['w_is_over'] == "1"){echo "已完结";}else{echo "处理中";} ?></span></div>
				</div>
			</div>
		</div>
		
		<div class="margin-bottom">
			<a href="#" onclick="history.go(-1);" class="btn btn-success" title="« 返回">« 返回</a> 
			<button type="button" class="btn btn-primary" onclick="$('#replycontainer').slideToggle().removeClass('hide');">回复</button> 
			<a href="index.php?action=view_work&c=close&id=<?=$_GET['id']?>" class="btn btn-danger" title="关闭服务单">关闭服务单</a>		</div>
		
		<form method="post" action="index.php?action=view_work&id=<?=$_GET['id']?>" id="replycontainer" class="panel panel-default hide">
			<div class="panel-body">
				 
				<div class="row form-group">
					<div class="col-md-12">
						<label for="message">信息</label>
						<textarea name="replymessage" id="message" rows="12" class="form-control"></textarea>
					</div>
				</div>
				<div id="attachements">
					<h3>Attachements</h3>
					<div class="form-group"><input type="file" name="attachments[]"></div>
				</div>
				<script type="text/javascript">
				
				function extraAttachment() { $("#attachements").append('<div class="form-group"><input type="file" name="attachments[]"></div>');}
				
				</script>
				<a href="#" onclick="extraAttachment();return false;">添加更多</a>
				(允许文件后缀: .jpg, .gif, .jpeg, .png)
				<div class="form-group text-center">
					<button class="btn btn-primary" onclick="$('#modalpleasewait').modal();">提交</button>
				</div>
			</div>
		</form>
		
		<div class="ticketreplys">
					<div class="well well-sm" style="margin-bottom:0">
				<span class="pull-right"><?=$data['w_starttime']?></span>
				Customer
							<span class="label label-info">客户</span>
						</div>
			<div class="ticketreply clearfix">
				<p><?=$data['w_content']?><br>
</p>

		<?php 
			if($data['w_image1']){
		?>
		<img src='/<?=$data['w_image1']?>' style="width:30%;height:30%" />
	 	 
	
						
			<?php 
 }

			$sql = "select * from web_word where to_w_id = ? ORDER BY w_endtime ASC";
			$params = array($_GET['id']);
			$data = $pdo->getSome($sql, $params);
			foreach($data as $value){
				  
				if($value['w_user']=="admin"){$hf="<span class='label label-danger'>管理员</span>";}else{$hf="<span class='label label-info'>".$value['w_user']."</span>";}
				echo "<div class='well well-sm' style='margin-bottom:0'><span class='pull-right'>".$value['w_endtime']."</span>";
				echo "";
				echo "$hf</div>";
				echo "<div class='ticketreply clearfix'>";
				echo "<p>".$value['w_content']."<br><br>----------------------------<br>";
				echo "IP Address: ".getRealip()."</p>";
				echo "</div>";
 
				
			}

			?>
						
						
						
						
				</div>
		
		<div class="modal fade" id="modalpleasewait">
			<div class="modal-dialog">
				<div class="modal-content">
				   <div class="modal-header text-center">
				      <h3> 请稍后……</h3>
				   </div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
		
		$(function() { 
			$('.rating.interactive').mouseleave(function() {
				$(this).children().removeClass('selected');
			});
			$('.rating.interactive span').mouseover(function() {
				$(this).addClass('selected');
				$(this).prevAll().addClass('selected');
				$(this).nextAll().removeClass('selected');
			});
		});
		
		</script>
		
			</div>
</div>
 
 
 
 
 
 
 
 
                </div>


						</div>
            </div>
          </div>
					<br>
					<!-- footer.php -->
					<?php include_once('modal/footer.php');   ?>
					<!-- footer.php -->
        </div>
   
<!-- /Switcher -->
<!-- Load site level scripts -->
<script type="text/javascript" src="css/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="css/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->
<script type="text/javascript" src="css/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->
<script type="text/javascript" src="css/jquery.sparkline.min.js"></script><!-- Sparkline -->

<script type="text/javascript" src="css/icheck.min.js"></script>     					<!-- iCheck -->
<script type="text/javascript" src="css/enquire.min.js"></script> 									<!-- Enquire for Responsiveness -->
<script type="text/javascript" src="css/bootbox.js"></script>							<!-- Bootbox -->
<script type="text/javascript" src="css/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
<script type="text/javascript" src="css/jquery.mousewheel.min.js"></script> 	<!-- Mousewheel support needed for jScrollPane -->
<script type="text/javascript" src="css/application.js"></script>
<script type="text/javascript" src="css/demo.js"></script>
<!-- End loading site level scripts -->
	<!-- Load page level scripts-->
	
	<script src="css/jquery.flot.min.js"></script>             <!-- Flot Main File -->

	<script src="css/jquery.flot.tooltip.min.js"></script>    <!-- Flot Tooltips -->
	<!-- End loading page level scripts </script> 	 -->

	

 