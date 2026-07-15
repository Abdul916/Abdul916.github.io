<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$mpdf = new \Mpdf\Mpdf();
	$html = '
	<!DOCTYPE html>
	<html>
	<head>
		<style>
			body {
				font-family: DejaVu Sans, sans-serif;
				font-size: 12px;
				color: #333;
				margin: 20px;
				line-height: 1.6;
			}
			h1, h2, h3, h4, h5 {
				margin-top: 0;
				font-weight: bold;
				color: #2e4053;
			}
			h1 {
				font-size: 24px;
				text-align: center;
				margin-bottom: 10px;
			}
			h2 {
				font-size: 20px;
				border-bottom: 1px solid #ccc;
				padding-bottom: 5px;
				margin-top: 30px;
			}
			a {
				color: #1a5276;
				text-decoration: none;
			}
			a:hover {
				text-decoration: underline;
			}
			.profile-image img {
				width: 120px;
				height: 120px;
				object-fit: cover;
				border-radius: 50%;
				border: 3px solid #ddd;
			}
			.profile-info {
				margin-top: 10px;
			}
			table {
				width: 100%;
				border-collapse: collapse;
				margin-bottom: 15px;
			}
			table td {
				padding: 5px;
				vertical-align: top;
			}
			.ibox {
				margin-bottom: 25px;
				padding: 15px;
				border: 1px solid #e0e0e0;
				border-radius: 6px;
				background: #fafafa;
			}
			.ibox-title h5 {
				font-size: 16px;
				margin-bottom: 10px;
				border-bottom: 2px solid #2980b9;
				display: inline-block;
				padding-bottom: 2px;
			}
			.keySkills li {
				margin-bottom: 4px;
				display: inline-block;
				padding: 6px 10px;
				background: #eaf2f8;
				margin-right: 5px;
				border-radius: 4px;
				font-size: 12px;
			}
			.timeline-item {
				margin-bottom: 20px;
			}
			.timeline-item .date {
				width: 25%;
				float: left;
				font-weight: bold;
				color: #7d8a8d;
			}
			.timeline-item .content {
				width: 70%;
				float: right;
			}
			.timeline-item:after {
				content: "";
				display: table;
				clear: both;
			}
			.wrapper-content {
				margin-top: 10px;
			}
			.text-center {
				text-align: center;
			}
			.m-b-xs { margin-bottom: 5px; }
			.m-b-md { margin-bottom: 15px; }
			.rounded-circle {
				border-radius: 50%;
			}
			.circle-border {
				border: 2px solid #2980b9;
				padding: 4px;
			}
			.no-margins {
				margin: 0;
			}
			@page {
				margin: 25mm 15mm;
			}
		</style>
		<title>Abdul Waheed | PHP Developer</title>
	</head>
	<body class="top-navigation pace-done fixed-nav">
		<div id="wrapper">
			<div id="page-wrapper" class="gray-bg">
				<div class="wrapper wrapper-content animated fadeInRight" id="home">
					<div class="row">
						<div class="col-lg-12">
							<div class="ibox">
								<div class="ibox-title">
									<h5>About Us</h5>
								</div>
								<div class="ibox-content">
									<div class="row">
										<div class="col-md-7">
											<div class="profile-image">
												<img src="https://www.gravatar.com/avatar/44dd8d91c4fa2f5a37d07a34eb8dbce0?s=200&d=retro&r=pg" class="rounded-circle circle-border m-b-md" alt="profile">
											</div>
											<div class="profile-info">
												<div class="">
													<div>
														<h2 class="no-margins">
															Abdul Waheed
														</h2>
														<h4>PHP Developer</h4>
														<br />
														<h4 class="no-margins">
															BCS (Bachelor in Computer Science)
														</h4>
														<h4>Comsats Institute of Information Technology, Lahore Campus.</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-5">
											<br />
											<br />
											<table class="table m-b-xs">
												<tbody>
													<tr>
														<td>
															<strong>Email: </strong> <a href="mailto:abdulwaheedsharif@gmail.com">abdulwaheedsharif@gmail.com</a>
														</td>
													</tr>
													<tr>
														<td>
															<strong>LinkedIn: </strong> <a href="https://www.linkedin.com/in/abdulwaheed916/" target="_blank">www.linkedin.com</a>
														</td>
													</tr>
													<tr>
														<td>
															<strong>Phone No: </strong> <a href="tel:+923044798784">+92-304-479-8784</a>
														</td>
													</tr>
													<tr>
														<td>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<span style="text-align: center !important;">
										To gain confidence and fame using my potential in the field of “Web Development”, and express my innovative creative skills for self and company growth.
									</span>
								</div>
							</div>
						</div>
					</div>
					<div id="technical_skills">
						<div class="row">
							<div class="col-lg-12">
								<div class="ibox">
									<div class="ibox-title">
										<h5>Technical Skills</h5>
									</div>
									<div class="ibox-content">
										<div class="user-friends">
											<ul class="list-unstyled file-list keySkills">
												<li><a href="javascript:void(0);"><i class="fa fa-html5"></i> HTML5</a> <a href="javascript:void(0);"><i class="fa fa-css3"></i> CSS3</a> <a href="javascript:void(0);"><strong>B</strong> Bootstrap</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-file-code-o"></i> JavaScript/ jQuery</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-free-code-camp"></i> CodeIgniter/ WordPress/ Laravel (PHP Framework)</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-server"></i> MySQL Database/ WAMP/ XAMPP</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-database"></i> Navicat/ SQLyog</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-file-pdf-o"></i> Create Custom PDF, Excel, CSV Sheets</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-file"></i> RESTfull API\'s , Web Services</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-google"></i> reCAPTCHA Validation</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-bitbucket"></i> Github/ TortoiseSVN/ Bitbucket</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-cc-visa"></i> Payment Gateway| PayPal/ Stripe/ Perfect Money</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-map-marker"></i> Google Map API\'s</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-youtube"></i> YouTube API\'s</a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-cogs"></i> Have Experience on cPanel and FTP</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="experience">
						<div class="row">
							<div class="col-lg-12">
								<div class="ibox ">
									<div class="ibox-title">
										<h5>Experience</h5>
									</div>
									<div class="ibox-content inspinia-timeline">
										<div class="timeline-item">
											<div class="row">
												<div class="col-3 date">
													<i class="fa fa-star"></i>
													March 2019 to Present
												</div>
												<div class="col-8 content no-top-border">
													<p class="m-b-xs"><strong>PHP Developer at Explore Logics</strong></p>
													<p>
														Currently employed as “PHP Developer (CodeIgniter, Laravel, WordPress, MERN Stack)” at
														<a target="_blank" href="https://www.explorelogics.com/">Explore Logics IT Solution\'s Barkat Market Lahore.</a>
														<br />Start Working in Laravel at 01 May 2020
														<br />Start Working in MERN Stack at 03 Nov 2021
													</p>
												</div>
											</div>
										</div>
										<div class="timeline-item">
											<div class="row">
												<div class="col-3 date">
													<i class="fa fa-star"></i>
													April 2015 to February 2019
												</div>
												<div class="col-8 content">
													<p class="m-b-xs"><strong>PHP Developer at Soft Site</strong></p>
													<p>Working as “PHP Developer (CodeIgniter)” at <a href="https://www.padcourier.com/">SoftSite IT Solution\'s Kalma Chowk Lahore.</a></p>
												</div>
											</div>
										</div>
										<div class="timeline-item">
											<div class="row">
												<div class="col-3 date">
													<i class="fa fa-star"></i>
													Janruary 2015 to March 2015
												</div>
												<div class="col-8 content">
													<p class="m-b-xs"><strong>Software Engineer (internship) at ProSoft</strong></p>
													<p>3 Months Experience in CodeIgniter as PHP Developer.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="projects">
						<div class="row">
							<div class="col-lg-12">
								<div class="ibox ">
									<div class="ibox-title">
										<h5>Latest Projects</h5>
									</div>
									<div class="ibox-content inspinia-timeline">
										<div class="timeline-item">
											<div class="row">
												<div class="col-3 date">
													<i class="fa fa-tasks"></i>
													<small>14 Jan 2025 to countine</small>
												</div>
												<div class="col-8 content no-top-border">
													<p class="m-b-xs"><strong><a target="_blank" href="https://buyahouseinrosarito.com/">Real Estate</a></strong></p>
													<span><strong>About Project: </strong>Laravel</span>
													<br />
													A dynamic real estate platform designed to help users find and purchase properties in Rosarito. Features property listings, search filters, and contact options for agents.
												</div>
											</div>
										</div>
										<div class="timeline-item">
											<div class="row">
												<div class="col-3 date">
													<i class="fa fa-tasks"></i>
													<small>28 Jan 2025 to 31 Jan 2025</small>
												</div>
												<div class="col-8 content">
													<p class="m-b-xs"><strong><a target="_blank" href="https://explorelogicsit.net/labsspasso/">Mosque Tawkit</a></strong></p>
													<span><strong>About Project: </strong>Laravel</span>
													<br />
													A platform designed to facilitate clinical lab supervision, including test management, reporting, and compliance tracking.
												</div>
											</div>
										</div>
										<div class="timeline-item">
											<div class="row">
												<div class="col-3 date">
													<i class="fa fa-tasks"></i>
													<small>22 Nov 2024 to 5 Mar 2025</small>
												</div>
												<div class="col-8 content">
													<p class="m-b-xs"><strong><a target="_blank" href="https://explorelogicsit.net/citeecho/portal/">Citeecho</a></strong></p>
													<span><strong>About Project: </strong>Laravel</span>
													<br />
													A citation and reference management portal that streamlines academic referencing, citation tracking, and research organization.
												</div>
											</div>
										</div>
										<div class="timeline-item">
											<div class="row">
												<div class="col-3 date">
													<i class="fa fa-tasks"></i>
													<small>8 Dec 2024 to 11 Mar 2025</small>
												</div>
												<div class="col-8 content">
													<p class="m-b-xs"><strong><a target="_blank" href="https://mullphill.com/">Mull & Phill (Parcel Tracking)</a></strong></p>
													<span><strong>About Project: </strong>Laravel</span>
													<br />
													A comprehensive parcel tracking system that enables users to track shipments, manage deliveries, and ensure real-time logistics updates.
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
	</body>
	</html>
	';
	$mpdf->WriteHTML($html);
	$mpdf->Output('AbdulWaheed.pdf', \Mpdf\Output\Destination::INLINE);
?>