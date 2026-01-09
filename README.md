![SharpAPI GitHub cover](https://sharpapi.com/sharpapi-github-laravel-bg.jpg "SharpAPI PHP Client")

# Ecommerce Product Categorization API for PHP

## 🛒 Categorize products using AI - generates relevant category matches with scores

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharpapi/php-ecommerce-product-categorization.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-ecommerce-product-categorization)
[![Total Downloads](https://img.shields.io/packagist/dt/sharpapi/php-ecommerce-product-categorization.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-ecommerce-product-categorization)

Check the full documentation on the [Ecommerce Product Categorization API for PHP API](https://sharpapi.com/en/catalog/ai/e-commerce/product-categorization) page.

---

## Quick Links

| Resource | Link |
|----------|------|
| **Main API Documentation** | [Authorization, Webhooks, Polling & More](https://documenter.getpostman.com/view/31106842/2s9Ye8faUp) |
| **Postman Documentation** | [View Docs](https://documenter.getpostman.com/view/31106842/2sBXVeGsVq) |
| **Product Details** | [SharpAPI.com](https://sharpapi.com/en/catalog/ai/e-commerce/product-categorization) |
| **SDK Libraries** | [GitHub - SharpAPI SDKs](https://github.com/sharpapi) |

---

## Requirements

- PHP >= 8.0

---

## Installation

### Step 1. Install the package via Composer:

```bash
composer require sharpapi/php-ecommerce-product-categorization
```

### Step 2. Visit [SharpAPI](https://sharpapi.com/) to get your API key.

---
## Laravel Integration

Building a Laravel application? Check the Laravel package version for better integration.

---

## What it does

Categorize products using AI - generates relevant category matches with scores

---

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SharpAPI\EcommerceProductCategories\ProductCategorizationClient;
use GuzzleHttp\Exception\GuzzleException;

$apiKey = 'your_api_key_here';
$client = new ProductCategorizationClient(apiKey: $apiKey);

try {
    $statusUrl = $client->categorizeProduct(
        content: 'Your text content here',
        language: 'English'
    );

    // Optional: Configure polling
    $client->setApiJobStatusPollingInterval(10);
    $client->setApiJobStatusPollingWait(180);

    // Fetch results (polls automatically)
    $result = $client->fetchResults($statusUrl);
    $resultData = $result->getResultJson();

    echo $resultData;
} catch (GuzzleException $e) {
    echo "API error: " . $e->getMessage();
}
```

---

## Example Response
```json

{
    "data": {
        "type": "api_job_result",
        "id": "6d3fec8c-34f8-4071-a5ba-af14910b4d77",
        "attributes": {
            "status": "success",
            "type": "ecommerce_product_categories",
            "result": [
                {
                    "name": "Gaming Laptops",
                    "weight": 10
                },
                {
                    "name": "Razer Laptops",
                    "weight": 10
                },
                {
                    "name": "High-Performance Laptops",
                    "weight": 9.5
                },
                {
                    "name": "Laptops",
                    "weight": 9
                },
                {
                    "name": "Razer Gear",
                    "weight": 8.5
                },
                {
                    "name": "Electronics",
                    "weight": 8
                },
                {
                    "name": "Computers & Accessories",
                    "weight": 7.5
                },
                {
                    "name": "PC Gaming",
                    "weight": 7
                },
                {
                    "name": "Portable Computers",
                    "weight": 6.5
                },
                {
                    "name": "Tech Gadgets",
                    "weight": 6
                }
            ]
        }
    }
}

```
---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Credits

- [A2Z WEB LTD](https://github.com/a2zwebltd)
- [Dawid Makowski](https://github.com/makowskid)
- Boost your [PHP AI](https://sharpapi.com/) capabilities!

---

## License

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

## Social Media

🚀 For the latest news, tutorials, and case studies, don't forget to follow us on:
- [SharpAPI X (formerly Twitter)](https://x.com/SharpAPI)
- [SharpAPI YouTube](https://www.youtube.com/@SharpAPI)
- [SharpAPI Vimeo](https://vimeo.com/SharpAPI)
- [SharpAPI LinkedIn](https://www.linkedin.com/products/a2z-web-ltd-sharpapicom-automate-with-aipowered-api/)
- [SharpAPI Facebook](https://www.facebook.com/profile.php?id=61554115896974)
