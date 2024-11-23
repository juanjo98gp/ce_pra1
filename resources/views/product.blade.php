<x-product-layout>
    <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <!-- Product -->
            <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
                <div class="flex flex-col-reverse">
                    <div class="aspect-h-1 aspect-w-1 w-full">
                        <!-- Tab panel, show/hide based on tab state. -->
                        <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
                            <img src="{{ asset($product->front_image) }}" alt="{{ $product->name }}" class="size-full object-cover object-center sm:rounded-lg">
                        </div>
                    </div>
                </div>

                <!-- Product info -->
                <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $product->name }}</h1>

                    <div class="mt-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl tracking-tight text-gray-900">{{ $product->price }} €</p>
                    </div>

                    <!-- Reviews -->
                    <div class="mt-3">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-indigo-500", Inactive: "text-gray-300" -->
                                <svg class="size-5 shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6 text-base text-gray-700">
                            <p>{{ $product->writer}}</p>
                            <ul role="list">
                                <li><b>Editorial:</b> {{ $product->brand }}</li>
                                <li><b>Año publicación:</b> {{ $product->publication_year }}</li>
                                <li><b>ISBN:</b> {{ $product->isbn }}</li>
                                <li><b>Páginas:</b> {{ $product->pages }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-6">
                        <!-- 
                        !-- Colors --
                        <div>
                            <h3 class="text-sm text-gray-600">Color</h3>

                            <fieldset aria-label="Choose a color" class="mt-2">
                                <div class="flex items-center space-x-3">
                                    !-- Active and Checked: "ring ring-offset-1" --
                                    <label aria-label="Washed Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-700 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Washed Black" class="sr-only">
                                        <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-gray-700"></span>
                                    </label>
                                    !-- Active and Checked: "ring ring-offset-1" --
                                    <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="White" class="sr-only">
                                        <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-white"></span>
                                    </label>
                                    !-- Active and Checked: "ring ring-offset-1" --
                                    <label aria-label="Washed Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-500 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Washed Gray" class="sr-only">
                                        <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-gray-500"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        -->
                        <div class="mt-10 flex">
                            <form action="{{ route('add') }}" method="POST">
                                @csrf
                                <input type="number" id="product" name="product" value="{{ $product->id }}">
                                <input type="number" id="quantity" name="quantity" value="1">
                                <button type="submit" class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">Añadir al carrito</button>
                            </form>

                                


                            <button type="button" class="ml-4 flex items-center justify-center rounded-md px-3 py-3 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                                <svg class="size-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                                <span class="sr-only">Añadir a favoritos</span>
                            </button>
                        </div>
                    </div>

                    <section aria-labelledby="details-heading" class="mt-12">
                        <h2 id="details-heading" class="sr-only">Additional details</h2>

                        <div class="divide-y divide-gray-200 border-t">
                            <div>
                                <h3>
                                    <!-- Expand/collapse question button -->
                                    <button type="button" class="group relative flex w-full items-center justify-between py-6 text-left" aria-controls="disclosure-1" aria-expanded="false">
                                        <!-- Open: "text-indigo-600", Closed: "text-gray-900" -->
                                        <span class="text-sm font-medium text-gray-900">Sinopsis</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Open: "hidden", Closed: "block" -->
                                            <svg class="block size-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                            <!-- Open: "block", Closed: "hidden" -->
                                            <svg class="hidden size-6 text-indigo-400 group-hover:text-indigo-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <div class="prose prose-sm pb-6" id="disclosure-1">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>

                            <!-- More sections... -->
                        </div>
                    </section>
                </div>
            </div>

            <!-- TODO: related products -->
            <section aria-labelledby="related-heading" class="px-4 py-10 sm:px-0">
            </section>
            <!--
            <section aria-labelledby="related-heading" class="mt-10 border-t border-gray-200 px-4 py-16 sm:px-0">
                <h2 id="related-heading" class="text-xl font-bold text-gray-900">Customers also bought</h2>

                <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    <div>
                        <div class="relative">
                            <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-03-related-product-01.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="size-full object-cover object-center">
                            </div>
                            <div class="relative mt-4">
                                <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                                <p class="mt-1 text-sm text-gray-500">White and black</p>
                            </div>
                            <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                                <p class="relative text-lg font-semibold text-white">$140</p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add to bag<span class="sr-only">, Zip Tote Basket</span></a>
                        </div>
                    </div>

                    !-- More products... --
                </div>
            </section>
            -->
        </div>
    </main>
</x-product-layout>