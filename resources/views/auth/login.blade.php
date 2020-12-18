@component('components.master')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-blue-50 border border-gray-300 rounded-lg">
        <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                >
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="email"
                        id="email"
                        autocomplete="email"
                        value="{{ old('email') }}"
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
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full"
                        type="password"
                        name="password"
                        id="password"
                        autocomplete="current-password"
                >

                @if ($errors->has('password'))
                    <p class="text-red-500 text-sm mt-2">
                        {{ $errors->first('password') }}
                    </p>
                @endif
            </div>

            <div class="mb-6">
                <input class="mr-1"
                        type="checkbox"
                        name="remember"
                        id="remember" {{ old('remember') ? ' checked' : '' }}
                >

                <label class="text-xs text-gray-700 font-bold uppercase"
                        for="remember"
                >
                    Remember Me
                </label>

                @if ($errors->has('remember'))
                    <p class="text-red-500 text-sm mt-2">
                        {{ $errors->first('remember') }}
                    </p>
                @endif
            </div>

            <div>
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                >
                    Submit
                </button>

                <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot Your Password?</a>
            </div>
        </form>
    </div>
</div>
@endcomponent