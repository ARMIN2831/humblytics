<section class="container pt-12 mt-16 pb-24">

    <div class="flex flex-col gap-16 justify-center items-center">
        <div class="flex flex-col lg:flex-row justify-between w-full">
            <div class="flex flex-col gap-2">
                <h2 class="text-[#202020] text-4xl max-sm:text-2xl max-sm:text-3xl font-medium">Frequently Asked Questions</h2>
                <p class="text-lg max-sm:text-sm text-[#3f3f3f]">Don't see the answer you're looking for? Get in touch.</p>
            </div>
            <div class="flex justify-center items-center max-lg:w-full max-lg:mt-4">
                <a class="max-lg:w-full text-center border border-[#f0f0f0] text-black bg-white rounded-lg py-3 px-6 text-sm font-medium hover:shadow-inset4 hover:bg-[#fdfdfd]">Contact us</a>
            </div>
        </div>
        <div class="mt-16 w-full">
            <div class="flex flex-col gap-4">

                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#fcfcfc] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-[#333]">What happens if I go over my monthly page views limit?</div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[72px]': isOpen , 'h-[0px]': !isOpen }" class="w-full px-6 overflow-hidden transition transition-all duration-300">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-[#383838] font-sm max-sm:text-xs">
                                    As you approach 75% of your plan limit, we'll send you an email alert. Once you go past your plan limit, you will have a
                                    <span class="text-[#333] font-semibold">3 day grace </span>
                                    period to upgrade before we stop tracking.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#fcfcfc] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-[#333]">Are the views, events, and split test limits for each website or for all websites connected?</div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[48px]': isOpen , 'h-[0px]': !isOpen }" class="w-full px-6 overflow-hidden transition transition-all duration-300">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-[#383838] font-sm max-sm:text-xs">
                                    The plan limits apply for
                                    <span class="text-[#333] font-semibold">ALL websites </span>
                                    connected at an account level.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#fcfcfc] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-[#333]">Do I need to install a cookie-banner or capture constent?</div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[138px] max-lg:h-[160px]': isOpen , 'h-[0px]': !isOpen }" class="w-full px-6 overflow-hidden transition transition-all duration-300">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-[#383838] font-sm max-sm:text-xs">
                                    Our analytics collection process doesn't store or read cookies, local storage data, or persistent information on client devices or browsers. Unique users are anonymized through hashing their IP address and device characteristics (e.g., browser version, operating system, hardware information). Original IP addresses are discarded permanently post-hash generation. Device characteristics are grouped into higher-order categories (e.g., browser type, device type).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#fcfcfc] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-[#333]">Are you GDPR compliant?</div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[94px]': isOpen , 'h-[0px]': !isOpen }" class="w-full px-6 overflow-hidden transition transition-all duration-300">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-[#383838] font-sm max-sm:text-xs">
                                    We're not
                                    <span class="text-[#333] font-semibold">fully GDPR compliant yet </span>
                                    , but we're striving to work towards EU regulations and compliance requirements. If you'd like to use Humblytics when we're GDPR compliant, send us an email (support@humblytics.com) and we'll be happy to notify you when we are.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div @click="isOpen = !isOpen" x-data="{ isOpen: false }" class="border border-[#f0f0f0] bg-[#fcfcfc] rounded-md">
                    <div class="cursor-pointer rounded-md flex flex-row justify-between items-center py-5 px-6">
                        <div class="text-[#333]">How are you privacy focused?</div>
                        <div :class="{ 'rotate-45': isOpen }" class="ml-6 w-8 transition transition-all duration-300">
                            <div class="flex justify-center items-center w-4 h-4">
                                <svg width="100%" height="100%" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.3333 15.667V16.3336C25.3333 16.7018 25.0349 17.0003 24.6667 17.0003H17V24.667C17 25.0351 16.7015 25.3336 16.3333 25.3336H15.6667C15.2985 25.3336 15 25.0351 15 24.667V17.0003H7.3333C6.96511 17.0003 6.66663 16.7018 6.66663 16.3336V15.667C6.66663 15.2988 6.96511 15.0003 7.3333 15.0003H15V7.33365C15 6.96546 15.2985 6.66699 15.6667 6.66699H16.3333C16.7015 6.66699 17 6.96546 17 7.33365V15.0003H24.6667C25.0349 15.0003 25.3333 15.2988 25.3333 15.667Z" fill="currentColor"></path></svg>
                            </div>
                        </div>
                    </div>
                    <div :class="{ 'h-[70px]': isOpen , 'h-[0px]': !isOpen }" class="w-full px-6 overflow-hidden transition transition-all duration-300">
                        <div class="mb-6">
                            <div class="w-full max-w-[48rem]">
                                <p class="text-[#383838] font-sm max-sm:text-xs">
                                    We don't use cookies to track your visitor information removing the need to cookie consent banners.
                                    You can learn more about our data policy and how it works
                                    <span class="text-[#333] font-semibold underline">here.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
