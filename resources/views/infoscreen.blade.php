@extends('layouts.app')

@section('title', 'Infoskærm')

@section('content')
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
    .section-box {
        background: white;
        border-radius: 10px;
        padding: 1rem;
        height: 100%;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
</style>

<div class="infoscreen-header">
    <div id="clockArea">
        <div>UGE <span id="weekNumber">XX</span> – <span id="clock">00:00</span></div>
    </div>
    <div class="logo">LOGO</div>
    <div>{{ \Carbon\Carbon::now()->locale('da')->isoFormat('dddd [d.] D MMMM YYYY') }}</div>
</div>

<div class="container-fluid mt-3">
    <div class="row g-3">
        <div class="col-md-3">
            <div class="section-box">
                <h4>Elever i praktik</h4>
                <ul>
                    <li>Bob Jensen <br><small>REGO</small></li>
                    <li>Knud Sørensen <br><small>proshop.dk</small></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="section-box">
                <h4>Ugens Menu</h4>
                <ul>
                    <li>Man: Kylling i karry</li>
                    <li>Tirs: Roastbeef</li>
                    <li>Ons: ...</li>
                    <li>Tors: ...</li>
                    <li>Fre: ...</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="section-box">
                <h4>Kommende aktiviteter</h4>
                <ul>
                    <li>Fre d.11/04 – LAN</li>
                    <li>Lør d.12/04 – Påskeferie</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="section-box">
                <h4>Billeder</h4>
                <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400/250?1" class="d-block w-100" alt="Billede 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400/250?2" class="d-block w-100" alt="Billede 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400/250?3" class="d-block w-100" alt="Billede 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Automatisk opdatering af klokken og uge
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
@endsection
