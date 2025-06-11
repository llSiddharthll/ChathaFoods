
  $(document).ready(function () {
    $('.category').on('click', function () {
      
      const target = $(this).data('target');
      
      const tabButton = $(`[data-bs-target="${target}"]`);
      if (tabButton.length) {
        
        tabButton.click();
      } else {
        console.warn('No tab button found for:', target);
      }
    });
  });