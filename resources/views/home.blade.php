<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <title>Junior Melcki | Developer</title>
  <meta name="description"
    content="A Frontend focused Web Developer building the Frontend of Websites and Web Applications that leads to the success of the overall product" />
  <meta name="author" content="Ram Maheshwari" />
  <meta name="google-site-verification" content="wX2xdkxqjrC4rA2EM-9bbaVpiEEFG8ae5azgeZDd-oo" />

  <meta property="og:title" content="Ram Maheshwari | RammCodes | Frontend Web Developer" />
  <meta property="og:site_name" content="Ram Maheshwari Portfolio Website" />
  <meta property="og:url" content="https://www.rammaheshwari.com/" />
  <meta property="og:description"
    content="A Frontend focused Web Developer building the Frontend of Websites and Web Applications that leads to the success of the overall product" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://i.ibb.co/C8Wnkrt/pretty-snap-2022-3-29-16-11.png" />

  <link href='https://d33wubrfki0l68.cloudfront.net/css/b14c4959d2141192dcad9a56bef700e9b47ebb62/css/style.css' rel='stylesheet'/>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QD9ESD1D9K"></script>
  <script>
    window.dataLayer = window.dataLayer || []
    function gtag() {
      dataLayer.push(arguments)
    }
    gtag('js', new Date())

    gtag('config', 'G-QD9ESD1D9K')
  </script>
</head>

<body>

  <!-- header-->
  @include('header')
  
  @include('home-hero-section')

  @include('about-section')

  @include('projects-section')

  @include('contact')

  <!--footer-->
  @include('footer');

  <script src='https://d33wubrfki0l68.cloudfront.net/js/96f5c0d4b9bdbf07570efd8e94cb7db7a5191a01/index.js'></script>
  <script src="//code.tidio.co/hkirvl5pqs5cjjawh11xutnzjgtg9tfi.js" async></script>
</body>

</html>