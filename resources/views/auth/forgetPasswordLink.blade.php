
<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Enter New Password!</h1>

                <form method="POST" action="{{ route('reset.password.post') }}" class="mt-10">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <x-form.input for="E-Mail Address" type="text" id="email_address" name="email" required />
                    @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif

                    <x-form.input for="Password" type="password" id="password" name="password" required />
                    @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                                  
                    <x-form.input for="Password-confirm" type="password" id="password-confirm" name="password_confirmation" required />
                    @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif              
                 
                    <x-form.button>Reset Password</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

