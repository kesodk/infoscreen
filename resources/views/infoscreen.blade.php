@extends('layouts.app')

@section('title', 'Infoskærm')

@section('content')
<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    .full-height {
        height: calc(100vh - 130px);
        /* minus header */
    }

    .section-box {
        background: white;
        border-radius: 10px;
        padding: 1rem;
        height: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container-fluid">
    <div class="row full-height g-3">
        <!-- Kolonne 1: Elever i praktik -->
        <div class="col-md-3">
            <div class="section-box h-100">
                <h4>Elever i praktik</h4>

                <!--  -->
                <div class="d-flex flex-column gap-3">
                    <!-- Én elev -->
                    <div class="d-flex align-items-center">
                        <img src="https://logo.clearbit.com/grundfos.com" alt="Grundfos logo" class="rounded me-3" style="width: 40px; height: 40px;">
                        <div>
                            <div class="fw-bold">Josiah</div>
                            <div class="text-muted small">www.grundfos.com</div>
                        </div>
                    </div>

                    <!-- Én elev -->
                    <div class="d-flex align-items-center">
                        <img src="https://logo.clearbit.com/cykelgear.dk" alt="Cykelgear logo" class="rounded me-3" style="width: 40px; height: 40px;">
                        <div>
                            <div class="fw-bold">Frederik</div>
                            <div class="text-muted small">www.cykelgear.dk</div>
                        </div>
                    </div>

                    <!-- Én elev -->
                    <div class="d-flex align-items-center">
                        <img src="https://logo.clearbit.com/proshop.dk" alt="Proshop logo" class="rounded me-3" style="width: 40px; height: 40px;">
                        <div>
                            <div class="fw-bold">Tobias</div>
                            <div class="text-muted small">www.proshop.dk</div>
                        </div>
                    </div>
                </div>

                <!--  -->

            </div>
        </div>

        <!-- Kolonne 2: Ugens Menu -->
        <div class="col-md-3">
            <div class="section-box h-100">
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

        <!-- Kolonne 3+4: Aktiviteter + Billeder -->
        <div class="col-md-6 d-flex flex-column gap-3">
            <!-- Kommende aktiviteter (øverst) -->
            <div class="section-box flex-fill">
                <h4>Kommende aktiviteter</h4>
                <ul>
                    <li>Fre d.11/04 – LAN</li>
                    <li>Lør d.12/04 – Påskeferie</li>
                </ul>
            </div>

            <!-- Billeder (nederst) -->
            <div class="section-box flex-fill">
                <h4>Billeder</h4>
                <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/800/300?1" class="d-block w-100" alt="Billede 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/800/300?2" class="d-block w-100" alt="Billede 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/800/300?3" class="d-block w-100" alt="Billede 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection