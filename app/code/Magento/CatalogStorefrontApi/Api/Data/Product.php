<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for Product class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class Product implements ProductInterface
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $attributeSetId;

    /**
     * @var bool
     */
    private $hasOptions;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $typeId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $stockStatus;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var string
     */
    private $urlKey;

    /**
     * @var string
     */
    private $giftcardType;

    /**
     * @var float
     */
    private $qty;

    /**
     * @var string
     */
    private $taxClassId;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var array
     */
    private $images;

    /**
     * @var array
     */
    private $videos;

    /**
     * @var array
     */
    private $samples;

    /**
     * @var string
     */
    private $visibility;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var string
     */
    private $metaDescription;

    /**
     * @var string
     */
    private $metaKeyword;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var array
     */
    private $categories;

    /**
     * @var string
     */
    private $requiredOptions;

    /**
     * @var string
     */
    private $createdIn;

    /**
     * @var string
     */
    private $updatedIn;

    /**
     * @var string
     */
    private $quantityAndStockStatus;

    /**
     * @var string
     */
    private $optionsContainer;

    /**
     * @var string
     */
    private $msrpDisplayActualPriceType;

    /**
     * @var string
     */
    private $isReturnable;

    /**
     * @var string
     */
    private $urlSuffix;

    /**
     * @var array
     */
    private $options;

    /**
     * @var array
     */
    private $urlRewrites;

    /**
     * @var string
     */
    private $countryOfManufacture;

    /**
     * @var float
     */
    private $specialPrice;

    /**
     * @var string
     */
    private $specialFromDate;

    /**
     * @var string
     */
    private $specialToDate;

    /**
     * @var array
     */
    private $links;

    /**
     * @var string
     */
    private $canonicalUrl;

    /**
     * @var string
     */
    private $priceView;

    /**
     * @var bool
     */
    private $linksPurchasedSeparately;

    /**
     * @var float
     */
    private $onlyXLeftInStock;

    /**
     * @var array
     */
    private $productOptions;

    /**
     * @var array
     */
    private $shopperInputOptions;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getId(): string
    {
        return (string) $this->id;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setId(string $value): void
    {
        $this->id = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getAttributeSetId(): string
    {
        return (string) $this->attributeSetId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setAttributeSetId(string $value): void
    {
        $this->attributeSetId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return bool
     */
    public function getHasOptions(): bool
    {
        return (bool) $this->hasOptions;
    }
    
    /**
     * @inheritdoc
     *
     * @param bool $value
     * @return void
     */
    public function setHasOptions(bool $value): void
    {
        $this->hasOptions = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return (string) $this->createdAt;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setCreatedAt(string $value): void
    {
        $this->createdAt = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return (string) $this->updatedAt;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setUpdatedAt(string $value): void
    {
        $this->updatedAt = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSku(): string
    {
        return (string) $this->sku;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSku(string $value): void
    {
        $this->sku = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getTypeId(): string
    {
        return (string) $this->typeId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setTypeId(string $value): void
    {
        $this->typeId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStatus(): string
    {
        return (string) $this->status;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStatus(string $value): void
    {
        $this->status = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStockStatus(): string
    {
        return (string) $this->stockStatus;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStockStatus(string $value): void
    {
        $this->stockStatus = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getName(): string
    {
        return (string) $this->name;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getDescription(): string
    {
        return (string) $this->description;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setDescription(string $value): void
    {
        $this->description = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getShortDescription(): string
    {
        return (string) $this->shortDescription;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setShortDescription(string $value): void
    {
        $this->shortDescription = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getUrlKey(): string
    {
        return (string) $this->urlKey;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setUrlKey(string $value): void
    {
        $this->urlKey = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getGiftcardType(): string
    {
        return (string) $this->giftcardType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setGiftcardType(string $value): void
    {
        $this->giftcardType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return float
     */
    public function getQty(): float
    {
        return (float) $this->qty;
    }
    
    /**
     * @inheritdoc
     *
     * @param float $value
     * @return void
     */
    public function setQty(float $value): void
    {
        $this->qty = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getTaxClassId(): string
    {
        return (string) $this->taxClassId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setTaxClassId(string $value): void
    {
        $this->taxClassId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return float
     */
    public function getWeight(): float
    {
        return (float) $this->weight;
    }
    
    /**
     * @inheritdoc
     *
     * @param float $value
     * @return void
     */
    public function setWeight(float $value): void
    {
        $this->weight = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImageInterface[]
     */
    public function getImages(): array
    {
        return (array) $this->images;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImageInterface[] $value
     * @return void
     */
    public function setImages(array $value): void
    {
        $this->images = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\VideoInterface[]
     */
    public function getVideos(): array
    {
        return (array) $this->videos;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\VideoInterface[] $value
     * @return void
     */
    public function setVideos(array $value): void
    {
        $this->videos = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\SampleInterface[]
     */
    public function getSamples(): array
    {
        return (array) $this->samples;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\SampleInterface[] $value
     * @return void
     */
    public function setSamples(array $value): void
    {
        $this->samples = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getVisibility(): string
    {
        return (string) $this->visibility;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setVisibility(string $value): void
    {
        $this->visibility = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\AttributeInterface[]
     */
    public function getAttributes(): array
    {
        return (array) $this->attributes;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\AttributeInterface[] $value
     * @return void
     */
    public function setAttributes(array $value): void
    {
        $this->attributes = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getMetaDescription(): string
    {
        return (string) $this->metaDescription;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setMetaDescription(string $value): void
    {
        $this->metaDescription = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getMetaKeyword(): string
    {
        return (string) $this->metaKeyword;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setMetaKeyword(string $value): void
    {
        $this->metaKeyword = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getMetaTitle(): string
    {
        return (string) $this->metaTitle;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setMetaTitle(string $value): void
    {
        $this->metaTitle = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getCategories(): array
    {
        return (array) $this->categories;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setCategories(array $value): void
    {
        $this->categories = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getRequiredOptions(): string
    {
        return (string) $this->requiredOptions;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setRequiredOptions(string $value): void
    {
        $this->requiredOptions = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getCreatedIn(): string
    {
        return (string) $this->createdIn;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setCreatedIn(string $value): void
    {
        $this->createdIn = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getUpdatedIn(): string
    {
        return (string) $this->updatedIn;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setUpdatedIn(string $value): void
    {
        $this->updatedIn = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getQuantityAndStockStatus(): string
    {
        return (string) $this->quantityAndStockStatus;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setQuantityAndStockStatus(string $value): void
    {
        $this->quantityAndStockStatus = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getOptionsContainer(): string
    {
        return (string) $this->optionsContainer;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setOptionsContainer(string $value): void
    {
        $this->optionsContainer = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getMsrpDisplayActualPriceType(): string
    {
        return (string) $this->msrpDisplayActualPriceType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setMsrpDisplayActualPriceType(string $value): void
    {
        $this->msrpDisplayActualPriceType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getIsReturnable(): string
    {
        return (string) $this->isReturnable;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setIsReturnable(string $value): void
    {
        $this->isReturnable = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getUrlSuffix(): string
    {
        return (string) $this->urlSuffix;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setUrlSuffix(string $value): void
    {
        $this->urlSuffix = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\OptionInterface[]
     */
    public function getOptions(): array
    {
        return (array) $this->options;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\OptionInterface[] $value
     * @return void
     */
    public function setOptions(array $value): void
    {
        $this->options = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteInterface[]
     */
    public function getUrlRewrites(): array
    {
        return (array) $this->urlRewrites;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteInterface[] $value
     * @return void
     */
    public function setUrlRewrites(array $value): void
    {
        $this->urlRewrites = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getCountryOfManufacture(): string
    {
        return (string) $this->countryOfManufacture;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setCountryOfManufacture(string $value): void
    {
        $this->countryOfManufacture = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return float
     */
    public function getSpecialPrice(): float
    {
        return (float) $this->specialPrice;
    }
    
    /**
     * @inheritdoc
     *
     * @param float $value
     * @return void
     */
    public function setSpecialPrice(float $value): void
    {
        $this->specialPrice = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSpecialFromDate(): string
    {
        return (string) $this->specialFromDate;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSpecialFromDate(string $value): void
    {
        $this->specialFromDate = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSpecialToDate(): string
    {
        return (string) $this->specialToDate;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSpecialToDate(string $value): void
    {
        $this->specialToDate = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\LinkInterface[]
     */
    public function getLinks(): array
    {
        return (array) $this->links;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\LinkInterface[] $value
     * @return void
     */
    public function setLinks(array $value): void
    {
        $this->links = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getCanonicalUrl(): string
    {
        return (string) $this->canonicalUrl;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setCanonicalUrl(string $value): void
    {
        $this->canonicalUrl = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getPriceView(): string
    {
        return (string) $this->priceView;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setPriceView(string $value): void
    {
        $this->priceView = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return bool
     */
    public function getLinksPurchasedSeparately(): bool
    {
        return (bool) $this->linksPurchasedSeparately;
    }
    
    /**
     * @inheritdoc
     *
     * @param bool $value
     * @return void
     */
    public function setLinksPurchasedSeparately(bool $value): void
    {
        $this->linksPurchasedSeparately = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return float
     */
    public function getOnlyXLeftInStock(): float
    {
        return (float) $this->onlyXLeftInStock;
    }
    
    /**
     * @inheritdoc
     *
     * @param float $value
     * @return void
     */
    public function setOnlyXLeftInStock(float $value): void
    {
        $this->onlyXLeftInStock = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductOptionInterface[]
     */
    public function getProductOptions(): array
    {
        return (array) $this->productOptions;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductOptionInterface[] $value
     * @return void
     */
    public function setProductOptions(array $value): void
    {
        $this->productOptions = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductShopperInputOptionInterface[]
     */
    public function getShopperInputOptions(): array
    {
        return (array) $this->shopperInputOptions;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductShopperInputOptionInterface[] $value
     * @return void
     */
    public function setShopperInputOptions(array $value): void
    {
        $this->shopperInputOptions = $value;
    }
}
