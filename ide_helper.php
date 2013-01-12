<?php
/**
 *  @method static void                  registerAliasLoader(array $aliases) Register the aliased class loader.
 *  @method static void                  startExceptionHandling() Start the exception handling for the request.
 *  @method static string                detectEnvironment(array|string $environments) Detect the application's current environment.
 *  @method static string                detectWebEnvironment(string $base, string|array $environments) Set the application environment for a web request.
 *  @method static string                detectConsoleEnvironment(array $arguments) Set the application environment from command-line arguments.
 *  @method static bool                  isMachine($name) Determine if the name matches the machine name.
 *  @method static bool                  runningInConsole() Determine if we are running in the console.
 *  @method static bool                  runningUnitTests() Determine if we are running unit tests.
 *  @method static void                  register(ServiceProvider $provider, array $options = array()) Register a service provider with the application.
 *  @method static mixed                 make(string $abstract, array $parameters = array()) Resolve the given type from the container.
 *  @method static void                  loadDeferredProvider(string $service) Load the provider for a deferred service.
 *  @method static void                  before(Closure|string $callback) Register a "before" application filter.
 *  @method static void                  after(Closure|string $callback) Register an "after" application filter.
 *  @method static void                  close(Closure|string $callback) Register a "close" application filter.
 *  @method static void                  finish(Closure|string $callback) Register a "finish" application filter.
 *  @method static void                  run() Handles the given request and delivers the response.
 *  @method static Symfony\Component\HttpFoundation\Response dispatch(Request $request) Handle the given request and get the response.
 *  @method static Symfony\Component\HttpFoundation\Response handle(SymfonyRequest $request, int $type = HttpKernelInterface::MASTER_REQUEST, bool $catch = true) Handle the given request and get the response. Provides compatibility with BrowserKit functional testing.
 *  @method static void                  boot() Boot the application's service providers.
 *  @method static Illuminate\Foundation\Request prepareRequest(Request $request) Prepare the request by injecting any services.
 *  @method static Symfony\Component\HttpFoundation\Response prepareResponse($value, Request $request) Prepare the given value as a Response object.
 *  @method static void                  setLocale(string $locale)  Set the current application locale.
 *  @method static void                  abort(int $code, string $message = '', array $headers = array()) Throw an HttpException with the given data.
 *  @method static void                  error(Closure $callback) Register an application error handler.
 *  @method static void                  missing(Closure $callback) Register a 404 error handler.
 *  @method static void                  setDeferredServices(array $services) Set the application's deferred services.
 *  @method static mixed                 __get(string $key) Dynamically access application services.
 *  @method static void                  __set(string $key, mixed $value) Dynamically set application services.
 *
 * IoC methods:
 *
 * @method static void  bind(string $abstract, Closure|string|null $concrete, $shared = false) Register a binding with the container.
 * @method static void  bindIf(strinf $abstract, Closure|string|null $concrete, $shared = false) Register a binding if it hasn't already been registered.
 * @method static void  singleton(string $abstract, $concrete = null) Register a shared binding in the container.
 * @method static void  extend(string $abstract, Closure $closure) "Extend" an abstract type in the container.
 * @method static void  instance(string $abstract, mixed $instance) Register an existing instance as shared in the container.
 * @method static void  alias(string $abstract, string $alias)Alias a type to a shorter name.
 * @method static array extractAlias(array $definition) Extract the type and alias from a given definition.
 * @method static mixed make(string $abstract, $parameters = array()) Resolve the given type from the container.
 * @method static mixed getConcrete(string $abstract) Get the concrete type for a given abstract.
 * @method static mixed build(mixed $concrete, $parameters = array()) Instantiate a concrete instance of the given type.
 * @method static array getDependencies(array $parameters) Resolve all of the dependencies from the ReflectionParameters.
 * @method static bool  isShared(string $abstract) Determine if a given type is shared.
 * @method static bool  isBuildable($concrete, $abstract) Determine if the given concrete is buildable.
 * @method static string getAlias(string $abstract)
 * @method static array  getBindings()
 */
class App extends Illuminate\Foundation\Application {}
/**
 *  @method static bool                 check() Determine if the current user is authenticated.
 *  @method static bool                 guest() Determine if the current user is a guest.
 *  @method static User|null            user() Get the currently authenticated user.
 *  @method static string|null          getRecaller() Get the decrypted recaller cookie for the request(the name of the "Remember me" cookie.
 *  @method static Symfony\Component\HttpFoundation\Cookie createRecaller(mixed $id) Create a remember me cookie for a given ID.
 *  @method static void                 login(User $user, $remember = false) Get the currently authenticated user.
 *  @method static void                 logout() Log the user out of the application.
 *  @method static Illuminate\CookieJar getCookieJar() Get the cookie creator instance used by the guard.
 *  @method static Illuminate\CookieJar getCookieJar(CookieJar $cookie) Set the cookie creator instance used by the guard.
 *  @method static Illuminate\Session\Store getSession() Get the session store used by the guard.
 *  @method static array                getQueuedCookies()  Get the cookies queued by the guard.
 *  @method static Illuminate\Auth\UserProviderInterface getProvider()  Get the user provider used by the guard.
 *  @method static Illuminate\Auth\UserInterface|null getUser() Return the currently cached user of the application.
 *  @method static void                 setUser(User $user) Set the current user of the application.
 *  @method static string               getName() Get a unique identifier for the auth session value.
 *  @method static string               getRecallerName() Get the name of the cookie used to store the "recaller".
 */
