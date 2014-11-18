# GreyFenix_WishlistShare
Fix Magento bug for adding all cart in from Shared Wishlist email

## Background
I found a bug on the new version of Magento (EE 1.14 and CE 1.9) that when you share your wishlist. And the person that you've shared clicking on 'Add All Item to Cart' it redirect you to 404 page.
That seems Magento use the same function that owner of wishlist try adding to the cart from frontend. And it for security reason, it check the form keys.

You can see the code on app/code/core/Mage/Wishlist/Controller/Abstract.php on line 76
```
if (!$this->_validateFormKey()) {
    $this->_forward('noRoute');
    return;
}
```
So by adding this extension, the Magento bug will fixed!

## Installation.
This extension can be installed a few different ways:

### Using modman

    modman clone git@github.com:dimasdwika/Greyfenix_WishlistShare.git

### Using composer

add a composer.json file to your project directory

    {
        "minimum-stability":"dev",
        "repositories": [
            {
              "type":"composer",
              "url":"http://packages.firegento.com"
            },
            {
                "type": "git",
                "url": "git@github.com:dimasdwika/Greyfenix_WishlistShare.git"
            }
        ],
        "require": {
            "greyfenix/wishlistshare" : "*"
        }
    }

then

    composer.phar update

### Download and install manually.

[https://github.com/dimasdwika/Greyfenix_WishlistShare/archive/master.zip](https://github.com/dimasdwika/Greyfenix_WishlistShare/archive/master.zip)

## Licence
License Under Greyfenix adapting MIT and OSL license