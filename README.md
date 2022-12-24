<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Documentation_0"></a>Documentation</h1>
<h2 class="code-line" data-line-start=1 data-line-end=2 ><a id="_PublicApi__1"></a><em>PublicApi</em></h2>
<p class="has-line-data" data-line-start="4" data-line-end="5"><img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&amp;logo=laravel&amp;logoColor=white" alt="Laravel"> <img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&amp;logo=postman&amp;logoColor=white" alt="Postman"> <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&amp;logo=php&amp;logoColor=white" alt="PHP"></p>
<ul>
<li class="has-line-data" data-line-start="7" data-line-end="8">Version 1.0</li>
<li class="has-line-data" data-line-start="8" data-line-end="9">Author Rohidtzz</li>
<li class="has-line-data" data-line-start="9" data-line-end="10">Created 20 Desember, 2022</li>
<li class="has-line-data" data-line-start="10" data-line-end="12">Update: 25 Desember, 2022</li>
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
<h4 class="code-line" data-line-start=153 data-line-end=154 ><a id="Header_153"></a>Header</h4>
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
<td>{Token}</td>
<td>Ganti dengan token anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=158 data-line-end=159 ><a id="Body_158"></a>Body</h4>
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
<h4 class="code-line" data-line-start=163 data-line-end=164 ><a id="Contoh_Request_163"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="164" data-line-end="165">PHP</p>
<pre><code class="has-line-data" data-line-start="166" data-line-end="185" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;

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
<h3 class="code-line" data-line-start=186 data-line-end=187 ><a id="Response_186"></a>Response</h3>
<p class="has-line-data" data-line-start="188" data-line-end="189">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="191" data-line-end="227" class="language-sh"> <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
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
<p class="has-line-data" data-line-start="228" data-line-end="229">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="231" data-line-end="236" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"Unauthorized Token"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=237 data-line-end=238 ><a id="Find_Books_237"></a>Find Books</h3>
<h4 class="code-line" data-line-start=239 data-line-end=240 ><a id="EndPoint_239"></a>EndPoint</h4>
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
<h4 class="code-line" data-line-start=244 data-line-end=245 ><a id="Header_244"></a>Header</h4>
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
<td>{Token}</td>
<td>Ganti dengan token anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=249 data-line-end=250 ><a id="Body_249"></a>Body</h4>
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
<td>code</td>
<td>Integer</td>
<td>1284</td>
<td>Ya</td>
<td>Isi dengan Code buku</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=254 data-line-end=255 ><a id="Contoh_Request_254"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="255" data-line-end="256">PHP</p>
<pre><code class="has-line-data" data-line-start="257" data-line-end="279" class="language-sh"><span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;
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
<h3 class="code-line" data-line-start=280 data-line-end=281 ><a id="Response_280"></a>Response</h3>
<p class="has-line-data" data-line-start="282" data-line-end="283">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="285" data-line-end="300" class="language-sh"> <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
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
<p class="has-line-data" data-line-start="301" data-line-end="302">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="304" data-line-end="309" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"code invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=310 data-line-end=311 ><a id="Store_Books_310"></a>Store Books</h3>
<h4 class="code-line" data-line-start=312 data-line-end=313 ><a id="EndPoint_312"></a>EndPoint</h4>
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
<h4 class="code-line" data-line-start=317 data-line-end=318 ><a id="Header_317"></a>Header</h4>
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
<td>{Token}</td>
<td>Ganti dengan token anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=322 data-line-end=323 ><a id="Body_322"></a>Body</h4>
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
<h4 class="code-line" data-line-start=332 data-line-end=333 ><a id="Contoh_Request_332"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="333" data-line-end="334">LARAVEL GUZZLE</p>
<pre><code class="has-line-data" data-line-start="335" data-line-end="383" class="language-sh"><span class="hljs-variable">$client</span> = new Client();
<span class="hljs-variable">$token</span> = <span class="hljs-string">"token_anda"</span>;

<span class="hljs-variable">$file_img</span> = <span class="hljs-variable">$request</span>-&gt;file(<span class="hljs-string">'img'</span>);
<span class="hljs-variable">$image_path</span> =<span class="hljs-variable">$file_img</span>-&gt;getpathname();
<span class="hljs-variable">$image_mime</span> =<span class="hljs-variable">$file_img</span>-&gt;getmimetype();
<span class="hljs-variable">$image_org</span>  =<span class="hljs-variable">$file_img</span>-&gt;getClientOriginalName();