class Auth extends Illuminate\Auth\Guard {}
#class Artisan extends
/**
 * @method static bool  has(string $key) Determine if an item exists in the cache.
 * @method static mixed get(string $key, $default = null) Retrieve an item from the cache by key.
 * @method static void  put(string $key, mixed $value, int $minutes) Store an item in the cache.
 * @method static void  forever($key, $value)
 * @method static       remember(string $key, int $minutes, Closure $callback)
 * @method static       rememberForever(string $key, Closure $callback)
 * @method static void  forget($key)  Remove an item from the cache.
 * @method static void  flush() Remove all items from the cache.
 * @method static int   getDefaultCacheTime() Get the default cache time.
 * @method static int   setDefaultCacheTime(int $minutes) Set the default cache time in minutes.
 * @method static bool  existsInMemory(string $key) Determine if an item is in memory.
 * @method static array getMemory() Get all of the values in memory.
 * @method static mixed getFromMemory(string $key)  Get the value of an item in memory.
 * @method static void  setInMemory(string $key, mixed $value) Set the value of an item in memory.
 * @method static bool  offsetExists(string $key) Determine if a cached value exists.
 * @method static mixed offsetGet(string $key) Retrieve an item from the cache by key.
 * @method static void  offsetSet(string $key, mixed $value) Store an item in the cache for the default time.
 * @method static void  offsetUnset(string $key) Remove an item from the cache.
 */
class Cache extends Illuminate\Cache\Store {}
/**
 * @method static bool  has(string $key) Determine if the given configuration value exists.
 * @method static mixed get($key, $default = null)
 * @method static void set(string $key, mixed $value)
 * @method static void load(string $group, string $namespace, string $collection) Load the configuration group for the key.
 * @method static array callAfterLoad(string $namespace, string $group, array $items) Call the after load callback for a namespace.
 * @method static array parseNamespacedSegments(string $key) Parse an array of namespaced segments.
 * @method static array parsePackageSegments(string $key, string $namespace, string $item) Parse the segments of a package namespace.
 * @method static void package(string $package, string $hint, string $namespace = null) Register a package for cascading configuration.
 * @method static string getPackageNamespace(string $package, string $namespace) Get the configuration namespace for a package.
 * @method static void afterLoading(string $namespace, Closure $callback) Register an after load callback for a given namespace.
 * @method static string getCollection(string $group, string $namespace = null) Get the collection identifier.
 * @method static void addNamespace(string $namespace, string $hint) Add a new namespace to the loader.
 * @method static LoaderInterface  getLoader() Get the loader implementation.
 * @method static string getEnvironment() Get the current configuration environment.
 * @method static array getAfterLoadCallbacks() Get the after load callback array.
 * @method static array getItems() Get all of the configuration items
 * @method static bool offsetExists(string $key) Determine if the given configuration option exists.
 * @method static bool offsetGet(string $key) Get a configuration option.
 * @method static bool offsetSet(string $key, $value) Set a configuration option.
 * @method static bool offsetUnset($key) Unset a configuration option.
 */
class Config extends Illuminate\Config\Repository {}
#class Console
class Container extends Illuminate\Container {}

/**
 * @method static bool                                     has($key) Determine if a cookie exists and is not null.
 * @method static mixed                                    get($key, $default = null)
 * @method static mixed|null                               decrypt($value)
 * @method static Symfony\Component\HttpFoundation\Cookie  make($name, $value, $minutes = 0)
 * @method static Symfony\Component\HttpFoundation\Cookie  forever(string $name, string $value)
 * @method static Symfony\Component\HttpFoundation\Cookie  forget(string $name)
 * @method static Symfony\Component\HttpFoundation\Request getRequest()
 * @method static Illuminate\Encryption\Encrypter          getEncrypter()
 */
class Cookie extends Illuminate\CookieJar {}

/**
 * @method static string encrypt(string $value)
 * @method static string padAndMcrypt(string $value, string $iv)
 * @method static string decrypt(string $payload)
 * @method static string mcryptDecrypt(string $value, string $iv)
 * @method static array  getJsonPayload(string $payload)
 * @method static string hash(string $value) Create a MAC for the given value.
 * @method static string addPadding(string $value)
 * @method static string stripPadding(string $value)
 * @method static bool   paddingIsValid(string $pad, string $value) Determine if the given padding for a value is valid.
 * @method static bool   invalidPayload(array $data) Verify that the encryption payload is valid.
 * @method static iv     getIvSize()   Get the IV size for the cipher.
 * @method static int    getRandomizer()   Get the random data source available for the OS.
 */
