<?php

class ProductController {
    private $productModel;
  
    public function __construct($productModel) {
      $this->productModel = $productModel;
    }
  
    public function getAllProducts() {
      // Fetch all products using the ProductModel
      $products = $this->productModel->getAllProducts();
      
      // Perform any additional processing or formatting as needed
  
      // Return the fetched products to the front-end
      return $products;
    }
  }

?>