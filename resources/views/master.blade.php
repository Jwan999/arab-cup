<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <meta name="yandex-verification" content="6e72ede6ef2d9146"/>
    {{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <link rel="icon" href="robotnarecolor.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>كأس العرب</title>

    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .floating {
            animation-name: floating;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
            /*margin-left: 30px;*/
            margin-top: 5px;
        }

        @keyframes floating {
            0% {
                transform: translate(0, 0px);
            }
            50% {
                transform: translate(0, 50px);
            }
            100% {
                transform: translate(0, -0px);
            }
        }

        .yellow {
            color: #FDDE40;
        }

    </style>
</head>
<body class="bg-gray-100 relative">

<div class="details-modal">
    <div class="details-modal-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z"
                  fill="black"/>
        </svg>
    </div>
    <div class="details-modal-title">
        <h1>My details modal</h1>
    </div>
    <div class="details-modal-content">
        <p>
            You can click the X in the corner or click the overlay to close this modal.
            Something like this could be useful as a nice way to show additional information,
            but that's about as far as I would take it. It's just a nice way of styling the details element.
        </p>
    </div>
</div>
</details>
@if(session('success'))
    <div class="flex justify-center">
        <div class="rounded-xl px-5 py-3 bg-pink-200 text-gray-900 text-lg lg:w-4/12 w-8/12 mt-16 fixed z-10 items-center text-center">
            {{ session()->pull('success')}}
        </div>
    </div>
@endif

<div dir="@lang("language.dir")" id="app">

    <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:justify-between lg:py-3 py-2">

        <div class="flex-1 lg:flex-none md:flex-none flex justify-between items-center">
            <a class="lg:w-1/12 w-2/12" href="#">
                <img src="robotnarecolor.png" alt="">
            </a>
            <h1 class="w-10/12 ms-10 lg:text-2xl text-xl self-center">
                @lang("language.contest_name")
            </h1>
        </div>

        <label for="menu-toggle" class="pointer-cursor lg:hidden block">

            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                 viewBox="0 0 20 20">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>

        </label>

        <input class="hidden" type="checkbox" id="menu-toggle"/>
        <div class="hidden lg:flex lg:items-center lg:justify-between lg:w-auto md:w-full sm:w-full w-full" id="menu">

            <scrollactive active-class="active"
                          class="lg:flex items-center justify-between text-lg text-gray-700 pt-4"
                          :offset="100" :duration="800"
                          bezier-easing-value=".5,0,.35,1">

                {{--            <a href="#vision"--}}
                {{--               class="scrollactive-itemscrollactive-item  lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-yellow-300">--}}
                {{--                الرؤية--}}
                {{--            </a>--}}

                <a href="#goals"
                   class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                    @lang("language.goals")

                </a>

                <a href="#stages"
                   class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                    @lang("language.stages")
                </a>

                <a href="#participation"
                   class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                    @lang("language.conditions")
                </a>

                <a href="#organizers"
                   class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                    @lang("language.organizers")

                </a>


                <a href="#partners"
                   class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                    @lang("language.partners")
                </a>

                <a href="#contact"
                   class="scrollactive-item lg:p-4 py-3 px-0 block border-b-4 transition duration-300 ease-in-out transform hover:scale-110 border-transparent hover:border-yellow-300">
                    @lang("language.contact_us")
                </a>

            </scrollactive>

            <div @click="translate()"
                 class="flex lg:ms-28 ms-0 justify-start lg:flex-row-reverse flex-row items-center cursor-pointer transform hover:scale-110 transition duration-300 ease-in-out pt-3">
                <img class="lg:w-10 w-8" src="atoe.png" alt="">
                <h1 class="lg:me-6 me-0 ms-6 lg:ms-0 text-xl text-gray-900 items-center">
                    @lang("language.language")
                </h1>
            </div>

        </div>

    </header>

    <div class="lg:mx-24 mx-6 z-10">

        @include('components.welcoming')
        {{--    <div id="vision">--}}
        {{--        @include('components/vision')--}}
        {{--    </div>--}}
        <div id="goals">
            @include('components.goals')

        </div>
        <div id="stages">
            @include('components.stages')

        </div>
        <div id="participation">
            @include('components.participation')

        </div>
        <div id="organizers">
            @include('components.organizers')
        </div>

    </div>

    <div dir="@lang("language.dir")" id="partners">
        @include('components/partners')

    </div>

    <div id="contact" dir="@lang("language.dir")" class="lg:mx-24 mx-6 z-10">
        @include('components.contact')
    </div>

    {{--footer--}}
    <div id="footer" class="bg-yellow-300 w-full items-center p-10 mt-20">
        @lang("language.footer")
    </div>

</div>

<script src="js/app.js"></script>
<script>
    let vue = new Vue({
        el: "#app",
        data: {
            // complete: true,
        },
        methods: {
            translate() {
                location.href = '/?language=@lang("language.lang_code")'
            }
        },
        mounted() {
            // setTimeout(this.done = false, 10000);
        }
    })
</script>
</body>
</html>