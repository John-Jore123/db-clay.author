<header id="header">
    <x-layout.hamburger />

    <nav class="nav-menu" id="navbar">
        <div class="w-auto">
            <img id="name_logo" src="{{ mix('images/name-logo.png') }}" alt="{{ config('app.name') }}">
        </div>
        <ul>
            @foreach ($sidebarItems as $item)
            <?php //dd($navbarItems) ?>
                <x-layout.navbar-item :href="$item['href']"
                                      :icon="$item['icon']"
                                      :label="$item['label']" />
            @endforeach
        </ul>
    </nav>  

    <footer>
        <img src="{{ asset('images/pageturner-logo-color.png') }}" alt="{{ config('app.name') }}">
        <p>Copyright &copy;<?php echo date('Y'); ?></p>
        <p>Pageturner, Press and Media. All Rights Reserved.</p>
    </footer> 
</header>