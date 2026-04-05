<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <style>
        body {
            background-color: #1a202c;
            color: #fff;
            font-family: 'Muli', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            text-align: center;
            color: white;
        }

        .about-content {
            padding: 50px 0;
        }

        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #e2e8f0;
        }

        .team-member {
            margin-bottom: 30px;
            text-align: center;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
        }

        .team-member h5 {
            margin-top: 15px;
            font-size: 1.5rem;
            color: #edf2f7;
        }

        .team-member p {
            font-size: 1rem;
            color: #a0aec0;
        }
    </style>
</head>

<body class="font-sans bg-gray-800">
    <!-- Navbar -->
    <nav
        class="container flex flex-col items-center justify-between w-full px-4 py-3 mx-auto bg-gray-900 md:flex-row md:px-8">
        <div class="flex items-center justify-between w-full md:w-auto">
            <a href="{{ url('/') }}" class="flex items-center p-1">
                <img src="{{ asset('frontend/assets/images/store.png') }}" alt="Store Logo"
                    class="w-12 h-12 md:w-16 md:h-16">
                <span class="ml-2 text-lg font-bold text-white md:ml-4 md:text-xl">Manajemen Toko</span>
            </a>
            <button data-toggle="toggle-nav" data-target="#nav-items" class="text-white md:hidden">
                <i data-feather="menu"></i>
            </button>
        </div>
        <div id="nav-items" class="flex-col items-center hidden mt-2 md:flex md:flex-row md:ml-auto md:mt-0">
            <a href="{{ url('/') }}"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">Home</a>
            <a href="{{ url('/') }}"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">Features</a>
            <a href="{{ route('dashboard') }}"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">Dashboard</a>
            <a href="{{ url('about') }}"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">About Us</a>
            @if (Route::has('login'))
                <div class="flex items-center mt-2 md:mt-0">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="px-3 py-1 mx-1 text-sm font-semibold text-gray-600 bg-white rounded md:text-xs lg:text-sm md:px-4 md:py-2 md:mx-2 hover:text-gray-900 focus:outline-none">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-3 py-1 mx-1 text-sm font-semibold text-gray-600 bg-white rounded md:text-xs lg:text-sm md:px-4 md:py-2 md:mx-2 hover:text-gray-900 focus:outline-none">Log
                            in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-3 py-1 mx-1 text-sm font-semibold text-gray-600 bg-white rounded md:text-xs lg:text-sm md:px-4 md:py-2 md:mx-2 hover:text-gray-900 focus:outline-none">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- About Content Wrapper -->
    <div class="content-wrapper">
        <div class="about-content">
            <div class="row">
                <div class="col-md-6">
                    <h2>Welcome to Our Company</h2>
                    <p>
                        Kelompok Yang terdiri dari 5 orang yaitu Alif nur rachman, Muhammad syafei, Wiranto Akbar
                        Fadlillah, M. Yoga Prasetya Erlangga, Dhiya Ulhaq Khairunnisa. Kami adalah tim yang berdedikasi
                        untuk memberikan solusi manajemen toko yang inovatif dan efisien. Dengan pengalaman dan keahlian
                        kami dalam pengembangan perangkat lunak, kami berkomitmen untuk membantu bisnis Anda tumbuh dan
                        berkembang dengan menyediakan alat yang mudah digunakan untuk mengelola inventaris, penjualan,
                        dan pelanggan Anda.
                    </p>
                </div>
            </div>

            <!-- Team Section -->
            <div class="container mt-5">
                <h2 class="text-center" style="color: #ffffff;">Meet Our Team</h2>
                <div class="row justify-content-center">
                    <div class="team-member col-md-4">
                        <img src="imagesmember/alif.jpeg" alt="Team Member">
                        <h5>Alif nur rachman</h5>
                        <p>Backend</p>
                    </div>
                    <div class="team-member col-md-4">
                        <img src="imagesmember/amad.jpeg" alt="Team Member">
                        <h5>Muhammad syafei</h5>
                        <p>Backend</p>
                    </div>
                    <div class="team-member col-md-4">
                        <img src="imagesmember/fadli.jpeg" alt="Team Member">
                        <h5>Wiranto Akbar Fadlillah</h5>
                        <p>Frontend</p>
                    </div>
                    <div class="team-member col-md-4">
                        <img src="imagesmember/yoga.jpeg" alt="Team Member">
                        <h5>M. Yoga Prasetya Erlangga</h5>
                        <p>Frontend</p>
                    </div>
                    <div class="team-member col-md-4">
                        <img src="imagesmember/caca.jpeg" alt="Team Member">
                        <h5>Dhiya Ulhaq Khairunnisa</h5>
                        <p>Frontend</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
