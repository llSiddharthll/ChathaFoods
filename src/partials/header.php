

<header class="hidden lg:block shadow-sm shadow-black/50">
    <nav class="bg-white text-black flex flex-col justify-center p-4 items-center gap-2">
        <div class="">
            <a href="index.php"><img class="h-12" src="./assets/img/icon/chattalogo.png" alt=""></a>
        </div>
        <ul class="flex flex-wrap gap-8 items-center lg:justify-evenly">
            <li><a class="text-black hover:text-red-500" href="index.php">Home</a> </li>
            <li class="relative" onclick="toggleDropdown('dropdown-menu')"><a class="text-black" href="#">Our Story <i class="ms-2 fas fa-plus"></i></a>
                <div id="dropdown-menu" class="hidden absolute left-0 bg-red-500 mt-8 shadow-lg min-w-[200px] z-50">
                    <a href="our-story.php" class="block px-4 py-2 text-white hover:bg-red-300">Our Story</a>
                    <a href="about.php" class="block px-4 py-2 text-white hover:bg-red-300">About Us</a>
                </div>
            </li>

            <li><a class="text-black hover:text-red-500" href="quality-assurance.php">Quality Assurance</a></li>
            <li><a class="text-black hover:text-red-500" href="process-and-infrastructure.php">Process and Infrastructure</a></li>
            <li><a class="text-black hover:text-red-500" href="products.php">Products</a> </li>

            <li><a class="text-black hover:text-red-500" href="accolades.php">Accolades</a></li>
            <li><a class="text-black hover:text-red-500" href="investors.php">Investors</a></li>
            <li><a class="text-black hover:text-red-500" href="blogs.php">Blogs</a></li>
            <li><a class="text-black hover:text-red-500" href="contact.php">Contact</a> </li>
            <li>
                <a href="customization-pro.php">
                    <button class="customization-pro relative rounded-lg text-lg">
                        Customization Pro
                        <span class="sparkle sparkle-1"></span>
                        <span class="sparkle sparkle-2"></span>
                        <span class="sparkle sparkle-3"></span>
                    </button>
                </a>
            </li>
        </ul>
    </nav>
</header>

<header class="flex lg:hidden items-center justify-between p-4">
    <div class="">
        <img class="h-8 sm:h-10" src="./assets/img/icon/chattalogo.png" alt="">
    </div>
    <div class="" id="menu-open-btn">
        <i class="text-2xl fa-solid fa-bars"></i>
    </div>
    <div class="fixed border-l-[1px] border-t-[1px] border-gray-500 top-0 right-0 bg-white text-black h-screen z-50 transform translate-x-full transition-all duration-700"
        id="sidebar">
        <div class="flex flex-col items-center">
            <div class="flex gap-4 p-4 bg-white items-center">
                <button id="close-open-btn">
                    <i class="text-red-500 text-2xl fa-regular fa-circle-right"></i>
                </button>
                <img class="h-10" src="./assets/img/icon/chattalogo.png" alt="">
            </div>
            <div class="flex flex-col items-center justify-between w-full p-4 bg-red-500 text-white">
                <div><span><i class="fa-regular fa-clock me-2"></i></span><span> 09:00 am - 06:00 pm</span></div>
                <div class="font-semibold uppercase">
                    Processed & Frozen Food
                </div>
                <div class="flex gap-4 items-center">
                    <a href="https://www.facebook.com/chathafoods.official" target="_blank"><i class="text-white text-xl fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/chathafoods.official/" target="_blank"><i class="text-white text-xl fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/chatha-foods/" target="_blank"><i class="text-white text-xl fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <ul class="flex flex-col flex-wrap gap-3 items-start w-full" style="padding: 1rem;">
            <li><a class="text-black hover:text-red-500" href="index.php">Home</a> </li>
            <li><a class="text-black hover:text-red-500" href="our-story.php">Our Story</a></li>
            <li><a class="text-black hover:text-red-500" href="quality-assurance.php">Quality Assurance</a></li>
            <li><a class="text-black hover:text-red-500" href="process-and-infrastructure.php">Process and Infrastructure</a></li>
            <li><a class="text-black hover:text-red-500" href="products.php">Products</a></li>
            <li><a class="text-black hover:text-red-500" href="accolades.php">Accolades</a></li>
            <li><a class="text-black hover:text-red-500" href="investors.php">Investors</a></li>
            <li><a class="text-black hover:text-red-500" href="blogs.php">Blogs</a></li>
            <li><a class="text-black hover:text-red-500" href="contact.php">Home</a></li>
            <li>
                <a href="customization-pro.php">
                    <button class="customization-pro relative rounded-lg text-lg">
                        Customization Pro
                        <span class="sparkle sparkle-1"></span>
                        <span class="sparkle sparkle-2"></span>
                        <span class="sparkle sparkle-3"></span>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</header>

<script>
    function toggleDropdown(id) {
        // Hide all dropdowns
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => {
            if (el.id !== id) el.classList.add('hidden');
        });

        // Toggle the current one
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }

    // Optional: Close dropdowns when clicking outside
    window.addEventListener('click', function(e) {
        document.querySelectorAll('[id^="dropdown-"]').forEach(dropdown => {
            if (!dropdown.previousElementSibling.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });
</script>