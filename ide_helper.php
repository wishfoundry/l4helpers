<?php
#Class App extends static::$app????
/**
 *  @method static bool check() Determine if the current user is authenticated.
 *  @method static bool guest() Determine if the current user is a guest.
 *  @method static User|null user() Get the currently authenticated user.
 *  @method static string|null getRecaller() Get the decrypted recaller cookie for the request(the name of the "Remember me" cookie.
 *  @method static Cookie createRecaller(mixed $id) Create a remember me cookie for a given ID.
 *  @method static void login(User $user, $remember = false) Get the currently authenticated user.
 *  @method static void logout() Log the user out of the application.
 *  @method static Illuminate\CookieJar getCookieJar() Get the cookie creator instance used by the guard.
 *  @method static Illuminate\CookieJar getCookieJar(CookieJar $cookie) Set the cookie creator instance used by the guard.
 *  @method static Illuminate\Session\Store getSession() Get the session store used by the guard.
 *  @method static array getQueuedCookies()  Get the cookies queued by the guard.
 *  @method static Illuminate\Auth\UserProviderInterface getProvider()  Get the user provider used by the guard.
 *  @method static Illuminate\Auth\UserInterface|null getUser() Return the currently cached user of the application.
 *  @method static void setUser(User $user) Set the current user of the application.
 *  @method static string getName() Get a unique identifier for the auth session value.
 *  @method static string getRecallerName() Get the name of the cookie used to store the "recaller".
 */
class Auth extends Illuminate\Auth\Guard {}
#class Artisan extends
class Cache extends Illuminate\Cache\Store {}
class Config extends Illuminate\Config\Repository {}
#class Console
class Container extends Illuminate\Container {}
class Cookie extends Illuminate\CookieJar {}
class Crypt extends Illuminate\Encrypter {}
class Event extends Illuminate\Events\Dispatcher {}
class Facade extends Illuminate\Support\Facades\Facade {}
class File extends  Illuminate\Filesystem {}
class Hash extends Illuminate\Hashing\BcryptHasher {}
/**
 * @method static get(string|array $key = null, $default = null) Get an item from the input data. This method is used for all request verbs (GET, POST, PUT, PATCH and DELETE)
 */
class Input extends Illuminate\Http\Request {}
class Log extends Illuminate\Log\Writer
class Request extends Illuminate\Http\Request {}
class Response extends Illuminate\Support\Facades\Response {}
#class Response extends Illuminate\Http\Response {}
#class Mail  extends Illuminate\Mail\Message {}
class Mail extends Illuminate\Mail\Mailer {}
class Paginator extends Illuminate\Pagination\BootstrapPresenter {}
class Redis extends Illuminate\Redis\Database {}
class Route extends Illuminate\Routing\Router {}
#class Route extends Illuminate\Support\Facades\Route {} Can we add some traits or something ?
class Redirect extends Illuminate\Routing\Redirector {}
class URL extends Illuminate\Routing\UrlGenerator {}
class Controller extends Illuminate\Routing\Controllers\Controller {}
class Session extends Illuminate\Session\Store {}
class Lang extends Illuminate\Translation\Translator {}
class Validator extends Illuminate\Validation\Factory {}
class View extends Illuminate\View\Environment {}


class Schema extends Illuminate\Database\Schema\Builder {}


