<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Documentation_0"></a>Documentation</h1>
<h2 class="code-line" data-line-start=1 data-line-end=2 ><a id="_PublicApi__1"></a><em>PublicApi</em></h2>
<center><p class="has-line-data" data-line-start="4" data-line-end="5"><img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&amp;logo=laravel&amp;logoColor=white" alt="Laravel"> <img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&amp;logo=postman&amp;logoColor=white" alt="Postman"> <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&amp;logo=php&amp;logoColor=white" alt="PHP"></p> </center>
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
<p class="has-line-data" data-line-start="320" data-line-end="321">PHP</p>
<pre><code class="has-line-data" data-line-start="322" data-line-end="362" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;

<span class="hljs-variable">$cFile</span> = curl_file_create(<span class="hljs-variable">$file</span>);
<span class="hljs-variable">$img</span> = array(<span class="hljs-string">'img'</span>=&gt; <span class="hljs-variable">$cFile</span>);

<span class="hljs-variable">$name</span> = <span class="hljs-variable">$_FILES</span>[<span class="hljs-string">'img'</span>][<span class="hljs-string">'name'</span>];




<span class="hljs-variable">$curl</span> = curl_init();

<span class="hljs-variable">$args</span>[<span class="hljs-string">'file'</span>] = curl_file_create(<span class="hljs-variable">$_FILES</span>[<span class="hljs-string">'img'</span>][<span class="hljs-string">'tmp_name'</span>],<span class="hljs-string">'image/png'</span>,<span class="hljs-variable">$name</span>);

<span class="hljs-variable">$data</span> = [
        <span class="hljs-string">'code'</span> =&gt; <span class="hljs-string">'code buku'</span>,
        <span class="hljs-string">'title'</span> =&gt; <span class="hljs-string">'title buku'</span>,
        <span class="hljs-string">'description'</span> =&gt; <span class="hljs-string">'description buku'</span>,
        <span class="hljs-string">'author'</span> =&gt; <span class="hljs-string">'author buku'</span>,
        <span class="hljs-string">'publisher'</span> =&gt; <span class="hljs-string">'publusher buku'</span>,
        <span class="hljs-string">'img'</span> =&gt; <span class="hljs-variable">$args</span>[<span class="hljs-string">'file'</span>]
];

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/store'</span>.http_build_query(<span class="hljs-variable">$token</span>),
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
<h3 class="code-line" data-line-start=362 data-line-end=363 ><a id="Response_362"></a>Response</h3>
<p class="has-line-data" data-line-start="364" data-line-end="365">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="367" data-line-end="372" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data stored"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="373" data-line-end="374">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="376" data-line-end="381" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=382 data-line-end=383 ><a id="Update_Books_382"></a>Update Books</h3>
<h4 class="code-line" data-line-start=384 data-line-end=385 ><a id="EndPoint_384"></a>EndPoint</h4>
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
<h4 class="code-line" data-line-start=389 data-line-end=390 ><a id="Body_389"></a>Body</h4>
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
<h4 class="code-line" data-line-start=400 data-line-end=401 ><a id="Contoh_Request_400"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="401" data-line-end="402">PHP</p>
<pre><code class="has-line-data" data-line-start="403" data-line-end="443" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;

<span class="hljs-variable">$cFile</span> = curl_file_create(<span class="hljs-variable">$file</span>);
<span class="hljs-variable">$img</span> = array(<span class="hljs-string">'img'</span>=&gt; <span class="hljs-variable">$cFile</span>);

<span class="hljs-variable">$name</span> = <span class="hljs-variable">$_FILES</span>[<span class="hljs-string">'img'</span>][<span class="hljs-string">'name'</span>];




<span class="hljs-variable">$curl</span> = curl_init();

<span class="hljs-variable">$args</span>[<span class="hljs-string">'file'</span>] = curl_file_create(<span class="hljs-variable">$_FILES</span>[<span class="hljs-string">'img'</span>][<span class="hljs-string">'tmp_name'</span>],<span class="hljs-string">'image/png'</span>,<span class="hljs-variable">$name</span>);

<span class="hljs-variable">$data</span> = [
        <span class="hljs-string">'code'</span> =&gt; <span class="hljs-string">'code buku'</span>,
        <span class="hljs-string">'title'</span> =&gt; <span class="hljs-string">'title buku'</span>,
        <span class="hljs-string">'description'</span> =&gt; <span class="hljs-string">'description buku'</span>,
        <span class="hljs-string">'author'</span> =&gt; <span class="hljs-string">'author buku'</span>,
        <span class="hljs-string">'publisher'</span> =&gt; <span class="hljs-string">'publusher buku'</span>,
        <span class="hljs-string">'img'</span> =&gt; <span class="hljs-variable">$args</span>[<span class="hljs-string">'file'</span>]
];

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/update'</span>.http_build_query(<span class="hljs-variable">$token</span>),
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
<h3 class="code-line" data-line-start=443 data-line-end=444 ><a id="Response_443"></a>Response</h3>
<p class="has-line-data" data-line-start="445" data-line-end="446">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="448" data-line-end="453" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data updated"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="454" data-line-end="455">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="457" data-line-end="462" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=463 data-line-end=464 ><a id="Delete_Books_463"></a>Delete Books</h3>
<h4 class="code-line" data-line-start=465 data-line-end=466 ><a id="EndPoint_465"></a>EndPoint</h4>
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
<h4 class="code-line" data-line-start=470 data-line-end=471 ><a id="Body_470"></a>Body</h4>
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
<h4 class="code-line" data-line-start=476 data-line-end=477 ><a id="Contoh_Request_476"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="477" data-line-end="478">PHP</p>
<pre><code class="has-line-data" data-line-start="479" data-line-end="506" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;

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
<h3 class="code-line" data-line-start=507 data-line-end=508 ><a id="Response_507"></a>Response</h3>
<p class="has-line-data" data-line-start="509" data-line-end="510">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="512" data-line-end="517" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data deleted"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="518" data-line-end="519">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="521" data-line-end="526" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h2 class="code-line" data-line-start=527 data-line-end=528 ><a id="License_527"></a>License</h2>
<p class="has-line-data" data-line-start="529" data-line-end="530">MIT</p>
<p class="has-line-data" data-line-start="531" data-line-end="532"><strong>Free Software, Hell Yeah!</strong></p>
