<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li <?= $this->router->class == 'home' ? 'class="active"' : '' ?> >
        <a href="<?= site_url() ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
    </li>

    <?php if ($this->ion_auth->is_admin() || $this->ion_auth->is_super_admin()): ?>
        <li class="treeview <?= in_array($this->router->class, array('settings', 'auth')) ? ' active' : '' ?>">
            <a href="/">
                <i class="fas fa-sliders-h"></i> <span>Administration</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li <?= $this->router->class == 'auth' && $this->router->method == 'index' ? 'class="active"' : '' ?>><a
                            href="<?= site_url('auth/index') ?>"><i class="fa fa-circle-o"></i>Manage Users</a></li>
                <li <?= $this->router->class == 'settings' && $this->router->method == 'index' ? 'class="active"' : '' ?>>
                    <a href="<?= site_url('settings') ?>"><i class="fa fa-circle-o"></i>Site Settings</a></li>
            </ul>

        </li>
        <li class="treeview <?= in_array($this->router->class, array('settings', 'auth')) ? ' active' : '' ?>">
            <a href="/">
                <i class="fas fa-box"></i> <span>Items</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li <?= $this->router->class == 'auth' && $this->router->method == 'index' ? 'class="active"' : '' ?>><a
                            href="<?= site_url('items') ?>"><i class="fa fa-circle-o"></i>List Items</a></li>
                <li <?= $this->router->class == 'settings' && $this->router->method == 'index' ? 'class="active"' : '' ?>>
                    <a href="<?= site_url('settings') ?>"><i class="fa fa-circle-o"></i>Site Settings</a></li>
            </ul>

        </li>

    <?php endif; ?>

</ul>