<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EventPage</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <style>
  h2 {
    font-family: Cabin;
    font-style: normal;
    font-weight: bold;
    font-size: 24px;
    line-height: 29px;
    color: #56FBDB;
  }
  
  h3 {
    font-family: Roboto;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 16px;
    color: #56FBDB;
  }
  button {
    font-family: Roboto;
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 21px;
    text-align: center;

    color: #291C60;
  }
  </style>
</head>
<body>
  <div class="container h-screen">
      <section class="w-screen h-2/5 flex justify-center flex-col items-center" style="background-color: #291C60">
      <h3>MASTER CLASS</h3>
      <h2>PHP for noobs</h2>
      <img class="h-44" src="/image/image1.png"/>
      </section>
      <section class="w-screen h-3/5">
      <div class="flex space-x-8 justify-center pt-4">
        <div style="background-color: #F9F871" class="w-36 flex justify-center">
            <p>06/06/2021</p>
        </div>
        <div style="background-color: #56FBDB">
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
      <div class="flex justify-center ">
        <button style="background-color: #F9F871" class="border-2 border-black	w-32 h-8">Join Event</button>
      </div>
      
      </section>
  </div>
</body>
</html>