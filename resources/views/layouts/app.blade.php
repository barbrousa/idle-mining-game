<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Idle Mining Game')</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <aside class="sidebar">
        <div class="section">
            <p class="section-title">
                <span class="material-icons section-icon">terrain</span> Mine
            </p>
            <ul>
                <li class="menu-item">
                    <span class="material-icons">work</span> Exploitation
                </li>
                <li class="menu-item">
                    <span class="material-icons">construction</span> Machines
                </li>
                <li class="menu-item">
                    <span class="material-icons">precision_manufacturing</span> Drones
                </li>
            </ul>
        </div>

        <div class="section">
            <p class="section-title">
                <span class="material-icons section-icon">show_chart</span> Économie
            </p>
            <ul>
                <li class="menu-item">
                    <span class="material-icons">trending_up</span> Marché
                </li>
                <li class="menu-item">
                    <span class="material-icons">build</span> Forge
                </li>
            </ul>
        </div>

        <div class="section">
            <p class="section-title">
                <span class="material-icons section-icon">people</span> Gestion
            </p>
            <ul>
                <li class="menu-item">
                    <span class="material-icons">group</span> Employés
                </li>
                <li class="menu-item">
                    <span class="material-icons">inventory_2</span> Stockage
                </li>
                <li class="menu-item">
                    <span class="material-icons">monetization_on</span> Finances
                </li>
            </ul>
        </div>
    </aside>

    <main class="content">
        @yield('content')
    </main>

</body>
</html>
