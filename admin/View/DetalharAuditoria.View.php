<div class="main-content">
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">
										Auditoria
									</a>
								</li>
								<li class="active">
									Auditoria
								</li>								
							</ol>
							<div class="page-header">
								<h1>Auditoria <small> Detalhes da Auditoria</small></h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT --> 
                                        <div class="row">
                                            <div class="col-sm-6" style="padding: 10px; background-color: #fbfbfb; 
                                                 margin-left: 15px;">
                                                <p><span style="font-weight: bolder; color: #900;">Usuário:</span><br/>
                                               <big><b>
                                                   <?php echo ($result['no_usuario'] ? $result['no_usuario'] : 'Via Site'); ?>
                                                   </b></big></p>
                                                <?php if($result["ds_perfil"]): ?>
                                                        <p><span style="font-weight: bolder; color: #900;">Perfil:</span><br/>
                                                        <big><b>
                                                            <?php echo PerfisAcesso::$Perfils[$result["ds_perfil"]]; ?>
                                                            </b></big></p>
                                                <?php endif; ?>
                                                <p><span style="font-weight: bolder; color: #900;">Realizado Em:</span><br/>
                                                <big><b><?php echo Valida::DataShow($result['dt_realizado'],"d/m/Y H:i:s"); ?>
                                                    </b></big></p>   
                                                <p><span style="font-weight: bolder; color: #900;">Operação:</span><br/>
                                                <big><b><?php echo FuncoesSistema::OperacaoAuditoria($result['no_operacao']); ?>
                                                    </b></big></p>   
                                                <p><span style="font-weight: bolder; color: #900;">Banco de Dados:</span><br/>
                                                <big><b style="text-transform: capitalize;"><?php 
                                                    $tabela = str_replace("tb_", "", $result['no_tabela']); 
                                                    $tabela = str_replace("_", " ", $tabela); 
                                                    echo "Tabela: ".$tabela;
                                                ?>
                                                    </b></big></p>   
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" style="font-weight: bolder; color: #069;">
									<i class="fa fa-external-link-square"></i>
									Registro 
                                                                        <?php
                                                                            if($result['no_operacao'] == "I"):
                                                                                echo "INSERIDO";
                                                                            elseif($result['no_operacao'] == "U"):
                                                                                 echo "ATUALIZADO";
                                                                            else:
                                                                                 echo "DELETADO";
                                                                            endif;
                                                                        ?>
								</div>
								<div class="panel-body">
                                                                            <?php
                                                                                if($result['no_operacao'] == "I" || $result['no_operacao'] == "D"):
                                                                                    if($result['no_operacao'] == "I"):
                                                                                        $dado = explode(";/", $result["ds_item_atual"]);
                                                                                    elseif($result['no_operacao'] == "D"):
                                                                                        $dado = explode(";/", $result["ds_item_anterior"]);
                                                                                    endif;
                                                                                    foreach ($dado as $value) {
                                                                                        $reg = explode("==", $value);
                                                                                        if($reg[1]):
                                                                                            $pre = substr($reg[0], 0,2);
                                                                                            if($pre != "co" && $reg[0] != "dt_cadastro"):
                                                                                                echo '<div class="form-group">
                                                                                                        <label for="form-field-22" style="font-weight: bolder; color: #666; text-transform: capitalize;">';
                                                                                                              echo str_replace("_", " ",  substr($reg[0], 3,strlen($reg[0])));
                                                                                                     echo '</label>
                                                                                                        <p><big><b>';
                                                                                                            if($pre == "dt"):
                                                                                                                $data = explode(" ", $reg[1]);
                                                                                                                echo Valida::DataShow($data[0],"d/m/Y")." - ".$data[1];
                                                                                                            else:
                                                                                                                echo $reg[1];
                                                                                                            endif;
                                                                                                          echo   '</b></big></p>
                                                                                                      </div>';
                                                                                            endif;
                                                                                        endif;
                                                                                    }
                                                                                    
                                                                                endif;
                                                                            ?>
								</div>
							</div>
                                                    
                                                    <a href="<?php echo PASTAADMIN.'Auditoria/ListarAuditoria'; ?>" class="btn btn-primary tooltips" 
                                                        data-original-title="Editar Registro" data-placement="top">
                                                         Voltar à Auditorias <i class="clip-arrow-right-2"></i>
                                                    </a>
                                                    <br/><br/>
                                            </div>
                                            
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>