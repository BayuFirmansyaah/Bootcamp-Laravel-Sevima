<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="/js/fa.js"></script>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <div class="container wrap">
        <nav>
            <ul>
                <li>
                    <a href="/mahasiswa">Daftar Mahasiswa</a>
                </li>
                <li>
                    <a href="/mahasiswa/create">Tambah Mahasiswa</a>
                </li>
                <li>
                    <a href="/prodi">Daftar Prodi</a>
                </li>
                <li>
                    <a href="/prodi/create">Tambah Prodi</a>
                </li>
            </ul>
        </nav>
        
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>