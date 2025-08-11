# Learning PHP
[PHP Full Course for Non-Haters](https://youtu.be/zZ6vybT1HQs?si=LJgpm2-XJ8lA4E0Y) by Bro Code.
  
# NOTE
The live server local host and port link is different from the PHP XAMPP server. To be able to see the HTML code inside the PHP file make sure that the XAMPP server's Apache and MySQL box are checked.

After which, go to this link **http://localhost/myproject/index.php** and replace the myproject with the project folder and the PHP file name. You can add in this line inside the phpinfo(); inside the PHP tags to check the PHP version installed and other machine information.
  
## Put PHP into PATH **environment system variables**
Go to "edit environment system" variables and edit "PATH" then add "D:/XAMPP/php". Depending on installation location. 
  
## Validate executable path in VSCode
Open settings then "php.validate.executablePath" then edit. Put "D:/XAMPP/php/php.exe" next to the "php.validate.executablePath" in "settings.json"
  
## VSCode and Chrome Setup
PHP Server, Live Server and PHP Intelephense have to be installed in VSCode. The browser has to be reloaded everytime the php file is modified.
  
To make it automatic, install the Live Server extension in the Chrome Web Store. After that click the extension and enable live reload. There are two addresses that need to be filled which are the actual server address and live server address.
  
To get the live server address, click on the live server at the bottom of VSCode and get the link of the port on the chrome pop-up.
  
The actual server address to be used is  "http://localhost/learningphp/" and the live server address is "http://127.0.0.1:5500/". After which click apply and live reload will now work.
  