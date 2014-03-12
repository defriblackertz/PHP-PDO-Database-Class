PHP-PDO-Database-Class
======================

Database access menggunakan PDO dengan Static Class

<p>Untuk menggunakan class ini, pertama harus import StaticDatabase.php kedalam project kamu dan panggil dengan cara dibawah ini.
<pre>
    require_once 'StaticDatabase.php';
</pre>

<p>Dalam model static ini saya mengunakan metode chaining dalam memanggil method</p>

<h1>Select Query</h1>
<pre>
    StaticDatabase::get('users')->result();
    //SELECT * FROM users;
</pre>
<p>atau menggunakan costum query</p>
<pre>
    StaticDatabase::query('SELECT id, nama, email FROM users')->result();
</pre>
<p>atau dengan menambahkan fungsi where</p>
<pre>
    StaticDatabase::get('users')->where('id', 2)->result();
    //atau 
    StaticDatabase::get('users')->where('id', 2)->where('nama','defri')->result();
    //SELECT * FROM users WHERE id = 2 AND nama = 'defri'
</pre>
<p>atau dengan menambahkan fungsi limit</p>
<pre>
    StaticDatabase::get('users')->limit(2);
    //SELECT * FROM users LIMIT 2
</pre>
<p>atau dengan menambahkan fungsi order by</p>
<pre>
    StaticDatabase::get('users')->orderby('id', 'DESC');
    //SELECT * FROM users ORDER BY id DESC; 
</pre>
<p>atau dengan menambahkan fungsi group by</p>
<pre>
    StaticDatabase::get('users')->groupby('nama');
    //SELECT * FROM users GROUP BY nama; 
</pre>
<h1>Insert Query</h1>
<p>Insert query dengan satu data</p>
<pre>
    $data = array(
        'id'    => '6',
        'nama'  => 'defri',
        'email' => 'defriblackertz@gmail.com'
    );

    StaticDatabase::insert('users', $data);
</pre>
<p>Atau dengan insert query dengan banyak data</p>
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
<h1>Update Query</h1>
<pre>
    $data = array(
        'nama'  => 'defri',
        'email' => 'defriblackertz@gmail.com'
    );

    StaticDatabase::update('users', $data)->where('id', 7)->result();
</pre>
<h1>Delete Query</h1>
<pre>
    StaticDatabase::delete('users')->where('id', 7)->result();
</pre>
