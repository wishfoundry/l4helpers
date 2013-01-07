<?php
/**
 *  @method static void registerAliasLoader(array $aliases) Register the aliased class loader.
 *  @method static void startExceptionHandling() Start the exception handling for the request.
 *  @method static string detectEnvironment(array|string $environments) Detect the application's current environment.
 *  @method static string detectWebEnvironment(string $base, string|array $environments) Set the application environment for a web request.
 *  @method static string detectConsoleEnvironment(array $arguments) Set the application environment from command-line arguments.
 *  @method static bool isMachine($name) Determine if the name matches the machine name.
 *  @method static bool runningInConsole() Determine if we are running in the console.
 *  @method static bool runningUnitTests() Determine if we are running unit tests.
 *  @method static void register(ServiceProvider $provider, array $options = array()) Register a service provider with the application.
 *  @method static mixed make(string $abstract, array $parameters = array()) Resolve the given type from the container.
 *  @method static void loadDeferredProvider(string $service) Load the provider for a deferred service.
 *  @method static void before(Closure|string $callback) Register a "before" application filter.
 *  @method static void after(Closure|string $callback) Register an "after" application filter.
 *  @method static void close(Closure|string $callback) Register a "close" application filter.
 *  @method static void finish(Closure|string $callback) Register a "finish" application filter.
 *  @method static void run() Handles the given request and delivers the response.
 *  @method static Response dispatch(Request $request) Handle the given request and get the response.
 *  @method static Response handle(SymfonyRequest $request, int $type = HttpKernelInterface::MASTER_REQUEST, bool $catch = true) Handle the given request and get the response. Provides compatibility with BrowserKit functional testing.
 *  @method static void boot() Boot the application's service providers.
 *  @method static Request prepareRequest(Request $request) Prepare the request by injecting any services.
 *  @method static Response prepareResponse($value, Request $request) Prepare the given value as a Response object.
 *  @method static void setLocale(string $locale)  Set the current application locale.
 *  @method static void abort(int $code, string $message = '', array $headers = array()) Throw an HttpException with the given data.
 *  @method static void error(Closure $callback) Register an application error handler.
 *  @method static void missing(Closure $callback) Register a 404 error handler.
 *  @method static void setDeferredServices(array $services) Set the application's deferred services.
 *  @method static mixed __get(string $key) Dynamically access application services.
 *  @method static void __set(string $key, mixed $value) Dynamically set application services.
 */
class App extends Illuminate\Foundation\Application {}
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


