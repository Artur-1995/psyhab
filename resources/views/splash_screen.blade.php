<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Splash Screen</title>
  <style>
    body {
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #fff; /* фон заставки */
    }
    img {
      width: 200px; /* ширина логотипа */
    }
  </style>
</head>
<body>
  <img src="{{ asset('images/manifest/icon-192x192.png') }}" alt="Психологическая консультация"
            class="rounded-2xl shadow-2xl w-full">
</body>
</html>
