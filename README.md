<div align="center">
  <h3>HttpExceptions</h3>

  <p align="center">A collection of HTTP exceptions.</p>

  [![Latest Stable Version](http://poser.pugx.org/ystrion/httpexceptions/v)](https://packagist.org/packages/ystrion/httpexceptions)
  [![Latest Unstable Version](http://poser.pugx.org/ystrion/httpexceptions/v/unstable)](https://packagist.org/packages/ystrion/httpexceptions)
  [![License](http://poser.pugx.org/ystrion/httpexceptions/license)](https://packagist.org/packages/ystrion/httpexceptions)
</div>

## Getting Started

### Prerequisites

- PHP (>= 8.2)
- Composer

### Installation

This package can be installed with Composer using this command:

```sh
composer require ystrion/httpexceptions
```

## Usage

With this package, you can now throw dozens of new exceptions.

These are divided into two namespaces `\Ystrion\HttpExceptions\Client` and `\Ystrion\HttpExceptions\Server`.

### List of exceptions

#### Client

- BadRequest
- Conflict
- ExpectationFailed
- FailedDependency
- Forbidden
- Gone
- LengthRequired
- Locked
- MethodNotAllowed
- MisdirectedRequest
- NotAcceptable
- NotFound
- PayloadTooLarge
- PaymentRequired
- PreconditionFailed
- PreconditionRequired
- RangeNotSatisfiable
- RequestHeaderFieldsTooLarge
- RequestTimeout
- TooEarly
- TooManyRequests
- Unauthorized
- UnavailableForLegalReasons
- UnprocessableEntity
- UnsupportedMediaType
- UpgradeRequired
- UriTooLong

#### Server

- BadGateway
- GatewayTimeout
- HttpVersionNotSupported
- InsufficientStorage
- InternalServerError
- LoopDetected
- NetworkAuthenticationRequired
- NotExtended
- NotImplemented
- ServiceUnavailable
- VariantAlsoNegociates

## License

This package is distributed under the [MIT license](https://github.com/Ystrion/HttpExceptions/blob/main/LICENSE).

## Contact

- To report a security or related issue: [GitHub Security](https://github.com/Ystrion/HttpExceptions/security)
- To report a problem or post a feature idea: [GitHub Issues](https://github.com/Ystrion/HttpExceptions/issues)
- If you encounter any problem while installing or using: [GitHub Discussions](https://github.com/Ystrion/HttpExceptions/discussions)
- For any other reason: [ystrion@deville.dev](mailto:ystrion@deville.dev)
