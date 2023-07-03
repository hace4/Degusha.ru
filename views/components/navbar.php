<?php
$navbar = <<<HTML
<nav class = 'navbar navbar-expand-lg '>
<div class = 'container-fluid'>
<a class = 'navbar-brand' href = '#'>Degusha crew</a>
<button class = 'navbar-toggler' type = 'button' data-bs-toggle = 'collapse' data-bs-target = '#navbarText' aria-controls = 'navbarText' aria-expanded = 'false' aria-label = 'Toggle navigation'>
<span class = 'navbar-toggler-icon'></span>
</button>
<div class = 'collapse navbar-collapse' id = 'navbarText'>
<ul class = 'navbar-nav me-auto mb-2 mb-lg-0'>
<li class = 'nav-item'>
<a class = 'nav-link active' aria-current = 'page' href = '/'>Home</a>
</li>
<li class = 'nav-item'>
<a class = 'nav-link' href = '#'>Features</a>
</li>
<li class = 'nav-item'>
<a class = 'nav-link' href = '#'>Pricing</a>
</li>
</ul>
<ul class = 'navbar-nav me-0  mb-0 mb-lg-0'>
<li class = 'nav-item'>
<a href = '/login' class = 'nav-link'>sign in</a>
</li>
<li class = 'nav-item'>
<a href = '#' class = 'nav-link'>sign up</a>
</li>
</ul>
</div>
</div>
</nav>
HTML;
echo $navbar;