class Crypt extends Illuminate\Encryption\Encrypter {}

/**
 * @method static void     listen($event, $listener, $priority = 0)
 * @method static Symfony\Component\EventDispatcher\Event  fire($eventName, $payload = array())
 * @method static void     subscribe(EventSubscriberInterface $subscriber)
 * @method static void     unsubscribe(EventSubscriberInterface $subscriber)
 * @method static void     addListener($eventName, $listener, $priority = 0)
 * @method static Closure  createClassListener($listener)
 */
class Event extends Illuminate\Events\Dispatcher {}
class Facade extends Illuminate\Support\Facades\Facade {}
class File extends  Illuminate\Filesystem {}
class Hash extends Illuminate\Hashing\BcryptHasher {}
/**
 * @method static mixed get(string|array $key = null, $default = null) Get an item from the input data. This method is used for all request verbs (GET, POST, PUT, PATCH and DELETE)
 * @method static bool has(string|array $key)  Determine if the request contains a given input item.
 * @method static array all()
 * @method static array only(array|string $keys) Get a subset of the items from the input data.
 * @method static array except(array|string $keys) Get all of the input except for a specified array of items.
 * @method static string query(string $key = null, mixed $default = null) Retrieve a query string item from the request.
 * @method static string cookie(string $key = null, mixed $default = null) Retrieve a cookie from the request.
 * @method static UploadedFile file($key = null, $default = null) Retrieve a file from the request.
 * @method static bool hasFile(string $key) Determine if the uploaded data contains a file.
 * @method static string header($key = null, $default = null)
 * @method static string server($key = null, $default = null)
 * @method static string old($key = null, $default = null)
 * @method static void flash($filter = null, $keys = array())
 * @method static void flashOnly()
 * @method static void flashExcept()
 * @method static void flush()
 * @method static void merge(array $input)
 * @method static void replace(array $input)
 * @method static object json( dynamic ) Get the JSON payload for the request.
 */
class Input extends Illuminate\Http\Request {}
class Lang extends Illuminate\Translation\Translator {}
/**
 * @method static void useFiles(string $path, string $level = 'debug') Register a file log handler.
 * @method static void useDailyFiles($path, $days = 0, $level = 'debug')
 * @method static int  parseLevel(string $level) Parse the string level into a Monolog constant. debug|info|notice|warning|error|critical|alert|emergency
 * @method static Monolog\Logger getMonolog() Get the underlying Monolog instance.
 * @method static mixed __call($method, $parameters) Dynamically handle error additions.( Closure support )
 */
class Log extends Illuminate\Log\Writer {}
class Request extends Illuminate\Http\Request {}
class Response extends Illuminate\Support\Facades\Response {}
#class Response extends Illuminate\Http\Response {}
#class Mail  extends Illuminate\Mail\Message {}
class Mail extends Illuminate\Mail\Mailer {}
class Paginator extends Illuminate\Pagination\BootstrapPresenter {}
class Queue {}
class Redis extends Illuminate\Redis\Database {}

/**
 * @method static Illuminate\Routing\Route get(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route put(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route patch(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route post(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route delete(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route match(string $method, string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route createRoute(string $method, string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route any(string $pattern, mixed $action) Add a new route to the collection.
 * @method static void                     controllers(array $controllers) Register an array of controllers with wildcard routing.
 * @method static Illuminate\Routing\Route controller($controller, $uri)
 * @method static void                     resource(string $resource, string $controller, array $options = array()) Route a resource to a controller.
 * @method static void                     group(array $attributes, Closure $callback) Create a route group with shared attributes.
 * @method static Symfony\Component\HttpFoundation\Response dispatch(Symfony\Component\HttpFoundation\Request $request) Get the response for a given request.
 * @method statis void                     before(Closure $callback) Register a "before" routing filter.
 * @method statis void                     after(Closure $callback) Register an "after" routing filter.
 * @method statis void                     close(Closure $callback) Register a "close" routing filter.
 * @method statis void                     finish(Closure $callback) Register a "finish" routing filters.
 * @method statis void                     addFilter(string $name, Closure|string $callback) Register a new filter with the application.
 * @method statis Closure                  getFilter($name) Get a registered filter callback.
 *
 *
 *
 */
class Route extends Illuminate\Routing\Router {}
class Redirect extends Illuminate\Routing\Redirector {}
class URL extends Illuminate\Routing\UrlGenerator {}
class Controller extends Illuminate\Routing\Controllers\Controller {}
class Session extends Illuminate\Session\Store {}
class Lang extends Illuminate\Translation\Translator {}
class Validator extends Illuminate\Validation\Factory {}
class View extends Illuminate\View\Environment {}

/**
 * @method static Illuminate\Database\Schema\Builder connection(strin $name) Get a schema builder instance for a connection.
 * @method static
 */
class Schema extends Illuminate\Database\Schema\Builder {}


