@props(['title'=>'', 'cssClass'=>'','pageTitle'=>'', 'submitTitle'=>''])
<x-base-layout :$title :$cssClass>
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logoipsum-265.svg" alt=""/>
                        </a>
                    </div>
                    <h1 class="auth-page-title">{{$pageTitle}}</h1>

                    <form action="{{$action}}" method="post">
                        {{$slot}}
                        <button class="btn btn-primary btn-login w-full">{{$submitTitle}}</button>

                        <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                            <x-button logo="/img/google.png" title="Google"/>
                            <x-button logo="/img/facebook.png" title="Facebook"/>
                        </div>
                        <div class="login-text-dont-have-account">
                            {{$footerLink}}
                        </div>
                    </form>
                </div>
                <div class="auth-page-image">
                    <img src="/img/car-png-39071.png" alt="" class="img-responsive"/>
                </div>
            </div>
        </div>
    </main>
</x-base-layout>
