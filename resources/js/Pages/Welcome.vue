<script setup>
    import { Head, Link } from '@inertiajs/vue3';
  
    defineProps({
        canLogin: {
            type: Boolean,
        },
        canRegister: {
            type: Boolean,
        },
        laravelVersion: {
            type: String,
            required: true,
        },
        phpVersion: {
            type: String,
            required: true,
        },
    });

    function handleImageError() {
        document.getElementById('screenshot-container')?.classList.add('!hidden');
        document.getElementById('docs-card')?.classList.add('!row-span-1');
        document.getElementById('docs-card-content')?.classList.add('!flex-row');
        document.getElementById('background')?.classList.add('!hidden');
    }


</script>

<template>

    <Head title="Welcome" />

    <div class="">
        <header class="flex items-center justify-center gap-2 pt-5 bg-black px-20">
            <div class="flex">
                <svg class="h-12 w-auto text-white lg:h-16 lg:text-white" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor" />
                </svg>
            </div>
            <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-center gap-6">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                    class="group rounded-md px-3 py-2 text-white font-medium text-lg">
                    Dashboard
                    <div class="bg-white h-[2.5px] w-0 group-hover:w-full transition-all duration-500"></div>
                </Link>

                <template v-else>
                    <Link :href="route('login')"
                        class="group rounded-md px-3 py-2 text-white font-medium text-lg">
                        Home
                        <div class="bg-white h-[2.5px] w-0 group-hover:w-full transition-all duration-500"></div>
                    </Link>

                    <Link v-if="canRegister" :href="route('register')"
                        class="group rounded-md px-3 py-2 text-white font-medium text-lg">
                        Contato
                        <div class="bg-white h-[2.5px] w-0 group-hover:w-full transition-all duration-500"></div>
                    </Link>
                </template>
            </nav>
        </header>

        <main>
            <div class="md:flex bg-black min-h-[20vw] text-white px-24 py-8">
                <div class="w-1/2 flex pt-7">
                    <h2 class="text-3xl font-semibold"><span class="text-[#AD2831]">Lorem ipsum dolor sit amet, consectetur</span> adipiscing elit. Nullam id felis suscipit, tincidunt nulla sed, egestas nisi. Vivamus non sollicitudin orci.</h2>
                </div>
                <div class="w-1/2 flex justify-center">
                    <img src="/images/imagem-teste-02.jpg" alt="Imagem de teste" class="rounded h-72 w-auto" />
                </div>
            </div>
            <div class="flex mt-10 px-24 py-10 gap-8">
                <div class="w-1/3">
                    <img  src="/images/homeImg.jpg" alt="Imagem de teste" class="rounded w-auto h-80 ">
                </div>
                <div class="w-2/3 py-4 ">
                    <h2 class="text-4xl font-bold text-gray-800 ">Sobre mim</h2>
                    <p class="text-gray-600 mt-6 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue dolor, mattis sed nunc ac, sodales convallis urna. Quisque molestie quam ante, in ultrices leo consequat vitae. Donec non est erat. Vestibulum vestibulum, diam sollicitudin porttitor congue, dolor mauris pulvinar est, sit amet sollicitudin felis mauris eget neque. Ut lobortis augue leo, vitae congue erat pharetra in. Fusce aliquet nunc sit amet arcu elementum malesuada. Maecenas commodo, justo ac placerat faucibus, magna enim maximus felis, sit amet gravida mauris risus vitae odio.</p>
                </div>
            </div>
            <div class="mt-10 px-24 bg-[#171717] py-12">
                <h2 class="text-white font-bold text-3xl">Escute em qualque Lugar</h2>
                <div class="mt-12 flex flex-col md:flex-row items-center justify-center gap-10">
                    <a href="#">
                        <button type="button" class="shadow-[0_5px_20px_-5px_rgba(227,227,227,0.3)] text-white hover:before:bg-redborder-red-500 relative text-sm px-10 py-8 text-center inline-flex items-center me-2 mb-2 w-[13rem] md:w-[15rem] overflow-hidden bg-black  transition-all before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-white before:transition-all before:duration-500 hover:text-black hover:before:left-0 hover:before:w-full rounded-lg">
                            <span class="text-center inline-flex items-center z-10">
                                <svg width="40px" height="40px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">    <title>Spotify-color</title><desc>Created with Sketch.</desc><defs></defs><g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Color-" transform="translate(-200.000000, -460.000000)" fill="#00DA5A">
                                    <path d="M238.16,481.36 C230.48,476.8 217.64,476.32 210.32,478.6 C209.12,478.96 207.92,478.24 207.56,477.16 C207.2,475.96 207.92,474.76 209,474.4 C217.52,471.88 231.56,472.36 240.44,477.64 C241.52,478.24 241.88,479.68 241.28,480.76 C240.68,481.6 239.24,481.96 238.16,481.36 M237.92,488.08 C237.32,488.92 236.24,489.28 235.4,488.68 C228.92,484.72 219.08,483.52 211.52,485.92 C210.56,486.16 209.48,485.68 209.24,484.72 C209,483.76 209.48,482.68 210.44,482.44 C219.2,479.8 230,481.12 237.44,485.68 C238.16,486.04 238.52,487.24 237.92,488.08 M235.04,494.68 C234.56,495.4 233.72,495.64 233,495.16 C227.36,491.68 220.28,490.96 211.88,492.88 C211.04,493.12 210.32,492.52 210.08,491.8 C209.84,490.96 210.44,490.24 211.16,490 C220.28,487.96 228.2,488.8 234.44,492.64 C235.28,493 235.4,493.96 235.04,494.68 M224,460 C210.8,460 200,470.8 200,484 C200,497.2 210.8,508 224,508 C237.2,508 248,497.2 248,484 C248,470.8 237.32,460 224,460" id="Spotify"></path></g></g>
                                </svg>
                                <p class="ps-4 text-left">
                                    <span class="text-sm font-light">Escute no:</span><br><span class="text-lg">Spotify</span>
                                </p>
                            </span>
                        </button>
                    </a>
                    <a href="#">							
                        <button class="shadow-[0_5px_20px_-5px_rgba(227,227,227,0.3)] text-white hover:before:bg-redborder-red-500 relative text-sm px-10 py-8 text-center inline-flex items-center me-2 mb-2 w-[13rem] md:w-[15rem] overflow-hidden bg-black  transition-all before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-white before:transition-all before:duration-500 hover:text-black hover:before:left-0 hover:before:w-full rounded-lg">
                            <span class="text-center inline-flex items-center z-10">
                                <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" class="fill-white" aria-label="Apple Music" role="img" viewBox="0 0 512 512">
                                    <rect width="512" height="512" rx="15%" fill="url(#g)"/><linearGradient id="g" x1=".5" y1=".99" x2=".5" y2=".02"><stop offset="0" stop-color="#FA233B"/><stop offset="1" stop-color="#FB5C74"/></linearGradient><path d="M199 359V199q0-9 10-11l138-28q11-2 12 10v122q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69V88s0-20-17-15l-170 35s-13 2-13 18v203q0 15-45 20c-57 9-48 105 30 79 30-11 35-40 35-69"/>
                                </svg>
                                <p class="ps-4 text-left">
                                    <span class="text-sm font-light">Escute no:</span><br><span class="text-lg">Apple Music</span>
                                </p>
                            </span>
                        </button>
                    </a>
                    <a href="#">							
                        <button class="shadow-[0_5px_20px_-5px_rgba(227,227,227,0.3)] text-white hover:before:bg-redborder-red-500 relative text-sm px-10 py-8 text-center inline-flex items-center me-2 mb-2 w-[13rem] md:w-[15rem] overflow-hidden bg-black  transition-all before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-white before:transition-all before:duration-500 hover:text-black hover:before:left-0 hover:before:w-full rounded-lg">
                            <span class="text-center inline-flex items-center z-10">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="40px" height="40px" fill="#FF0033" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                </svg>

                                <p class="ps-4 text-left">
                                    <span class="text-sm font-light">Escute no:</span><br><span class="text-lg">Youtube</span>
                                </p>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-10 px-24">
                <h2 class="text-gray-800 font-bold text-3xl">Serviços</h2>
            </div>
        </main>

        <footer class="mt-10 py-10 text-center text-white bg-black font-medium">
            Todos os direitos reservados ©️
        </footer>
    </div>
</template>
