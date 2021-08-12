<?php

/**
 * Function that collects the product of selected product type
 * Contains parameter of selected product type
 */
function collectArray($product_code){

    global $products;
    $collect = [];

    // check product stock has an element
    if(!empty($products)){

        // loop through product stock to match the selected product type
        foreach ($products as $product) { 
            // if match collect the product to $collect variable   
            if($product['product-type'] === $product_code){
                array_push($collect, $product);
            }
        }   

        // return the $collect if contains element
        if(!empty($collect)){
            return $collect;
        // return all product stock if $collect is empty
        }else{
            return $products;
        }
    }
}

/**
 * Function the print each product card. This function 
 * will print depends on the selected product
 * or all product on page load
 */
function printHTML(){
    global $products;
    $selected_products = [];
    
    // if there is selected product type collect the
    // products of selected product type by calling the collectArray function
    if(isset($_GET['data-prod'])){
        $prod_code = $_GET['data-prod'];
        $selected_products  = collectArray($prod_code);
    
    // if no selected product type, print all stock product 
    }else{
        $selected_products = $products;
    }

    // Display the product card
    foreach($selected_products as $product){
        
        echo '<div class="col col-12 col-md-6 col-lg-3 mb-0">
                    <figure class="card">
                        <img src="'. $product['product-image'] .'" class="card-img-top" alt="' .$product['product-name'] .'">
                        <figcaption>
                            <ul>
                                <li class="product-name">'. $product['product-name'] .'</li>
                                <li>$'. $product['product-price'] .'</li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>';
    }

}



?>