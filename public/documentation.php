<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orchestra Platform</title>
    <?php include '_header.php'; ?>
</head>
<body id="documentation">
    <?php include '_navbar.php'; ?>
<section class="heading">
    <div class="container">
        <h1>3.0 Documentation</h1>
    </div>
</section>
<section class="body">
    <div class="container">
        <div class="page-sidebar col-md-3">
            <h3>Platform</h3>
<ul>
<li>Preface
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0">Introduction</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/changes">Change Log</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/contributing">Contributing</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/upgrading">Upgrading</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/troubleshoot">Troubleshooting</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/license">License</a></li>
</ul></li>
<li>Setup
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/installation">Installation</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/configuration">Configuration</a></li>
</ul></li>
<li>The Basics
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/helpers">Helpers</a></li>
</ul></li>
<li>Architecture Foundations
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/contracts">Contracts</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/facades">Facades</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/events">Events</a></li>
</ul></li>
<li>Services
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/mail">Sending Mail</a></li>
</ul></li>
</ul>
<h3>Core Components</h3>
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/components/asset">Asset</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/auth">Auth</a>
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/components/authorization">Authorization</a></li>
</ul></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/extension">Extension</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/foundation">Foundation</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/html">HTML</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/kernel">Kernel</a>
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/components/config">Config</a></li>
<li>Contracts</li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/database">Database</a></li>
<li>HTTP</li>
<li>Routing</li>
</ul></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/memory">Memory</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/messages">Messages</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/model">Model</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/notifier">Notifier</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/publisher">Publisher</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/support">Support</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/translation">Translation</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/view">View</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/widget">Widget</a></li>
</ul>
<h3>Optional Components</h3>
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/components/avatar">Avatar</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/debug">Debug</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/facile">Facile</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/imagine">Imagine</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/installer">Installer</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/parser">Parser</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/resources">Resources</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/testbench">Testbench</a></li>
</ul>
        </div>
        <div class="page-content col-md-9">
            <div class="col-md-1">
            </div>
            <div class="col-md-11">
                <div class="page-header">
                    <h1>Introduction</h1>
                </div>
                <ol>
