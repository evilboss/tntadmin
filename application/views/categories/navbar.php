<nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills nav-fill">
    <div class="col-2">
    </div>
    <div class="col-10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <h1></h1>
            <ul class="navbar-nav">
                <li class="nav-item <?= $this->router->method == 'categories' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo base_url("categories"); ?>">All<span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= $this->router->method == 'brands' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo base_url("categories/brands"); ?>">Brand<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item  <?= $this->router->method == 'manufacturers' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?php echo base_url("categories/manufacturers"); ?>">Manufacturer</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $this->router->method == 'producttypes' ? 'active' : '' ?>" href="<?php echo base_url("categories/producttypes"); ?>">Product Type</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $this->router->method == 'genres' ? 'active' : '' ?>"
                       href="<?php echo base_url("categories/genres"); ?>">Genre</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
