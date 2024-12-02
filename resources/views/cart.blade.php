<x-cart-layout>
    <div class="bg-white">
        <div class="mx-auto max-w-4xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Shopping Cart</h1>

            <div class="mt-12">
                <div>
                    <h2 class="sr-only">Items in your shopping cart</h2>
                    @php
                        $total = 0
                    @endphp

                    @if (count($cart) > 0)
                        <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
                            @foreach ($cart as $product_id => $item)
                            <li class="flex py-6 sm:py-10">
                                <div class="shrink-0">
                                    <img src="{{ asset($item['thumbnail_image']) }}" alt="{{ $item['name'] }}" class="size-24 rounded-lg object-cover object-center sm:size-32">
                                </div>

                                <div class="relative ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                                    <div>
                                        <div class="flex justify-between sm:grid sm:grid-cols-2">
                                            <div class="pr-6">
                                                <h3 class="text-sm">
                                                    <a href="{{ url('/category/' . $item['category'] . '/product/' . $product_id) }}" class="font-medium text-gray-700 hover:text-gray-800">{{ $item["name"] }}</a>
                                                </h3>
                                                <!-- <p class="mt-1 text-sm text-gray-500">{{ $item["quantity"] }} x {{ $item["price"]}} €</p> -->
                                            </div>
                                            @php
                                                $total += ($item['quantity'] * $item['price'])
                                            @endphp
                                            <p class="text-right text-sm font-medium text-gray-900">{{ $item["quantity"]*$item["price"] }} €</p>
                                        </div>

                                        <div class="mt-4 flex items-center sm:absolute sm:left-1/2 sm:top-0 sm:mt-0 sm:block">
                                            <label for="quantity-0" class="sr-only">Quantity</label>
                                            <form action="{{ route('update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product" value="{{ $product_id }}">
                                                <select id="quantity" name="quantity" onchange="this.form.submit()" class="block max-w-full rounded-md border border-gray-300 py-1.5 text-left text-base/5 font-medium text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                                    @for($i = 0; $i < 10; ++$i)
                                                        @if ($i == $item["quantity"])
                                                            <option value="{{$i}}" selected>{{$i}}</option>
                                                        @else
                                                            <option value="{{$i}}">{{ $i }}</option>
                                                        @endif
                                                    @endfor
                                                    
                                                </select>
                                            </form>

                                            <form action="{{ route('remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product" value="{{ $product_id }}">
                                                <button type="submit" class="ml-4 text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:ml-0 sm:mt-3">
                                                    <span>Eliminar</span>
                                                </button>
                                            </form>
                                            
                                        </div>
                                    </div>

                                    <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                                        <svg class="size-5 shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                                        </svg>
                                        <span>In stock</span>
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    @else
                        <p>El carrito está vacío.</p>
                    @endif
                    
                </div>

                <!-- Order summary -->
                <div class="mt-10 sm:ml-32 sm:pl-6">
                    <div class="rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:p-8">
                        <h2 class="sr-only">Order summary</h2>

                        <div class="flow-root">
                            <dl class="-my-4 divide-y divide-gray-200 text-sm">
                                <div class="flex items-center justify-between py-4">
                                    <dt class="text-gray-600">Subtotal</dt>
                                    <dd class="font-medium text-gray-900">{{ $total }} €</dd>
                                </div>
                                <div class="flex items-center justify-between py-4">
                                    <dt class="text-gray-600">Envío</dt>
                                    <dd class="font-medium text-gray-900">4.99 €</dd>
                                </div>
                                <div class="flex items-center justify-between py-4">
                                    <dt class="text-gray-600">Tax</dt>
                                    <dd class="font-medium text-gray-900">{{ $total*0.21 }} €</dd>
                                </div>
                                <div class="flex items-center justify-between py-4">
                                    <dt class="text-base font-medium text-gray-900">Order total</dt>
                                    <dd class="text-base font-medium text-gray-900">{{ $total + ($total*0.21) + 4.99}} €</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div class="mt-10">
                        <a href="{{ url('/checkout_tunnel') }}" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</a>
                    </div>

                    <div class="mt-6 text-center text-sm text-gray-500">
                        <p>
                            or
                            <a href="{{ url('/') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Continue Shopping
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-cart-layout>