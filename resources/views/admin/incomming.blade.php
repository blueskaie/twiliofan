@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection

@section('menu')
    @include('layouts.menu')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('style')
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="main/css/bootstrap.min.css">
    <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <link rel="stylesheet" href="main/css/owl.carousel.css">
    <link rel="stylesheet" href="main/css/owl.theme.css">
    <link rel="stylesheet" href="main/css/owl.transitions.css">
    <link rel="stylesheet" href="main/css/meanmenu/meanmenu.min.css">
    <link rel="stylesheet" href="main/css/animate.css">
    <link rel="stylesheet" href="main/css/normalize.css">
    <link rel="stylesheet" href="main/css/wave/waves.min.css">
    <link rel="stylesheet" href="main/css/wave/button.css">
    <link rel="stylesheet" href="main/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="main/css/notika-custom-icon.css">
    <link rel="stylesheet" href="main/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="main/css/main.css">
    <link rel="stylesheet" href="main/style.css">
    <link rel="stylesheet" href="main/css/responsive.css">
    <script src="main/js/vendor/modernizr-2.8.3.min.js"></script>
@endsection

@section('javascript')
    <script src="main/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="main/js/bootstrap.min.js"></script>
    <script src="main/js/wow.min.js"></script>
    <script src="main/js/jquery-price-slider.js"></script>
    <script src="main/js/owl.carousel.min.js"></script>
    <script src="main/js/jquery.scrollUp.min.js"></script>
    <script src="main/js/meanmenu/jquery.meanmenu.js"></script>
    <script src="main/js/counterup/jquery.counterup.min.js"></script>
    <script src="main/js/counterup/waypoints.min.js"></script>
    <script src="main/js/counterup/counterup-active.js"></script>
    <script src="main/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="main/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="main/js/sparkline/sparkline-active.js"></script>
    <script src="main/js/flot/jquery.flot.js"></script>
    <script src="main/js/flot/jquery.flot.resize.js"></script>
    <script src="main/js/flot/flot-active.js"></script>
    <script src="main/js/knob/jquery.knob.js"></script>
    <script src="main/js/knob/jquery.appear.js"></script>
    <script src="main/js/knob/knob-active.js"></script>
    <script src="main/js/chat/jquery.chat.js"></script>
    <script src="main/js/todo/jquery.todo.js"></script>
    <script src="main/js/wave/waves.min.js"></script>
    <script src="main/js/wave/wave-active.js"></script>
    <script src="main/js/plugins.js"></script>
    <script src="main/js/data-table/jquery.dataTables.min.js"></script>
    <script src="main/js/data-table/data-table-act.js"></script>
    <script src="main/js/main.js"></script>
    <script src="main/js/tawk-chat.js"></script>
@endsection
@section('content')
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Download Incomming Info As Excel</h2>
										<p>You can click export button to download imcomming data.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="/incommings/exportExcel" data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Incomming Lists</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                        <th>Country</th>
                                        <th>Date</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($incomings as $incoming)
                                    <tr>
                                        <td class="col-sm-1">{{$incoming->id}}</td>
                                        <td class="col-sm-2">{{$incoming->phone->number}}</td>
                                        <td class="col-sm-3">{{$incoming->message}}</td>
                                        <td class="col-sm-1">{{$incoming->phone->location}}</td>
                                        <td class="col-sm-2">{{$incoming->created_at}}</td>
                                        <td class="col-sm-2">
                                            <button type="button" class="btn btn-info btn-sm">Reply</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                        <th>Country</th>
                                        <th>Date</th>
                                        <th>Options</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection