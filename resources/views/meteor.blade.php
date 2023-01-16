<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meteor</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
    {{-- main elements --}}
    <div class="container text-center">
        <div class="row justify-content-md-center">
            {{-- padding --}}
            <div class="p-3"></div>
            {{-- main card --}}
            <div>
                <div
                variant="subtle"
                class="drac-box drac-card drac-card-subtle drac-border-cyan drac-bg-cyan drac-p-md"
                >
                    <p class="drac-text drac-text-lg drac-text-center drac-text-white">
                        <i class="fa-solid fa-cloud-sun-rain fa-xl"></i>
                        Light rain
                    </p>
                    <p class="drac-text drac-text-lg drac-text-center drac-text-white">
                        <i class="fa-solid fa-temperature-low fa-2xl"></i>
                        {{-- <i class="fa-solid fa-0 fa-2xl"></i> --}}
                        <i class="fa-solid fa-6 fa-2xl"></i>
                    </p>
                    <p class="drac-text drac-text-center drac-text-white">
                        Feels like 1
                    </p>
                    <p class="drac-text drac-text-center drac-text-white">
                        Ulyanowsk; Russia
                    </p>
                </div>
            </div>
            {{-- padding --}}
            <div class="p-3"></div>
            {{-- ApexChart --}}
            <div id="mainChart"></div>
            {{-- table card --}}
            <div>
                 <div
                 variant="subtle"
                 class="drac-box drac-bg-black-secondary drac-rounded-lg drac-p-sm"
                 >
                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col">
                                <p class="drac-text drac-line-height drac-text-white">Wind</p>
                            </div>
                            <div class="col">
                                <p class="drac-text drac-line-height drac-text-white">Humidity</p>
                            </div>
                            <div class="col">
                                <p class="drac-text drac-line-height drac-text-white">UV index</p>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                <span class="drac-text drac-line-height drac-text-white">Pressure</span>
                            </div>
                            <div class="col">
                                <span class="drac-text drac-line-height drac-text-white">Visibility</span>
                            </div>
                            <div class="col">
                                <span class="drac-text drac-line-height drac-text-white">Dew point</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3"></div>
            {{-- minicards carousel --}}
            <div class="drac-box">
                <div class="container-fluid drac-scrollbar-cyan">
                    <div class="hstack gap-3">
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                        @include('components.miniCardCarousel')
                    </div>
                </div>
            </div>
            {{-- divider --}}
            <div class="drac-box drac-mb-sm">
                <hr class="drac-divider drac-border-cyan" />
            </div>
            {{-- tabs (need to make other file) --}}

            <div class="container">
                <ul class="drac-tabs drac-tabs-purple">
                    <li class="tablinks drac-tab">
                        <a class="drac-tab-link drac-text" onclick="openView(event, 'Simple')">Simple</a>
                    </li>
                    <li class="tablinks drac-tab">
                        <a class="drac-tab-link drac-text" onclick="openView(event, 'Extended')">Extended</a>
                    </li>
                </ul>
            </div>
            <div class="tabcontent" id="Simple">
                @include('components.simpleTabElement')

            </div>
            <div class="tabcontent" id="Extended">
                @include('components.extendedTabContent')
            </div>
            <script>
                // Get the element with id="defaultOpen" and click on it
                
            </script>

            <div class="p-3"></div>
        </div>
    </div>


</body>
</html>
