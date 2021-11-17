# Stanford Earth 2 Pangea

8.x-1.1
--------------------------------------------------------------------------------
_Release Date: 2021-11-16_

- Drupal 9.x release.

8.x-1.0-alpha5
--------------------------------------------------------------------------------
_Release Date: 2017-11-12_

Puts no-cache option back in stanford_earth2pangea.routing.yml.
Changes response code back to 302 TrustedRedirectResponse in case page moves to earth in future.
Adds \Drupal::service('page_cache_kill_switch')->trigger() to Controller to keep redirect from anonymous Drupal cache.;

8.x-1.0-alpha4
--------------------------------------------------------------------------------
_Release Date: 2017-11-12_

Adds watchdog message.

8.x-1.0-alpha3
--------------------------------------------------------------------------------
_Release Date: 2017-11-11_

Adds code 301 to responses.

8.x-1.0-alpha2
--------------------------------------------------------------------------------
_Release Date: 2017-11-11_

Removes no-cache from stanford_earth2pangea.routing.yml so that anonymous requests
are recorded in varnish cache.

8.x-1.0-alpha1
--------------------------------------------------------------------------------  
_Release Date: 2017-10-26_

- Initial Release
