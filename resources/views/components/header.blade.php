<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8f8f8]">
    <header class="h-20 bg-white flex items-center border border-b-[#f2f4f7] z-[60] relative">
        <div x-data="{ isOpen : false }" x-init="isOpen = window.innerWidth < 768; window.addEventListener('resize', () => { isOpen = window.innerWidth < 1024 })" class="container h-[42px] w-full flex flex-row justify-between items-center">
            <div class="z-20">
                <img class="h-6 cursor-pointer" src="{{ asset('assets/photos/logo.svg') }}">
            </div>
            <div class="absolute left-0 w-full h-full z-10 bg-white lg:hidden"></div>
            <div :class="{ '-top-[30rem]' : isOpen , 'top-20' : !isOpen  }" class="flex flex-col lg:flex-row overflow-hidden lg:justify-between w-full max-lg:pt-4 max-lg:absolute max-lg:h-screen max-lg:left-0 max-lg:bg-white z-[-1] transition transition-all duration-700">

                <div class="flex flex-row items-center gap-6">

                    <div class="flex flex-col lg:flex-row gap-1 max-lg:w-full">
                        <a href="/pricing" class="py-3 px-4 font-inter text-[15px] font-medium text-[#333] cursor-pointer hover:text-[#344054] transition transition-all duration-300">Pricing</a>
                        <div x-data="{ isHovered: false }" @mouseover="isHovered = true" @mouseleave="isHovered = false" class="relative flex flex-row pr-2 mr-2">
                            <a class="py-3 px-4 font-inter text-[15px] font-medium text-[#333] cursor-pointer hover:text-[#344054] transition transition-all duration-300">Resources</a>
                            <div :class="{ 'rotate-180': isHovered }" class="absolute top-3 right-0 cursor-pointer transition transition-all duration-300">
                                <svg width="16" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div :class="{ 'header-transform2 z-20': isHovered , '': !isHovered }" class="flex flex-col gap-2 w-80 rounded-xl overflow-hidden p-3 border border-[#eaecf0] bg-white shadow-shadow1 absolute top-10 -left-[70px] header-transform1 transition transition-all duration-300 -z-10">
                                <div>
                                    <a class="flex flex-row rounded-xl p-3 transition transition-all duration-300 gap-2 hover:bg-[#f9fafb]">
                                        <div>
                                            <div class="text-[#ff7a00] w-[1.125rem] h-[1.125rem]">
                                                <svg width="18" height="18" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 19.5V16.5H7C5.34315 16.5 4 17.8431 4 19.5M8.8 22.5H16.8C17.9201 22.5 18.4802 22.5 18.908 22.282C19.2843 22.0903 19.5903 21.7843 19.782 21.408C20 20.9802 20 20.4201 20 19.3V5.7C20 4.57989 20 4.01984 19.782 3.59202C19.5903 3.21569 19.2843 2.90973 18.908 2.71799C18.4802 2.5 17.9201 2.5 16.8 2.5H8.8C7.11984 2.5 6.27976 2.5 5.63803 2.82698C5.07354 3.1146 4.6146 3.57354 4.32698 4.13803C4 4.77976 4 5.61984 4 7.3V17.7C4 19.3802 4 20.2202 4.32698 20.862C4.6146 21.4265 5.07354 21.8854 5.63803 22.173C6.27976 22.5 7.11984 22.5 8.8 22.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-[#202020] mb-1 font-medium text-sm">Guides</div>
                                            <div class="text-sm font-normal">Insights and tips on how to use Humblytics for your site.</div>
                                        </div>
                                    </a>
                                    <a class="flex flex-row rounded-xl p-3 transition transition-all duration-300 gap-2 hover:bg-[#f9fafb]">
                                        <div>
                                            <div class="text-[#ff7a00] w-[1.125rem] h-[1.125rem]">
                                                <svg width="18" height="18" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 22.5C17.5228 22.5 22 18.0228 22 12.5C22 6.97715 17.5228 2.5 12 2.5C6.47715 2.5 2 6.97715 2 12.5C2 18.0228 6.47715 22.5 12 22.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.5 9.46533C9.5 8.98805 9.5 8.74941 9.59974 8.61618C9.68666 8.50007 9.81971 8.42744 9.96438 8.4171C10.1304 8.40525 10.3311 8.53429 10.7326 8.79239L15.4532 11.8271C15.8016 12.051 15.9758 12.163 16.0359 12.3054C16.0885 12.4298 16.0885 12.5702 16.0359 12.6946C15.9758 12.837 15.8016 12.949 15.4532 13.1729L10.7326 16.2076C10.3311 16.4657 10.1304 16.5948 9.96438 16.5829C9.81971 16.5726 9.68666 16.4999 9.59974 16.3838C9.5 16.2506 9.5 16.012 9.5 15.5347V9.46533Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-[#202020] mb-1 font-medium text-sm">Video tutorials</div>
                                            <div class="text-sm font-normal">Tutorials and guides on using Humblutics for your site.</div>
                                        </div>
                                    </a>
                                    <a class="flex flex-row rounded-xl p-3 transition transition-all duration-300 gap-2 hover:bg-[#f9fafb]">
                                        <div>
                                            <div class="text-[#ff7a00] w-[1.125rem] h-[1.125rem]">
                                                <svg width="18" height="18" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 2.76953V6.90007C14 7.46012 14 7.74015 14.109 7.95406C14.2049 8.14222 14.3578 8.2952 14.546 8.39108C14.7599 8.50007 15.0399 8.50007 15.6 8.50007H19.7305M14 18L16.5 15.5L14 13M10 13L7.5 15.5L10 18M20 10.4882V17.7C20 19.3802 20 20.2202 19.673 20.862C19.3854 21.4265 18.9265 21.8854 18.362 22.173C17.7202 22.5 16.8802 22.5 15.2 22.5H8.8C7.11984 22.5 6.27976 22.5 5.63803 22.173C5.07354 21.8854 4.6146 21.4265 4.32698 20.862C4 20.2202 4 19.3802 4 17.7V7.3C4 5.61984 4 4.77976 4.32698 4.13803C4.6146 3.57354 5.07354 3.1146 5.63803 2.82698C6.27976 2.5 7.11984 2.5 8.8 2.5H12.0118C12.7455 2.5 13.1124 2.5 13.4577 2.58289C13.7638 2.65638 14.0564 2.77759 14.3249 2.94208C14.6276 3.1276 14.887 3.38703 15.4059 3.90589L18.5941 7.09411C19.113 7.61297 19.3724 7.8724 19.5579 8.17515C19.7224 8.44356 19.8436 8.7362 19.9171 9.0423C20 9.38757 20 9.75445 20 10.4882Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-[#202020] mb-1 font-medium text-sm">Tools and Calculators</div>
                                            <div class="text-sm font-normal">Generate UTM links or measure sample sizes for your Split Test.</div>
                                        </div>
                                    </a>
                                    <a class="flex flex-row rounded-xl p-3 transition transition-all duration-300 gap-2 hover:bg-[#f9fafb]">
                                        <div>
                                            <div class="text-[#ff7a00] w-[1.125rem] h-[1.125rem]">
                                                <svg width="18" height="18" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.13626 9.63628L4.92893 5.42896M4.92893 19.5711L9.16797 15.3321M14.8611 15.3638L19.0684 19.5711M19.0684 5.42896L14.8287 9.66862M22 12.5C22 18.0228 17.5228 22.5 12 22.5C6.47715 22.5 2 18.0228 2 12.5C2 6.97715 6.47715 2.5 12 2.5C17.5228 2.5 22 6.97715 22 12.5ZM16 12.5C16 14.7091 14.2091 16.5 12 16.5C9.79086 16.5 8 14.7091 8 12.5C8 10.2909 9.79086 8.5 12 8.5C14.2091 8.5 16 10.2909 16 12.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-[#202020] mb-1 font-medium text-sm">FAQs and Support</div>
                                            <div class="text-sm font-normal">Have a question or need troubleshooting help?</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="py-3 px-4 font-inter text-[15px] font-medium text-[#333] cursor-pointer hover:text-[#344054] transition transition-all duration-300">For Webflow</a>
                        <a class="py-3 px-4 font-inter text-[15px] font-medium text-[#333] cursor-pointer hover:text-[#344054] transition transition-all duration-300">For Framer</a>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-4 text-center max-lg:p-4 max-lg:pt-8 z-0">
                    <a class="cursor-pointer py-3 px-6 border border-[#f0f0f0] rounded-lg text-sm font-medium leading-4">Log in</a>
                    <a class="cursor-pointer py-3 px-6 border border-[#f0f0f0] rounded-lg text-sm font-medium leading-4 bg-black text-white hover:bg-[#1b1b1b] hover:shadow-inset1">Start Tracking for Free!</a>
                </div>
            </div>

            <div @click="isOpen = !isOpen" class="flex flex-col justify-center items-center w-[48px] h-[48px] lg:hidden z-20">
                <div class="bg-[#344054] h-[2px] w-[24px] rounded-2xl"></div>
                <div class="bg-[#344054] h-[2px] w-[24px] rounded-2xl my-[6px]"></div>
                <div class="bg-[#344054] h-[2px] w-[24px] rounded-2xl"></div>
            </div>
        </div>
    </header>

