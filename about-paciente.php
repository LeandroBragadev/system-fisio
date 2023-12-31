﻿<?php
session_start();
include('View/autentication/login-invalid.php');
include_once('./db/db-conection.php');

// dd($_POST);

// function dd($param){
//     echo '<pre>';
//     print_r($param);
//     echo '<pre>';
//     die();
// }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>System Fisio - Sobre o Paciente </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

	<link rel="stylesheet" href="assets/css/style.css">


	<!-- ESTYLE PARA ESTILIZAR O PRELOAD -->
	<link rel="stylesheet" href="assets/css/style-preload.css">
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body onload="loading()">

	<div class="box-load">
		<div class="pre"></div>
	</div>

	<div class="main-wrapper">

		<div class="header-outer">
			<div class="header">
				<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
				<a id="toggle_btn" class="float-left" href="javascript:void(0);">
					<img src="assets/img/sidebar/icon-21.png" alt="">
				</a>

				<ul class="nav float-left">
					<li>
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
							</a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<li>
						<a href="index.php" class="mobile-logo d-md-block d-lg-none d-block"><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
					</li>
				</ul>

				<ul class="nav user-menu float-right">
					<li class="nav-item dropdown d-none d-sm-block">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<img src="assets/img/sidebar/icon-22.png" alt="">
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user-06.jpg" class="img-fluid rounded-circle">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">T</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">L</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">G</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">T</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> like your photo.</p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown d-none d-sm-block">
						<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="assets/img/sidebar/icon-23.png" alt=""> </a>
					</li>
					<li class="nav-item dropdown has-arrow">
						<a href="#" class=" nav-link user-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/user-06.jpg" width="30" alt="Admin">
								<span class="status online"></span></span>
							<span><?php echo $_SESSION['usuario']; ?></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">Meu Perfil</a>
							<a class="dropdown-item" href="edit-profile.html">Editar Perfil</a>
							<a class="dropdown-item" href="settings.html">Configurações</a>
							<a class="dropdown-item" href="View/autentication/logout.php">Logout</a>
						</div>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu float-right">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">Meu Perfil</a>
						<a class="dropdown-item" href="edit-profile.html">Editar Perfil</a>
						<a class="dropdown-item" href="settings.html">Configurações</a>
						<a class="dropdown-item" href="View/autentication/logout.php">Logout</a>
					</div>
				</div>
			</div>
		</div>


		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<div class="header-left">
						<a href="index.html" class="logo">
							<img src="assets/img/logo1.png" width="40" height="40" alt="">
							<span class="text-success" style="font-family: sans-serif pridi regular;">System Fisio</span>
						</a>
					</div>
					<ul class="sidebar-ul">
						<li class="menu-title">Menu</li>
						<li >
							<a href="index.php"><img src="assets/img/sidebar/icon-6.png" alt="icon"><span>Agenda</span></a>
						</li>
						<li class="submenu" >
							<a href="#" class="active"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Pacientes</span><span class="menu-arrow"></span></a>
							<ul class="list-unstyled" style="display: none;">
								<li><a href="all-pacientes.php"><span>Todos os Pacientes</span></a></li>
								<li><a href="add-paciente.php"><span>Adicionar Paciente</span></a></li>

							</ul>
						</li>
						<li class="submenu">
							<a href="#"><img src="assets/img/sidebar/icon-10.png" alt="icon"><span> Atendimentos </span>
								<span class="menu-arrow"></span></a>
							<ul class="list-unstyled" style="display: none;">
								<li><a href="invoices.html"><span>Invoices</span></a></li>
								<li><a href="payments.html"><span>Payments</span></a></li>
								<li><a href="expenses.html"><span>Expenses</span></a></li>
								<li><a href="provident-fund.html"><span>Provident Fund</span></a></li>
								<li><a href="taxes.html"><span>Taxes</span></a></li>
							</ul>
						</li>
						<li class="menu-title">RELATÓRIOS</li>
						<li>
							<a href="relatorio-atendimentos.php"><img src="assets/img/sidebar/icon-12.png" alt="icon">
								<span> dos atendimentos</span></a>
						</li>


						<li class="menu-title">Configuração geral</li>
						<li>
							<a href="settings.html"><img src="assets/img/sidebar/icon-14.png" alt="icon"> <span>Configurações</span></a>
						</li>

						<li class="menu-title"><span>Planos e equipes</span></li>
						<li>
							<a href="users.html"> <img src="assets/img/sidebar/icon-4.png" alt="icon"><span>Usuários</span></a>
						</li>
						<li>
							<a href="users.html"> <img src="assets/img/sidebar/icon-4.png" alt="icon"><span>Profissionais</span></a>
						</li>

					</ul>
				</div>
			</div>
		</div>


		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<h5 class="text-uppercase mb-0 mt-0 page-title">Sobre o Paciente</h5>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
								<li class="breadcrumb-item"><a href="all-pacientes.php">Pacientes</a></li>
								<li class="breadcrumb-item"><span> Sobre o Paciente</span></li>
							</ul>
						</div>
					</div>
				</div>

				<?php

				$codPacienteForm = isset($_POST['codPaciente']) ? $_POST['codPaciente'] : null;
				//== QUERY DE TODOS OS DADOS DO PACIENTE ===
				$querySelectPaciente = "SELECT * FROM pacientes p join avaliacao_paciente a on a.ordem_paciente = p.cod_paciente  WHERE cod_paciente = '$codPacienteForm'  ORDER BY nome_paciente";

				$queryResultPaciente = $mysqli->query($querySelectPaciente);

				if (mysqli_affected_rows($mysqli) > 0) {



					while ($row_cont_paciente = mysqli_fetch_array($queryResultPaciente)) {
						$codPaciente = $row_cont_paciente['cod_paciente'];
						$nomePaciente = $row_cont_paciente['nome_paciente'];
						$susPaciente = $row_cont_paciente['sus_paciente'];
						$sexoPaciente = $row_cont_paciente['sexo_paciente'];
						$cpfPaciente = $row_cont_paciente['cpf_paciente'];
						$dataNascPacienteBd = $row_cont_paciente['data_nasc_paciente'];

						$dataNascPaciente = preg_replace('/[mm]/', '', $dataNascPacienteBd);
						$dataNascPaciente = DateTime::createFromFormat("Y-m-d", $dataNascPaciente);
						$dataNascPaciente = $dataNascPaciente->format("d/m/Y");

						$date = new DateTime($dataNascPacienteBd);
						$interval = $date->diff(new DateTime(date('Y-m-d')));
						$idadePaciente =  $interval->format('%Y');						



						$telefonePaciente = $row_cont_paciente['telefone_paciente'];
						$ruaPaciente = $row_cont_paciente['rua_paciente'];
						$bairroPaciente = $row_cont_paciente['bairro_paciente'];
						$profissaoPaciente = $row_cont_paciente['profissao_paciente'];
						$etniaPaciente = $row_cont_paciente['etnia_paciente'];

						$diagMedPeciente = $row_cont_paciente['diag_medico_paciente'];
						$cidPeciente = $row_cont_paciente['cid_paciente'];

						$diagFisioPeciente = $row_cont_paciente['diag_fisio_paciente'];

						$dataCadPaciente = $row_cont_paciente['data_cad_paciente'];

						$dataCadPaciente = preg_replace('/[mm]/', '', $dataCadPaciente);
						$dataCadPaciente = DateTime::createFromFormat("Y-m-d", $dataCadPaciente);
						$dataCadPaciente = $dataCadPaciente->format("m/Y");

						$codAvaliacao = $row_cont_paciente['cod_avaliacao'];

					
						
					}
				}


				?>





				<div class="content-page">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="aboutprofile-sidebar">
								<div class="row">
									<div class="col-lg-4 col-md-12 col-sm-12 col-12">
										<div class="aboutprofile">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 col-12">
															<div class="aboutprofile-pic">
																<img class="card-img-top" src="assets/img/user-06.jpg" alt="Card image">
															</div>
															<div class="aboutprofile-name">
																<h5 class="text-center mt-2"><?php echo $nomePaciente; ?></h5>
																<p class="text-center">paciente: <?php echo $codPaciente; ?></p>
															</div>
															<ul class="list-group list-group-flush">
																<li class="list-group-item"><b>Sexo</b><a href="#" class="float-right"><?php if ($sexoPaciente == "M") {
																																			echo "Masculino";
																																		} else {
																																			echo "Feminino";
																																		}  ?></a></li>


																<?php
																if ($susPaciente) { ?>
																	<li class="list-group-item"><b>SUS</b><a href="#" class="float-right"><?php echo $susPaciente; ?></a></li>
																<?php } ?>

																<?php
																if ($cpfPaciente) { ?>
																	<li class="list-group-item"><b>CPF</b><a href="#" class="float-right"><?php echo $cpfPaciente; ?></a></li>
																<?php }

																?>

																<li class="list-group-item"><b>Idade</b><a href="#" class="float-right"><?php echo $dataNascPaciente; ?> - <?php echo $idadePaciente; ?> anos</a></li>
																<?php
																if ($telefonePaciente) { ?>
																	<li class="list-group-item"><b>Telefone</b><a href="#" class="float-right"><?php echo $telefonePaciente; ?></a></li>
																<?php } ?>

																<?php
																if ($ruaPaciente and $bairroPaciente) { ?>
																	<li class="list-group-item"><b>Endereço</b><a href="#" class="float-right"><?php echo $ruaPaciente . " - " . $bairroPaciente; ?></a></li>
																<?php } ?>

																<?php
																if ($profissaoPaciente) { ?>
																	<li class="list-group-item"><b>Profissão</b><a href="#" class="float-right"><?php echo $profissaoPaciente; ?></a></li>
																<?php } ?>

																<?php
																if ($etniaPaciente) { ?>
																	<li class="list-group-item"><b>Etnia</b><a href="#" class="float-right"><?php echo $etniaPaciente; ?></a></li>
																<?php } ?>

																<li class="list-group-item"><b>Data do Cadastro</b><a href="#" class="float-right"><?php echo $dataCadPaciente; ?></a></li>

															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="aboutprofile-address mt-4">
											<div class="card">
												<div class="card-header">
													<h4 class="page-title">Diagnóstico Médico </h4>
												</div>
												<div class="card-body">
													<h5>cid: <?php if ($cidPeciente) {
																	echo $cidPeciente;
																} ?></h5>
													<p><?php if ($diagMedPeciente) {
															echo $diagMedPeciente;
														} ?></p>
												</div>
											</div>
										</div>

										<div class="aboutprofile-address mt-4">
											<div class="card">
												<div class="card-header">
													<h4 class="page-title">Diagnóstico Fisioterapêutico </h4>
												</div>
												<div class="card-body">
													<p><?php if ($diagFisioPeciente) {
															echo $diagFisioPeciente;
														} ?></p>
												</div>
											</div>
										</div>
										<div class="aboutme-profile">
											<div class="card">
												<div class="card-header">
													<h4 class="page-title">Sobre o Agendamento </h4>
												</div>
												<div class="card-body">
													<p>Hello I am Michael V. Buttars .Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
													<ul class="list-group list-group-flush">
														<li class="list-group-item"><b>ID</b><a href="#" class="float-right">FD-00d1</a></li>
														<li class="list-group-item"><b>Gender</b><a href="#" class="float-right">Male</a></li>
														<li class="list-group-item"><b>Seminors Done</b><a href="#" class="float-right">30+</a></li>
														<li class="list-group-item"><b>Degree</b><a href="#" class="float-right">P.H.D</a></li>
														<li class="list-group-item"><b>Desgination</b><a href="#" class="float-right">Maths Teacher</a></li>
														<li class="list-group-item"><b>Joining Date</b><a href="#" class="float-right">16/09/2018</a></li>
													</ul>
													<div class="aboutme-start">
														<div class="row">
															<div class="col-lg-4 col-md-6 col-4">
																<div class="aboutme-starttitle text-uppercase">
																	37
																</div>
																<div class="aboutme-startname text-uppercase">
																	Presenças
																</div>
															</div>
															<div class="col-lg-4 col-md-6 col-4">
																<div class="aboutme-starttitle text-uppercase">
																	52
																</div>
																<div class="aboutme-startname text-uppercase">
																	Faltas
																</div>
															</div>
															<div class="col-lg-4 col-md-6 col-4">
																<div class="aboutme-starttitle text-uppercase">
																	50
																</div>
																<div class="aboutme-startname text-uppercase">
																	Total de Sessões
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="aboutme-profile">
											<div class="card">
												<div class="card-header">
													<h4 class="page-title">Evolução do Paciente </h4>
												</div>
												<div class="card-body">
													<ul class="list-group list-group-flush mb-2">
														<li class="list-group-item"><b>Data </b><a href="#" class="float-right">16/09/2018</a></li>
														<li class="list-group-item"><b>Fisioterapeuta</b><a href="#" class="float-right">Gaby</a></li>
													</ul>
													<h5>Resultados:</h5>
													<p>Hello I am Michael V. Buttars .Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
													<ul class="list-group list-group-flush">
														<li class="list-group-item"><b>Estado de Saúde </b><a href="#" class="float-right">FD-00d1</a></li>
														<li class="list-group-item"><b>Conduta Aplicada</b><a href="#" class="float-right">Male</a></li>
														<li class="list-group-item"><b>Intercorrências</b><a href="#" class="float-right">30+</a></li>
														<li class="list-group-item"></li>
													</ul>
												</div>

												<div class="card-body">
													<ul class="list-group list-group-flush mb-2">
														<li class="list-group-item"><b>Data </b><a href="#" class="float-right">16/09/2018</a></li>
														<li class="list-group-item"><b>Fisioterapeuta</b><a href="#" class="float-right">Gaby</a></li>
													</ul>
													<h5>Resultados:</h5>
													<p>Hello I am Michael V. Buttars .Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
													<ul class="list-group list-group-flush">
														<li class="list-group-item"><b>Estado de Saúde </b><a href="#" class="float-right">FD-00d1</a></li>
														<li class="list-group-item"><b>Conduta Aplicada</b><a href="#" class="float-right">Male</a></li>
														<li class="list-group-item"><b>Intercorrências</b><a href="#" class="float-right">30+</a></li>
														<li class="list-group-item"></li>
													</ul>
												</div>


											</div>
										</div>
										<div class="aboutprofile-address mt-4">
											<div class="card">
												<div class="card-header">
													<h4 class="page-title">Address</h4>
												</div>
												<div class="card-body">
													<address class="text-center">
														4850 Edgewood Road <br>
														Washington, AR 71862
													</address>
												</div>
											</div>
										</div>
									</div>

									<?php
									$querySelAvaliacao = "SELECT * FROM  avaliacao_paciente ap join profissionais pf on pf.cod_profissional = ap.ordem_profissional WHERE ordem_paciente ='$codPaciente' ";
									$queryResultAv = $mysqli->query($querySelAvaliacao);

									while ($row_cont_avaliacao = mysqli_fetch_array($queryResultAv)) {

										$codAvaliacao = $row_cont_avaliacao['cod_avaliacao'];
										$nomeFisio = $row_cont_avaliacao['nome_profissional'];
										$sexoFisio = $row_cont_avaliacao['sexo'];
										if ($sexoFisio == 'M') {
											$sexoFisio = "Masculino";
										} else {
											$sexoFisio = "Feminina";
										}
										$qpPaciente = $row_cont_avaliacao['qp_paciente'];
										$hmaPaciente = $row_cont_avaliacao['hma_paciente'];
										$tratamentoPaciente = $row_cont_avaliacao['tratamento_realizado'];
										$examePaciente = $row_cont_avaliacao['exames'];
										$medicamentoPaciente = $row_cont_avaliacao['medicamentos'];
										$cirurgiaPaciente = $row_cont_avaliacao['cirurgia'];
										$evaPaciente = $row_cont_avaliacao['eva_paciente'];
									}

									// ======= condição para definir a quandidade de dor que o paciente esta sentindo ============
									if ($evaPaciente > '0' and $evaPaciente <= '2') {
										$evaPaciente = "Dor Leve";
									} else if ($evaPaciente > '2' and $evaPaciente <= '7') {
										$evaPaciente = "Dor Moderada";
									} else if ($evaPaciente > '7' and $evaPaciente <= '10') {
										$evaPaciente = "Dor Intensa";
									} else {
										$evaPaciente = "";
									}


									?>


									<div class="col-lg-8 col-md-12 col-sm-12 col-12">
										<div class="profile-content">
											<div class="row">
												<div class="col-lg-12">
													<div class="card">

														<div class="card-header">
															<h4 class="page-title">Prontuario do paciente</h4>
														</div>

														<div class="card-body">
															<div id="biography" class="biography">
																<div class="row">
																	<div class="col-md-3 col-6"> <strong>Fisioterapeuta </strong>
																		<p class="text-muted"><?php echo $nomeFisio; ?></p>
																	</div>
																	<div class="col-md-3 col-6"> <strong>Sexo</strong>
																		<p class="text-muted"><?php echo $sexoFisio; ?></p>
																	</div>
																	<div class="col-md-3 col-6"> <strong>Email</strong>
																		<p class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82efebe1eae3e7eef4e0f7f6f6e3f0f1c2e7fae3eff2eee7ace1edef">[email&#160;protected]</a></p>
																	</div>
																	<div class="col-md-3 col-6"> <strong>Location</strong>
																		<p class="text-muted">USA</p>
																	</div>
																</div>

																<h4>Situação</h4>
																<hr>
																<div class="row">
																	<?php
																	$querySelSituacao = "SELECT * FROM  tipo_situacao_paciente tsp join situacao_paciente sp on sp.cod_situacao = tsp.ordem_situacao WHERE tsp.ordem_paciente ='$codPaciente' ";
																	$queryResultSit = $mysqli->query($querySelSituacao);

																	while ($row_cont_situacao = mysqli_fetch_array($queryResultSit)) {
																		$nomeSituacao = $row_cont_situacao['nome_situacao'];
																	?>

																		<div class="col-md-3 col-6 mb-3">
																			<p class="text-muted "><?php echo $nomeSituacao; ?></p>
																		</div>

																	<?php 	} ?>


																</div>
																<h4>Classificação  </h4>
																<hr>
																<ul class="list-unstyled ">
																	<?php
																	$querySelClassificao = "SELECT * FROM  tipo_classificacao_paciente tcpp join classificacao_paciente cp on cp.cod_classificacao = tcpp.ordem_classificacao WHERE tcpp.ordem_avaliacao ='$codAvaliacao' ";
																	$queryResultClass = $mysqli->query($querySelClassificao);

																	while ($row_cont_class = mysqli_fetch_array($queryResultClass)) {
																		$nomeClassificacao = $row_cont_class['nome_classificacao'];

																	?>
																		<li class="list-item"><?php echo $nomeClassificacao; ?></li>

																	<?php   } ?>

																</ul>




																<h4>Queixa Principal </h4>
																<hr>

																<p class="mb-4"><?php echo $qpPaciente; ?></p>

																<h4>História da Molestia Atual </h4>
																<hr>

																<p class="mb-4"><?php echo $hmaPaciente; ?></p>

																<h4>Tratamento Realizado</h4>
																<hr>

																<p class="mb-4"><?php echo $tratamentoPaciente; ?></p>

																<h4>Exames Realizado</h4>
																<hr>

																<p class="mb-4"><?php echo $examePaciente; ?></p>

																<h4>Medicamentos </h4>
																<hr>

																<p class="mb-4"><?php echo $medicamentoPaciente; ?></p>


																<h4>Cirurgia </h4>
																<hr>

																<p class="mb-4"><?php echo $cirurgiaPaciente; ?></p>



																<h4>Avaliação da Dor </h4>
																<hr>

																<p class="mb-4"><?php echo $evaPaciente; ?></p>


																<h4>Estado</h4>
																<hr>
																<ul class="list-unstyled ">
																	<?php
																	$querySelEstado = "SELECT * FROM  tipo_estado_paciente tep join estado_paciente ep on ep.cod_estado = tep.ordem_estado WHERE tep.ordem_avaliacao ='$codAvaliacao' ";
																	$queryResultEst = $mysqli->query($querySelEstado);

																	while ($row_cont_estado = mysqli_fetch_array($queryResultEst)) {
																		$nomeEstado = $row_cont_estado['nome_estado'];

																	?>
																		<li class="list-item"><?php echo $nomeEstado; ?></li>

																	<?php   } ?>

																</ul>

																<h4>Inspeção</h4>
																<hr>
																<ul class="list-unstyled ">
																	<?php
																	$querySelIsnpecao = "SELECT * FROM  tipo_inspecao tip join inspecao i on i.cod_inspecao = tip.ordem_inspecao WHERE tip.ordem_avaliacao ='$codAvaliacao' ";
																	$queryResultInsp = $mysqli->query($querySelIsnpecao);

																	while ($row_cont_insp = mysqli_fetch_array($queryResultInsp)) {
																		$nomeInspecao = $row_cont_insp['nome_inspecao'];

																	?>
																		<li class="list-item"><?php echo $nomeInspecao; ?></li>

																	<?php   } ?>

																</ul>

																<h4>Tratamento Necessario </h4>
																<hr>
																<ul class="list-unstyled ">
																	<?php
																	$querySelTratamento = "SELECT * FROM  tipo_tratamento_paciente ttp join tratamento_paciente tp on tp.cod_tratamento = ttp.ordem_tratamento WHERE ttp.ordem_avaliacao ='$codAvaliacao' ";
																	$queryResultTrat = $mysqli->query($querySelTratamento);

																	while ($row_cont_trat = mysqli_fetch_array($queryResultTrat)) {
																		$nomeTratamento = $row_cont_trat['nome_tratamento'];

																	?>
																		<li class="list-item"><?php echo $nomeTratamento; ?></li>

																	<?php   } ?>

																</ul>

																<h4>Recursos para o Tratamento </h4>
																<hr>
																<ul class="list-unstyled ">
																	<?php
																	$querySelRecurso = "SELECT * FROM  tipo_recurso_tratamento trt join recurso_tratamento rt on rt.cod_recurso = trt.ordem_recurso WHERE trt.ordem_avaliacao ='$codAvaliacao' ";
																	$queryResultRecu = $mysqli->query($querySelRecurso);

																	while ($row_cont_recurso = mysqli_fetch_array($queryResultRecu)) {
																		$nomeRecurso = $row_cont_recurso['nome_recurso'];

																	?>
																		<li class="list-item"><?php echo $nomeRecurso; ?></li>

																	<?php   } ?>

																</ul>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="notification-box">
				<div class="msg-sidebar notifications msg-noti">
					<div class="topnav-dropdown-header">
						<span>Messages</span>
					</div>
					<div class="drop-scroll msg-list-scroll">
						<ul class="list-box">
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">R</span>
										</div>
										<div class="list-body">
											<span class="message-author">Richard Miles </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item new-message">
										<div class="list-left">
											<span class="avatar">J</span>
										</div>
										<div class="list-body">
											<span class="message-author">Ruth C. Gault</span>
											<span class="message-time">1 Aug</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">T</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Tarah Shropshire </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">M</span>
										</div>
										<div class="list-body">
											<span class="message-author">Mike Litorus</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">C</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Catherine Manseau </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">D</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Domenic Houston </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">B</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Buster Wigton </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">R</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Rolland Webber </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">C</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Claire Mapes </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">M</span>
										</div>
										<div class="list-body">
											<span class="message-author">Melita Faucher</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">J</span>
										</div>
										<div class="list-body">
											<span class="message-author">Jeffery Lalor</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">L</span>
										</div>
										<div class="list-body">
											<span class="message-author">Loren Gatlin</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">T</span>
										</div>
										<div class="list-body">
											<span class="message-author">Tarah Shropshire</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="topnav-dropdown-footer">
						<a href="chat.html">See all messages</a>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/js/jquery.slimscroll.js"></script>

	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>

	<script src="assets/js/app.js"></script>

	<!-- SCRIPT PARA O PRELOAD DA PAGINA -->
	<script src="assets/js/script-preload.js"></script>
</body>

</html>