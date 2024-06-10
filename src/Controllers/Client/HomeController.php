<?php
namespace Tiend\OopMvc\Controllers\Client;

use Tiend\OopMvc\Commons\Controller;
use Tiend\OopMvc\Commons\Helper;
use Tiend\OopMvc\Models\Category;
use Tiend\OopMvc\Models\Product;

class HomeController extends Controller
{
    private Product $product;
    // private Category $category;

    public function __construct()
    {
        $this->product = new Product();
    }
    public function index() {
        $products = $this->product->all();

        $name = 'DatNT';

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }

    public function detail($id) {
        $product = $this->product->findByID($id);
        $this->renderViewClient('detail', [
            'product' => $product
        ]);
    }
}