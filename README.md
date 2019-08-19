[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WsdlToPhp/PackagePayPal/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/WsdlToPhp/PackagePayPal/?branch=develop)
[![Latest Stable Version](https://poser.pugx.org/wsdltophp/package-paypal/v/stable)](https://packagist.org/packages/wsdltophp/package-paypal)
[![Dependency Status](https://www.versioneye.com/user/projects/55fc8608ddc3cf0014000209/badge.svg)](https://www.versioneye.com/user/projects/55fc8608ddc3cf0014000209)
[![StyleCI](https://styleci.io/repos/80418221/shield)](https://styleci.io/repos/80418221)
[![Total Downloads](https://poser.pugx.org/wsdltophp/package-paypal/downloads)](https://packagist.org/packages/wsdltophp/package-paypal)

# PackagePayPal
This package has been generated from the [PayPal Web Services](https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl) WSDL using the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project.

# Summary
- [Generating again the package](#generating-again-the-package)
- [How to use the generated package?](#how-to-use-the-generated-package)
    - [Install the project](#install-the-project)
    - [Use the project](#use-the-project)
    - [Learn from the tutorial](#learn-from-the-tutorial)
- [Need support or having a question?](#need-support-or-having-a-question)

# Generating again the package
You can generate again the package's sources using the [generate.sh](generate.sh) script:
```bash
$ git clone https://github.com/WsdlToPhp/PackagePayPal.git package-paypal
$ docker-compose up -d
$ docker exec -it package_paypal bash generate.sh
```
To learn how to customize the generated package, please read the PackageGenerator's [README](https://github.com/WsdlToPhp/PackageGenerator/blob/master/README.md).

# How to use the generated package?

## Install the project
```bash
$ git clone https://github.com/WsdlToPhp/PackagePayPal.git package-paypal
$ cd package-paypal
$ composer update
```

## Use the project
```bash
$ composer require wsdltophp/package-paypal
```

## Learn from the tutorial
Start looking into the auto-generated [tutorial.php](tutorial.php) file. This file contains the starting code to use this package. In addition it contains all the operations provided by the Exchange Web Services and the way to call them.

# Need support or having a question?
We can help you understand how to use it and how to customize it. Feel free to contact us at contact@wsdltophp.com.
