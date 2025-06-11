<nav class="bg-gray-800 text-white px-6 py-4 shadow-md relative z-50">
  <div class="flex items-center justify-between">
    <h1 class="text-xl font-bold">Admin Dashboard</h1>
    <a href="logout.php" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm">Logout</a>
  </div>

  <div class="mt-4 flex flex-wrap gap-4 text-sm relative z-50">

    <!-- Investors Dropdown -->
    <div class="relative">
      <button onclick="toggleDropdown('dropdown-investors')" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 flex items-center gap-2">
        Investors
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div id="dropdown-investors" class="hidden absolute left-0 bg-white text-gray-800 mt-2 rounded shadow-lg min-w-[200px] z-50">
        <a href="admin_years.php" class="block px-4 py-2 hover:bg-gray-100">Manage Years</a>
        <a href="admin_year_headings.php" class="block px-4 py-2 hover:bg-gray-100">Manage Year Headings</a>
        <a href="admin_documents.php" class="block px-4 py-2 hover:bg-gray-100">Manage Documents</a>
      </div>
    </div>

    <!-- Menu Dropdown -->
    <div class="relative">
      <button onclick="toggleDropdown('dropdown-menu')" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 flex items-center gap-2">
        Menu
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div id="dropdown-menu" class="hidden absolute left-0 bg-white text-gray-800 mt-2 rounded shadow-lg min-w-[200px] z-50">
        <a href="manage-categories.php" class="block px-4 py-2 hover:bg-gray-100">Manage Categories</a>
        <a href="manage-menu.php" class="block px-4 py-2 hover:bg-gray-100">Manage Menu</a>
      </div>
    </div>

    <!-- Blogs Dropdown -->
    <div class="relative">
      <button onclick="toggleDropdown('dropdown-blogs')" class="bg-gray-700 px-4 py-2 rounded hover:bg-gray-600 flex items-center gap-2">
        Blogs
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div id="dropdown-blogs" class="hidden absolute left-0 bg-white text-gray-800 mt-2 rounded shadow-lg min-w-[200px] z-50">
        <a href="manage-blogs.php" class="block px-4 py-2 hover:bg-gray-100">Manage Blogs</a>
        <a href="manage-blog-categories.php" class="block px-4 py-2 hover:bg-gray-100">Blog Category</a>
      </div>
    </div>

  </div>
</nav>

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
  window.addEventListener('click', function (e) {
    document.querySelectorAll('[id^="dropdown-"]').forEach(dropdown => {
      if (!dropdown.previousElementSibling.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.add('hidden');
      }
    });
  });
</script>
