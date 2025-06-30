NetwalkerTask (CodeIgniter 3)
=================================

What is NetwalkerTask?
---------------------------

**NetwalkerTask** is a very simple content management system created to prove my competence with the old **CodeIgniter 3** PHP framework. I implemented routing, form validation, file upload as well as storing validated form inputs to the database.

Features
--------------

- 🗂️ Basic creation and storage of records
- 📊 Follows the proper MVC architecture 
- 📃 Basic form validation
- 📁 Ability to upload png and jpg/jpeg images
- 🌐 Friendly URLs
- 🛠️ Easily customizable
- 🖥️ Easy to install

Important Notes
---------------

Ensure ``ENVIRONMENT`` is set to ``testing`` or ``production`` in the ``index.php`` file of the root folder. This is to avoid the flagging of warnings due to outdated code in the ``system`` folder of CodeIgniter 3. 

Minimum server requirements:
  
  - PHP >= 5.6
  - MySQL >= 5.5
  - Apache/Nginx with URL rewriting (mod_rewrite) enabled

- Key configuration files:

  - ``application/config/config.php``
  - ``application/config/database.php``

Example Configuration:

.. code-block:: php

    // application/config/config.php
    $config['base_url'] = 'your_base_url_here'; //https://example.com or http://localhost/project_folder_name

    // application/config/database.php
    $db['default']['hostname'] = 'localhost';
    $db['default']['username'] = 'your_database_username';
    $db['default']['password'] = 'your_database_password';
    $db['default']['database'] = 'your_database_name';

How To Install
---------------

Follow these steps to install and run the project:

1. **Clone the Repository or download the zip archive**

   .. code-block:: bash

      git clone https://github.com/Laivee/netwalkers_task.git
      cd NetwalkerTaskBlog

2. **Move Project to Web Root**

   Place the project in your web root directory:
   - ``htdocs/`` for XAMPP
   - ``www/`` for WAMP
   - Or your server's web root

3. **Configure the Application**

   Update the following files with your local environment settings as earlier stated above:

   - ``application/config/config.php``
   - ``application/config/database.php``

4. **Import the Database file**

   In the root directory of of this project, you'll find a file named ``netwalkers.sql``. Import the file into your database using phpMyAdmin.

5. **Access the Application**

   Open your browser and navigate to the base url you provided in your ``application\config\config.php``.

Facing Any Issues? Contact Me
----------

If you have any questions, suggestions, or want to contribute:

- **Email**: `laiveetom@gmail.com <mailto: laiveetom@gmail.com>`_
- **GitHub**: `https://github.com/laivee <https://github.com/laivee>`_
- **LinkedIn**: `Etom Usang <https://www.linkedin.com/in/etom-usang-3370b9352>`_

---

*Made with ❤️ using CodeIgniter 3 — by Etom Usang*
