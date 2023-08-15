<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/admin') }}/css/bootstrap.css">

    @stack('style')

    <link rel="stylesheet" href="{{ asset('template/admin') }}/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{ asset('template/admin') }}/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('template/admin') }}/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('template/admin') }}/css/app.css">
    <link rel="shortcut icon" href="{{ asset('template/dashboard') }}/images/logo-icon.png" type="image/x-icon">
</head>

<body>
    <div id="app">
