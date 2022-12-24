<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Documentation_0"></a>Documentation</h1>
<h2 class="code-line" data-line-start=1 data-line-end=2 ><a id="_PublicApi__1"></a><em>PublicApi</em></h2>
<p class="has-line-data" data-line-start="4" data-line-end="5"><img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&amp;logo=laravel&amp;logoColor=white" alt="Laravel"> <img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&amp;logo=postman&amp;logoColor=white" alt="Postman"> <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&amp;logo=php&amp;logoColor=white" alt="PHP"></p>
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
<h4 class="code-line" data-line-start=21 data-line-end=22 ><a id="Body_21"></a>Body</h4>
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
<h4 class="code-line" data-line-start=27 data-line-end=28 ><a id="Contoh_Request_27"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="28" data-line-end="29">PHP</p>
<pre><code class="has-line-data" data-line-start="30" data-line-end="57" class="language-sh">
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
<h3 class="code-line" data-line-start=58 data-line-end=59 ><a id="Response_58"></a>Response</h3>
<p class="has-line-data" data-line-start="60" data-line-end="61">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="63" data-line-end="69" class="language-sh">{
    <span class="hljs-string">"status"</span>:<span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>:<span class="hljs-string">"register success"</span>,
    <span class="hljs-string">"role"</span>:<span class="hljs-string">"user"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="70" data-line-end="71">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="72" data-line-end="77" class="language-sh">{
    <span class="hljs-string">"status"</span>:<span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>:<span class="hljs-string">"invalid token"</span>,
}
</code></pre>
<h2 class="code-line" data-line-start=78 data-line-end=79 ><a id="Login_78"></a>Login</h2>
<h4 class="code-line" data-line-start=80 data-line-end=81 ><a id="EndPoint_80"></a>EndPoint</h4>
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
<h4 class="code-line" data-line-start=87 data-line-end=88 ><a id="Body_87"></a>Body</h4>
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
<h4 class="code-line" data-line-start=93 data-line-end=94 ><a id="Contoh_Request_93"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="94" data-line-end="95">PHP</p>
<pre><code class="has-line-data" data-line-start="96" data-line-end="123" class="language-sh">
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
<h3 class="code-line" data-line-start=124 data-line-end=125 ><a id="Response_124"></a>Response</h3>
<p class="has-line-data" data-line-start="126" data-line-end="127">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="129" data-line-end="135" class="language-sh">{
    <span class="hljs-string">"token"</span>:<span class="hljs-string">"<span class="hljs-variable">$10</span><span class="hljs-variable">$GI6g03Ndtv4THRvQnpo1HO5dX4gYhJ</span>"</span>,
    <span class="hljs-string">"role"</span>:<span class="hljs-string">"admin"</span>
    
}
</code></pre>
<p class="has-line-data" data-line-start="136" data-line-end="137">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="138" data-line-end="143" class="language-sh">{
    <span class="hljs-string">"status"</span>:<span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>:<span class="hljs-string">"Username atau passowrd Salah"</span>
}
</code></pre>
<h2 class="code-line" data-line-start=144 data-line-end=145 ><a id="Books_144"></a>Books</h2>
<h3 class="code-line" data-line-start=146 data-line-end=147 ><a id="Get_all_Books_146"></a>Get all Books</h3>
<h4 class="code-line" data-line-start=148 data-line-end=149 ><a id="EndPoint_148"></a>EndPoint</h4>
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
<td><a href="https://publicapi.hidtzz.my.id/api/books">https://publicapi.hidtzz.my.id/api/books</a></td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=153 data-line-end=154 ><a id="Body_153"></a>Body</h4>
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
<td>Token</td>
<td>String</td>
<td>token</td>
<td>Ya</td>
<td>Isi dengan Token anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=158 data-line-end=159 ><a id="Contoh_Request_158"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="159" data-line-end="160">PHP</p>
<pre><code class="has-line-data" data-line-start="161" data-line-end="180" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;

<span class="hljs-variable">$curl</span> = curl_init();

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books?token='</span>.<span class="hljs-variable">$token</span>,
    CURLOPT_RETURNTRANSFER =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_IPRESOLVE      =&gt; CURL_IPRESOLVE_V4
]);

