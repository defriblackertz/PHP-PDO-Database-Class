PHP-PDO-Database-Class
======================

Database access menggunakan PDO dengan Static Class

<p>Untuk menggunakan class ini, pertama harus import StaticDatabase.php kedalam project kamu dan panggil dengan cara dibawah ini.</p>
<div class="highlight highlight-php">
<pre>
require_once 'StaticDatabase.php';
</pre>
</div>

<p>Dalam model static ini saya mengunakan metode chaining dalam memanggil method</p>

<h1>Select Query</h1>
<div class="highlight highlight-php">
<pre>
StaticDatabase::get('users')->result();
//SELECT * FROM users;
</pre>
</div>

<p>atau menggunakan costum query</p>
<div class="highlight highlight-php">
<pre>
StaticDatabase::query('SELECT id, nama, email FROM users')->result();
</pre>
</div>

<p>atau dengan menambahkan fungsi where</p>
<div class="highlight highlight-php">
<pre>
StaticDatabase::get('users')->where('id', 2)->result();
//atau 
StaticDatabase::get('users')->where('id', 2)->where('nama','defri')->result();
//SELECT * FROM users WHERE id = 2 AND nama = 'defri'
</pre>
</div>

<p>atau dengan menambahkan fungsi limit</p>
<div class="highlight highlight-php">
<pre>
StaticDatabase::get('users')->limit(2);
//SELECT * FROM users LIMIT 2
</pre>
</div>

<p>atau dengan menambahkan fungsi order by</p>
<div class="highlight highlight-php">
<pre>
StaticDatabase::get('users')->orderby('id', 'DESC');
//SELECT * FROM users ORDER BY id DESC; 
</pre>
</div>

<p>atau dengan menambahkan fungsi group by</p>
<div class="highlight highlight-php">
<pre>
StaticDatabase::get('users')->groupby('nama');
//SELECT * FROM users GROUP BY nama; 
</pre>
</div>

<h1>Insert Query</h1>
<p>Insert query dengan satu data</p>
<div class="highlight highlight-php">
<pre>
$data = array(
    'id'    => '6',
    'nama'  => 'defri',
    'email' => 'defriblackertz@gmail.com'
);

StaticDatabase::insert('users', $data);
</pre>
</div>

<p>Atau dengan insert query dengan banyak data</p>
<div class="highlight highlight-php">
<pre>
$data = array(
    array(
       'id'    => '6',
       'nama'  => 'defri',
       'email' => 'defriblackertz@gmail.com'
    ),
    array(
       'id'    => '7',
       'nama'  => 'fajar',
       'email' => 'fajar@gmail.com'
    )
);

StaticDatabase::insert('users', $data);
</pre>
</div>

<h1>Update Query</h1>
<div class="highlight highlight-php">
<pre>
$data = array(
    'nama'  => 'defri',
    'email' => 'defriblackertz@gmail.com'
);

StaticDatabase::update('users', $data)->where('id', 7)->result();
</pre>
</div>

<h1>Delete Query</h1>
<div class="highlight highlight-php">
<pre>
StaticDatabase::delete('users')->where('id', 7)->result();
</pre>
</div>
