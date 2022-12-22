<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Documentation_0"></a>Documentation</h1>
<h2 class="code-line" data-line-start=1 data-line-end=2 ><a id="_PublicApi__1"></a><em>PublicApi</em></h2>

<center><p class="has-line-data" data-line-start="4" data-line-end="5"><img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&amp;logo=laravel&amp;logoColor=white" alt="Laravel"> <img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&amp;logo=postman&amp;logoColor=white" alt="Postman"> <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&amp;logo=php&amp;logoColor=white" alt="PHP"></p></center>
<ul>
<li class="has-line-data" data-line-start="7" data-line-end="8">Version 1.0</li>
<li class="has-line-data" data-line-start="8" data-line-end="9">Author Rohidtzz</li>
<li class="has-line-data" data-line-start="9" data-line-end="10">Created 20 Desember, 2022</li>
<li class="has-line-data" data-line-start="10" data-line-end="12">Update: 21 Desember, 2022</li>
</ul>
<h1 class="code-line" data-line-start=12 data-line-end=13 ><a id="Getting_Started_12"></a>Getting Started</h1>
<h2 class="code-line" data-line-start=14 data-line-end=15 ><a id="Register_14"></a>Register</h2>
<h4 class="code-line" data-line-start=16 data-line-end=17 ><a id="EndPoint_16"></a>EndPoint</h4>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Method</th>
<th>URL</th>
</tr>
</thead>
<tbody>
<tr>
<td>GET</td>
<td><a href="https://publicapi.hidtzz.my.id/api/register">https://publicapi.hidtzz.my.id/api/register</a></td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=21 data-line-end=22 ><a id="Header_21"></a>Header</h4>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Key</th>
<th>Value</th>
<th>Keterangan</th>
</tr>
</thead>
<tbody>
<tr>
<td>Authorization</td>
<td>{api_key}</td>
<td>Ganti {api_key} dengan API Key anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=26 data-line-end=27 ><a id="Body_26"></a>Body</h4>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Parameter</th>
<th>Tipe</th>
<th>Contoh nilai</th>
<th>Wajib</th>
<th>Keterangan</th>
</tr>
</thead>
<tbody>
<tr>
<td>Username</td>
<td>String</td>
<td>Hitdzz</td>
<td>Ya</td>
<td>Isi dengan username anda</td>
</tr>
<tr>
<td>Password</td>
<td>String</td>
<td>password</td>
<td>Ya</td>
<td>Isi dengan password anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=32 data-line-end=33 ><a id="Contoh_Request_32"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="33" data-line-end="34">PHP</p>
<pre><code class="has-line-data" data-line-start="35" data-line-end="63" class="language-sh"><span class="hljs-variable">$apiKey</span>= <span class="hljs-string">''</span>;

<span class="hljs-variable">$data</span> =[
    <span class="hljs-string">'username'</span> =&gt; <span class="hljs-string">'asdasdasd'</span>,
    <span class="hljs-string">'password'</span> =&gt; <span class="hljs-string">'asdasd'</span>
];

<span class="hljs-variable">$curl</span> = curl_init();

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/register'</span>,
    CURLOPT_RETURNTRANSFER =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_HEADER         =&gt; <span class="hljs-literal">false</span>,
    CURLOPT_FAILONERROR    =&gt; <span class="hljs-literal">false</span>,
    CURLOPT_POST           =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_POSTFIELDS     =&gt; http_build_query(<span class="hljs-variable">$data</span>),
    CURLOPT_IPRESOLVE      =&gt; CURL_IPRESOLVE_V4
]);

<span class="hljs-variable">$response</span> = curl_<span class="hljs-built_in">exec</span>(<span class="hljs-variable">$curl</span>);
<span class="hljs-variable">$error</span> = curl_error(<span class="hljs-variable">$curl</span>);

curl_close(<span class="hljs-variable">$curl</span>);

<span class="hljs-built_in">echo</span> empty(<span class="hljs-variable">$error</span>) ? <span class="hljs-variable">$response</span> : <span class="hljs-variable">$error</span>;

