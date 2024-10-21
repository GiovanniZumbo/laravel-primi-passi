<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homepage</title>
      {{-- Bootstrap --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

    <header class="bg-light">
        <nav class="container">
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="{{ $navLink }}">
            {{$nameLink}}
        </a>
    </li>
</ul>
          </nav>
    </header>

    <main>
        <div class="text-center p-3">
            <h1 class="mb-3">{{$title}}</h1>

            <p>La nostra missione è quella di creare soluzioni innovative alla portata di tutti.</p>
        </div>
    </main>

</body>
</html>
