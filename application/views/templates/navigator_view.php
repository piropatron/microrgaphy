<header class="header cf">
    <div>
        <nav class="header-menu cf">
            <ul>
                <?php foreach ($menu as $k => $v): ?>
                <li>
					<a class="menu-link" href="<?php echo base_url().$k.'/'.$v[0];?>"><?=ucwords($k)?></a>
                </li>        
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>