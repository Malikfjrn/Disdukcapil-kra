<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li id="dashboardMainMenu">
        <a href="<?php echo base_url('dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

        <!-- <li class="header">Settings</li> -->


        <?php if (in_array('createKelahiran', $user_permission) || in_array('updateKelahiran', $user_permission) || in_array('viewKelahiran', $user_permission) || in_array('deleteKelahiran', $user_permission)) : ?>
          <li id="kelahiranMainNav"><a href="<?php echo base_url('Kelahiran/') ?>"><i class="fa fa-files-o"></i> <span>Kelahiran</span></a></li>
        <?php endif; ?>

        <?php if (in_array('createKematian', $user_permission) || in_array('updateKematian', $user_permission) || in_array('viewKematian', $user_permission) || in_array('deleteKematian', $user_permission)) : ?>
          <li id="kematianMainNav"><a href="<?php echo base_url('Kematian/') ?>"><i class="fa fa-files-o"></i> <span>Kematian</span></a></li>
        <?php endif; ?>

        <?php if (in_array('createNikah', $user_permission) || in_array('updateNikah', $user_permission) || in_array('viewNikah', $user_permission) || in_array('deleteNikah', $user_permission)) : ?>
          <li id="nikahMainNav"><a href="<?php echo base_url('Nikah/') ?>"><i class="fa fa-files-o"></i> <span>Nikah</span></a></li>
        <?php endif; ?>

        <?php if (in_array('createPerceraian', $user_permission) || in_array('updatePerceraian', $user_permission) || in_array('viewPerceraian', $user_permission) || in_array('deletePerceraian', $user_permission)) : ?>
          <li id="perceraianMainNav"><a href="<?php echo base_url('Perceraian/') ?>"><i class="fa fa-files-o"></i> <span>Perceraian</span></a></li>
        <?php endif; ?>

        <?php if (in_array('createPerceraianislam', $user_permission) || in_array('updatePerceraianislam', $user_permission) || in_array('viewPerceraianislam', $user_permission) || in_array('deletePerceraianislam', $user_permission)) : ?>
          <li id="perceraianislamMainNav"><a href="<?php echo base_url('Perceraianislam/') ?>"><i class="fa fa-files-o"></i> <span>Perceraian Islam</span></a></li>
        <?php endif; ?>

        <?php if (in_array('createPensiun', $user_permission) || in_array('updatePensiun', $user_permission) || in_array('viewPensiun', $user_permission) || in_array('deletePensiun', $user_permission)) : ?>
          <li id="pensiunMainNav"><a href="<?php echo base_url('Pensiun/') ?>"><i class="fa fa-files-o"></i> <span>Pensiun</span></a></li>
        <?php endif; ?>

        <?php if (in_array('viewProfile', $user_permission)) : ?>
          <li id="profileMainNav"><a href="<?php echo base_url('users/profile/') ?>"><i class="fa fa-files-o"></i> <span>Profile</span></a></li>
        <?php endif; ?>

        <?php if ($user_permission) : ?>
        <?php if (in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)) : ?>
          <li class="treeview" id="userMainNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if (in_array('createUser', $user_permission)) : ?>
                <li id="createUserSubNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-circle-o"></i> Tambah User</a></li>
              <?php endif; ?>

              <?php if (in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)) : ?>
                <li id="manageUserSubNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i> Kelola User</a></li>
              <?php endif; ?>
            </ul>
          </li>
        <?php endif; ?>

        <?php if (in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)) : ?>
          <li class="treeview" id="groupMainNav">
            <a href="#">
            <i class="fa fa-users"></i>
              <span>Group</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if (in_array('createGroup', $user_permission)) : ?>
                <li id="createGroupSubMenu"><a href="<?php echo base_url('groups/create') ?>"><i class="fa fa-circle-o"></i> Tambah Group</a></li>
              <?php endif; ?>
              <?php if (in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)) : ?>
                <li id="manageGroupSubMenu"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-circle-o"></i> Kelola Group</a></li>
              <?php endif; ?>
            </ul>
          </li>
        <?php endif; ?>

      <?php endif; ?>

      


      <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>  