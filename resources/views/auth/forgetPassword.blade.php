
<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Password Reset!</h1>

                 @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                <form method="POST" action="{{ route('forget.password.post') }}" class="mt-10">
                    @csrf

                    <x-form.input for="E-Mail Address" type="text" id="email_address" name="email" required />
                    @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif

                    <x-form.button>Send Password Reset Link</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

