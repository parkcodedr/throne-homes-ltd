<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
    <i class="fa fa-gear"></i>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fa fa-power-off"></i>
  </a>
  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"> <?php echo csrf_field(); ?> </form>
</div>

<a href=""><?php /**PATH C:\laragon\www\thronehomesltd\resources\views/admin/backlayouts/menu_footer_buttons.blade.php ENDPATH**/ ?>