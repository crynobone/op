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

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2>Accomplish more with Orchestra Platform</h2>
                <p class="lead">Built from 28 components that utilize all the best tools available with Laravel and PHP</p>
            </div>
            <div class="row">
                <div class="col-md-4 item media">
                    <div class="media-object pull-left">
                        <img src="img/icon-laravel.svg">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Laravel Framework</h3>
                        <hr>
                        <p>Laravel is simply a great framework to work with, and Orchestra Platform has been developing with Laravel since version 3.2.</p>
                    </div>
                </div>
                <div class="col-md-4 item media">
                    <div class="media-object pull-left">
                        <img src="img/icon-extensions.svg">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Extensions</h3>
                        <hr>
                        <p>Extensions are a much needed improvement to package implementation in Laravel. With one click activation and upgrade (migration and publish).</p>
                    </div>
                </div>
                <div class="col-md-4 item media">
                    <div class="media-object pull-left">
                        <img src="img/icon-database.svg">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Database Based Configuration</h3>
                        <hr>
                        <p>For any extensions are a solid replacement of file based configuration, stop telling your non-technical client to edit PHP file for any simple configuration changes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 item media">
                    <div class="media-object pull-left">
                        <img src="img/icon-resources.svg">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Resources</h3>
                        <hr>
                        <p>Lets you build HMVC implementation on top of Orchestra Platform. Hook your backend application to Orchestra with just simple API.</p>
                    </div>
                </div>
                <div class="col-md-4 item media">
                    <div class="media-object pull-left">
                        <img src="img/icon-acl.svg">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">ACL &amp; User Management</h3>
                        <hr>
                        <p>Lets stop reinventing the wheel and let Orchestra Platform do its magic. If you need something more advanced, there are more than 20 events that you can hook into your own implementation without overwriting Orchestra Platform core file.</p>
                    </div>
                </div>
                <div class="col-md-4 item media">
                    <div class="media-object pull-left">
                        <img src="img/icon-responsive.svg">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Responsive Design</h3>
                        <hr>
                        <p>Accessible everywhere, the default theme is built on top of Twitter Bootstrap latest version so you can always access Orchestra Platform.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Orchestra Platform is an admin panel that handles Laravel extensions and user management. Our curation of Laravel extensions provide the boilerplate for any web application development to ensure a speedy deployment using the best tools available on Laravel.</h3>
                    <blockquote>Extensions are Laravel packages that you can enable and disable at will, similar to how Wordpress plugins behave.</blockquote>
                </div>
            </div>
        </div>
    </section>
    <section id="packages">
        <div class="container">
            <header class="section-header">
                <h4>Orchestra Packages</h4>
                <hr>
            </header>
            <ul class="list-inline package-list">
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/asset">asset</a></h4>
                        <hr>
                        <p>Managing asset (not asset pipeline) but instead mainly handle asset dependency and handle asset injection.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/auth">auth</a></h4>
                        <hr>
                        <p>Authentication and Authorization using Role/Resource based ACL.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/avatar">avatar</a></h4>
                        <hr>
                        <p>Driver based avatar support for your Laravel, PHP or Orchestra Platform application.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/config">config</a></h4>
                        <hr>
                        <p>Configuration packages that support environment based and packages config.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/kernel">contracts</a></h4>
                        <hr>
                        <p>Interface Collections for Orchestra Platform.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item extension required">
                        <h4>/<a href="https://github.com/orchestral/control">control</a></h4>
                        <hr>
                        <p>Official Administration Add-on Extension for Orchestra Platform.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/debug">debug</a></h4>
                        <hr>
                        <p>Debugging and some profilling tool.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component core required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/extension">extension</a></h4>
                        <hr>
                        <p>Handling extension (plugins) for Orchestra Platform.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component core optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/facile">facile</a></h4>
                        <hr>
                        <p>Handling unified responses as either HTML (view), JSON, CSV.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component core required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/foundation">foundation</a></h4>
                        <hr>
                        <p>The core administration panel that map all other packages together.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/html">html</a></h4>
                        <hr>
                        <p>HTML, Form, Table generator which you can inject additional items from extensions.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/imagine">imagine</a></h4>
                        <hr>
                        <p>Image manipulation library integration for Laravel.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item extension core optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/installer">installer</a></h4>
                        <hr>
                        <p>Orchestra Platform Installation.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component core required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/kernel">kernel</a></h4>
                        <hr>
                        <p>Core improvements of Laravel.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/memory">memory</a></h4>
                        <hr>
                        <p>DB configuration that knows your enabled extension, current theme, ACL metrics.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/messages">messages</a></h4>
                        <hr>
                        <p>Notification (flash messages).</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/model">model</a></h4>
                        <hr>
                        <p>Model for Orchestra Platform usage (users, roles with some observers for ACL usage).</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/notifier">notifier</a></h4>
                        <hr>
                        <p>Email Notification for Orchestra Platform.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component core required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/optimize">optimize</a></h4>
                        <hr>
                        <p>Engine to compile most of reusable Orchestra Platform classes.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/parser">parser</a></h4>
                        <hr>
                        <p>Framework agnostic package that provide a simple way to parse XML to array without having to write a complex logic.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/publisher">publisher</a></h4>
                        <hr>
                        <p>Handle migration and asset publishing for extension.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/resources">resources</a></h4>
                        <hr>
                        <p>CRUD routing for extensions, useful for distributed extension.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item extension optional">
                        <h4>/<a href="https://github.com/orchestral/story">story</a></h4>
                        <hr>
                        <p>Content Management System for Orchestra Platform.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/tenanti">tenanti</a></h4>
                        <hr>
                        <p>Multi-tenant Database Schema Manager for Laravel.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/testbench">testbench</a></h4>
                        <hr>
                        <p>Simple package that is supposed to help you write tests for your Laravel package, especially when there is routing involved.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component core required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/testing">testing</a></h4>
                        <hr>
                        <p>Testing helper to help you write tests for Orchestra Platform, built on top of Testbench.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component core optional">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/theme-installer">theme-installer</a></h4>
                        <hr>
                        <p>Theme Installer for Orchestra Platform using Composer</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/translation">translation</a></h4>
                        <hr>
                        <p>Alternative approach to handle package localization files from external sources.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/support">support</a></h4>
                        <hr>
                        <p>Support Component is basically a basic set of class required by Orchestra Platform.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/view">view</a></h4>
                        <hr>
                        <p>Handle theming for Orchestra Platform and Laravel.</p>
                    </div>
                </li>
                                        <li>
                    <div class="item component package required">
                        <h4>/<a href="http://orchestraplatform.com/docs/latest/components/widget">widget</a></h4>
                        <hr>
                        <p>Handle menu and placeholder.</p>
                    </div>
                </li>
                        </ul>
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
                                <img src="img/icon-github.svg"><br>Github
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
