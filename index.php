<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

<!------ Google Fonts ------>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Karla:wght@200;300;400;500&family=Montserrat+Alternates:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:wght@300;400;500&family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">

<!-- Bootstrap CSS-->	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!--External JS-->
<script src="script.js" async></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<!----External CSS----->
<link rel="stylesheet" type="text/css" href="styles.css">

<!-----FontAwsome------>
<script src="https://kit.fontawesome.com/9d9796826b.js" crossorigin="anonymous"></script>

<body>
<!---- Bootstrap Script---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!--Heading-->
<div>
<nav class="navbar fixed-top bg-light">
    <!-- <div class="container-fluid">
      <a class="navbar-brand" ><i class="fa-solid fa-gift" style="margin-right: 6%;"></i>Shopping</a>

      <a href="#shopping-cart" style="color: mediumblue;">  <i style="margin-right: 1%;" class="fa-solid fa-cart-shopping justify-content-end fa-xl" ></i></a>
     
    </div> -->
    
  <form id="sortForm">
  <label for="sortBy">Sort by:</label>
  <select id="sortBy">
    <option value="default">Default</option>
    <option value="lowToHigh">Price: Low to High</option>
    <option value="highToLow">Price: High to Low</option>
  </select>
  <button type="submit">Sort</button>
</form>
  </nav>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#sortForm').submit(function(event) {
      event.preventDefault();
      let selectedOption = $('#sortBy').val();
      let items = $('.filter-item');
      switch (selectedOption) {
        case 'lowToHigh':
          items.sort(function(a, b) {
            let priceA = parseFloat($(a).find('.shop-item-price').text().replace('Rs ', '').replace(',', ''));
            let priceB = parseFloat($(b).find('.shop-item-price').text().replace('Rs ', '').replace(',', ''));
            return priceA - priceB;
          });
          break;
        case 'highToLow':
          items.sort(function(a, b) {
            let priceA = parseFloat($(a).find('.shop-item-price').text().replace('Rs ', '').replace(',', ''));
            let priceB = parseFloat($(b).find('.shop-item-price').text().replace('Rs ', '').replace(',', ''));
            return priceB - priceA;
          });
          break;
        case 'default':
          break;
      }
      $('.container-fluid').html(items);
      
    });
    
  });
</script>




<!-- Item Categories-->
<section id="category">
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-4 g-4">
      <div class=" col">
        <div class="card">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/files/web-layouting1_336x.progressive.jpg?v=1614325580.png" class="card-img-top" alt="...">
        </div>
      </div>

      <div class=" col">
        <div class="card">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/files/web-layouting2_336x.progressive.jpg?v=1614325580.png" class="card-img-top" alt="...">
        </div>
      </div>

      <div class=" col">
        <div class="card">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/files/web-layouting4_336x.progressive.jpg?v=1614325580.png" class="card-img-top" alt="...">
        </div>
      </div>

      <div class=" col">
        <div class="card">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/files/web-layouting3_336x.progressive.jpg?v=1614325580.png" class="card-img-top" alt="..." >
        </div>
      </div>
    </div>
  </div>
</section>


<a href="#category" class="up-icon"><i class="fa-solid fa-circle-chevron-up"></i></a>
 

<!----------------------------------------------------------------------------------->
<img src="images/steps-line.png" style="width: 100%; height: 100%; overflow: hidden;">
 
 
<!----------------------------------------------------------------------------------->
<!--Filter Button-->
<div class = "filter-btns">
  <a href="index.php"><button type="button" class="filter-btn" id="refresh"><i class="fa-solid fa-rotate" ></i> Refresh</button></a>
   
  <button type = "button" class = "filter-btn" id = "all">all</button>
  <button type = "button" class = "filter-btn" id = "new">new</button>
  <button type = "button" class = "filter-btn" id = "office-wear">office wear</button>
  <button type = "button" class = "filter-btn" id = "t-shirts">t-shirts</button>
  <button type = "button" class = "filter-btn" id = "offers">offers</button>
