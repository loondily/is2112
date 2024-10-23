<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class ProductsTest extends TestCase {
    public function test_router() {
        $product = new Router();
        $html = $product->route( "http://localhost/products" );
        $pos= mb_strpos($html, "Каталог");
        $this->assertNotEquals(false, $pos);
    }
}
