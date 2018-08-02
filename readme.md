![Twitter-like Search API Server](https://user-images.githubusercontent.com/9766310/43558271-29cf6a68-963b-11e8-9849-1db2c5226143.png)

# [Twitter-like Search API Server](http://twitter-like-search-api-server.herokuapp.com)
This Web API provides simple dummy tweets data with same JSON response structure with Twitter's Search API. Please feel free to use the endpoint for your project. Available in http://twitter-like-search-api-server.herokuapp.com

Note: Heroku free dynos sleep after 30 minutes of inactivity so sometimes your first request might take a bit longer to receive response.

## Features

* Uses OAuth2 instead of Oauth v1.1a
* Same response data structure but simpler

## Built With
* Laravel 5.6
* OAuth2

## Usage

### API Endpoints
![Endpoints](https://user-images.githubusercontent.com/9766310/43558474-471ed09e-963c-11e8-9489-0c572a2a852e.png)


### Sample API Request
``` bash
curl --header "Accept: application/vnd.api+json" https://randomstoicquotesapi.herokuapp.com/api/v1/quotes
```

### Sample API Response
![Response](https://user-images.githubusercontent.com/9766310/33598117-8e0e2396-d9dc-11e7-81cd-d23c0bb17a2e.png)

## Change log

Please see [CHANGELOG][link-changelog] for more information on what has changed recently.

## Testing

``` bash
$ phpunit
```

#### Show full specs and features:

``` bash
$ phpunit --testdox
```

## Contributing

Open for suggestions and requests. Please request through [issue][link-issue] or [pull requests][link-pull-request].

## Security

If you discover any security related issues, please email jimwisleymerioles@gmail.com instead of using the issue tracker.

## Credits

- [Jim Merioles][link-author]
- [Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

### Want to show some :heart:?

Let's find Satoshi Nakamoto! | or let's have a :coffee:
------------ | ------------
![Donate Bitcoin][ico-bitcoin] | ![Donate Ethereum][ico-ethereum]


[ico-bitcoin]: https://img.shields.io/badge/Bitcoin-1KBT3Mzsr2dZqhQqNYx4gum8Yuyd61UzNk-blue.svg?style=flat-square
[ico-ethereum]: https://img.shields.io/badge/Ethereum-0x7896E9C4118e495Eb7001a847BBFA3C29Dfc69d9-blue.svg?style=flat-square

[link-author]: https://twitter.com/jimmerioles
[link-contributors]: https://github.com/jimmerioles/random-stoic-quotes-api/graphs/contributors
[link-changelog]: https://github.com/jimmerioles/random-stoic-quotes-api/releases
[link-issue]: https://github.com/jimmerioles/random-stoic-quotes-api/issues/new
[link-pull-request]: https://github.com/jimmerioles/random-stoic-quotes-api/pull/new/master
