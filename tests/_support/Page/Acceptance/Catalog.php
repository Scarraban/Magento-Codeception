<?php
namespace Page\Acceptance;

class Catalog
{
    public static $CATEGORY_URL = '/gear/watches.html';
    public static $CATEGORY_URL_17 = '/sales.html';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    public static $categoryFirstProduct = 'div.products-grid > ol.products.list > li.item:first-child a';
    public static $productBody = '.catalog-product-view';
    public static $addToCartForm = '#product_addtocart_form';
    public static $successMessage = 'div.message-success';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
