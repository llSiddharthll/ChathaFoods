<div class="group breadcumb-section relative overflow-hidden">
  <!-- Background Image -->
  <div class="scale-[1.1] group-hover:scale-[1] transition-transform duration-700 breadcumb-wrapper bg-cover bg-center relative" style="background-image: url('./assets/img/banner/CF Factory-2.jpg');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Content -->
    <div class="container relative z-10">
      <div class="row">
        <div class="col-12">
          <div class="breadcumb-content text-white">
            <?php if (!empty($mainTitle)) : ?>
              <h1 class="breadcumb-title text-white"><?php echo $mainTitle;?></h1>
            <?php endif; ?>
            <ul class="breadcumb-menu flex gap-2">
              <?php if (!empty($Title)) : ?>
                <li><a href="index.php" class="text-white"><?php echo $Title;?></a></li>
              <?php endif; ?>
              <li class="text-white">/</li>
              <?php if (!empty($Title2)) : ?>
                <li class="active text-red-500"><?php echo $Title2;?></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>