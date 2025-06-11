<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php $title = 'Chatha Foods' ?>
<?php include './partials/head.php' ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Investor Relations for Fresheat Food & Restaurant, including contact details and SEBI LODR disclosures.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hover-scale:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease;
        }

        .focus-ring:focus {
            outline: none;
            ring: 2px solid #2563eb;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <!-- Preloader -->
    <?php include './partials/preloader.php' ?>

    <!-- Back To Top -->
    <?php include './partials/scroll-up.php' ?>

    <!-- Mouse Cursor -->
    <?php include './partials/mouse-cursor.php' ?>

    <!-- Offcanvas Sidebar -->
    <?php include './partials/sidebar.php' ?>

    <!-- Header -->
    <?php include './partials/header.php' ?>

    <!-- Search Area -->
    <?php include './partials/search.php' ?>

    <main class="bg-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-extrabold text-gray-900 text-center mb-12" role="heading" aria-level="1">
                Investor Relations
            </h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left: Investor Contact -->
                <section aria-labelledby="investor-contact-heading">
                    <h2 id="investor-contact-heading" class="text-3xl font-bold text-gray-900 mb-6">Investor Contact</h2>
                    <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-lg hover-scale">
                        <dl class="space-y-6 text-gray-700 text-base">
                            <div>
                                <dt class="font-semibold">Name:</dt>
                                <dd>Priyanka Oberoi, Company Secretary & Compliance Officer</dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Registered Office Address:</dt>
                                <dd>
                                    272, Mota Singh Nagar, Jalandhar, Punjab, Pin code - 144001<br>
                                    Telephone: <a href="tel:+919875970905" class="text-blue-600 hover:underline" aria-label="Call +91-98759-70905">+91-98759-70905</a>,
                                    <a href="tel:+911814616381" class="text-blue-600 hover:underline" aria-label="Call 0181-4616381">0181-4616381</a>
                                </dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Corporate Office Address:</dt>
                                <dd>
                                    UNIT-I: Village Chaundheri, PO Dappar, District Mohali, Dappar Ad, Mohali, Dera Bassi, Punjab, 140506<br>
                                    UNIT-II: Hadbast No. 206, Village Toffanpur, Tehsil Dera Bassi, District SAS Nagar, Punjab-140506
                                </dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Telephone:</dt>
                                <dd>
                                    <a href="tel:+919875970905" class="text-blue-600 hover:underline" aria-label="Call +91-98759-70905">+91-98759-70905</a>,
                                    <a href="tel:+911762506711" class="text-blue-600 hover:underline" aria-label="Call +91-1762-506711">+91-1762-506711</a>
                                </dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Email:</dt>
                                <dd><a href="mailto:cs@cfpl.net.in" class="text-blue-600 hover:underline" aria-label="Email cs@cfpl.net.in">cs@cfpl.net.in</a></dd>
                            </div>
                        </dl>
                    </div>

                    <!-- Registrar Info -->
                    <h3 id="registrar-heading" class="text-2xl font-bold text-gray-900 mt-12 mb-6">Registrars & Share Transfer Agents</h3>
                    <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-lg hover-scale">
                        <dl class="space-y-6 text-gray-700 text-base">
                            <div>
                                <dt class="font-semibold">Name:</dt>
                                <dd>Skyline Financial Services Private Limited</dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Address:</dt>
                                <dd>D-153 A, 1st Floor, Okhla Industrial Area, Phase - I, New Delhi – 110 020, India</dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Telephone:</dt>
                                <dd><a href="tel:+919718739908" class="text-blue-600 hover:underline" aria-label="Call +91-97187-39908">+91-97187-39908</a></dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Email:</dt>
                                <dd>
                                    <a href="mailto:contact@skylinerta.com" class="text-blue-600 hover:underline" aria-label="Email contact@skylinerta.com">contact@skylinerta.com</a>,
                                    <a href="mailto:info@skylinerta.com" class="text-blue-600 hover:underline" aria-label="Email info@skylinerta.com">info@skylinerta.com</a>
                                </dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Website:</dt>
                                <dd><a href="http://www.skylinerta.com" class="text-blue-600 hover:underline" target="_blank" rel="noopener" aria-label="Visit Skyline Financial Services website">www.skylinerta.com</a></dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Investor Grievance ID:</dt>
                                <dd><a href="mailto:contact@skylinerta.com" class="text-blue-600 hover:underline" aria-label="Email contact@skylinerta.com">contact@skylinerta.com</a></dd>
                            </div>
                            <div>
                                <dt class="font-semibold">Contact Person:</dt>
                                <dd>Dinesh, Meenakshi</dd>
                            </div>
                            <div>
                                <dt class="font-semibold">SEBI Registration No.:</dt>
                                <dd>INR000003241</dd>
                            </div>
                        </dl>
                    </div>
                </section>

                <!-- Right: Disclosure List -->
                <section aria-labelledby="disclosure-heading">
                    <h2 id="disclosure-heading" class="text-3xl font-bold text-red-600 mb-6">Disclosure Under Regulation 46 of SEBI LODR</h2>
                    <div class="space-y-4" id="disclosure-accordion">
                        <?php
                        $stmt = $pdo->query("SELECT * FROM year_headings");
                        $year_headings = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <?php foreach ($year_headings as $item): ?>
                            <div class="border rounded-lg overflow-hidden shadow">
                                <button class="w-full flex justify-between items-center bg-red-100 px-4 py-3 text-left text-gray-800 font-medium accordion-toggle">
                                    <span class="text-lg"><?= htmlspecialchars($item['main_heading']) ?></span>
                                    <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300 bg-white px-6 text-sm text-gray-700">
                                    <ul class="py-3 list-disc ml-5 space-y-2">
                                        <?php
                                        $stmt = $pdo->query("SELECT * FROM documents");
                                        $documents = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <?php
                                        // Group documents by link_heading for this heading_id
                                        $grouped_docs = [];
                                        foreach ($documents as $doc) {
                                            if ($doc['heading_id'] === $item['id']) {
                                                $key = $doc['link_heading'] ?? 'General';
                                                $grouped_docs[$key][] = $doc;
                                            }
                                        }
                                        ?>

                                        <?php foreach ($grouped_docs as $subheading => $docs): ?>
                                            <?php if ($subheading !== 'General'): ?>
                                                <h3 class="font-semibold text-lg mb-2 mt-4 border-b border-gray-300 pb-1"><?= htmlspecialchars($subheading) ?></h3>
                                            <?php endif; ?>
                                            <ul class="list-disc ml-5 space-y-2">
                                                <?php foreach ($docs as $doc): ?>
                                                    <li>
                                                        <a href="<?= htmlspecialchars($doc['link_url']) ?>" target="_blank" class="text-[17px]">
                                                            <?= htmlspecialchars($doc['link_name']) ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endforeach; ?>

                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </section>
            </div>
        </div>
    </main>


    <script>
        document.querySelectorAll('.accordion-toggle').forEach(btn => {
            btn.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('svg');

                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.classList.remove('rotate-180');
                } else {
                    document.querySelectorAll('.accordion-content').forEach(el => el.style.maxHeight = null);
                    document.querySelectorAll('.accordion-toggle svg').forEach(i => i.classList.remove('rotate-180'));

                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.classList.add('rotate-180');
                }
            });
        });
    </script>


    <!-- Footer -->
    <?php include './partials/footer.php' ?>

    <!-- Scripts -->
    <?php include './partials/script.php' ?>
</body>

</html>