</div>




<!--Product Cards-->
<form id="product-search-form">
  <input type="text" id="product-search-input" placeholder="Search products by name...">
  <button type="submit">Search</button>
</form>

<section id="product-cards">
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-4 g-4">
      <div class=" col filter-item all new ">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/37_6d0b5acc-19fa-407e-96eb-7956f12be496_271x.progressive.jpg?v=1679547745.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title"> Side Pockets Elegant Dress</h5>
            <p class="card-text shop-item-price"> Rs 990.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/29_f59e4f13-7baa-4324-a68c-1a00abb27c7b_270x.jpg" class="card-img-top shop-item-image" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title shop-item-title">Neck Mini Printed Dress</h5>
            <p class="card-text shop-item-price"> Rs 790.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/33_db15b682-a4bd-40b8-ab24-bde7f5419ede_270x.jpg" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Vneck Half Sleeve Printed Dress </h5>
            <p class="card-text shop-item-price"> Rs 5790.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all new">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/64web_271x.progressive.jpg?v=1679551696.png" class="card-img-top shop-item-image " alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Cold Shoulder Mini Dress
              </h5>
            <p class="card-text shop-item-price"> Rs 599.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear ">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/45_b16d32b0-68c7-4189-b4cd-b986f927aaf6_271x.progressive.jpg?v=1677146174.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Waistless Pleated Dress</h5>
            <p class="card-text shop-item-price"> Rs 5990.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/07_ce5ef752-43ce-4b33-a049-525d45a6378e_271x.progressive.jpg?v=1677146215.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Tiny Front Peek-A-Boo Printed Top</h5>
            <p class="card-text shop-item-price">Rs 3290.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>
      
      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/06_0f17caad-9acd-4228-bba5-48e4601e61fa_271x.progressive.jpg?v=1677146254.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Tiny Front Peek-A-Boo Printed Red Top</h5>
            <p class="card-text shop-item-price">Rs 3290.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all office-wear">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/04_5e44a4e3-e8e5-4533-bc6b-6ee091852739_271x.progressive.jpg?v=1677146332.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Three Tiered Sleeve Frilled Printed Top</h5>
            <p class="card-text shop-item-price">Rs 3690.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/26_549f23b7-8930-44ed-806f-22aa91af632a_271x.progressive.jpg?v=1671183061.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Daily Solid  Crop Pink Tee</h5>
            <p class="card-text shop-item-price">Rs 3450.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/28_40247d2d-f359-426c-b87c-6328b4f1961b_271x.progressive.jpg?v=1671183300.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Contrast Ribbed Navy And Yellow Tshirt</h5>
            <p class="card-text shop-item-price">Rs 2500.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/39_6d989548-f713-4489-8575-7301db9f04ae_271x.progressive.jpg?v=1666243255.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Star Printed Basic Crew Neck Tshirt</h5>
            <p class="card-text shop-item-price">Rs 2990.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all t-shirts">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/30_3e440521-e22a-4ebf-bba3-ef2d4cf68dcc_271x.progressive.jpg?v=1666244343.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Purple Long-Sleeve Crew Neck Rib Tshirt</h5>
            <p class="card-text shop-item-price">Rs 3990.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all offers">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/49_2241950f-5769-427c-8a36-39e2faf6f33d_270x.jpg.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Vneck Strappy Printed Mini Dress</h5>
            <p class="card-text shop-item-price">Rs 3690.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all offers">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/54_1371f01d-2643-4743-aeee-d8ab25ad576e_270x.jpg.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">One Shoulder Flared Sleeves Maxi Dress</h5>
            <p class="card-text shop-item-price">Rs 3690.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping  " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all offers">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/10_29b57208-b863-4998-b027-43b607391df9_270x.jpg.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Dark Floral Roses Printed Mini Dress</h5>
            <p class="card-text shop-item-price">Rs 3690.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

      <div class=" col filter-item all offers">
        <div class="card h-100">
          <img src="https://cdn.shopify.com/s/files/1/0259/7103/2124/products/07_2ecefaa1-3f06-4941-8f77-e215246acf6c_270x.jpg.png" class="card-img-top shop-item-image" alt="...">
          <div class="card-body">
            <h5 class="card-title shop-item-title">Blue Floral Princess Off Shoulder Midi Dress</h5>
            <p class="card-text shop-item-price">Rs 3690.00</p>
            <button type="button" style="width: 100%;" class="btn btn-warning mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%;"></i>Add To Cart</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!--Shopping Cart-->