</code></pre>
<h3 class="code-line" data-line-start=64 data-line-end=65 ><a id="Response_64"></a>Response</h3>
<p class="has-line-data" data-line-start="66" data-line-end="67">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="69" data-line-end="75" class="language-sh">{
    <span class="hljs-string">"status"</span>:<span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>:<span class="hljs-string">"register success"</span>,
    <span class="hljs-string">"role"</span>:<span class="hljs-string">"user"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="76" data-line-end="77">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="78" data-line-end="83" class="language-sh">{
    <span class="hljs-string">"status"</span>:<span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>:<span class="hljs-string">"invalid token"</span>,
}
</code></pre>
<h2 class="code-line" data-line-start=84 data-line-end=85 ><a id="Login_84"></a>Login</h2>
<h4 class="code-line" data-line-start=86 data-line-end=87 ><a id="EndPoint_86"></a>EndPoint</h4>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Method</th>
<th>URL</th>
</tr>
</thead>
<tbody>
<tr>
<td>POST</td>
<td><a href="https://publicapi.hidtzz.my.id/api/login">https://publicapi.hidtzz.my.id/api/login</a></td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=93 data-line-end=94 ><a id="Body_93"></a>Body</h4>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Parameter</th>
<th>Tipe</th>
<th>Contoh nilai</th>
<th>Wajib</th>
<th>Keterangan</th>
</tr>
</thead>
<tbody>
<tr>
<td>Username</td>
<td>String</td>
<td>Hitdzz</td>
<td>Ya</td>
<td>Isi dengan username anda</td>
</tr>
<tr>
<td>Password</td>
<td>String</td>
<td>password</td>
<td>Ya</td>
<td>Isi dengan password anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=99 data-line-end=100 ><a id="Contoh_Request_99"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="100" data-line-end="101">PHP</p>
<pre><code class="has-line-data" data-line-start="102" data-line-end="130" class="language-sh"><span class="hljs-variable">$apiKey</span>= <span class="hljs-string">''</span>;

<span class="hljs-variable">$data</span> =[
    <span class="hljs-string">'username'</span> =&gt; <span class="hljs-string">'yourusername'</span>,
    <span class="hljs-string">'password'</span> =&gt; <span class="hljs-string">'yourpassword'</span>
];

<span class="hljs-variable">$curl</span> = curl_init();

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/login'</span>,
    CURLOPT_RETURNTRANSFER =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_HEADER         =&gt; <span class="hljs-literal">false</span>,
    CURLOPT_FAILONERROR    =&gt; <span class="hljs-literal">false</span>,
    CURLOPT_POST           =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_POSTFIELDS     =&gt; http_build_query(<span class="hljs-variable">$data</span>),
    CURLOPT_IPRESOLVE      =&gt; CURL_IPRESOLVE_V4
]);

<span class="hljs-variable">$response</span> = curl_<span class="hljs-built_in">exec</span>(<span class="hljs-variable">$curl</span>);
<span class="hljs-variable">$error</span> = curl_error(<span class="hljs-variable">$curl</span>);

curl_close(<span class="hljs-variable">$curl</span>);

<span class="hljs-built_in">echo</span> empty(<span class="hljs-variable">$error</span>) ? <span class="hljs-variable">$response</span> : <span class="hljs-variable">$error</span>;

