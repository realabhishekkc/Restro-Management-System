<?php
require ("../include/connection_db.php") ;
Class Product{
    private $productId;
    private $productName;
    private $productPrice;
    private $description;
    private $productImage;

    private $connect;

    function __construct(){
        $this->connect = new Connection();
    }

    // Getter and Setter
    // Product ID
    // Product Name
    public function getProductId()
    {
        return $this->productId;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    // Product Name
    public function getProductName()
    {
        return $this->productName;
    }
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }


    // Product Price
    public function getProductPrice(){
        return $this->productPrice;
    }
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;  
    }

    // Product Image
    public function getProductImage(){
        return $this->productImage;
    }
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;  
    }

    // Product Description
    public function getProductDescription(){
        return $this->description;
    }
    public function setProductDescription($description)
    {
        $this->description = $description;  
    }

    // Add Product into database
    public function addProduct(){
        $sql = "INSERT INTO `tbl_product`(`p_id`, `p_name`, `p_image`, `p_description`, `p_price`) VALUES (NULL, '$this->productName', '$this->productImage', '$this->description', '$this->productPrice')";
        return $this->connect->qry($sql);
    }

    // Select All Product from database
    public function selectAddedProduct(){
        return $this->connect->getData("SELECT * FROM `tbl_product`");
    }

    // Select Product from database
    public function selectProduct($pro_id){
        return $this->connect->getData("SELECT * FROM `tbl_product` WHERE `p_id` = '$pro_id'");
    }

    // Select Needed Product from database
    public function updateProduct($productId){
        $sql = "UPDATE `tbl_product` SET  `p_name`='$this->productName',`p_price`='$this->productPrice', `p_description`='$this->description' WHERE `p_id` = '$this->productId'";
        // echo $sql;
        return $this->connect->qry($sql);
    }

    // Delete Selected Product from Database
    public function deleteProduct($productId){
        $sql = "DELETE FROM `tbl_product` WHERE `p_id` = '$this->productId';";
        // echo $sql; exit;
        return $this->connect->qry($sql);
    }
}
?>