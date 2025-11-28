<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'Sistem Informasi Siswa')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body.dark-mode {
            background: #121212 !important;
            color: #e6e6e6 !important;
        }

        .card.dark-mode {
            background: #1e1e1e !important;
            color: #fff !important;
            border-color: #444 !important;
        }

        .sidebar {
            height: 100vh;
            background: #0d6efd;
            padding: 20px;
            color: white;
        }

        .sidebar.dark-mode {
            background: #072f6b !important;
        }

        .navbar.dark-mode {
            background: #072f6b !important;
        }

        table.dark-mode {
            background: #1e1e1e !important;
            color: white !important;
        }
    </style>
</head>

<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <h4 class="fw-bold">Sistem Informasi Siswa</h4>
        <p>Dashboard Akademik</p>

        <a href="{{ route('dashboard') }}" class="btn btn-light w-100 mb-2">🏠 Dashboard</a>
        <a href="{{ route('siswa.index') }}" class="btn btn-light w-100 mb-2">🎓 Data Siswa</a>
        <a href="{{ route('profile') }}" class="btn btn-light w-100 mb-4">👤 Profil</a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger w-100">Keluar</button>
        </form>
    </div>

    <!-- CONTENT -->
    <div class="flex-grow-1">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-3" id="navbar">
            <div class="container-fluid">
                <span class="navbar-brand">Admin Manual</span>

                <div class="d-flex">
                    <button id="darkToggle" class="btn btn-outline-secondary">
                        🌙 Dark Mode
                    </button>
                </div>
            </div>
        </nav>

        <!-- PAGE CONTENT -->
        <div class="p-4">
            @yield('content')
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const toggle = document.getElementById('darkToggle');
    const body = document.body;
    const sidebar = document.getElementById('sidebar');
    const navbar = document.getElementById('navbar');

    // LOAD MODE
    if (localStorage.getItem("darkMode") === "enabled") {
        enableDark();
    }

    toggle.addEventListener("click", () => {
        if (body.classList.contains("dark-mode")) {
            disableDark();
        } else {
            enableDark();
        }
    });

    function enableDark() {
        body.classList.add("dark-mode");
        sidebar.classList.add("dark-mode");
        navbar.classList.add("dark-mode");

        document.querySelectorAll(".card").forEach(c => c.classList.add("dark-mode"));
        document.querySelectorAll("table").forEach(t => t.classList.add("dark-mode"));

        localStorage.setItem("darkMode", "enabled");
        toggle.innerHTML = "☀️ Light Mode";
    }

    function disableDark() {
        body.classList.remove("dark-mode");
        sidebar.classList.remove("dark-mode");
        navbar.classList.remove("dark-mode");

        document.querySelectorAll(".card").forEach(c => c.classList.remove("dark-mode"));
        document.querySelectorAll("table").forEach(t => t.classList.remove("dark-mode"));

        localStorage.setItem("darkMode", "disabled");
        toggle.innerHTML = "🌙 Dark Mode";
    }
</script>

</body>
</html>
