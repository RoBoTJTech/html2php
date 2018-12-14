# html2php
Run .html files as .php without renaming

Even though Adobe Muse is dead this concept could be useful for any site development tool that forces the page extensions to always be .html

If you want to embed php code you would have to rename all your pages to .php and update all links on the pages, or you can make the php handler recognize .html files as .php

The latter requires you having access to the webserver's (Apache, nginx, etc) config, or setting the directives in .htaccess files. The issue with the .htaccess file is every hosting company configures their servers differently and it can be a guessing game as to what is correct. They can also block this option completely and you would not be able to do it at all.

URL rewriting is not blocked in most cases as it would break products like Drupal, WordPress and many others. This is a simple script to parse all .html files as .php using a simple URL rewrite to a small php script.
