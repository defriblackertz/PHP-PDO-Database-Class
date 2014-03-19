PHP-PDO-Database-Class
======================

Database access menggunakan PDO dengan Static Class

<p>Untuk menggunakan class ini, pertama harus import StaticDatabase.php kedalam project kamu dan panggil dengan cara dibawah ini.</p>
``` php
require_once 'StaticDatabase.php';
```

<p>Dalam model static ini saya mengunakan metode chaining dalam memanggil method</p>

<h1>Select Query</h1>
``` php
StaticDatabase::get('users')->result();
//SELECT * FROM users;
```

<p>atau menggunakan costum query</p>
``` php
StaticDatabase::query('SELECT id, nama, email FROM users')->result();
```

<p>atau dengan menambahkan fungsi where</p>
``` php
StaticDatabase::get('users')->where('id', 2)->result();
//atau 
StaticDatabase::get('users')->where('id', 2)->where('nama','defri')->result();
//SELECT * FROM users WHERE id = 2 AND nama = 'defri'
```

<p>atau dengan menambahkan fungsi limit</p>
``` php
StaticDatabase::get('users')->limit(2)->result();
//SELECT * FROM users LIMIT 2
```

<p>atau dengan menambahkan fungsi order by</p>
``` php
StaticDatabase::get('users')->orderby('id', 'DESC')->result();
//SELECT * FROM users ORDER BY id DESC; 
```

<p>atau dengan menambahkan fungsi group by</p>
``` php
StaticDatabase::get('users')->groupby('nama')->result();
//SELECT * FROM users GROUP BY nama; 
```

<h1>Insert Query</h1>
<p>Insert query dengan satu data</p>
``` php
$data = array(
    'id'    => '6',
    'nama'  => 'defri',
    'email' => 'defriblackertz@gmail.com'
);

StaticDatabase::insert('users', $data);
```

<p>Atau dengan insert query dengan banyak data</p>
``` php
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
```

<h1>Update Query</h1>
``` php
$data = array(
    'nama'  => 'defri',
    'email' => 'defriblackertz@gmail.com'
);

StaticDatabase::update('users', $data)->where('id', 7)->result();
```

<h1>Delete Query</h1>
``` php
StaticDatabase::delete('users')->where('id', 7)->result();
```
<h1>Pesan Error</h1>
![ScreenShot](/error.png)

<p>jika ada saran email saya di defriblackertz@gmail.com</p>
