@extends('hyde::layouts.app')
@section('post_head')
    <!-- Include Swiper CSS for the carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .swiper-container {
            padding-bottom: 7px;
            box-sizing: border-box;
            padding-left: 4px;
            margin-left: -4px;
            padding-right: 4px;
            margin-right: -4px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: 50px;
            height: 50px;
            color: white;
        }

        .swiper-slide {
            height: auto !important;
        }

        .swiper-button-next {
            right: -22px;
        }

        .swiper-button-prev {
            left: -22px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
        }

        .swiper-pagination {
            bottom: 18px!important;
        }

        .swiper-pagination-bullet {
            height: 14px;
            width: 14px;
        }
    </style>
@endsection
@section('content')

    <main class="flex flex-col text-black-normal pb-20 gap-32">
        <!-- Banner Section -->
        <section class="relative bg-primary dark:bg-black h-[75vh] flex flex-col justify-center px-6">
            <div class="animated-bg absolute opacity-50 w-full h-full left-0">
                <img src="{{ Asset::mediaLink('homepage-banner.svg') }}" class="w-full h-full object-cover">
            </div>
            <div class="container flex mx-auto relative">
                <!-- Text Container (60% width) -->
                <div class="flex flex-col justify-center text-white">
                    <h1 class="text-6xl font-bold">Where <span>ideas</span> turn <span>digital!</span></h1>
                    <p class="text-5xl mt-4">Tailored Web and IT solutions for your business.</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="px-6 text-black-normal dark:text-text-normal">
            <h2 class="text-5xl font-bold text-center mb-4">Services Overview</h2>
            <p class="text-2xl text-center">Professional Web solutions and IT services designed to elevate businesses.</p>
            <div class="container mx-auto mt-12 bg-gray-light-500 dark:bg-gray-light-solid rounded-xl p-8">
                <div class="flex flex-row mb-12">
                    <div class="w-1/3 p-8">
                        <h3 class="text-3xl mb-2">Consulting</h3>
                        <p class="text-xl">Expert guidance to help businesses align technology strategies with organizational goals.</p>
                    </div>
                    <div class="w-2/3 p-8 rounded-t-xl -mb-12">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--device-laptop] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>IT Consulting</h4>
                                <p>Providing strategic advice to enhance IT systems and processes, ensuring they effectively support business objectives.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row mb-12">
                    <div class="w-1/3 p-8">
                        <h3 class="text-3xl mb-2">Website Development</h3>
                        <p class="text-xl">Custom web solutions for businesses of all sizes, from simple sites to complex platforms with third-party integrations.</p>
                    </div>
                    <div class="w-2/3 p-8">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[simple-icons--drupal] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Complex Solutions in Drupal</h4>
                                <p>Developing robust, scalable websites using Drupal, ideal for clients requiring sophisticated functionalities.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--file-code] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Static Websites</h4>
                                <p> Cost-effective, professional sites for a strong online presence.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--puzzle] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>New Feature Implementation</h4>
                                <p>Enhancing existing websites by integrating new features to improve functionality and user engagement.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--plug] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Third-Party API Integration</h4>
                                <p>Seamlessly connecting external services for added capabilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row mb-12">
                    <div class="w-1/3 p-8">
                        <h3 class="text-3xl mb-2">Deployment & Management</h3>
                        <p class="text-xl">Ensure your website runs smoothly, securely and efficiently.</p>
                    </div>
                    <div class="w-2/3 p-8">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--world-www] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Domain Setup</h4>
                                <p>Setting up and managing domain names to ensure seamless accessibility.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--cloud-upload] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Production Deployment</h4>
                                <p>Launching stable, fully functional websites.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--database-export] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Regular Database Backups</h4>
                                <p>Implementing regular database backup routines to safeguard data against loss or corruption.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--tool] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Monitoring and Maintenance</h4>
                                <p>Continuously monitoring websites for performance issues, providing timely bug fixes and updates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/3 p-8">
                        <h3 class="text-3xl mb-2">Performance & Optimization</h3>
                        <p class="text-xl">Fine-tuning websites for speed, usability and visibility.</p>
                    </div>
                    <div class="w-2/3 p-8">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--gauge] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Stress Testing and Optimization</h4>
                                <p>Conducting stress tests to identify and fix performance bottlenecks for a faster experience.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--zoom-check] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>SEO & Accessibility</h4>
                                <p>Enhancing search visibility and ensuring compliance with accessibility standards.</p>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold"><span class="icon-[tabler--device-mobile] mb-[-8px] mr-[4px] bg-accent-700 size-8"></span>Responsive UI Development</h4>
                                <p>Creating seamless experiences across all devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="px-6 dark:text-text-normal">
            <div class="container mx-auto">
                <h2 class="text-5xl font-bold text-center mb-4">Tech Stack</h2>
                <p class="text-2xl text-center">A modern tech stack for scalable, efficient, and high-performing web solutions.</p>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mt-12">
                    <div class="p-8 text-center rounded-xl bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200">
                        <span class="icon-[fluent-emoji-flat--gear] size-10"></span>
                        <h3 class="text-3xl mb-4">Backend Development</h3>
                        <p class="text-lg">Building robust and scalable web applications with a strong foundation in backend technologies.</p>
                        <ul class="mt-10 grid grid-cols-1 gap-6 px-12">
                            <li>
                                <span class="icon-[simple-icons--drupal] size-14 bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold">Drupal</h4>
                            </li>
                            <li>
                                <span class="icon-[simple-icons--php] size-14 bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold hidden">PHP</h4>
                            </li>
                            <li>
                                <span class="icon-[simple-icons--symfony] size-14 bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold">Symfony</h4>
                            </li>
                            <li>
                                <span class="icon-[simple-icons--mysql] size-16 bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold hidden">MySQL</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8 text-center rounded-xl bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200">
                        <span class="icon-[fluent-emoji-flat--artist-palette] size-10"></span>
                        <h3 class="text-3xl mb-4">Frontend Development</h3>
                        <p class="text-lg">Crafting responsive and user-friendly interfaces with modern frontend technologies.</p>
                        <ul class="mt-10 grid grid-cols-1 gap-6 px-12">
                            <li>
                                <span class="icon-[simple-icons--javascript] size-14 bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold">Javascript</h4>
                            </li>
                            <li>
                                <span class="icon-[simple-icons--css3] mt-3 size-16 bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold">CSS3</h4>
                            </li>
                            <li>
                                <span class="icon-[simple-icons--tailwindcss] size-14 -mb-[10px] bg-black-normal dark:bg-white"></span>
                                <h3 class="text-xl font-semibold">Tailwindcss</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="p-8 text-center rounded-xl bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200">
                        <span class="icon-[fxemoji--rocket] size-10"></span>
                        <h3 class="text-3xl mb-4">DevOps & Workflow</h3>
                        <p class="text-lg">Optimizing workflows, version control, containerization, and automated deployments for reliable deliveries.</p>
                        <ul class="mt-10 grid grid-cols-1 gap-6 px-12">
                            <li>
                                <span class="icon-[simple-icons--git] size-14 bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold">Git</h4>
                            </li>
                            <li>
                                <span class="icon-[simple-icons--docker] size-14 -mb-[8px] bg-black-normal dark:bg-white"></span>
                                <h4 class="text-xl font-semibold">Docker</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Carousel Section -->
{{--        <section class="px-6 relative dark:text-text-normal">--}}
{{--            <div class="container mx-auto">--}}
{{--                <h2 class="text-5xl font-bold text-center mb-4">Featured Projects</h2>--}}
{{--                <p class="text-2xl text-center mb-12">A selection of impactful projects showcasing tailored solutions and technical excellence.</p>--}}
{{--                <!-- Carousel -->--}}
{{--                <div class="relative">--}}
{{--                    <div class="swiper-container overflow-hidden rounded-lg">--}}
{{--                        <ul class="swiper-wrapper">--}}
{{--                            <!-- Slide 1 -->--}}
{{--                            <li class="swiper-slide">--}}
{{--                                <div class="bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200 rounded-lg h-full">--}}
{{--                                    <img src="https://placehold.co/600x400" class="rounded-t-lg object-cover object-center w-full h-1/2">--}}
{{--                                    <div class="px-8 py-8">--}}
{{--                                        <h3 class="text-xl font-semibold mb-4">Project One</h3>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!-- Slide 2 -->--}}
{{--                            <li class="swiper-slide">--}}
{{--                                <div class="bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200 rounded-lg h-full">--}}
{{--                                    <img src="https://placehold.co/600x400" class="rounded-t-lg object-cover object-center w-full h-1/2">--}}
{{--                                    <div class="px-8 py-8">--}}
{{--                                        <h3 class="text-xl font-semibold mb-4">Project two</h3>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!-- Slide 3 -->--}}
{{--                            <li class="swiper-slide">--}}
{{--                                <div class="bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200 rounded-lg h-full">--}}
{{--                                    <img src="https://placehold.co/600x400" class="rounded-t-lg object-cover object-center w-full h-1/2">--}}
{{--                                    <div class="px-8 py-8">--}}
{{--                                        <h3 class="text-xl font-semibold mb-4">Project three</h3>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!-- Slide 4 -->--}}
{{--                            <li class="swiper-slide">--}}
{{--                                <div class="bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200 rounded-lg h-full">--}}
{{--                                    <img src="https://placehold.co/600x400" class="rounded-t-lg object-cover object-center w-full h-1/2">--}}
{{--                                    <div class="px-8 py-8">--}}
{{--                                        <h3 class="text-xl font-semibold mb-4">Project four</h3>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!-- Slide 5 -->--}}
{{--                            <li class="swiper-slide">--}}
{{--                                <div class="bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200 rounded-lg h-full">--}}
{{--                                    <img src="https://placehold.co/600x400" class="rounded-t-lg object-cover object-center w-full h-1/2">--}}
{{--                                    <div class="px-8 py-8">--}}
{{--                                        <h3 class="text-xl font-semibold mb-4">Project five</h3>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!-- Slide 6 -->--}}
{{--                            <li class="swiper-slide">--}}
{{--                                <div class="bg-gray-light-500 hover:bg-gray-light-600 dark:bg-gray-light-solid transition-all duration-200 rounded-lg h-full">--}}
{{--                                    <img src="https://placehold.co/600x400" class="rounded-t-lg object-cover object-center w-full h-1/2">--}}
{{--                                    <div class="px-8 py-8">--}}
{{--                                        <h3 class="text-xl font-semibold mb-4">Project six</h3>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                        <p class="text-gray-700">Brief description of project one.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <!-- Add more slides as needed -->--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- Add Navigation -->--}}
{{--                    <div class="swiper-button-next bg-accent-700 text-white rounded-full"></div>--}}
{{--                    <div class="swiper-button-prev bg-accent-700 text-white rounded-full"></div>--}}
{{--                    <!-- Add Pagination -->--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                </div>--}}
{{--                <!-- Read More Link -->--}}
{{--                <div class="text-center mt-8">--}}
{{--                    <a href="/projects" class="text-blue-500 hover:underline">Read more</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <!-- Contact section -->
        <section class="px-6 text-black-normal dark:text-text-normal text-center">
            <h2 class="text-5xl font-bold text-center mb-4">
                Your <span class="bg-gradient-to-r from-primary to-accent-700 dark:from-primary-dark dark:to-accent-700 bg-clip-text text-transparent">Journey</span> Begins Here.
            </h2>
            <p class="text-2xl text-center mb-8">
                Drop me a message and let's discuss your next project.
            </p>
            <a href="mailto:example.com"
               class="inline-flex items-center justify-center py-4 px-6 text-white text-lg rounded-lg bg-primary dark:bg-primary-dark dark:text-dark-normal
              dark:shadow-[0_0_16px_rgba(0,0,0,0)] dark:hover:shadow-[0_0_16px_rgba(153,204,255,0.6)]
              transition-all duration-200 hover:shadow-xl link-button">
                Let's Connect
            </a>
        </section>
    </main>
@endsection
@section('post_scripts')
    <!-- Include Swiper JS for the carousel -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            direction: "horizontal",
            slidesPerView: 1,
            spaceBetween: 10,
            // Responsive breakpoints
            breakpoints: {
                480: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
                dynamicMainBullets: 1
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        //
        // // Attach the event handler using swiper.on().
        // swiper.on('slideChange', function() {
        //     // "this" inside here is the swiper instance
        //     this.slides.forEach(slide => {
        //         slide.style.display = 'none';
        //     });
        //     // Make sure activeIndex points to the right element (may need adjustment for loop mode)
        //     this.slides[this.activeIndex].style.display = 'block';
        // });
    </script>
@endsection
