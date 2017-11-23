#mon creation serveur
<VirtualHost *:80>
	ServerAdmin webmaster@host.localhost
	DocumentRoot "C:/wamp64/www/synthese/"
	ServerName poec-symfony.dev
	ServerAlias poec-symfony.dev
	ErrorLog "logs/poec-symfony.dev-error.log"
	CustomLog "logs/poec-symfony.dev-access.log" common
</VirtualHost>

1- Ajouter notre conf dans 
	«C:\wamp64\bin\apache\apache2.4.27\conf\extra»

2- Ajouter 
Include conf/extra/httpd-vhosts.conf

dans notre conf
C:\wamp64\bin\apache\apache2.4.27\conf

3- Modifier notre host
127.0.0.1			poec-symfony.dev