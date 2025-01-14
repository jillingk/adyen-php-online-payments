<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Adyen JS from TEST environment (change to live for production)-->
  <script src="https://checkoutshopper-test.adyen.com/checkoutshopper/sdk/5.33.0/adyen.js"
     integrity="sha384-mPMlkgVUT7jVJZT0sTSfe+M4uN1ArRf1Itg76PcI6Y+zPLDvjCnjmAyyjtak3269"
     crossorigin="anonymous"></script>

  <!-- Adyen CSS from TEST environment (change to live for production)-->
	<link rel="stylesheet"
     href="https://checkoutshopper-live.adyen.com/checkoutshopper/sdk/5.33.0/adyen.css"
     integrity="sha384-86hqIixzFjIoRoaNYg9pd4mtpn3HtgJmrpYiyTv+3DaGPF70VnRUbtK7MKLTLRd9"
     crossorigin="anonymous">

  <link rel="stylesheet" href="/css/app.css">
  <title>Checkout Demo</title>
</head>
<body>
    <header id="header">
    <a href="/">
      <img src="/img/mystore-logo.svg" alt="">
    </a>
  </header>
  <div class="container">
      @yield('content')
  </div>
</body>
</html>



