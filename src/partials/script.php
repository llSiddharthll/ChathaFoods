 <!--<< All JS Plugins >>-->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!--<< Bootstrap Js >>-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--<< Waypoints Js >>-->
<script src="assets/js/jquery.waypoints.js"></script>
<!--<< Counterup Js >>-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--<< Viewport Js >>-->
<script src="assets/js/viewport.jquery.js"></script>
<!--<< Magnific popup Js >>-->
<script src="assets/js/magnific-popup.min.js"></script>
<!--<< Tilt Js >>-->
<script src="assets/js/tilt.min.js"></script>
<!--<< Swiper Slider Js >>-->
<script src="assets/js/swiper-bundle.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="assets/js/wow.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="assets/js/nice-select.min.js"></script>
<!-- contact js -->
<script src="assets/js/contact.form.js"></script>
<!--<< Main.js >>-->
<script src="assets/js/main.js"></script>

<script src="assets/js/header.js"></script>

<script src="assets/js/marquee.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

<script>
        function openModal(el) {
            const modal = document.getElementById('foodModal');
            document.getElementById('modal-title').textContent = el.dataset.title;
            document.getElementById('modal-image').src = el.dataset.image;
            document.getElementById('modal-intro').textContent = el.dataset.intro;

            const pointsList = document.getElementById('modal-points');
            pointsList.innerHTML = '';
            try {
                const points = JSON.parse(el.dataset.points);
                points.forEach(point => {
                    const li = document.createElement('li');
                    li.textContent = point;
                    pointsList.appendChild(li);
                });
            } catch (e) {
                console.error("Failed to parse bullet points", e);
            }

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('foodModal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }
    </script>

<?php echo (isset($script) ? $script   : '')?>


