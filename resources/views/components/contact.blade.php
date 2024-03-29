<div id="contact"
     class="flex lg:flex-row flex-col justify-between items-center w-full lg:mt-52 mt-20">

    <div class="lg:w-5/12 w-full lg:mt-0 mt-14">
        <img class="lg:hidden block lg:-mr-8 -mr-2" src="email.png" alt="">

        <div class="flex">
            <h1 class="lg:text-6xl text-5xl text-gray-900 mt-4 lg:mt-0">
                @lang('language.contact_us')
                <svg viewBox="0 0 430 11" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                       stroke-linecap="round">
                        <g id="Group-12" transform="translate(5.332587, 4.454647)" stroke-width="9.48488242">
                            <line x1="261.06439" y1="1.04535274" x2="418.805711" y2="1.47424412" id="Line"
                                  stroke="#49C6F3"
                                  transform="translate(340.115901, 1.000000) scale(-1, 1) translate(-340.115901, -1.000000) "></line>
                            <line x1="161.610862" y1="1.47424412" x2="238.105823" y2="1.04535274" id="Line"
                                  stroke="#F071A8"
                                  transform="translate(199.636618, 1.000000) scale(-1, 1) translate(-199.636618, -1.000000) "></line>
                            <line x1="0.474244121" y1="1.47424412" x2="137.832587" y2="1.04535274" id="Line"
                                  stroke="#FDDE40"
                                  transform="translate(69.000000, 1.000000) scale(-1, 1) translate(-69.000000, -1.000000) "></line>
                        </g>
                    </g>
                </svg>
            </h1>
        </div>

        <form method="POST" action="/emails">
            @csrf
            <div class="flex flex-col mt-10">

                <input name="name" type="text"
                       class="bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_name")">
                <input name="email" type="email"
                       class="mt-6 bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_email")">
                <input name="message" textarea
                       class="mt-6 bg-gray-200 border border-gray-300 focus:border-blue-400 focus:bg-gray-100 text-lg py-3 px-4 rounded-xl outline-none"
                       placeholder="@lang("language.form_message")">
                <div class="4/12">
                    <button type="submit"
                            class="my-10 outline-none bg-yellow-200 hover:bg-yellow-300 rounded-2xl items-center py-4 px-6 shadow mt-10 transition duration-200 ease-in transform hover:-translate-y-1 hover:scale-110">
                        @lang("language.form_button")

                    </button>
                </div>
            </div>
        </form>


    </div>
    <div class="lg:w-5/12 w-full">
        <img class="hidden lg:block lg:-mr-8 -mr-2" src="email.png" alt="">
        <div class="flex lg:flex-col flex-row justify-center lg:justify-start mt-10">
            <div class="flex items-center transform cursor-pointer hover:scale-110">
                <a class="flex flex-row items-center" href="https://www.instagram.com/iotkids/">
                    <img class="w-12 me-2" src="instagram.png" alt="">
                    <h1 class="hidden lg:block text-gray-800 text-lg">
                        instagram
                    </h1>
                </a>

            </div>
            <div class="flex items-center transform cursor-pointer hover:scale-110 lg:mt-6mt-0">
                <a class="flex flex-row items-center" href="https://www.facebook.com/IoTKIDS">
                    <img class="w-12 me-2" src="facebook.png" alt="">
                    <h1 class="hidden items-center lg:block text-gray-800 text-lg">
                        facebook
                    </h1>
                </a>
            </div>
            {{--            <div class="flex items-center">--}}
            {{--                <svg class="w-14" viewBox="0 0 82 82" version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
            {{--                     xmlns:xlink="http://www.w3.org/1999/xlink">--}}
            {{--                    <defs>--}}
            {{--                        <filter x="-26.7%" y="-26.7%" width="153.4%" height="153.4%" filterUnits="objectBoundingBox"--}}
            {{--                                id="filter-1">--}}
            {{--                            <feOffset dx="1" dy="1" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>--}}
            {{--                            <feGaussianBlur stdDeviation="3" in="shadowOffsetOuter1"--}}
            {{--                                            result="shadowBlurOuter1"></feGaussianBlur>--}}
            {{--                            <feColorMatrix--}}
            {{--                                    values="0 0 0 0 0.525490196   0 0 0 0 0.756862745   0 0 0 0 0.325490196  0 0 0 0.8 0"--}}
            {{--                                    type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>--}}
            {{--                            <feMerge>--}}
            {{--                                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>--}}
            {{--                                <feMergeNode in="SourceGraphic"></feMergeNode>--}}
            {{--                            </feMerge>--}}
            {{--                        </filter>--}}
            {{--                    </defs>--}}
            {{--                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
            {{--                        <g id="Artboard" transform="translate(-1302.000000, -1249.000000)">--}}
            {{--                            <g id="Group-8" filter="url(#filter-1)" transform="translate(1314.000000, 1261.000000)">--}}
            {{--                                <g id="More-Square" fill="#86C153" stroke="#323232" stroke-linecap="round"--}}
            {{--                                   stroke-linejoin="round" stroke-width="3">--}}
            {{--                                    <path d="M42.5459375,0.09440625 L15.4552187,0.09440625 C6.01459375,0.09440625 0.09584375,6.77878125 0.09584375,16.2381562 L0.09584375,41.763125 C0.09584375,51.2225 5.98334375,57.906875 15.4552187,57.906875 L42.5428125,57.906875 C52.0146875,57.906875 57.9084375,51.2225 57.9084375,41.763125 L57.9084375,16.2381562 C57.9084375,6.77878125 52.0146875,0.09440625 42.5459375,0.09440625 Z"--}}
            {{--                                          id="Path"></path>--}}
            {{--                                </g>--}}
            {{--                                <g id="Group" transform="translate(9.000000, 9.000000)">--}}
            {{--                                    <polygon id="Path" points="0 0 40 0 40 40 0 40"></polygon>--}}
            {{--                                    <path d="M7.75,28.6666667 C3.39696969,22.4873553 4.32172469,14.0344861 9.90784638,8.94253104 C15.4939681,3.85057594 23.9961172,3.71047567 29.7469732,8.61561758 C35.4978293,13.5207595 36.700583,21.9385711 32.5535089,28.257949 C28.4064347,34.577327 20.2052529,36.8238321 13.4166667,33.5 L5,35 L7.75,28.6666667 Z"--}}
            {{--                                          id="Path" stroke="#323232" stroke-width="2.5" fill="#FFFFFF"--}}
            {{--                                          stroke-linecap="round" stroke-linejoin="round"></path>--}}
            {{--                                    <path d="M15,16.6666667 C15,17.126904 15.373096,17.5 15.8333333,17.5 C16.2935706,17.5 16.6666667,17.126904 16.6666667,16.6666667 L16.6666667,15 C16.6666667,14.5397627 16.2935706,14.1666667 15.8333333,14.1666667 C15.373096,14.1666667 15,14.5397627 15,15 L15,16.6666667 C15,21.2690396 18.7309604,25 23.3333333,25 L25,25 C25.4602373,25 25.8333333,24.626904 25.8333333,24.1666667 C25.8333333,23.7064294 25.4602373,23.3333333 25,23.3333333 L23.3333333,23.3333333 C22.873096,23.3333333 22.5,23.7064294 22.5,24.1666667 C22.5,24.626904 22.873096,25 23.3333333,25"--}}
            {{--                                          id="Path" stroke="#323232" stroke-width="2.5" stroke-linecap="round"--}}
            {{--                                          stroke-linejoin="round"></path>--}}
            {{--                                </g>--}}
            {{--                            </g>--}}
            {{--                        </g>--}}
            {{--                    </g>--}}
            {{--                </svg>--}}
            {{--                <h1 class="hidden lg:block text-gray-800 text-lg">--}}
            {{--                    whatsapp--}}
            {{--                </h1>--}}
            {{--            </div>--}}
        </div>
    </div>

</div>