<span class="hljs-variable">$response</span> = <span class="hljs-variable">$client</span>-&gt;request(<span class="hljs-string">'POST'</span>, <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/store, [
    '</span>multipart<span class="hljs-string">' =&gt; [
        [
            '</span>name<span class="hljs-string">'     =&gt; '</span>img<span class="hljs-string">',
            '</span>filename<span class="hljs-string">' =&gt; $image_org,
            '</span>Mime-Type<span class="hljs-string">'=&gt; $image_mime,
            '</span>contents<span class="hljs-string">' =&gt; fopen( $image_path, '</span>r<span class="hljs-string">' ),
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>code<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;code
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>title<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;title
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>description<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;description
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>author<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;author
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>publisher<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;publisher
        ]
        ],
        '</span>http_errors<span class="hljs-string">'=&gt;false,
        '</span>headers<span class="hljs-string">' =&gt; [
                    '</span>Authorization<span class="hljs-string">' =&gt; $token
                ]
]);

$responseBody = json_decode($response-&gt;getBody());

return $responseBody;

</span></code></pre>
<p class="has-line-data" data-line-start="384" data-line-end="385">PHP CURL</p>
<pre><code class="has-line-data" data-line-start="386" data-line-end="427" class="language-sh"><span class="hljs-variable">$img</span> = <span class="hljs-variable">$_FILES</span>[<span class="hljs-string">'img'</span>];

<span class="hljs-variable">$code</span> = <span class="hljs-variable">$_POST</span>[<span class="hljs-string">'code'</span>];
<span class="hljs-variable">$title</span> = <span class="hljs-variable">$_POST</span>[<span class="hljs-string">'title'</span>];
<span class="hljs-variable">$description</span> = <span class="hljs-variable">$_POST</span>[<span class="hljs-string">'description'</span>];
<span class="hljs-variable">$author</span> = <span class="hljs-variable">$_POST</span>[<span class="hljs-string">'author'</span>];
<span class="hljs-variable">$publisher</span> = <span class="hljs-variable">$_POST</span>[<span class="hljs-string">'publisher'</span>];

<span class="hljs-variable">$token</span> = <span class="hljs-string">'token_anda'</span>;

<span class="hljs-variable">$curl</span> = curl_init();

<span class="hljs-variable">$image</span> = curl_file_create(<span class="hljs-variable">$img</span>[<span class="hljs-string">'tmp_name'</span>],<span class="hljs-variable">$img</span>[<span class="hljs-string">'type'</span>],<span class="hljs-variable">$img</span>[<span class="hljs-string">'name'</span>]);

<span class="hljs-variable">$data</span> = [
    <span class="hljs-string">'code'</span> =&gt; <span class="hljs-variable">$code</span>,
    <span class="hljs-string">'title'</span> =&gt; <span class="hljs-variable">$title</span>,
    <span class="hljs-string">'description'</span> =&gt; <span class="hljs-variable">$description</span>,
    <span class="hljs-string">'author'</span> =&gt; <span class="hljs-variable">$author</span>,
    <span class="hljs-string">'publisher'</span> =&gt; <span class="hljs-variable">$publisher</span>,
    <span class="hljs-string">'img'</span> =&gt; <span class="hljs-variable">$image</span>,
];

<span class="hljs-variable">$headers</span> = [
    <span class="hljs-string">'Authorization:'</span>. <span class="hljs-variable">$token</span>,
];

