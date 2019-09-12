# Paymentshield API Samples (PHP)

This is a small sample PHP application, containing code samples for integrating with the Paymentshield REST API.

Please see the [Paymentshield REST API Documentation][docs] for help.


## Architecture

The frontend of this demo is a light HTML page with Vue and JQuery for managing state and sending AJAX requests.

There is a layer of PHP files, one per action, in the base of the `/src` directory, currently:

 * login.php
 * post_quote.php

The frontend submits a `GET` request to one of these, which calls a PSL API method using the right HTTP method and parameters, as specified in [our docs][docs]. You can navigate to the PHP files individually to execute them and view the result from the server. Using the frontend formats this in a nice way and explains the workflow.

The PHP source files contain some sample request data.


## Setup

Requires PHP 5+, but PHP 7+ is strongly recommended!

 1. Set up your Paymentshield integrator details in `config.php`.
 2. Install the contents of the `src` folder onto a server which can serve PHP.


## Comments and Issues

Please open an Issue if you find a problem with this repository.


[docs]: https://developers.paymentshield.co.uk/