<span class="hljs-variable">$response</span> = curl_<span class="hljs-built_in">exec</span>(<span class="hljs-variable">$curl</span>);
<span class="hljs-variable">$error</span> = curl_error(<span class="hljs-variable">$curl</span>);

curl_close(<span class="hljs-variable">$curl</span>);

<span class="hljs-built_in">echo</span> empty(<span class="hljs-variable">$error</span>) ? <span class="hljs-variable">$response</span> : <span class="hljs-variable">$error</span>;

</code></pre>
<h3 class="code-line" data-line-start=181 data-line-end=182 ><a id="Response_181"></a>Response</h3>
<p class="has-line-data" data-line-start="183" data-line-end="184">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="186" data-line-end="222" class="language-sh"> <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"data"</span>: [
        {
            <span class="hljs-string">"code"</span>: <span class="hljs-string">"80718"</span>,
            <span class="hljs-string">"title"</span>: <span class="hljs-string">"voluptate dolorum autem"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"Delectus veritatis quis et labore culpa voluptatem minus ut. U
                t ex molestias saepe. Sapiente id tenetur illum."</span>,
            <span class="hljs-string">"author"</span>: <span class="hljs-string">"Gilda Rini Laksmiwati"</span>,
            <span class="hljs-string">"publisher"</span>: <span class="hljs-string">"molestias"</span>,
            <span class="hljs-string">"img"</span>: <span class="hljs-string">"https://via.placeholder.com/640x480.png/00bb00?text=animals+cats
                 +nostrum"</span>
        },
        {
            <span class="hljs-string">"code"</span>: <span class="hljs-string">"33551"</span>,
            <span class="hljs-string">"title"</span>: <span class="hljs-string">"est vel veritatis"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"Nemo veniam est nihil. Doloremque quisquam earum eos quia.
                    Ratione ipsum consequatur aliquam voluptatesmodi reprehenderit 
                    facilis. Id numquam fugit earum quaerat."</span>,
            <span class="hljs-string">"author"</span>: <span class="hljs-string">"Dian Chelsea Hastuti"</span>,
            <span class="hljs-string">"publisher"</span>: <span class="hljs-string">"pariatur"</span>,
            <span class="hljs-string">"img"</span>: <span class="hljs-string">"https://via.placeholder.com/640x480.png/00ccff?text=animals+cats+
                    ratione"</span>
        },
        {
            <span class="hljs-string">"code"</span>: <span class="hljs-string">"9843"</span>,
            <span class="hljs-string">"title"</span>: <span class="hljs-string">"blanditiis suscipit sapiente"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"Ut veritatis atque tempora beatae aspernatur officiis.
            Repudiandae dolor qui ut eligendi suscipit ut aut."</span>,
            <span class="hljs-string">"author"</span>: <span class="hljs-string">"Tari Natalia Wulandari"</span>,
            <span class="hljs-string">"publisher"</span>: <span class="hljs-string">"dicta"</span>,
            <span class="hljs-string">"img"</span>: <span class="hljs-string">"https://via.placeholder.com/640x480.png/005566?text=animals+cats+
                    rerum"</span>
        }
    ]
}
</code></pre>
<p class="has-line-data" data-line-start="223" data-line-end="224">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="226" data-line-end="231" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"Unauthorized Token"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=232 data-line-end=233 ><a id="Find_Books_232"></a>Find Books</h3>
<h4 class="code-line" data-line-start=234 data-line-end=235 ><a id="EndPoint_234"></a>EndPoint</h4>
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
<td><a href="https://publicapi.hidtzz.my.id/api/books/">https://publicapi.hidtzz.my.id/api/books/</a></td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=239 data-line-end=240 ><a id="Body_239"></a>Body</h4>
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
<td>Token</td>
<td>String</td>
<td>token</td>
<td>Ya</td>
<td>Isi dengan Token anda</td>
</tr>
<tr>
<td>code</td>
<td>Integer</td>
<td>1284</td>
<td>Ya</td>
<td>Isi dengan Code buku</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=245 data-line-end=246 ><a id="Contoh_Request_245"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="246" data-line-end="247">PHP</p>
<pre><code class="has-line-data" data-line-start="248" data-line-end="270" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;
<span class="hljs-variable">$code</span> = <span class="hljs-string">'code_buku'</span>;



