the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages
 (e.g. username, favorite color, etc). By default,
 session variables last until the user closes the browser.


So; Session variables hold information about one single user,
 and are available to all pages in one application.



PHP  session is started with the session_start() function.
Session variables are set with the PHP global variable: $_SESSION.

1)cookies:-store information in browser memeory
2)session:-store information on server.

