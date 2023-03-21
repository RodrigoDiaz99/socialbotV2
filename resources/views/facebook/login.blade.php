<x-app-layout>
    <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <a href="#" onClick="logInWithFacebook()">Log In with the JavaScript SDK</a>

                <script>
                    logInWithFacebook = function () {
                        FB.login(function (response) {
                            if (response.authResponse) {
                                alert('You are logged in & cookie set!');
                                // Now you can redirect the user or do an AJAX request to
                                // a PHP script that grabs the signed request from the cookie.
                            } else {
                                alert('User cancelled login or did not fully authorize.');
                            }
                        });
                        return false;
                    };
                    window.fbAsyncInit = function () {
                        FB.init({
                            appId: '4340590289340204',
                            cookie: true, // This is important, it's not enabled by default
                            version: 'v2.10'
                        });
                    };

                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) {
                            return;
                        }
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
