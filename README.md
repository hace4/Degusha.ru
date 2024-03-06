<VirtualHost degusha.ru.local:80>
ServerAdmin webmaster@dummy-host.example.com
DocumentRoot "C:/xampp/htdocs/Degusha.ru"
ServerName Degusha.ru.local
ErrorLog "logs/Degusha.log"
CustomLog "logs/Degusha.log" common
</VirtualHost>

<VirtualHost Degusha.API.local:80>
ServerAdmin webmaster@dummy-host.example.com
DocumentRoot "C:/xampp/htdocs/Degusha.API"
ServerName Degusha.API.local
ErrorLog "logs/Degusha.log"
CustomLog "logs/Degusha.log" common
</VirtualHost>