curl_<span class="hljs-built_in">setopt</span>(<span class="hljs-variable">$curl</span>, CURLOPT_URL, <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/store'</span>);
curl_<span class="hljs-built_in">setopt</span>(<span class="hljs-variable">$curl</span>, CURLOPT_CUSTOMREQUEST, <span class="hljs-string">"POST"</span>);
curl_<span class="hljs-built_in">setopt</span>(<span class="hljs-variable">$curl</span>, CURLOPT_POST, <span class="hljs-number">1</span>);
curl_<span class="hljs-built_in">setopt</span>(<span class="hljs-variable">$curl</span>, CURLOPT_POSTFIELDS, <span class="hljs-variable">$data</span>);
curl_<span class="hljs-built_in">setopt</span>(<span class="hljs-variable">$curl</span>, CURLOPT_RETURNTRANSFER, <span class="hljs-literal">true</span>);
curl_<span class="hljs-built_in">setopt</span>(<span class="hljs-variable">$curl</span>, CURLOPT_HTTPHEADER, <span class="hljs-variable">$headers</span>);

<span class="hljs-variable">$result</span> = curl_<span class="hljs-built_in">exec</span>(<span class="hljs-variable">$curl</span>);
<span class="hljs-variable">$error</span> = curl_error(<span class="hljs-variable">$curl</span>);

curl_close(<span class="hljs-variable">$curl</span>);

<span class="hljs-built_in">echo</span> empty(<span class="hljs-variable">$error</span>) ? <span class="hljs-variable">$result</span> : <span class="hljs-variable">$error</span>;
</code></pre>
<h3 class="code-line" data-line-start=427 data-line-end=428 ><a id="Response_427"></a>Response</h3>
<p class="has-line-data" data-line-start="429" data-line-end="430">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="432" data-line-end="437" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data stored"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="438" data-line-end="439">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="441" data-line-end="446" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=447 data-line-end=448 ><a id="Update_Books_447"></a>Update Books</h3>
<h4 class="code-line" data-line-start=449 data-line-end=450 ><a id="EndPoint_449"></a>EndPoint</h4>
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
<h4 class="code-line" data-line-start=454 data-line-end=455 ><a id="Header_454"></a>Header</h4>
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
<td>{Token}</td>
<td>Ganti dengan token anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=459 data-line-end=460 ><a id="Body_459"></a>Body</h4>
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
<td>Ya/Tidak</td>
<td>Isi dengan Title buku</td>
</tr>
<tr>
<td>description</td>
<td>String</td>
<td>Buku ini sangat menarik</td>
<td>Ya/Tidak</td>
<td>Isi dengan Description buku</td>
</tr>
<tr>
<td>author</td>
<td>String</td>
<td>rohid</td>
<td>Ya/Tidak</td>
<td>Isi dengan Atuhor buku</td>
</tr>
<tr>
<td>publisher</td>
<td>String</td>
<td>sinarmas</td>
<td>Ya/Tidak</td>
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
<h4 class="code-line" data-line-start=469 data-line-end=470 ><a id="Contoh_Request_469"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="470" data-line-end="471">LARAVEL GUZZLE</p>
<pre><code class="has-line-data" data-line-start="472" data-line-end="520" class="language-sh"><span class="hljs-variable">$client</span> = new Client();
<span class="hljs-variable">$token</span> = <span class="hljs-string">"token anda"</span>;

<span class="hljs-variable">$file_img</span> = <span class="hljs-variable">$request</span>-&gt;file(<span class="hljs-string">'img'</span>);
<span class="hljs-variable">$image_path</span> =<span class="hljs-variable">$file_img</span>-&gt;getpathname();
<span class="hljs-variable">$image_mime</span> =<span class="hljs-variable">$file_img</span>-&gt;getmimetype();
<span class="hljs-variable">$image_org</span>  =<span class="hljs-variable">$file_img</span>-&gt;getClientOriginalName();

<span class="hljs-variable">$response</span> = <span class="hljs-variable">$client</span>-&gt;request(<span class="hljs-string">'POST'</span>, <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books/update, [
    '</span>multipart<span class="hljs-string">' =&gt; [
        [
            '</span>name<span class="hljs-string">'     =&gt; '</span>img<span class="hljs-string">',
            '</span>filename<span class="hljs-string">' =&gt; $image_org,
            '</span>Mime-Type<span class="hljs-string">'=&gt; $image_mime,
            '</span>contents<span class="hljs-string">' =&gt; fopen( $image_path, '</span>r<span class="hljs-string">' ),
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>code<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;code
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>title<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;title
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>description<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;description
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>author<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;author
        ],
        [
            '</span>name<span class="hljs-string">' =&gt; '</span>publisher<span class="hljs-string">',
            '</span>contents<span class="hljs-string">' =&gt; $request-&gt;publisher
        ]
        ],
        '</span>http_errors<span class="hljs-string">'=&gt;false,
        '</span>headers<span class="hljs-string">' =&gt; [
                    '</span>Authorization<span class="hljs-string">' =&gt; $token
                ]
]);

$responseBody = json_decode($response-&gt;getBody());

return $responseBody;

</span></code></pre>
<h3 class="code-line" data-line-start=520 data-line-end=521 ><a id="Response_520"></a>Response</h3>
<p class="has-line-data" data-line-start="522" data-line-end="523">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="525" data-line-end="530" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data updated"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="531" data-line-end="532">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="534" data-line-end="539" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h3 class="code-line" data-line-start=540 data-line-end=541 ><a id="Delete_Books_540"></a>Delete Books</h3>
<h4 class="code-line" data-line-start=542 data-line-end=543 ><a id="EndPoint_542"></a>EndPoint</h4>
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
<h4 class="code-line" data-line-start=547 data-line-end=548 ><a id="Header_547"></a>Header</h4>
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
<td>{Token}</td>
<td>Ganti dengan token anda</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=552 data-line-end=553 ><a id="Body_552"></a>Body</h4>
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
<td>code</td>
<td>Integer</td>
<td>1284</td>
<td>Ya</td>
<td>Isi dengan Code buku</td>
</tr>
</tbody>
</table>
<h4 class="code-line" data-line-start=557 data-line-end=558 ><a id="Contoh_Request_557"></a>Contoh Request</h4>
<p class="has-line-data" data-line-start="558" data-line-end="559">PHP</p>
<pre><code class="has-line-data" data-line-start="560" data-line-end="596" class="language-sh">//contoh pilih salah satu tergantung kalian make post atau get
// <span class="hljs-variable">$code</span> = <span class="hljs-variable">$_GET</span>[<span class="hljs-string">'code'</span>];
// <span class="hljs-variable">$code</span> = <span class="hljs-variable">$_POST</span>[<span class="hljs-string">'code'</span>];

<span class="hljs-variable">$token</span> = <span class="hljs-string">'$2y$10$8TmJk0FL31QZWSCJ93DeBeN3hEYYRfjgzzcpQJ10ZDZLClAhW8qvK'</span>;

<span class="hljs-variable">$data</span> = [
    <span class="hljs-string">'code'</span> =&gt; <span class="hljs-string">'isi dengan code buku'</span>
];

<span class="hljs-variable">$headers</span> = [
    <span class="hljs-string">'Authorization:'</span>. <span class="hljs-variable">$token</span>,
];

<span class="hljs-variable">$curl</span> = curl_init();

curl_<span class="hljs-built_in">setopt</span>_array(<span class="hljs-variable">$curl</span>, [
    CURLOPT_FRESH_CONNECT  =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_URL            =&gt; <span class="hljs-string">'https://publicapi.hidtzz.my.id/api/books'</span>,
    CURLOPT_RETURNTRANSFER =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_CUSTOMREQUEST =&gt; <span class="hljs-string">"DELETE"</span>,
    CURLOPT_POST           =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_POSTFIELDS     =&gt; http_build_query(<span class="hljs-variable">$data</span>),
    CURLOPT_RETURNTRANSFER =&gt; <span class="hljs-literal">true</span>,
    CURLOPT_HTTPHEADER     =&gt; <span class="hljs-variable">$headers</span>,
    CURLOPT_IPRESOLVE      =&gt; CURL_IPRESOLVE_V4
]);

<span class="hljs-variable">$response</span> = curl_<span class="hljs-built_in">exec</span>(<span class="hljs-variable">$curl</span>);
<span class="hljs-variable">$error</span> = curl_error(<span class="hljs-variable">$curl</span>);

curl_close(<span class="hljs-variable">$curl</span>);

<span class="hljs-built_in">echo</span> empty(<span class="hljs-variable">$error</span>) ? <span class="hljs-variable">$response</span> : <span class="hljs-variable">$error</span>;

</code></pre>
<h3 class="code-line" data-line-start=597 data-line-end=598 ><a id="Response_597"></a>Response</h3>
<p class="has-line-data" data-line-start="599" data-line-end="600">Response Sukses</p>
<pre><code class="has-line-data" data-line-start="602" data-line-end="607" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"data deleted"</span>
}
</code></pre>
<p class="has-line-data" data-line-start="608" data-line-end="609">Response Gagal</p>
<pre><code class="has-line-data" data-line-start="611" data-line-end="616" class="language-sh">{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"failed"</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"invalid"</span>
}
</code></pre>
<h2 class="code-line" data-line-start=617 data-line-end=618 ><a id="License_617"></a>License</h2>
<p class="has-line-data" data-line-start="619" data-line-end="620">MIT</p>
<p class="has-line-data" data-line-start="621" data-line-end="622"><strong>Free Software, Hell Yeah!</strong></p>