<script src="https://js.stripe.com/v3/"></script>

<section class="container content-section" id="shopping-cart">
  
  <h3 style="text-decoration: underline;text-align: center; margin-bottom: 7%;">Shopping Cart</h3>
 
 <table class="table table-hover table-cart">
  <thead>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody class="cart-items">
    
     
  </tbody>
</table>

    <div class="cart-total"> 
      <strong class="cart-total-title">Total</strong>
      <span  class="cart-total-price" style="text-align: right;">$0</span>
    </div>
 

    <!-- <div class="btn-purchase" style="margin-top: 10%;">
      <button type="button"  class="btn btn-dark btn-purchase "><i class="fa-solid fa-cart-shopping " style="margin-right: 6%;"></i>PURCHASE</button>
    </div> -->
    <div>

    <!-- <form method='post' action='checkout.php'>
                
                <button class="btn btn-dark btn-pay"> <i class="fa-solid fa-cart-shopping " style="margin-right: 6%;"></i>PAY</button>

            </form> -->
            <form method='post' action='checkout.php' id="payment-form">
    <!-- Other form elements -->
    <input type="hidden" id="product_name" name="product_name" value="Product Name" />
    <input type="hidden" id="product_price" name="product_price" value="1000" /> <!-- Replace with actual price -->
    
    <div id="card-element"></div>
    <button class="btn btn-dark btn-pay" id="submit-payment">
      <i class="fa-solid fa-cart-shopping" style="margin-right: 6%;"></i>PAY
    </button>
  </form>
  <script>
    
  </script>
      
    </div>
</section>
<script>
    // Replace 'pk_test_...' with your actual publishable key from Stripe Dashboard
const stripe = Stripe('pk_test_51OWaZrK5EnjB4COxkcHiTt6LasFGQQaXgWwiKr2onkBHFPaCC98DEbIvtICGn7w7WVnWKYqYn97z5WSZbuyhxBTA00ZbxP3NLm');
const elements = stripe.elements();

const card = elements.create('card');
card.mount('#card-element');

document.getElementById('submit-payment').addEventListener('submit', async (event) => {
  event.preventDefault();

  const { paymentMethod, error } = await stripe.createPaymentMethod({
    type: 'card',
    card: card,
  });

  if (error) {
    console.error(error);
  } else {
    const productName = document.getElementById('product_name').value;
    const productPrice = document.getElementById('product_price').value;
    
    // Send payment method ID and product details to server via AJAX
    fetch('checkout.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        payment_method_id: paymentMethod.id,
        product_name: productName,
        product_price: productPrice,
      }),
    })
      .then((response) => {
        // Redirect to checkout.php on successful payment
        window.location.replace('checkout.php');
      })
      .catch((error) => {
        console.error('Error:', error);
      });
  }
});

</script>
 
<!--Footer-->
<section id="footer">
  <div class="card text-center">
   
    <div class="card-body">
      <h3 class="card-title"><i class="fa-solid fa-gift" style="margin-right: 1%;"></i>Shopping</h3>
      <p>Thank You , Come Again !!!</p>
    </div>
    
    <div class="card-footer text-muted">
       <p></p>
       <p></p>
    </div>
  </div>
</section>



 

<!--External JS-->
<script src="script.js"></script>
<script src="https://js.stripe.com/v3/"></script>

</body>
</html>