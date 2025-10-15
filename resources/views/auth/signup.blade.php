<x-base-layout title="Signup" cssClass="page-signup">
    <x-guest-layout>
        <x-slot:pageTitle>Signup</x-slot:pageTitle>
        <x-slot:submitTitle>Register</x-slot:submitTitle>
        <x-slot:action></x-slot:action>
        <div class="form-group">
            <input type="email" placeholder="Your Email"/>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password"/>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Repeat Password"/>
        </div>
        <hr/>
        <div class="form-group">
            <input type="text" placeholder="First Name"/>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name"/>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone"/>
        </div>
        <x-slot:footerLink>
            Already have an account? -
            <a href="/login.html"> Click here to login </a>
        </x-slot:footerLink>
    </x-guest-layout>
</x-base-layout>