<span class="hljs-variable">$curl</span> = curl_init();

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/'</span>.<span class="hljs-variable">$code</span>.<span class="hljs-string">'?token='</span>.<span class="hljs-variable">$token</span>,
    CURLOPT_RETURNTRANSFER =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_IPRESOLVE      =&gt; CURL_IPRESOLVE_V4
]);

<span class="hljs-variable">$response</span> = curl_<span class="hljs-built_in">exec</span>(<span class="hljs-variable">$curl</span>);
<span class="hljs-variable">$error</span> = curl_error(<span class="hljs-variable">$curl</span>);

curl_close(<span class="hljs-variable">$curl</span>);

<span class="hljs-built_in">echo</span> empty(<span class="hljs-variable">$error</span>) ? <span class="hljs-variable">$response</span> : <span class="hljs-variable">$error</span>;

</code></pre>
<h3 class="code-line" data-line-start=271 data-line-end=272 ><a id="Response_271"></a>Response</h3>
<p class="has-line-data" data-line-start="273" data-line-end="274">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="276" data-line-end="291" class="language-sh"> <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"data"</span>: [
        {
            <span class="hljs-string">"code"</span>: <span class="hljs-string">"80718"</span>,
            <span class="hljs-string">"title"</span>: <span class="hljs-string">"voluptate dolorum autem"</span>,
            <span class="hljs-string">"description"</span>: <span class="hljs-string">"Delectus veritatis quis et labore culpa voluptatem minus ut. U
                t ex molestias saepe. Sapiente id tenetur illum."</span>,
            <span class="hljs-string">"author"</span>: <span class="hljs-string">"Gilda Rini Laksmiwati"</span>,
            <span class="hljs-string">"publisher"</span>: <span class="hljs-string">"molestias"</span>,
            <span class="hljs-string">"img"</span>: <span class="hljs-string">"https://via.placeholder.com/640x480.png/00bb00?text=animals+cats
                 +nostrum"</span>
        }
    ]
}
</code></pre>
<p class="has-line-data" data-line-start="292" data-line-end="293">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="295" data-line-end="300" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"code invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=301 data-line-end=302 ><a id="Store_Books_301"></a>Store Books</h3>
<h4 class="code-line" data-line-start=303 data-line-end=304 ><a id="EndPoint_303"></a>EndPoint</h4>
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
<td><a href="https://publicapi.hidtzz.my.id/api/books/store">https://publicapi.hidtzz.my.id/api/books/store</a></td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=308 data-line-end=309 ><a id="Body_308"></a>Body</h4>
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
<td>Token</td>
<td>String</td>
<td>token</td>
<td>Ya</td>
<td>Isi dengan Token anda</td>
</tr>
<tr>
<td>code</td>
<td>Integer</td>
<td>7247</td>
<td>Ya</td>
<td>Isi dengan Code buku</td>
</tr>
<tr>
<td>title</td>
<td>String</td>
<td>Sikancil</td>
<td>Ya</td>
<td>Isi dengan Title buku</td>
</tr>
<tr>
<td>description</td>
<td>String</td>
<td>Buku ini sangat menarik</td>
<td>Ya</td>
<td>Isi dengan Description buku</td>
</tr>
<tr>
<td>author</td>
<td>String</td>
<td>rohid</td>
<td>Ya</td>
<td>Isi dengan Atuhor buku</td>
</tr>
<tr>
<td>publisher</td>
<td>String</td>
<td>sinarmas</td>
<td>Ya</td>
<td>Isi dengan Publisher buku</td>
</tr>
<tr>
<td>img</td>
<td>File</td>
<td>sinarmas</td>
<td>Ya</td>
<td>Isi dengan file gambar buku</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=319 data-line-end=320 ><a id="Contoh_Request_319"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="320" data-line-end="321">LARAVEL GUZZLE</p>
<pre><code class="has-line-data" data-line-start="322" data-line-end="365" class="language-sh"><span class="hljs-variable">$client</span> = new Client();
<span class="hljs-variable">$token</span> = <span class="hljs-string">"token anda"</span>;

<span class="hljs-variable">$file_img</span> = <span class="hljs-variable">$request</span>-&gt;file(<span class="hljs-string">'img'</span>);
<span class="hljs-variable">$image_path</span> =<span class="hljs-variable">$file_img</span>-&gt;getpathname();
<span class="hljs-variable">$image_mime</span> =<span class="hljs-variable">$file_img</span>-&gt;getmimetype();
<span class="hljs-variable">$image_org</span>  =<span class="hljs-variable">$file_img</span>-&gt;getClientOriginalName();

