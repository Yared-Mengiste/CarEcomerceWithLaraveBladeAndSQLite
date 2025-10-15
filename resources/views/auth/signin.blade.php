<x-base-layout title="Signup" cssClass="page-signup">
    <x-guest-layout>
        <x-slot:pageTitle>Login</x-slot:pageTitle>
        <x-slot:submitTitle>Login</x-slot:submitTitle>
        <x-slot:action></x-slot:action>
        <div class="form-group">
            <input type="email" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password"/>
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset"
            >Reset Password</a
            >
        </div>

        <x-slot:footerLink>
                Don't have an account? -
                <a href="/signup.html"> Click here to create one</a>
        </x-slot:footerLink>
    </x-guest-layout>
</x-base-layout>
