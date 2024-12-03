<x-front-layout>
    <main>
        <div class="relative bg-gray-900">
            <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
                <img src="/images/product_categories/novedades_big.jpg" alt="" class="h-full w-full object-cover object-center">
            </div>
            <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>
            <div class="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0">
                <h1 class="text-4xl font-bold tracking-tight text-white lg:text-6xl">Empieza por nuestras novedades</h1>
                <a href="{{ url('/category/1') }}" class="mt-8 inline-block rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100">Compra nuestas novedades</a>
            </div>
        </div>
        <!-- Category section -->
        <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
                <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Categorías</h2>
            </div>

            <div class="mt-4 flow-root">
                <div class="-my-2">
                    <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                        <div class="absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                            @foreach ($categories as $category)
                                <a href="{{ url('/category/' . $category->id) }}" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                    <span aria-hidden="true" class="absolute inset-0">
                                        <img src="{{ asset($category->image_path) }}" alt="{{ $category->name }}" class="h-full w-full object-cover object-center">
                                    </span>
                                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                    <span class="relative mt-auto text-center text-xl font-bold text-white">{{ $category->name}}</span>        
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-front-layout>