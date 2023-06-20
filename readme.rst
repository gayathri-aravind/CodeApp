###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.

*****************************************************************
Follow the below STEPS to install Codeigniter 3 in Ubuntu 20.04
*****************************************************************

1. Clone the repo 'CodeApp' from github into the location 'var/www/html'
2. Refer the below link to install Apache / change the listening port of Apache:
    https://ubiq.co/tech-blog/how-to-change-port-number-in-apache-in-ubuntu/

    NOTE: 
    
    1. Refer for installing Codeigniter in Ubuntu
         https://www.youtube.com/watch?v=ji-jbITM0jc

    2. Refer the below link, if you face the following error, while restarting the apache service - AH00558: Could not reliably determine the server's fully qualified domain name:
        https://www.digitalocean.com/community/tutorials/apache-configuration-error-ah00558-could-not-reliably-determine-the-server-s-fully-qualified-domain-name

    3. While hitting your Codeigniter project on the browser, if you get the plain text of the file "<codeigniter-project>/index.php", then you need to INTREGRATE the PHP-FPM with your apache server. To do this, follow the Step 4:  Configure Apache with PHP-FPM from the below link:
    https://www.cloudbooklet.com/how-to-install-php-fpm-with-apache-on-ubuntu-20-04/

3. Create a virtual host entry for the cloned project. In my case, it is "http://codeapp-local:8081/".

4. Visit the site: http://codeapp-local:8081/index.php/. It will display a form with two input fields and then the workflow happens as per mentioned in the assignment.
