<x-category-layout>
    <main>
        <div class="bg-white">
            <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $category->first()->name }}</h1>
                <p class="mt-4 max-w-xl text-sm text-gray-700">{{ $category->first()->description }}</p>
            </div>
        </div>

        <!-- Filters -->
        <section aria-labelledby="filter-heading">
            <h2 id="filter-heading" class="sr-only">Filters</h2>

            <div class="border-b border-gray-200 bg-white pb-4">
                <div class="mx-auto flex max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Sort
                                <svg class="-mr<!--  -->-1 ml-1 size-5 shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!--
                            Dropdown menu, show/hide based on menu state.
                            Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                            Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <!-- 
                        <div class="absolute left-0 z-10 mt-2 w-40 origin-top-left rounded-md bg-white shadow-2xl ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                !--
                                    Active: "bg-gray-100 outline-none", Not Active: ""
                                    Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                --
                                <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                            </div>
                        </div>
                        -->
                    </div>

                    <!-- Mobile filter dialog toggle, controls the 'mobileFiltersOpen' state. -->
                    <button type="button" class="inline-block text-sm font-medium text-gray-700 hover:text-gray-900 sm:hidden">Filters</button>

                    <div class="hidden sm:block">
                        <div class="flow-root">
                            <div class="-mx-4 flex items-center divide-x divide-gray-200">
                                <div class="relative inline-block px-4 text-left">
                                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                                        <span>Category</span>
                                        <span class="ml-1.5 rounded bg-gray-200 px-1.5 py-0.5 text-xs font-semibold tabular-nums text-gray-700">1</span>
                                        <svg class="-mr-1 ml-1 size-5 shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <!--
                                        'Category' dropdown, show/hide based on dropdown state.

                                        Entering: "transition ease-out duration-100"
                                            From: "transform opacity-0 scale-95"
                                            To: "transform opacity-100 scale-100"
                                        Leaving: "transition ease-in duration-75"
                                            From: "transform opacity-100 scale-100"
                                            To: "transform opacity-0 scale-95"
                                    -->
                                    <!-- 
                                    <div class="absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-white p-4 shadow-2xl ring-1 ring-black/5 focus:outline-none">
                                        <form class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-category-0" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">All New Arrivals</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-category-1" name="category[]" value="tees" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-category-1" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Tees</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-category-2" name="category[]" value="objects" type="checkbox" checked class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-category-2" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Objects</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-category-3" name="category[]" value="sweatshirts" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-category-3" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Sweatshirts</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-category-4" name="category[]" value="pants-shorts" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-category-4" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Pants &amp; Shorts</label>
                                            </div>
                                        </form>
                                    </div>
                                    -->
                                </div>
                                <div class="relative inline-block px-4 text-left">
                                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                                        <span>Color</span>
                                        <svg class="-mr-1 ml-1 size-5 shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <!--
                                        'Color' dropdown, show/hide based on dropdown state.

                                        Entering: "transition ease-out duration-100"
                                            From: "transform opacity-0 scale-95"
                                            To: "transform opacity-100 scale-100"
                                        Leaving: "transition ease-in duration-75"
                                            From: "transform opacity-100 scale-100"
                                            To: "transform opacity-0 scale-95"
                                    -->
                                    <!-- 
                                    <div class="absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-white p-4 shadow-2xl ring-1 ring-black/5 focus:outline-none">
                                        <form class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-color-0" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">White</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-color-1" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Beige</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-color-2" name="color[]" value="blue" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-color-2" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Blue</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-color-3" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Brown</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-color-4" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Green</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-color-5" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">Purple</label>
                                            </div>
                                        </form>
                                    </div> -->
                                </div>
                                <div class="relative inline-block px-4 text-left">
                                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                                        <span>Sizes</span>
                                        <svg class="-mr-1 ml-1 size-5 shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <!--
                                    'Sizes' dropdown, show/hide based on dropdown state.

                                    Entering: "transition ease-out duration-100"
                                        From: "transform opacity-0 scale-95"
                                        To: "transform opacity-100 scale-100"
                                    Leaving: "transition ease-in duration-75"
                                        From: "transform opacity-100 scale-100"
                                        To: "transform opacity-0 scale-95"
                                    -->
                                    <!-- 
                                    <div class="absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-white p-4 shadow-2xl ring-1 ring-black/5 focus:outline-none">
                                        <form class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="filter-sizes-0" name="sizes[]" value="xs" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-sizes-0" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">XS</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-sizes-1" name="sizes[]" value="s" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-sizes-1" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">S</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-sizes-2" name="sizes[]" value="m" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-sizes-2" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">M</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-sizes-3" name="sizes[]" value="l" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-sizes-3" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">L</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-sizes-4" name="sizes[]" value="xl" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-sizes-4" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">XL</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-sizes-5" name="sizes[]" value="2xl" type="checkbox" class="size-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label for="filter-sizes-5" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900">2XL</label>
                                            </div>
                                        </form>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active filters -->
            <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-4 py-3 sm:flex sm:items-center sm:px-6 lg:px-8">
                    <h3 class="text-sm font-medium text-gray-500">
                        Filters
                        <span class="sr-only">, active</span>
                    </h3>

                    <div aria-hidden="true" class="hidden h-5 w-px bg-gray-300 sm:ml-4 sm:block"></div>

                    <div class="mt-2 sm:ml-4 sm:mt-0">
                        <div class="-m-1 flex flex-wrap items-center">
                            <span class="m-1 inline-flex items-center rounded-full border border-gray-200 bg-white py-1.5 pl-3 pr-2 text-sm font-medium text-gray-900">
                                <span>Objects</span>
                                <button type="button" class="ml-1 inline-flex size-4 shrink-0 rounded-full p-1 text-gray-400 hover:bg-gray-200 hover:text-gray-500">
                                    <span class="sr-only">Remove filter for Objects</span>
                                    <svg class="size-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                        <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                                    </svg>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product grid -->
        <section aria-labelledby="products-heading" class="mx-auto max-w-2xl px-4 pb-16 pt-12 sm:px-6 sm:pb-24 sm:pt-16 lg:max-w-7xl lg:px-8">
            <h2 id="products-heading" class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <a href="#" class="group">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset($product->thumbnail_image) }}" alt="{{ $product->name }}" class="size-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">{{ $product->price }}€</p>
                    </a>
                @endforeach
                <!-- More products... -->
            </div>
        </section>
    </main>
</x-category-layout>