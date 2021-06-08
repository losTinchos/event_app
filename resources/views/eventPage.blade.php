<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EventPage</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
  <div class="container h-screen">
      <section class="w-screen h-2/5 flex justify-center flex-col items-center bg-blue-dark">
      <h3>MASTER CLASS</h3>
      <h2>PHP for noobs</h2>
      <img class="h-44" src="<?php echo asset('storage/images/image1.png')?>" />
      </section>
      <section class="w-screen h-3/5">
      <div class="flex space-x-8 justify-center pt-4">
        <div class="bg-yellow" class="w-36 flex justify-center">
            <p>06/06/2021</p>
        </div>
        <div class="bg-aqua">
            <p>26 places / 1 available</p>
        </div>
      </div>
      <div class="p-8">
        <p>Why PHP?</p><br>
        <p>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
        PHP is compatible with almost all servers used today (Apache, IIS, etc.)
        PHP supports a wide range of databases
        PHP is free. Download it from the official PHP resource: www.php.net
        PHP is easy to learn and runs efficiently on the server side
      </p>
      </div>
      <div class="flex justify-center">
        <button class="btn bg-yellow border-2 border-black w-32 h-8">Join Event</button>
      </div>
      </section>
  </div>
</body>
</html>