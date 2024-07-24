The demo?.php files that have forms submit to demo?-*.php files are not
integrated with the rest of the code in autoload/. That said, often it is
useful to start with some code that works standalone (or close to it, 
e.g., notice the require_once('common.php') line in some of these files
which does allow one to use classes in autoload/ ) makes it 
simpler to develop and test something. Once it works it can then be
incorporated into more code later.
