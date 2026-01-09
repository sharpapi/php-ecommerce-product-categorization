<?php

declare(strict_types=1);

namespace SharpAPI\EcommerceProductCategories;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

/**
 * Categorize products using AI - generates relevant category matches with scores
 *
 * @package SharpAPI\EcommerceProductCategories
 * @api
 */
class ProductCategorizationClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPEcommerceProductCategories/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * Categorize products using AI - generates relevant category matches with scores
     *
     * @param string $content The product content to process
     * @param string $language Output language (default: English)
     * @param int|null $maxQuantity Optional maximum quantity of results
     * @param int|null $maxLength Optional maximum length of generated content
     * @param string|null $voiceTone Optional tone of voice
     * @param string|null $context Optional additional context
     * @return string Status URL for polling the job result
     * @throws GuzzleException
     * @api
     */
    public function categorizeProduct(
        string $content,
        string $language = 'English',
        ?int $maxQuantity = null,
        ?int $maxLength = null,
        ?string $voiceTone = null,
        ?string $context = null
    ): string {
        $response = $this->makeRequest('POST', '/ecommerce/product_categories', array_filter([
            'content' => $content,
            'language' => $language,
            'max_quantity' => $maxQuantity,
            'max_length' => $maxLength,
            'voice_tone' => $voiceTone,
            'context' => $context,
        ], fn($v) => $v !== null));

        return $this->parseStatusUrl($response);
    }
}
