<?php
#Class App extends static::$app????
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
#class Input extends Illuminate\Support\Facades\Input {}
# Strange but true, Input is Request + ::get() method
/**
 * @method static mixed has() This method is used for all request verbs (GET, POST, PUT, and DELETE)
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