<li><a href="#what">What is Orchestra Platform?</a></li>
<li><a href="#what-different">What Makes Orchestra Platform Different?</a></li>
<li><a href="#illuminate">Illuminating Orchestra Platform</a></li>
<li><a href="#version-compatibility">Version Compatibility</a></li>
</ol>
<h2 id="what">What is Orchestra Platform?</h2>
<p>Provide a solid base off of which to build your new web applications. It's not a CMS. Instead, it's a springboard to build off of with many of the tools you wish you had on projects but never took the time to build.</p>
<p>Have you had a client that wanted you to create a custom application but at the same time they're also looking to have a robust Content Management System within that same application? If you answered yes, what are your options?</p>
<ul>
<li>To build the application on top of WordPress (or other CMS system that you're familiar with).</li>
<li>To build the application using your favourite language and framework while also integrating your own custom-built CMS components in it hoping that it's easy for your clients to use (just like how they were to use WordPress easily!)</li>
<li>Or try to integrate both (which you know would be a bad idea from the start).</li>
</ul>
<p>Orchestra Platform will solve this problem by creating a similar Administration Panel as you would see in WordPress <em>wp-admin</em>, so you can continue writing awesome code in Laravel but at the same time have CMS components ready at your disposal.</p>
<h2 id="what-different">What Makes Orchestra Platform Different?</h2>
<ul>
<li><strong>Laravel Framework 5</strong> is simply a great framework to work with.</li>
<li><strong>Extensions</strong> are a much needed improvement to package implementation in Laravel. With one click activation and upgrade (migration and publish).</li>
<li><strong>Database Based Configuration</strong> for any extensions are a solid replacement of file based configuration, stop telling your non-technical client to edit PHP file for any simple configuration changes.</li>
<li><strong>Resources</strong> lets you build HMVC implementation on top of Orchestra Platform. Hook your backend application to Orchestra with just simple API.</li>
<li><strong>ACL and User Management</strong> are repetitive boilerplate module on every projects, lets stop reinventing the wheel and let Orchestra Platform do its magic. If you need something more advanced, there are more than 20 events that you can hook into your own implementation without overwriting Orchestra Platform core file.</li>
<li><strong>Responsive Design</strong> is always available when you're on mobile.</li>
</ul>
<h2 id="illuminate">Illuminating Orchestra Platform</h2>
<p>With the introduction of Composer, we are now free to organize the code into smaller component where there would be use-case where you can use one or two Orchestra Platform components without everything else. At this moment we have organize the code into following components:</p>
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/components/asset">Asset</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/auth">Auth</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/debug">Debug</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/extension">Extension</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/kernel">Kernel</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/foundation">Foundation</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/html">Html</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/memory">Memory</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/messages">Messages</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/model">Model</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/notifier">Notifier</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/optimize">Optimize</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/publisher">Publisher</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/support">Support</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/translation">Translation</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/view">View</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/widget">Widget</a></li>
</ul>
<p>We also have some independence packages that would work well with Orchestra Platform, including:</p>
<ul>
<li><a href="http://orchestraplatform.com/docs/3.0/components/avatar">Avatar</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/facile">Facile</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/imagine">Imagine</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/parser">Parser</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/resources">Resources</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/tenanti">Tenanti</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/testbench">Testbench</a></li>
<li><a href="http://orchestraplatform.com/docs/3.0/components/theme-installer">Theme Installer</a></li>
</ul>
<h2 id="version-compatibility">Version Compatibility</h2>
<table>
<thead>
<tr>
<th style="text-align: left;">Laravel</th>
<th style="text-align: left;">Orchestra Platform</th>
<th style="text-align: left;">Status</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align: left;">3.2.x</td>
<td style="text-align: left;">1.x</td>
<td style="text-align: left;">Deprecated</td>
</tr>
<tr>
<td style="text-align: left;">4.0.x</td>
<td style="text-align: left;">2.0.x</td>
<td style="text-align: left;">Deprecated</td>
</tr>
<tr>
<td style="text-align: left;">4.1.x</td>
<td style="text-align: left;">2.1.x</td>
<td style="text-align: left;">LTS</td>
</tr>
<tr>
<td style="text-align: left;">4.2.x</td>
<td style="text-align: left;">2.2.x</td>
<td style="text-align: left;">Supported</td>
</tr>
<tr>
<td style="text-align: left;">5.0.x</td>
<td style="text-align: left;">3.0.x</td>
<td style="text-align: left;">Latest Stable</td>
</tr>
</tbody>
</table>
<h2 id="introduction">Introduction</h2>
<p>All of the configuration files for the Orchestra Platform are stored in the <code>resources/config</code> directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.</p>
<h2 id="admin-url">Setting Admin URL</h2>
<p>Instead of using the default <code>/admin</code> prefix for your administration page, you can configure Orchestra Platform to handled by a different URL, to utilize this feature all you need to do is publish <code>orchestra/foundation</code> configuration using the following command:</p>
<pre><code class="language-bash">php artisan publish:config orchestra/foundation</code></pre>
<h3 id="admin-url-as-prefix">As Prefix</h3>
<p>Edit <code>handles</code> key in <code>resources/config/packages/orchestra/foundation/config.php</code> to (as an example) <code>"sudo"</code>. With this changes Orchestra Platform Administration page while be accessible from <code>/sudo</code>.</p>
<p>You could as well set it to <code>"/"</code> and it would handle the root uri.</p>
<h3 id="admin-url-as-domain">As Domain</h3>
<p>You can also assign a sub-domain to handle Orchestra Platform Administration page by editing the <code>handles</code> value to <code>//admin.{{domain}}</code>. However to do this, please make sure that you have set <code>APP_URL</code> value in <code>.env</code> and use <code>Orchestra\Extension\Traits\DomainAwareTrait</code>.</p>
<pre><code class="language-php">&lt;?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Orchestra\Extension\Traits\DomainAwareTrait;

class AppServiceProvider extends ServiceProvider
{
    use DomainAwareTrait;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this-&gt;registerDomainAwareness();
    }
}</code></pre>
<h2 id="securing">Securing Orchestra Platform</h2>
<h3>Use better session driver</h3>
<p>Orchestra Platform recommends using either Redis, Memcached or APC session driver (or at least database driver). This help making sure we can handle session request without any interruption especially when for handling CSRF.</p>
<h3>Disallow access to <code>.blade.php</code> for themes</h3>
<h4>Apache</h4>
<p>Configuration is included in the default <code>public/.htaccess</code>:</p>
<pre><code># Secure Front Themes...

RewriteRule ^themes/.*\.(blade.php|php)$ - [F,L,NC]</code></pre>
<h4>Nginx</h4>
<p>You can add the following configuration:</p>
<pre><code>location ~ ^/themes/(.*)\.php$ {
    deny all;
}</code></pre>
            </div>
        </div>
    </div>
</section>


    <?php include '_footer.php'; ?>
</body>
</html>
