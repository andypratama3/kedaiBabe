<title>@yield('title') | Kedai Babe - Tempat Makan Prasmanan Murah & Enak di Samarinda Kalimantan Timur</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{-- Meta SEO --}}
<meta name="description" content="Kedai Babe adalah tempat makan prasmanan modern dan terbaik di Kalimantan Timur, khususnya di Samarinda. Menyediakan masakan rumahan khas Nusantara, nasi campur, buffet all you can eat, dengan harga terjangkau, suasana kekeluargaan, dan pelayanan ramah. Cocok untuk keluarga, anak-anak, arisan, acara kantor, komunitas, dan wisata kuliner.">
<meta name="keywords" content="tempat makan prasmanan terbaik di kalimantan timur, kedai babe prasmanan, tempat makan murah enak samarinda, all you can eat prasmanan samarinda, nasi campur khas nusantara samarinda, warung makan keluarga samarinda, kedai makan prasmanan kalimantan timur, restoran keluarga enak dan murah di samarinda, tempat makan hits di samarinda 2025, kuliner nusantara prasmanan kalimantan, tempat makan halal dan murah di samarinda, tempat makan arisan dan komunitas di samarinda, warung makan prasmanan harian, tempat makan khas indonesia di samarinda, prasmanan terbaik kalimantan, prasmanan acara kantor dan keluarga samarinda">
<meta name="author" content="Kedai Babe Team">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

{{-- Open Graph (Facebook / WhatsApp) --}}
<meta property="og:title" content="Kedai Babe - Tempat Makan Prasmanan Keluarga di Kalimantan Timur">
<meta property="og:description" content="Rasakan nikmatnya prasmanan khas Nusantara sepuasnya di Kedai Babe Samarinda. Cocok untuk keluarga, arisan, komunitas, dan acara kantor.">
<meta property="og:image" content="{{ asset('assets/images/logo.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="restaurant">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kedai Babe Samarinda - Prasmanan Nusantara Murah & Lezat">
<meta name="twitter:description" content="All you can eat prasmanan di Samarinda, cocok untuk keluarga dan komunitas. Menu khas rumahan dengan harga terjangkau.">
<meta name="twitter:image" content="{{ asset('assets/images/logo.jpg') }}">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Restaurant",
  "name": "Kedai Babe Prasmanan",
  "image": "{{ asset('assets/images/logo.jpg') }}",
  "description": "Tempat makan prasmanan terbaik di Samarinda Kalimantan Timur dengan hidangan khas rumahan, all you can eat murah, cocok untuk keluarga, arisan, dan acara komunitas.",
  "servesCuisine": ["Masakan Indonesia", "Masakan Nusantara", "Prasmanan Rumahan", "Buffet Khas Kalimantan"],
  "menu": "{{ url('/menu') }}",
  "telephone": "+62-812-3456-7890",
  "priceRange": "Rp",
  "url": "{{ url('/') }}",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jl. Ahmad Yani No.12",
    "addressLocality": "Samarinda",
    "addressRegion": "Kalimantan Timur",
    "postalCode": "75124",
    "addressCountry": "ID"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -0.502106,
    "longitude": 117.153709
  },
  "openingHours": ["Mo-Su 10:00-21:00"],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "{{ $averageRating ?? 4.7 }}",
    "reviewCount": "{{ $totalVotes ?? 132 }}"
  },
  "acceptsReservations": "True",
  "sameAs": [
    "https://www.instagram.com/kedaibabe.official/",
    "https://web.facebook.com/people/Kedai-BABE-Samarinda/100063596827516/",
    "https://www.google.com/maps?q=Kedai+Babe+Samarinda"
  ]
}
</script>

@stack('meta')

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

{{-- favicon --}}
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.jpg') }}"/>


<link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


@stack('css')
