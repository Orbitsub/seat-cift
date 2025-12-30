# seat-cift

A module for [SeAT](https://github.com/eveseat/seat) that can compare the skills of character and ship required skills.

[![Latest Stable Version](https://img.shields.io/packagist/v/denngarr/seat-fitting.svg?style=flat-square)]()
[![License](https://img.shields.io/badge/license-GPLv2-blue.svg?style=flat-square)](https://raw.githubusercontent.com/dysath/seat-srp/master/LICENSE)

If you have issues with this, you can contact me on Eve as **Aldent Rendrag**

## Quick Installation:

In your seat directory (By default:  /var/www/seat), type the following:

```
php artisan down
composer require orbitsub/seat-cift

php artisan vendor:publish --force --all
php artisan migrate

php artisan up
```

If  using a docker installation see https://eveseat.github.io/docs/admin_guides/docker_admin/#installing-plugins

Use the package name `orbitsub/seat-cift`

And now, when you log into 'Seat', you should see a 'CIFT' link on the left.

Safe travels! o/
