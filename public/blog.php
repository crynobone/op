<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orchestra Platform</title>
    <?php include '_header.php'; ?>
</head>
<body id="posts">
    <?php include '_navbar.php'; ?>
<section class="heading">
    <div class="container">
        <h1>
            <a href="blog.php">Blog</a>
            <small>Subscribe to the feed.</small>
        </h1>
    </div>
</section>
<section class="body">
    <div class="container">
        <div class="row">
            <div class="page-sidebar col-sm-2">
                <div class="author">
                    <img src="http://www.gravatar.com/avatar/a9d84e5806ae0f82bbb902d71d6ecd88?s=0" class="avatar img-circle">
                    <strong>Mior Muhammad Zaki</strong>
                    <span>Nov 10, 2014</span>
                </div>
            </div>
            <div class="page-content col-sm-10">
                <div class="col-md-1"></div>
                <div class="post col-md-11">
                    <div class="page-header">
                        <h1 class="title"><a href="http://blog.orchestraplatform.com/2014/11/10/csrf-vulnerability-in-laravel-4-and-orchestra-platform-2">CSRF Vulnerability In Laravel 4 and Orchestra Platform 2</a></h1>
                    </div>
                    <div class="intro">
                        <blockquote>
<p>On November 7th, Chris Smith (@chrismsnz) of Insomnia Security alerted the Laravel development team of a method of bypassing the CSRF verification in Laravel 4 applications.</p>
<p>From: <a href="http://blog.laravel.com/csrf-vulnerability-in-laravel-4/">Laravel Development Blog</a></p>
</blockquote>
<p>To patch your applications, modify the default CSRF route filter in the <code>app/filters.php</code> file to the following:</p>
<pre class="prettyprint prettyprinted"><code class="language-php"><span class="typ">Route</span><span class="pun">::</span><span class="pln">filter</span><span class="pun">(</span><span class="str">'csrf'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Orchestra\Foundation\Filters\VerifyCsrfToken'</span><span class="pun">);</span></code></pre>
<blockquote>
<p>Note that the token comparison has been changed from a != comparison to a !== comparison. This will prevent specially crafted JSON requests from bypassing the filter.</p>
</blockquote>
<p>You also need to update to <code>orchestra/foundation</code> version <code>v2.1.14</code> or <code>v2.2.8</code> to receive the security fixes for CSRF on the administration/backend interface.</p>
<p><strong>If you are using the CSRF protection feature of Laravel/Orchestra Platform, it is recommended that you apply this patch immediately.</strong></p>
                    </div>
                    <div class="pull-right">
                        <a href="http://blog.orchestraplatform.com/2014/11/10/csrf-vulnerability-in-laravel-4-and-orchestra-platform-2" class="continue-reading btn btn-link"><i class="fa fa-chevron-circle-right"></i> Continue reading this post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    <?php include '_footer.php'; ?>
</body>
</html>
