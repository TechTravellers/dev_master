<!--Facebook SDK-->
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: 'your-app-id',
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v3.0'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header>
    <div class="top-bar_sub_w3layouts container-fluid">
        <div class="row">
            <div class="col-md-4 logo text-left">
                <a class="navbar-brand" href="index">
                    <i class="fab fa-linode"></i> TECHTRAVELLERS</a>
            </div>
            <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
                <?php if (isset($_SESSION['userId'])) { ?>
                    <span>Welcome <?php echo $_SESSION['userId']; ?>!</span>
                    <span>
                        <a href="logout.php" id="logout" name="logout" >
                            <i class="far fa-lock-user"></i> 
                            Logout 
                        </a>
                    </span>
                <?php } else { ?>
                    <span>Welcome Traveler!</span>
                    <span class="mx-lg-4 mx-md-2  mx-1">
                        <a href="login">
                            <i class="fas fa-lock"></i> Sign In</a>
                    </span>
                    <span>
                        <a href="register">
                            <i class="far fa-user"></i> Register</a>
                    </span>
                <?php } ?>

            </div>
            <div class="col-md-4 log-icons text-right">
                <ul class="social_list1 mt-3">
                    <li style="text-align: right">
                        <div class="fb-like" data-href="https://www.facebook.com/TechTravellers2018/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true">
                        </div>
                    </li>
                    <!--<li>
                        <a href="https://www.facebook.com/TechTravellers2018/" class="facebook1 mx-2" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>

    <div class="header_top" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php include 'menu.php'; ?>
                <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
                    <script>
                        (function () {
                            var cx = 'partner-pub-3940737792688252:4178228403';
                            var gcse = document.createElement('script');
                            gcse.type = 'text/javascript';
                            gcse.async = true;
                            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(gcse, s);
                        })();
                    </script>
                    <gcse:searchbox-only></gcse:searchbox-only>
                </form>
            </div>
        </nav>
    </div>
</header>
<!--<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#logout').click(function () {
            window.location.href = 'logout.php';
        });
    });
</script>-->

