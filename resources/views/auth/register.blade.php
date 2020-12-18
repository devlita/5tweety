@component('components.master')
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-blue-50 border border-gray-300 rounded-lg">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           autocomplete="username"
                           autofocus
                           value="{{ old('username') }}"
                           required
                    >

                    @if ($errors->has('username'))
                        <p class="text-red-500 text-sm mt-2">
                            {{ $errors->first('username') }}
                        </p>
                    @endif
                </div>
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           required
                    >

                    @if ($errors->has('name'))
                        <p class="text-red-500 text-sm mt-2">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           autocomplete="email"
                           required
                    >

                    @if ($errors->has('email'))
                        <p class="text-red-500 text-sm mt-2">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           autocomplete="new-password"
                    >

                    @if ($errors->has('password'))
                        <p class="text-red-500 text-sm mt-2">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password_confirmation"
                    >
                        Password Confirmation
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           autocomplete="new-password"
                    >

                    @if ($errors->has('password_confirmation'))
                        <p class="text-red-500 text-sm mt-2">
                            {{ $errors->first('password_confirmation') }}
                        </p>
                    @endif
                </div>

                <div>
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endcomponent