<span class="hljs-variable">$response</span> = <span class="hljs-variable">$client</span>-&gt;request(<span class="hljs-string">'POST'</span>, <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/store?token='</span>.<span class="hljs-variable">$token</span>, [
    <span class="hljs-string">'multipart'</span> =&gt; [
        [
            <span class="hljs-string">'name'</span>     =&gt; <span class="hljs-string">'img'</span>,
            <span class="hljs-string">'filename'</span> =&gt; <span class="hljs-variable">$image_org</span>,
            <span class="hljs-string">'Mime-Type'</span>=&gt; <span class="hljs-variable">$image_mime</span>,
            <span class="hljs-string">'contents'</span> =&gt; fopen( <span class="hljs-variable">$image_path</span>, <span class="hljs-string">'r'</span> ),
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'code'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;code
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'title'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;title
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'description'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;description
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'author'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;author
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'publisher'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;publisher
        ]
        ],
        <span class="hljs-string">'http_errors'</span>=&gt;<span class="hljs-literal">false</span>,
]);

<span class="hljs-variable">$responseBody</span> = json_decode(<span class="hljs-variable">$response</span>-&gt;getBody());

</code></pre>
<h3 class="code-line" data-line-start=365 data-line-end=366 ><a id="Response_365"></a>Response</h3>
<p class="has-line-data" data-line-start="367" data-line-end="368">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="370" data-line-end="375" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data stored"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="376" data-line-end="377">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="379" data-line-end="384" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=385 data-line-end=386 ><a id="Update_Books_385"></a>Update Books</h3>
<h4 class="code-line" data-line-start=387 data-line-end=388 ><a id="EndPoint_387"></a>EndPoint</h4>
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
<td><a href="https://publicapi.hidtzz.my.id/api/books/update">https://publicapi.hidtzz.my.id/api/books/update</a></td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=392 data-line-end=393 ><a id="Body_392"></a>Body</h4>
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
<td>Token</td>
<td>String</td>
<td>token</td>
<td>Ya</td>
<td>Isi dengan Token anda</td>
</tr>
<tr>
<td>code</td>
<td>Integer</td>
<td>7247</td>
<td>Ya</td>
<td>Isi dengan Code buku</td>
</tr>
<tr>
<td>title</td>
<td>String</td>
<td>Sikancil</td>
<td>Ya</td>
<td>Isi dengan Title buku</td>
</tr>
<tr>
<td>description</td>
<td>String</td>
<td>Buku ini sangat menarik</td>
<td>Ya</td>
<td>Isi dengan Description buku</td>
</tr>
<tr>
<td>author</td>
<td>String</td>
<td>rohid</td>
<td>Ya</td>
<td>Isi dengan Atuhor buku</td>
</tr>
<tr>
<td>publisher</td>
<td>String</td>
<td>sinarmas</td>
<td>Ya</td>
<td>Isi dengan Publisher buku</td>
</tr>
<tr>
<td>img</td>
<td>File</td>
<td>sinarmas</td>
<td>Ya/Tidak</td>
<td>Isi dengan file gambar buku</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=403 data-line-end=404 ><a id="Contoh_Request_403"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="404" data-line-end="405">LARAVEL GUZZLE</p>
<pre><code class="has-line-data" data-line-start="406" data-line-end="449" class="language-sh"><span class="hljs-variable">$client</span> = new Client();
<span class="hljs-variable">$token</span> = <span class="hljs-string">"token anda"</span>;

<span class="hljs-variable">$file_img</span> = <span class="hljs-variable">$request</span>-&gt;file(<span class="hljs-string">'img'</span>);
<span class="hljs-variable">$image_path</span> =<span class="hljs-variable">$file_img</span>-&gt;getpathname();
<span class="hljs-variable">$image_mime</span> =<span class="hljs-variable">$file_img</span>-&gt;getmimetype();
<span class="hljs-variable">$image_org</span>  =<span class="hljs-variable">$file_img</span>-&gt;getClientOriginalName();

