<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","Adicione seu site")</title>
    <meta name="description" content="Quer seu próprio Google Ad Exchange?">
    <link rel="shortcut icon" href="{{ url('assets') }}/image/favicon.png" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('assets') }}/fonts/icon-font/css/style.css">
    <link rel="stylesheet" href="{{ url('assets') }}/fonts/typography-font/typo.css">
    <link rel="stylesheet" href="{{ url('assets') }}/fonts/fontawesome-5/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{ url('assets') }}/plugins/aos/aos.min.css">
{{--     <link rel="stylesheet" href="{{ url('assets') }}/plugins/slick/slick.min.css"> --}}
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/main.css">
    <!-- Custom stylesheet -->

</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">

        <!--Site Header Area -->
        @include("Layout.navbar")
        <!-- navbar- -->

        @yield("contenido")
        <!-- Footer Area -->
        @include("Layout.footer")
        @include("Layout.copyright")
    <!-- Vendor Scripts -->
    <script src="{{ url('assets') }}/js/vendor.min.js"></script>
    <!-- Plugin's Scripts -->
    <script src="{{ url('assets') }}/plugins/aos/aos.min.js"></script>
    <script src="{{ url('assets') }}/plugins/slick/slick.min.js"></script>
    <script src="{{ url('assets') }}/plugins/menu/menu.js"></script>
    <!-- Activation Script -->
    <script src="{{ url('assets') }}/js/custom.js"></script>
    <a href="https://api.whatsapp.com/send?phone=5516982018838&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20ADX%20Propriet%C3%A1ria.%20" class="whatsapp-button" target="_blank" style="position: fixed;  right: 20px; bottom: 20px;">
        <img src="https://i.ibb.co/VgSspjY/whatsapp-button.png" alt="botão whatsapp">
    </a>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
