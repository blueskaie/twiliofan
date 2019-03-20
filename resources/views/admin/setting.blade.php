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
    <link rel="stylesheet" href="main/css/main.css">
    <link rel="stylesheet" href="main/style.css">
    <link rel="stylesheet" href="main/css/responsive.css">
    <script src="main/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="main/js/vendor/jquery-1.12.4.min.js"></script>
@endsection

@section('javascript')
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
    <script src="main/js/icheck/icheck.min.js"></script>
    <script src="main/js/icheck/icheck-active.js"></script>
    <script src="main/js/chat/jquery.chat.js"></script>
    <script src="main/js/todo/jquery.todo.js"></script>
    <script src="main/js/wave/waves.min.js"></script>
    <script src="main/js/wave/wave-active.js"></script>
    <script src="main/js/autosize.min.js"></script>
    <script src="main/js/plugins.js"></script>
    <script src="main/js/main.js"></script>
    <script src="main/js/tawk-chat.js"></script>
@endsection

@section('content')
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Auto Reply by using Twilio</h2>
                            <p>You can send different messages according to the client's sms.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner form-rlt-mg">
                                    <p>When Free</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea id= "auto_reply_default" class="form-control" rows="5" placeholder="Let us type some lorem ipsum....">{{$auto_reply_default}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner form-rlt-mg">
                                    <p>Default</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea id= "auto_reply_free" class="form-control" rows="5" placeholder="Let us type some lorem ipsum....">{{$auto_reply_free}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: right;"><button id="auto_submit" type="button" class="btn btn-primary">Submit</button></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Phone Verification</h2>
                            <p>You can send auto response messages for phone verification, note: don't remember to insert "{code}" into this message</p>
                            <p>For example: Your verification code is {code}. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner form-rlt-mg">
                                    <p>Default</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea id= "verify_reply_default" class="form-control" rows="5" placeholder="Let us type some lorem ipsum....">{{$verify_reply_default}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: right;"><button id="code_submit" type="button" class="btn btn-primary">Submit</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->
    <script>
        function updateReplyMessage(){
            $auto_reply_default = $('#auto_reply_default').val();
            $auto_reply_free = $('#auto_reply_free').val();
            $verify_reply_default = $('#verify_reply_default').val();
            $.ajax({
                type:'POST',
                url:'/settings/update',
                data:{'auto_reply_default': $auto_reply_default, 'auto_reply_free': $auto_reply_free, 'verify_reply_default': $verify_reply_default},
                success:function(data){
                    alert("success");
                    
                }
            });
        }
        $('#auto_submit').click(function(){
            updateReplyMessage()
        });
        $('#code_submit').click(function(){
            updateReplyMessage()
        });
    </script>
@endsection