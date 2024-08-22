<x-layout>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Men</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                                class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Clothing</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page"
                            class="font-medium text-gray-500 hover:text-gray-600">Basic Tee 6-Pack</a>
                    </li>
                </ol>
            </nav>

            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg"
                    alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
            </div>

            <!-- Product info -->
            <div
                class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Contoh Kos</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl font-bold tracking-tight text-gray-900">Rp999.000-1.199.000</p>

                    <!-- Reviews -->


                    <form class="mt-10">
                        <!-- Colors -->

                        <!-- Sizes -->
                        <div class="mt-10">
                            <div class="justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Pemilik</h3>
                                <a href="https://google.com" class="flex justify-between mt-4 border border-gray-400 px-3 py-3 rounded-xl">
                                    <div>
                                        <p class="text-2xl font-medium">Bu Ida</p>
                                        <p class="">+62123456789</p>
                                    </div>
                                    <img src="https://seeklogo.com/images/W/whatsapp-logo-0DBD89C8E2-seeklogo.com.png" class="h-10" alt="">
                                </a>
                            </div>
                        </div>

                        <button type="submit"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Buka di Maps</button>
                    </form>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Deskripsi</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900">The Basic Tee 6-Pack allows you to fully express your
                                vibrant personality with three grayscale options. Feeling adventurous? Put on a heather
                                gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need
                                to add an extra pop of color to your outfit? Our white tee has you covered.</p>
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Fasilitas</h3>
                                <x-wifi-svg></x-wifi-svg>
                                <x-toilet-svg></x-toilet-svg>
                                <x-parkir-svg></x-parkir-svg>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span>
                                </li>
                                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                        colors</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp;
                                        pre-shrunk</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Details</h2>

                        <div class="mt-4 space-y-6">
                            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                gray Basic Tees. Sign up for our subscription service and be the first to get new,
                                exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
