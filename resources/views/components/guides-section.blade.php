<section class="container pt-12 mt-16 pb-24">
    <div class="flex flex-col mb-12 w-full gap-2">
        <h2 class="text-3xl font-medium text-[#202020]">Quick Start: Installation Guide</h2>
        <p class="text-[#3f3f3f]">Learn how to get started with Humblytics.</p>
    </div>

    <div class="grid grid-cols-2 gap-8 pb-12">
        <a class="flex flex-col gap-2">
            <img class="overflow-hidden rounded-md w-full h-[16rem] bg-[url('{{ asset('assets/photos/guide1.png') }}')] bg-center bg-no-repeat bg-[length:496px_16rem] object-contain" alt="" src="{{ asset('assets/photos/guide1.png') }}">
            <div class="text-[#3f3f3f] text-xs">May 12, 2024</div>
            <h1 class="text-[#202020] font-medium">How to Add Framer Analytics to Your Website</h1>
        </a>
        <a class="flex flex-col gap-2">
            <img class="overflow-hidden rounded-md w-full h-[16rem] bg-[url('{{ asset('assets/photos/guide2.png') }}')] bg-center bg-no-repeat bg-[length:496px_16rem] object-contain" alt="" src="{{ asset('assets/photos/guide2.png') }}">
            <div class="text-[#3f3f3f] text-xs">May 12, 2024</div>
            <h1 class="text-[#202020] font-medium">How to Add Webflow Analytics to Your Website</h1>
        </a>
    </div>

    <div class="my-4 bg-[#f0f0f0] w-full h-px"></div>

    <div class="flex flex-col mb-12 w-full gap-2">
        <h2 class="text-3xl font-medium text-[#202020]">For Marketers: Accelerate Growth with Webflow and Framer A/B Testing</h2>
        <p class="text-[#3f3f3f]">Learn how to increase conversions with A/B Split Testing for Webflow and Framer.</p>
    </div>

    <div class="grid grid-cols-3 gap-8 pb-4">
        @include('components.guide-item',['date' => 'May 21, 2024' ,'des' => 'The Ultimate Glossary of CRO and Split Testing Terms','img' => asset('assets/photos/g1.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => '5 Tips to Increase Your Above-the-Fold Website Section Conversions','img' => asset('assets/photos/g2.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => 'The Ultimate Webflow SEO Guide','img' => asset('assets/photos/g3.png')])
        @include('components.guide-item',['date' => 'May 21, 2024' ,'des' => 'The Ultimate Guide to Collecting and Acting On Website Analytics','img' => asset('assets/photos/g4.png')])
        @include('components.guide-item',['date' => 'May 13, 2024' ,'des' => 'A/B Split Testing: 5 Key Reasons for Higher Web Conversions','img' => asset('assets/photos/g5.png')])
    </div>

    <div class="my-4 bg-[#f0f0f0] w-full h-px"></div>

    <div class="flex flex-col mb-12 w-full gap-2 pt-4">
        <h2 class="text-3xl font-medium text-[#202020]">Maximize Performance: SEO and Performance</h2>
        <p class="text-[#3f3f3f]">Improve your page speed performance, SEO, and user experience for your Webflow and Framer website.</p>
    </div>

    <div class="grid grid-cols-3 gap-8 pb-8">
        @include('components.guide-item',['date' => 'May 21, 2024' ,'des' => 'The Ultimate Webflow SEO Guide','img' => asset('assets/photos/g6.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => '12 Essential Strategies to Boost Your Website Conversion Rate','img' => asset('assets/photos/g7.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => '5 Practical ways to Improve Webflow Page Speed','img' => asset('assets/photos/g8.png')])
    </div>

    <div class="flex flex-col mb-12 w-full gap-2 pt-4">
        <h2 class="text-3xl font-medium text-[#202020]">Unlock Growth with Simple and Privacy Friendly Analytics</h2>
        <p class="text-[#3f3f3f]">Humblytics is the ultimate cookie-free GA4 alternative, learn more about how you can use Humblytics to optimize your conversions.</p>
    </div>

    <div class="grid grid-cols-3 gap-8 pb-8">
        @include('components.guide-item',['date' => 'May 21, 2024' ,'des' => 'Maximizing Engagement with A/B Testing: A Simple Approach to Optimizing Webflow Sites','img' => asset('assets/photos/g9.png')])
        @include('components.guide-item',['date' => 'May 21, 2024' ,'des' => 'The Ultimate Glossary of CRO and Split Testing Terms','img' => asset('assets/photos/g1.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => '5 Tips to Increase Your Above-the-Fold Website Section Conversions','img' => asset('assets/photos/g2.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => 'The Ultimate Webflow SEO Guide','img' => asset('assets/photos/g6.png')])
        @include('components.guide-item',['date' => 'May 21, 2024' ,'des' => 'The Ultimate Guide to Collecting and Acting On Website Analytics','img' => asset('assets/photos/g4.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => '12 Essential Strategies to Boost Your Websites Conversion Rate','img' => asset('assets/photos/g7.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => '5 Practical ways to Improve Webflow Page Speed','img' => asset('assets/photos/g8.png')])
        @include('components.guide-item',['date' => 'May 13, 2024' ,'des' => 'A/B Split Testing: 5 Key Reasons for Higher Web Conversions','img' => asset('assets/photos/g5.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => 'How to add Google Analytics to Webflow','img' => asset('assets/photos/g10.png')])
        @include('components.guide-item',['date' => 'May 21, 2024' ,'des' => 'How to Set up Conversion Tracking in Google Analytics with Webflow ','img' => asset('assets/photos/g11.png')])
        @include('components.guide-item',['date' => 'May 12, 2024' ,'des' => 'Humblytics: A Privacy-Friendly Alternative to Google Analytics','img' => asset('assets/photos/g12.png')])
    </div>
</section>
