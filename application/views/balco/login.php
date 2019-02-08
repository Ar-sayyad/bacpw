<?php include('includes/header-top.php');?>
<style>
body, html {
    height: 100%;
    margin: 0;
}
#main-wrapper{
    background-image: url("<?php echo base_url();?>piadmin/images/bg/lock.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.justify-content-right {
        /*float: right;*/
}
.login-content {
    margin: 30% 0 !important;
}
.card {
    background: rgba(169, 169, 169, 0.04) none repeat scroll 0 0;
    margin: 0px 0;
    padding: 0px;
    border: 1px solid #e7e7e7;
    border-radius: 0px;
    box-shadow: 0px 0px 3px #e7e7e7;
}
.login-form {
        background: rgba(169, 169, 169, 0.2);
    padding: 0px 20px 0px;
    border-radius: 0px;
}
.form-control {
    height: 40px;
    border-radius: 3px;
    box-shadow: none;
    color: #6c757d;
    font-size: 14px;
    border-color: #abb6ba;
    font-family: 'Verdana', sans-serif;
    background-color: rgb(239, 239, 239);
}
#btns{
     /*display:none;*/
}
</style>

<body>
   <?php include('includes/preloader.php');?>
    <!-- Main wrapper  -->
        <!-- End header header -->
        <div id="main-wrapper">
            <!--<img width="100%" height="auto" src="">-->
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-right">
                    <div class="col-lg-8">
                        <!--<div id="btns">
                        <button type="button" name="save" id="default" title="Default" class="btn btn-default btn-sm">
                            <img width="50px" height="30px"  src="<?php echo base_url();?>piadmin/images/bg/balco.jpg">
                        </button>
                        <button type="button" name="save" id="bg1" title="Theme 1" class="btn btn-default btn-sm">
                            <img width="50px" height="30px"  src="<?php echo base_url();?>piadmin/images/bg/bg1.jpg">
                        </button>
                          <button type="button" name="save" id="theme1" title="Theme 2" class="btn btn-default btn-sm">
                            <img width="50px" height="30px"  src="<?php echo base_url();?>piadmin/images/bg/img1.jpg">
                        </button>
                         <button type="button" name="save" id="theme2" title="Theme 3" class="btn btn-default btn-sm">
                            <img width="50px" height="30px"  src="<?php echo base_url();?>piadmin/images/bg/b.jpg">
                        </button>
                         <button type="button" name="save" id="theme3" title="Theme 4" class="btn btn-default btn-sm">
                            <img width="50px" height="30px"  src="<?php echo base_url();?>piadmin/images/bg/b1.jpg">
                        </button>
                         <button type="button" name="save" id="theme4" title="Theme 5" class="btn btn-default btn-sm">
                             <img width="50px" height="30px" src="<?php echo base_url();?>piadmin/images/bg/b2.jpg">
                        </button>
                        </div>-->
                    </div>
                    <div class="col-lg-3">
                        <div class="login-content card">
                            <div style="text-align:center" class="login-form"><br>
                                <img  src="<?php echo base_url();?>piadmin/images/logo-text.png" width="180px"><br>
                                <small id="res" class="display-block"></small>
                                <br>
                                <br>
                                <!--<h4 style="text-align:center">Login</h4>-->
                                <form action="<?php echo base_url();?>Balco/Home" method="post">
                                    <div class="form-group">
                                        <!--<label>Email address</label>-->
                                        <input type="text" id="username" name="username" autocomplete="off" placeholder="Username" class="form-control">
                                        <!--<input type="email" class="form-control" name="email" required=""  autocomplete="off" placeholder="Email">-->
                                    </div>
                                    <div class="form-group">
                                        <!--<label>Password</label>-->
                                        <input type="password" id="password" name="Password" autocomplete="off" placeholder="Password"  class="form-control">
                                        <!--<input type="password" class="form-control" name="password" required="" autocomplete="off" placeholder="Password">-->
                                    </div>
                                    <button type="button" name="save" id="loginbtn" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="ti-unlock"></i> Sign in</button>
<!--                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                    </div>-->
                                </form>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
            
    </div>
                <!-- End PAge Content -->
        <!-- All Jquery -->
    <?php include('includes/footer-min.php');?>
     <!-- Styles -->
     <script type="text/javascript">
            $(document).ready(function() {
                 $('#default').click(function(){
                     $('#main-wrapper').css('background-image','url(<?php echo base_url();?>piadmin/images/bg/balco.jpg)')
                 });
                 $('#bg1').click(function(){
                     $('#main-wrapper').css('background-image','url(<?php echo base_url();?>piadmin/images/bg/bg1.jpg)')
                 });
                 $('#theme1').click(function(){
                     $('#main-wrapper').css('background-image','url(<?php echo base_url();?>piadmin/images/bg/img1.jpg)')
                 });
                  $('#theme2').click(function(){
                     $('#main-wrapper').css('background-image','url(<?php echo base_url();?>piadmin/images/bg/b.jpg)')
                 });
                  $('#theme3').click(function(){
                     $('#main-wrapper').css('background-image','url(<?php echo base_url();?>piadmin/images/bg/b1.jpg)')
                 });
                  $('#theme4').click(function(){
                     $('#main-wrapper').css('background-image','url(<?php echo base_url();?>piadmin/images/bg/b2.jpg)')
                 });
                 $('#password').keydown(function(event){    
            if(event.keyCode==13){
               $('#loginbtn').trigger('click');
            }
        });
                $('#loginbtn').click(function(){
                   // alert("hello");
                 $('#res').html("<img style='width:25px;height:25px;'  src='<?php echo base_url();?>piadmin/images/loading.gif'>");
               $username = $('#username').val();
               $password = $('#password').val();
               if($username == '' || $password == '')
               {
                   //alert('Please enter all login details.');
                    $('#res').html("<span style='color:red;text-transform:capitalize;font-size:14px'>Enter login details..!</span>");
                   return false;
               }
//               $(this).attr('disabled','disabled');
               $.post('<?php echo base_url();?>Balco/validateLogin',{ username:$username,password:$password},function(data){
                   //alert(data);
                  if(data==1) 
                  {	
                  	  $('#res').html("<span style='color:green;text-transform:capitalize;font-size:13px'>Login Success..!</span>\n\
              <br><img style='width:25px;height:25px;' src='<?php echo base_url();?>piadmin/images/loading.gif'><br><span style='font-size:12px'>Redirecting.....</span>");
                   
                          window.location="<?php echo base_url();?>";
                  }else{
//                    
                      $('#res').html("<span style='color:red;text-transform:capitalize;font-size:14px'>"+data+"</span>");
                  }
               });
            });
            });
            
        </script>
</body>
</html>