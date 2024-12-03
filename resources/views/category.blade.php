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
            <!-- Active filters -->
            <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-4 py-3 sm:flex sm:items-center sm:px-6 lg:px-8">
                </div>
            </div>
        </section>

        <!-- Product grid -->
        <section aria-labelledby="products-heading" class="mx-auto max-w-2xl px-4 pb-16 pt-12 sm:px-6 sm:pb-24 sm:pt-16 lg:max-w-7xl lg:px-8">
            <h2 id="products-heading" class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <a href="{{ url('/category/' . $category->id . '/product/' . $product->id) }}" class="group">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset($product->thumbnail_image) }}" alt="{{ $product->name }}" class="size-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">{{ $product->price }}€</p>
                    </a>
                @endforeach
            </div>
        </section>
    </main>
</x-category-layout>