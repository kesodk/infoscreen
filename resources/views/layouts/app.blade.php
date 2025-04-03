<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <style>
        body {
            background: #f5f5f5;
            font-size: 1.2rem;
        }
        .infoscreen-header {
            background-color: #0d6efd;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .infoscreen-header .logo {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            flex-grow: 1;
        }
    </style>
</head>
<body>

    <div class="infoscreen-header">
        <div id="clockArea">
            <div>UGE <span id="weekNumber">XX</span> – <span id="clock">00:00</span></div>
        </div>
        <div class="logo">LOGO</div>
        <div>{{ \Carbon\Carbon::now()->locale('da')->isoFormat('dddd [d.] D MMMM YYYY') }}</div>
    </div>

    <main class="container-fluid mt-3">
        @yield('content')
    </main>

    <script>
        // Automatisk opdatering af klokkeslæt og uge
        function updateClock() {
            const now = new Date();
            const timeStr = now.toLocaleTimeString('da-DK', { hour: '2-digit', minute: '2-digit' });
            document.getElementById('clock').innerText = timeStr;

            const onejan = new Date(now.getFullYear(), 0, 1);
            const millisInDay = 86400000;
            const week = Math.ceil((((now - onejan) / millisInDay) + onejan.getDay() + 1) / 7);
            document.getElementById('weekNumber').innerText = week;
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>

</body>
</html>
