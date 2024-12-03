<x-cart-layout>
    <main class="relative lg:min-h-full">
    <div class="h-80 overflow-hidden lg:absolute lg:h-full lg:w-1/2 lg:pr-4 xl:pr-12">
        <img src="{{ asset('images/checkout/checkout_back.jpg') }}" alt="Fondo de carrito" class="size-full object-cover">
    </div>

    <div>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:py-32 xl:gap-x-24">
        <div class="lg:col-start-2">
            <h1 class="text-sm font-medium text-indigo-600">Pago correcto</h1>
            <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Estamos preparando tu pedido</p>
            <p class="mt-2 text-base text-gray-500">Gracias por confiar en nostros, actualmente estamos procesando tu pedido. Dentro de poco te envíaremos la confirmación!</p>

            <dl class="mt-16 text-sm font-medium">
            <dt class="text-gray-900">Número de seguimiento</dt>
            <dd class="mt-2 text-indigo-600">51547878755545848512</dd>
            </dl>
            @php
                $total = 0
            @endphp

            <ul role="list" class="mt-6 divide-y divide-gray-200 border-t border-gray-200 text-sm font-medium text-gray-500">
                @foreach ($cart as $product_id => $item)
                    @php
                        $total += ($item['quantity'] * $item['price'])
                    @endphp
                    <li class="flex space-x-6 py-6">
                        <img src="{{ asset($item['thumbnail_image']) }}" alt="{{ $item['name'] }}" class="size-24 flex-none rounded-md bg-gray-100 object-cover">
                        <div class="flex-auto space-y-1">
                        <h3 class="text-gray-900">
                            <a href="{{ url('/category/' . $item['category'] . '/product/' . $product_id) }}">{{ $item["name"] }}</a>
                        </h3>
                        <p>{{ $item["quantity"] }} unidades</p>
                        <p></p>
                        </div>
                        <p class="flex-none font-medium text-gray-900">{{ $item["quantity"]*$item["price"] }} €</p>
                    </li>
                @endforeach
            </ul>

            <dl class="space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-500">
            <div class="flex justify-between">
                <dt>Subtotal</dt>
                <dd class="text-gray-900">{{ $total }} €</dd>
            </div>

            <div class="flex justify-between">
                <dt>Envío</dt>
                <dd class="text-gray-900">4.99 €</dd>
            </div>

            <div class="flex justify-between">
                <dt>Impuestos</dt>
                <dd class="text-gray-900">{{ $total*0.21 }} €</dd>
            </div>

            <div class="flex items-center justify-between border-t border-gray-200 pt-6 text-gray-900">
                <dt class="text-base">Total</dt>
                <dd class="text-base">{{ $total + ($total*0.21) + 4.99}} €</dd>
            </div>
            </dl>

            <dl class="mt-16 grid grid-cols-2 gap-x-4 text-sm text-gray-600">
            <div>
                <dt class="font-medium text-gray-900">Información de cliente</dt>
                <dd class="mt-2">
                <div class="flex-auto">
                    @if(isset($name))
                        <p class="text-gray-900">{{ $name }}</p>
                    @endif
                    <p class="text-gray-900">{{ $email }}</p>
                </div>
                </dd>
            </div>
            <div>
                <dt class="font-medium text-gray-900">Dirección de envío</dt>
                <dd class="mt-2">
                <address class="not-italic">
                    <span class="block">{{ $address }}</span>
                    <!-- <span class="block">7363 Cynthia Pass</span>
                    <span class="block">Toronto, ON N3Y 4H8</span>-->
                </address>
                </dd>
            </div>
            </dl>

            <div class="mt-16 border-t border-gray-200 py-6 text-right">
                <form action="{{ url('/checkout_tunnel/sale') }}" method="POST">
                    @csrf
                    <input type="hidden" id="email" name="email" type="email" autocomplete="email" required value="{{ $email }}">
                    <input type="hidden" id="name" name="name" type="text" value="{{ $name }}">
                    <input type="hidden" id="address" name="address" type="text" required value="{{ $address }}">
                    <input type="hidden" id="user_type" name="user_type" type="text" required value="{{ $user_type }}">
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Finalizar venta</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    </main>
</x-cart-layout>