<!DOCTYPE html>
<html lang="en">

<head>
	<title>Orchestra Platform</title>
    <?php include '_header.php'; ?>
</head>
<body id="landing">
    <?php include '_navbar.php'; ?>

    <section id="hero" class="introduction text-center">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h1><span>Orchestra Platform</span> provide all the boilerplate for your application, so you can create awesomeness.</h1>
                <pre><code>composer create-project orchestra/platform website '3.0.x'</code></pre>
            </div>
        </div>
        <div class="hidden-xs">
            <img src="img/chrome@2x.png" width="956">
        </div>
    </section>

    <section id="social">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <header class="section-header">
                        <h4>Don't Miss Updates</h4>
                        <hr>
                    </header>
                    <ul class="list-inline social-list">
                        <li class="github">
                            <a href="https://github.com/orchestral" target="_blank">
                                <img src="http://orchestraplatform.com/resources/img/icon-github.svg"><br>Github
                            </a>
                        </li>
                        <li class="facebook">
                            <a href="https://www.facebook.com/groups/orchestraplatform" target="_blank">
                                <img src="http://orchestraplatform.com/resources/img/icon-facebook.svg"><br>Facebook
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/getorchestra" target="_blank">
                                <img src="http://orchestraplatform.com/resources/img/icon-twitter.svg"><br>Twitter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include '_footer.php'; ?>
</body>
</html>
