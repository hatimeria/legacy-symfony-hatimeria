# Hatimeria - Symfony and ExtJS Integrated

## Build for heavy javascript applications

See http://framework.hatimeria.com/

## Installation guide

Clone this repo.
Copy app/config/custom_example.yml to app/config/custom.yml (this file is used instead of parameters.ini)
Adjust parameters in custom.yml file (enter your email under my_email key).

Run from console following commans to:

 * Install all required vendors like Symfony, ExtJS, Doctrine, Translations etc...
   $ php bin/vendors install

 * Create database (according to your app/config/custom.yml)
   $ php app/console doctrine:database:create

 * Set all defaults tables:
   $ php app/console doctrine:schema:update --force

 * Load default data:
   $ php app/console doctrine:fixtures:load

 * Install HatimeriaExtJS (creates a symlink in ExtJSBundle points to HatimeriaExtJS)
   $ php app/console hatimeria:extjs:install --symlink --docs

Login with email from custom.yml and password: 'hatimeria'