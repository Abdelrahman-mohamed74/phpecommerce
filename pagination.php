<?php
session_start();
include('includes/conn.php');

$output="";

$conn = $pdo->open();
try{
  $unmproducts = 6;
  $stmt = $conn->prepare("SELECT * FROM products");
  $stmt->execute();
  $stmt = $stmt->rowCount();

  if (isset($_GET['page'])) {
      $page = $_GET['page'];
  }else{
      $page = 1;
  }

  $totalPage = ceil($stmt / $unmproducts);
  $results = $conn->prepare("SELECT * FROM products LIMIT " . $unmproducts . " OFFSET " . ($page-1)*$unmproducts);
  $results->execute();
  foreach ($results as $Oneproduct) {
                                          //  print_r($Oneproduct);
       $output.= "  <div class='col-lg-4 col-md-6 col-12 mb-5'>
                                         <form id='productForm'>
                                                    <div class='product-box'>
                                                      <div class='image-content'>
                                                      <input id='hide' type='hidden' value='".$Oneproduct['id']."' name='prodiidd'>
                                                        <img src='images/".$Oneproduct['photo']."' alt='' name='img'/>
                                                        <ul class='add-items'>  
                                                          <li>
                                                            <a
                                                              href='products.php'
                                                              data-toggle='tooltip'
                                                              data-placement='top'
                                                              title='  Add to cart'
             
                                                            >
                                                              <button type='submit' class='fas fa-shopping-basket' name='addtocart'></button>
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a
                                                              href='single_product.php?Oneid=".$Oneproduct['id']."'
                                                              data-toggle='tooltip'
                                                              data-placement='top'
                                                              title=' View Details'
                                                            >
                                                              <i class='far fa-dot-circle'></i>
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a
                                                              href='favorite.php?Oneid=".$Oneproduct['id']."'
                                                              data-toggle='tooltip'
                                                              data-placement='top'
                                                              title='  Add to Favourit'
                                                            >
                                                              <i class='far fa-heart'></i>
                                                            </a>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                      <div class='product-content'>
                                                        <a href='single_product.php?Oneid=".$Oneproduct['id']."'
                                                          name='name' >".$Oneproduct['name']."</a
                                                        >
                                                        <p name='pric'>".$Oneproduct['price']."</p>
                                                        <ul class='rate'>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li class='active'>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                          <li>
                                                            <i class='fas fa-star'></i>
                                                          </li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                        </form>
                                      </div> 
									  ";                                    
    }
	
	 $output .= "<div class='col-12'><div class='block-27 mt-5  text-center'>";
                        

   for ($count = 1; $count <= $totalPage; ++$count) { 
                                  $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$count."'>".$count."</span>";  

                        }
	 $output .= "</div></div>";					
						
	echo $output;					

  
}
catch(PDOException $e){
  echo "There is some problem in connection: " . $e->getMessage();
}

$pdo->close();
?>