<span class="hljs-variable">$response</span> = <span class="hljs-variable">$client</span>-&gt;request(<span class="hljs-string">'POST'</span>, <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/update?token='</span>.<span class="hljs-variable">$token</span>, [
    <span class="hljs-string">'multipart'</span> =&gt; [
        [
            <span class="hljs-string">'name'</span>     =&gt; <span class="hljs-string">'img'</span>,
            <span class="hljs-string">'filename'</span> =&gt; <span class="hljs-variable">$image_org</span>,
            <span class="hljs-string">'Mime-Type'</span>=&gt; <span class="hljs-variable">$image_mime</span>,
            <span class="hljs-string">'contents'</span> =&gt; fopen( <span class="hljs-variable">$image_path</span>, <span class="hljs-string">'r'</span> ),
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'code'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;code
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'title'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;title
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'description'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;description
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'author'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;author
        ],
        [
            <span class="hljs-string">'name'</span> =&gt; <span class="hljs-string">'publisher'</span>,
            <span class="hljs-string">'contents'</span> =&gt; <span class="hljs-variable">$request</span>-&gt;publisher
        ]
        ],
        <span class="hljs-string">'http_errors'</span>=&gt;<span class="hljs-literal">false</span>,
]);

<span class="hljs-variable">$responseBody</span> = json_decode(<span class="hljs-variable">$response</span>-&gt;getBody());

</code></pre>
<h3 class="code-line" data-line-start=449 data-line-end=450 ><a id="Response_449"></a>Response</h3>
<p class="has-line-data" data-line-start="451" data-line-end="452">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="454" data-line-end="459" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data updated"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="460" data-line-end="461">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="463" data-line-end="468" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=469 data-line-end=470 ><a id="Delete_Books_469"></a>Delete Books</h3>
<h4 class="code-line" data-line-start=471 data-line-end=472 ><a id="EndPoint_471"></a>EndPoint</h4>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Method</th>
<th>URL</th>
</tr>
</thead>
<tbody>
<tr>
<td>Delete</td>
<td><a href="https://publicapi.hidtzz.my.id/api/books">https://publicapi.hidtzz.my.id/api/books</a></td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=476 data-line-end=477 ><a id="Body_476"></a>Body</h4>
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
<td>Token</td>
<td>String</td>
<td>token</td>
<td>Ya</td>
<td>Isi dengan Token anda</td>
</tr>
<tr>
<td>code</td>
<td>Integer</td>
<td>1284</td>
<td>Ya</td>
<td>Isi dengan Code buku</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=482 data-line-end=483 ><a id="Contoh_Request_482"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="483" data-line-end="484">PHP</p>
<pre><code class="has-line-data" data-line-start="485" data-line-end="512" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;

<span class="hljs-variable">$data</span> = [
    <span class="hljs-string">'code'</span> =&gt; <span class="hljs-string">'code_buku'</span>
];



<span class="hljs-variable">$curl</span> = curl_init();

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/'</span>.<span class="hljs-variable">$code</span>.<span class="hljs-string">'?token='</span>.<span class="hljs-variable">$token</span>,
    CURLOPT_RETURNTRANSFER =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_POST           =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_POSTFIELDS     =&gt; http_build_query(<span class="hljs-variable">$data</span>),
    CURLOPT_IPRESOLVE      =&gt; CURL_IPRESOLVE_V4
]);

<span class="hljs-variable">$response</span> = curl_<span class="hljs-built_in">exec</span>(<span class="hljs-variable">$curl</span>);
<span class="hljs-variable">$error</span> = curl_error(<span class="hljs-variable">$curl</span>);

curl_close(<span class="hljs-variable">$curl</span>);

<span class="hljs-built_in">echo</span> empty(<span class="hljs-variable">$error</span>) ? <span class="hljs-variable">$response</span> : <span class="hljs-variable">$error</span>;

</code></pre>
<h3 class="code-line" data-line-start=513 data-line-end=514 ><a id="Response_513"></a>Response</h3>
<p class="has-line-data" data-line-start="515" data-line-end="516">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="518" data-line-end="523" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data deleted"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="524" data-line-end="525">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="527" data-line-end="532" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h2 class="code-line" data-line-start=533 data-line-end=534 ><a id="License_533"></a>License</h2>
<p class="has-line-data" data-line-start="535" data-line-end="536">MIT</p>
<p class="has-line-data" data-line-start="537" data-line-end="538"><strong>Free Software, Hell Yeah!</strong></p>