</code></pre>
<h3 class="code-line" data-line-start=131 data-line-end=132 ><a id="Response_131"></a>Response</h3>
<p class="has-line-data" data-line-start="133" data-line-end="134">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="136" data-line-end="142" class="language-sh">{
    <span class="hljs-string">"token"</span>:<span class="hljs-string">"<span class="hljs-variable">$10</span><span class="hljs-variable">$GI6g03Ndtv4THRvQnpo1HO5dX4gYhJ</span>"</span>,
    <span class="hljs-string">"role"</span>:<span class="hljs-string">"admin"</span>
    
}
</code></pre>
<p class="has-line-data" data-line-start="143" data-line-end="144">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="145" data-line-end="150" class="language-sh">{
    <span class="hljs-string">"status"</span>:<span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>:<span class="hljs-string">"Username atau passowrd Salah"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="154" data-line-end="157">Markdown is a lightweight markup language based on the formatting conventions<br>
that people naturally use in email.<br>
As <a href="http://daringfireball.net">John Gruber</a> writes on the <a href="http://daringfireball.net/projects/markdown/">Markdown site</a></p>
<blockquote>
<p class="has-line-data" data-line-start="158" data-line-end="165">The overriding design goal for Markdown’s<br>
formatting syntax is to make it as readable<br>
as possible. The idea is that a<br>
Markdown-formatted document should be<br>
publishable as-is, as plain text, without<br>
looking like it’s been marked up with tags<br>
or formatting instructions.</p>
</blockquote>
<p class="has-line-data" data-line-start="166" data-line-end="169">This text you see here is *actually- written in Markdown! To get a feel<br>
for Markdown’s syntax, type some text into the left window and<br>
watch the results in the right.</p>
<h2 class="code-line" data-line-start=170 data-line-end=171 ><a id="Tech_170"></a>Tech</h2>
<p class="has-line-data" data-line-start="172" data-line-end="173">Dillinger uses a number of open source projects to work properly:</p>
<ul>
<li class="has-line-data" data-line-start="174" data-line-end="175"><a href="http://angularjs.org">AngularJS</a> - HTML enhanced for web apps!</li>
<li class="has-line-data" data-line-start="175" data-line-end="176"><a href="http://ace.ajax.org">Ace Editor</a> - awesome web-based text editor</li>
<li class="has-line-data" data-line-start="176" data-line-end="177"><a href="https://github.com/markdown-it/markdown-it">markdown-it</a> - Markdown parser done right. Fast and easy to extend.</li>
<li class="has-line-data" data-line-start="177" data-line-end="178"><a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> - great UI boilerplate for modern web apps</li>
<li class="has-line-data" data-line-start="178" data-line-end="179"><a href="http://nodejs.org">node.js</a> - evented I/O for the backend</li>
<li class="has-line-data" data-line-start="179" data-line-end="180"><a href="http://expressjs.com">Express</a> - fast node.js network app framework <a href="http://twitter.com/tjholowaychuk">@tjholowaychuk</a></li>
<li class="has-line-data" data-line-start="180" data-line-end="181"><a href="http://gulpjs.com">Gulp</a> - the streaming build system</li>
<li class="has-line-data" data-line-start="181" data-line-end="183"><a href="https://breakdance.github.io/breakdance/">Breakdance</a> - HTML<br>
to Markdown converter</li>
<li class="has-line-data" data-line-start="183" data-line-end="185"><a href="http://jquery.com">jQuery</a> - duh</li>
</ul>
<p class="has-line-data" data-line-start="185" data-line-end="187">And of course Dillinger itself is open source with a <a href="https://github.com/joemccann/dillinger">public repository</a><br>
on GitHub.</p>
<h2 class="code-line" data-line-start=188 data-line-end=189 ><a id="Installation_188"></a>Installation</h2>
<p class="has-line-data" data-line-start="190" data-line-end="191">Dillinger requires <a href="https://nodejs.org/">Node.js</a> v10+ to run.</p>
<p class="has-line-data" data-line-start="192" data-line-end="193">Install the dependencies and devDependencies and start the server.</p>
<pre><code class="has-line-data" data-line-start="195" data-line-end="199" class="language-sh"><span class="hljs-built_in">cd</span> dillinger
npm i
node app
</code></pre>
<p class="has-line-data" data-line-start="200" data-line-end="201">For production environments…</p>
<pre><code class="has-line-data" data-line-start="203" data-line-end="206" class="language-sh">npm install --production
NODE_ENV=production node app
</code></pre>
<h2 class="code-line" data-line-start=207 data-line-end=208 ><a id="Plugins_207"></a>Plugins</h2>
<p class="has-line-data" data-line-start="209" data-line-end="211">Dillinger is currently extended with the following plugins.<br>
Instructions on how to use them in your own application are linked below.</p>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Plugin</th>
<th>README</th>
</tr>
</thead>
<tbody>
<tr>
<td>Dropbox</td>
<td><a href="https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md">plugins/dropbox/README.md</a></td>
</tr>
<tr>
<td>GitHub</td>
<td><a href="https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md">plugins/github/README.md</a></td>
</tr>
<tr>
<td>Google Drive</td>
<td><a href="https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md">plugins/googledrive/README.md</a></td>
</tr>
<tr>
<td>OneDrive</td>
<td><a href="https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md">plugins/onedrive/README.md</a></td>
</tr>
<tr>
<td>Medium</td>
<td><a href="https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md">plugins/medium/README.md</a></td>
</tr>
<tr>
<td>Google Analytics</td>
<td><a href="https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md">plugins/googleanalytics/README.md</a></td>
</tr>
</tbody>
</table>
<h2 class="code-line" data-line-start=221 data-line-end=222 ><a id="Development_221"></a>Development</h2>
<p class="has-line-data" data-line-start="223" data-line-end="224">Want to contribute? Great!</p>
<p class="has-line-data" data-line-start="225" data-line-end="227">Dillinger uses Gulp + Webpack for fast developing.<br>
Make a change in your file and instantaneously see your updates!</p>
<p class="has-line-data" data-line-start="228" data-line-end="229">Open your favorite Terminal and run these commands.</p>
<p class="has-line-data" data-line-start="230" data-line-end="231">First Tab:</p>
<pre><code class="has-line-data" data-line-start="233" data-line-end="235" class="language-sh">node app
</code></pre>
<p class="has-line-data" data-line-start="236" data-line-end="237">Second Tab:</p>
<pre><code class="has-line-data" data-line-start="239" data-line-end="241" class="language-sh">gulp watch
</code></pre>
<p class="has-line-data" data-line-start="242" data-line-end="243">(optional) Third:</p>
<pre><code class="has-line-data" data-line-start="245" data-line-end="247" class="language-sh">karma <span class="hljs-built_in">test</span>
</code></pre>
<h4 class="code-line" data-line-start=248 data-line-end=249 ><a id="Building_for_source_248"></a>Building for source</h4>
<p class="has-line-data" data-line-start="250" data-line-end="251">For production release:</p>
<pre><code class="has-line-data" data-line-start="253" data-line-end="255" class="language-sh">gulp build --prod
</code></pre>
<p class="has-line-data" data-line-start="256" data-line-end="257">Generating pre-built zip archives for distribution:</p>
<pre><code class="has-line-data" data-line-start="259" data-line-end="261" class="language-sh">gulp build dist --prod
</code></pre>
<h2 class="code-line" data-line-start=262 data-line-end=263 ><a id="Docker_262"></a>Docker</h2>
<p class="has-line-data" data-line-start="264" data-line-end="265">Dillinger is very easy to install and deploy in a Docker container.</p>
<p class="has-line-data" data-line-start="266" data-line-end="269">By default, the Docker will expose port 8080, so change this within the<br>
Dockerfile if necessary. When ready, simply use the Dockerfile to<br>
build the image.</p>
<pre><code class="has-line-data" data-line-start="271" data-line-end="274" class="language-sh"><span class="hljs-built_in">cd</span> dillinger
docker build -t &lt;youruser&gt;/dillinger:<span class="hljs-variable">${package.json.version}</span> .
</code></pre>
<p class="has-line-data" data-line-start="275" data-line-end="278">This will create the dillinger image and pull in the necessary dependencies.<br>
Be sure to swap out <code>${package.json.version}</code> with the actual<br>
version of Dillinger.</p>
<p class="has-line-data" data-line-start="279" data-line-end="282">Once done, run the Docker image and map the port to whatever you wish on<br>
your host. In this example, we simply map port 8000 of the host to<br>
port 8080 of the Docker (or whatever port was exposed in the Dockerfile):</p>
<pre><code class="has-line-data" data-line-start="284" data-line-end="286" class="language-sh">docker run <span class="hljs-operator">-d</span> -p <span class="hljs-number">8000</span>:<span class="hljs-number">8080</span> --restart=always --cap-add=SYS_ADMIN --name=dillinger &lt;youruser&gt;/dillinger:<span class="hljs-variable">${package.json.version}</span>
</code></pre>
<blockquote>
<p class="has-line-data" data-line-start="287" data-line-end="288">Note: <code>--capt-add=SYS-ADMIN</code> is required for PDF rendering.</p>
</blockquote>
<p class="has-line-data" data-line-start="289" data-line-end="291">Verify the deployment by navigating to your server address in<br>
your preferred browser.</p>
<pre><code class="has-line-data" data-line-start="293" data-line-end="295" class="language-sh"><span class="hljs-number">127.0</span>.<span class="hljs-number">0.1</span>:<span class="hljs-number">8000</span>
</code></pre>
<h2 class="code-line" data-line-start=296 data-line-end=297 ><a id="License_296"></a>License</h2>
<p class="has-line-data" data-line-start="298" data-line-end="299">MIT</p>
<p class="has-line-data" data-line-start="300" data-line-end="301"><strong>Free Software, Hell Yeah!</strong></p>

<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   P u b l i c A p i 
 
  -->
