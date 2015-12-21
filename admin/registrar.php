 <?php
    require('../library/Config.inc.php');
?>
<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title><?php echo DESC;?></title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>fonts/style.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>css/main-responsive.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>css/main.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>css/theme_navy.css" type="text/css" id="skin_color">
                <link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/css3-animation/animations.css">
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>css/print.css" type="text/css" media="print"/>
                <!--[if IE 7]>
                    <link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
                <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
               
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR FULLCALENDARIO -->
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/fullcalendar/fullcalendar/fullcalendar.css">
                <!-- start: CSS REQUIRED FOR DATAPICKER -->
		<link rel="stylesheet" href="<?php echo INCLUDES;?>Jcalendar.css">
                <!-- start: CSS REQUIRED FOR SELECT -->
                <link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/select2/select2.css"> 
                <!-- start: CSS REQUIRED FOR UPLOAD -->
		<link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
                <!-- start: CSS REQUIRED FOR CHECK -->
                <link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css">
                <!-- start: CSS REQUIRED FOR CHECK -->
                <link rel="stylesheet" href="<?php echo PASTAADMIN;?>plugins/DataTables/media/css/DT_bootstrap.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="favicon.ico" />
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example1">
		<div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="logo">
                            <a style="color: whitesmoke;" href="<?php echo PASTASITE;?>">
                                    <?php echo DESC;?>
                            </a>
			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Cadastrar Usuario do Sistema</h3>
                                    
                                <div class="panel-body">
                                    <form action="/admin/Index/CadastroUsuario" role="form" id="cadastroMembro" name="cadastroMembro" method="post" enctype="multipart/form-data" class="formulario">                                                         
                                        <div class="col-md-12">
                                            
                                            <div class="form-group">
                                                <label for="no_membro" class="control-label">
                                                    Nome Completo <span class="symbol required"></span>
                                                </label>
                                                <input class="form-control ob nome" id="no_usuario" name="no_usuario" value="" type="text">
                                                <span class="help-block" id="no_membro-info">
                                                    <i class="fa fa-info-circle"></i> O Nome deve ser Completo Mínimo de 10 Caracteres
                                                </span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ds_email" class="control-label"> 
                                                    E-mail <span class="symbol required"></span>
                                                </label>
                                                <input class="form-control ob email" id="ds_email" name="ds_email" value="" type="text">
                                                <span class="help-block" id="ds_endereco-info"><i class="fa fa-info-circle"></i> Para recuperar a senha.</span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ds_sexo" class="control-label"> 
                                                    Sexo
                                                </label>
                                                <select id='ds_sexo' name='ds_sexo[]' class='form-control search-select'>;
                                                     <option value="">Selecione um Sexo</option>
                                                     <option value="M">Masculino</option>
                                                     <option value="F">Femionino</option>
                                                 </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ds_login" class="control-label"> 
                                                   Foto de Perfil
                                                </label>
                                                <div class="fileupload fileupload-new" data-provides="fileupload" style="margin-bottom: 0px;">
                                                    <div class="input-group">
                                                        <div class="form-control uneditable-input">
                                                                <i class="fa fa-file fileupload-exists"></i>
                                                                <span class="fileupload-preview"></span>
                                                        </div>
                                                        <div class="input-group-btn">
                                                                <div class="btn btn-dark-grey btn-file">
                                                                        <span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Selecionar Arquivo</span>
                                                                        <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Trocar</span>
                                                                        <input type="file" class="file-input" id="ds_foto" name="ds_foto" />
                                                                </div>
                                                                <a href="#" class="btn btn-bricky fileupload-exists" data-dismiss="fileupload">
                                                                        <i class="fa fa-trash-o"></i> Remover
                                                                </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="ds_login" class="control-label"> 
                                                    Usuário do Sistema <span class="symbol required"></span>
                                                </label>
                                                <input class="form-control ob" id="ds_login" name="ds_login" value="" type="text">
                                                <span class="help-block" id="ds_endereco-info"><i class="fa fa-info-circle"></i> Mínimo de 6 Caracteres</span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ds_senha" class="control-label"> 
                                                    Senha
                                                </label>
                                                <input class="form-control senha ob" id="ds_senha" name="ds_senha" value="" type="password">
                                                <span class="help-block" id="ds_senha-info">.</span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ds_senha_confirma" class="control-label"> 
                                                    Confirmação da Senha
                                                </label>
                                                <input class="form-control confirma-senha ob" id="ds_senha_confirma" name="ds_senha_confirma" value="" type="password">
                                                <span class="help-block" id="ds_senha_confirma-info">.</span>
                                            </div>
                                            
                                                <button data-style="zoom-out" class="btn btn-success ladda-button" type="submit" value="CadastroUsuario" name="CadastroUsuario" style="margin-top: 10px;">
                                                    <span class="ladda-label"> Salvar </span>
                                                    <i class="fa fa-save"></i>
                                                    <span class="ladda-spinner"></span>
                                                </button>
                                                <button data-style="expand-right" class="btn btn-danger ladda-button" type="reset" style="margin-top: 10px;">
                                                    <span class="ladda-label"> Limpar </span>
                                                    <i class="fa fa-ban"></i>
                                                    <span class="ladda-spinner"></span>
                                                </button>
                                        </div>
                                    </form>
			</div>
			<div class="copyright" style="color: whitesmoke;">
				<?php echo date("Y");?> &copy; LEO BESSA
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<?php Modal::aviso("alerta") ;?>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
                    <script src="<?php echo PASTAADMIN;?>plugins/respond.min.js"></script>
                    <script src="<?php echo PASTAADMIN;?>plugins/excanvas.min.js"></script>
                    <script type="text/javascript" src="<?php echo INCLUDES;?>jquery-1.10.2.js"></script>
		<![endif]-->                
		<!--[if gte IE 9]><!-->
		<script src="<?php echo INCLUDES;?>jquery-2.0.3.js"></script>
		<!--<![endif]-->
                <!--<script src="<?php echo PASTAADMIN;?>plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>-->
                <script src="<?php echo INCLUDES;?>jquery-ui.js"></script>
                <script type="text/javascript" src="<?php echo INCLUDES;?>gera-grafico.js"></script>
                <script type="text/javascript" src="<?php echo INCLUDES;?>jquery.mask.js"></script>
                <script type="text/javascript" src="<?php echo INCLUDES;?>jquery.maskMoney.js"></script>
                <?php echo '<script type="text/javascript">
                        function servidor_inicial(){    
                                var home = "'.HOME.'";
                                return home;
                        }
                        function inatividade(){    
                                var inativo = "'.INATIVO.'";
                                return inativo;
                        }
                        function pasta_upload(){    
                                var pasta = "'.PASTAUPLOADS.'";
                                return pasta;
                        }
                </script>'; ?>
                <script type="text/javascript" src="<?php echo INCLUDES;?>validacoes.js"></script>               
                
		<!--<script src="<?php echo PASTAADMIN;?>plugins/bootstrap/js/bootstrap.min.js"></script>-->
		<script src="<?php echo PASTAADMIN;?>plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/blockUI/jquery.blockUI.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<!--<script src="<?php //echo PASTAADMIN;?>plugins/less/less-1.5.0.min.js"></script>-->
		<script src="<?php echo PASTAADMIN;?>plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="<?php echo PASTAADMIN;?>js/main.js"></script>
		<script src="<?php echo PASTAADMIN;?>js/ui-animation.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo PASTAADMIN;?>plugins/flot/jquery.flot.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
		<script src="<?php echo PASTAADMIN;?>js/login.js"></script>
		
                <script src="<?php echo PASTAADMIN;?>plugins/select2/select2.min.js"></script>                 
		<script src="<?php echo PASTAADMIN;?>plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>                
		<script src="<?php echo PASTAADMIN;?>plugins/bootstrap-switch/static/js/bootstrap-switch.min.js"></script>
                <script src="<?php echo PASTAADMIN;?>plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/DataTables/media/js/DT_bootstrap.js"></script>
                <script src="<?php echo PASTAADMIN;?>js/table-data.js"></script>
                <script src="<?php echo PASTAADMIN;?>plugins/ckeditor/ckeditor.js"></script>
		<script src="<?php echo PASTAADMIN;?>plugins/ckeditor/adapters/jquery.js"></script>
                <script src="<?php echo PASTAADMIN;?>js/Funcoes.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
                                Funcoes.init();
				Main.init();				
                                TableData.init();
                                Login.init();                                
			});
		</script>   
	</body>
	<!-- end: BODY -->
</html>