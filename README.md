# Keep_your_link_safe

Store any link you've find while crawling the web.

A symfony 4 based web application.

# Features 

  - Add / Edit / Delete link <br>
      A link is based on a Title, a Description, an Url and Tags.
      
  - Add / Edit / Delete user  <br>  
      Two kinds of users : user and admin.
      An admin interface is present.
      
  - Search <br>
      Find a link by title, description ...
      Find all links in relation with a tag.
      
  - RSS <br>
      Send RSS flow written in XML.
      
# Installation

You need <a href="https://getcomposer.org/">Composer<a> to install PHP dependecies, and <a href="https://www.npmjs.com/">NPM<a> to compil assets. 

1- Clone or download the repository <br>
2- Run <code>composer install</code> to install PHP dependencies <br>
3- Run <code>npm install</code> to install Javascript dependencies <br>
4- Run <code>npm run build</code> to generate assets <br>
5- Run <code>php bin/console server:run</code> to launch Symfony <br>
6- Go to your_server_name:8000 to use the application <br>

You may need to enable port 8000 if not already done.
