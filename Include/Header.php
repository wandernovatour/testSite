<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Holistic Technology</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>

        /* Dropdown Hover */
        .group:hover .group-hover\:block {
            display: block;
        }

        /* Nav Link Hover Line */
        .nav-link {
            position: relative;
            transition: all 0.3s;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #5b96ca;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

    </style>

</head>

<body class="font-sans">

<!-- Top Bar -->

<div class="bg-[#062C71] text-white py-2 hidden md:block border-b border-green-700">

    <div class="container mx-auto px-4 flex justify-between items-center text-sm">

        <div class="flex gap-6">

            <span class="flex items-center gap-2">
                <i class="fas fa-envelope"></i>
                anuragrai0920@gmail.com
            </span>

            <span class="flex items-center gap-2">
                <i class="fas fa-phone"></i>
                +91 96612 11199
            </span>

        </div>

        <div class="flex items-center bg-white rounded-md overflow-hidden">

            <input
                type="text"
                placeholder="Search..."
                class="px-3 py-1 text-black outline-none w-48 text-xs"
            >

            <button class="bg-blue-300 px-3 py-1 text-white hover:bg-[#18C3AD] transition">

                <i class="fas fa-search text-xs"></i>

            </button>

        </div>

    </div>

</div>

<!-- Header -->

<header class="bg-white text-black sticky top-0 z-50 shadow-xl">

<div class="container mx-auto px-3 py-3 flex justify-between items-center">

    <!-- Logo -->

    <div class="shrink-0">

        <a href="index.php">

            <img
                <img src="\Holistic-Technology\Image\logo.png"
                alt="Holistic-Technology"
                class="h-20 object-contain"
            >

        </a>

    </div>

    <!-- Navigation -->

    <nav class="hidden lg:block">

        <ul class="flex items-center gap-8 font-medium text-xl">

            <!-- Home -->

            <li>
                <a href="" class="nav-link hover:text-blue-950">
                    Home
                </a>
            </li>

            <!-- About -->

            <li>
                <a href="" class="nav-link hover:text-blue-950">
                    About Us
                </a>
            </li>

            <li>
                <a href="" class="nav-link hover:text-blue-950">
                    Robotic Solutions
                </a>
            </li>

              <li>
                <a href="" class="nav-link hover:text-blue-950">
                    Projects
                </a>
            </li>
             <!-- Products Dropdown -->

            <li class="relative group hover:text-blue-950">
                    Products
                    <i class="fas fa-caret-down text-xs"></i>

                <ul class="absolute top-full left-0 bg-white text-black w-64 shadow-2xl rounded-b-lg hidden group-hover:block border-t-4 border-blue-950">

                    <li>
                        <a href="/Digital-Market/Services/Web-Development/Webdevelopment.php" class="block px-5 py-2.5 hover:bg-green-50 hover:text-green-600 transition border-b border-gray-100">
                            Automotive Industries
                        </a>
                    </li>

                    <li>
                        <a href="/Digital-Market/Services/SEO-Services/SEOServices.php" class="block px-5 py-2.5 hover:bg-green-50 hover:text-green-600 transition border-b border-gray-100">
                            SPM (Special Purpose Machines)
                        </a>
                    </li>

                    <li>
                        <a href="/Digital-Market/Services/Social-Media-Marketing/SocialMedia.php" class="block px-5 py-2.5 hover:bg-green-50 hover:text-green-600 transition border-b border-gray-100">
                            Plumbing and Faucet Assembly
                        </a>
                    </li>

                    <li>
                        <a href="/Digital-Market/Services/Lead-Generation/LeadGeneration.php" class="block px-5 py-2.5 hover:bg-green-50 hover:text-green-600 transition border-b border-gray-100">
                            CNC Machines
                        </a>
                    </li>

                    <li>
                        <a href="/Digital-Market/Services/Graphic-Design/GraphicDesign.php" class="block px-5 py-2.5 hover:bg-green-50 hover:text-green-600 transition">
                            Material Movement Solutions
                        </a>
                    </li>

                    <li>
                        <a href="/Digital-Market/Services/Graphic-Design/GraphicDesign.php" class="block px-5 py-2.5 hover:bg-green-50 hover:text-green-600 transition">
                            Others
                        </a>
                    </li>

                </ul>

            </li>
            
            <li>
                <a href="/Digital-Market/BlogsBannerPage/Blogs.php" class="nav-link hover:text-blue-950">
                    Videos
                </a>
            </li>
             

     <li>
                <a href="/Digital-Market/ContactUsPage/ContactUs.php" class="nav-link hover:text-blue-950">
                    Contact Us
                </a>
            </li>

        </ul>

    </nav>

    <!-- Call Button -->

    <div class="hidden sm:block">

        <a
            href="/Digital-Market/ContactUsPage/ContactUs.php"
            class="bg-[#18C3AD] text-white px-6 py-2.5 rounded-full font-bold hover:bg-[#021b5d] transition duration-300 shadow-md"
        >

            Call Now

        </a>

    </div>

    <!-- Mobile Button -->

    <button class="lg:hidden text-2xl" onclick="toggleMenu()">

        <i class="fas fa-bars"></i>

    </button>

</div>

</header>

<script>

function toggleMenu() {
    // mobile menu logic later
}

</script>

</body>
</html>