Not maintained
--------------
I no longer maintain or use this. Please have a look at http://adamwhitcroft.com/apaxy/. He seem to be doing something similar as this :-)

ABOUT
-----
A better looking directory listing for apache, I guess.

REQUIREMENTS
------------
- PHP (atm. should change to cgi or something) help?

INSTALL
-------
1. clone repo to somewhere safe on your server
2. Open up apache httpd.conf and add this line:

		Include <path/to/git-repo/>/autoindex.conf
	
	Make sure autoindex_module is installed and enabled
	
		LoadModule autoindex_module libexec/apache2/mod_autoindex.so

	If found, comment out any reference to httpd-autoindex.conf. We are replacing this.


3. Open autoindex.conf and edit the path on line 7 and 17.
4. Restart Apache

CUSTOM THEME
----------------
You can create your own .css file in the css folder and reference it in the header.html file, line 29. 

EXAMPLE
-------
![example](http://i.solidfiles.net/b215662ded.png)


LICENSE
-------
Icons		
		
	All Icons are Copyright © Yusuke Kamiyamane. All rights reserved. Licensed under a Creative Commons Attribution 3.0 license.
	
	http://p.yusukekamiyamane.com/
	http://creativecommons.org/licenses/by/3.0/	
