//About Installation


#cloning

git clone https://github.com/VijayTechnical/idesign.git

Run composer install / composer update command

set your database and run php artisan migrate command


Go to vendor/laravel/fortify/src/actions/AttemptToAuthenticate.php


add the following code in handle($request, $next)


if (Fortify::$authenticateUsingCallback) {
return $this->handleUsingCustomCallback($request, $next);
}

if ($this->guard->attempt(
$request->only(Fortify::username(), 'password'),
$request->boolean('remember')
)) {
if (Auth::user()->utype === 'ADM') {
session(['utype' => 'ADM']);
return redirect(RouteServiceProvider::ADMIN);
} else if (Auth::user()->utype === 'USR') {
session(['utype' => 'USR']);
return redirect(RouteServiceProvider::HOME);
}
return $next($request);
}

$this->throwFailedAuthenticationException($request);


//Thank you and enjoy your coding

