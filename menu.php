
<div class="row">
     
          <div class="col-10 mx-auto col-sm-6 text-center">
            <h1 class="text-capitalize">
              our <strong class="banner-title">Menu</strong>
            </h1>
              
          </div>
        </div>
        <!-- end of section title -->
        <!--filter buttons -->
        <div class="row">
          <div
            class="col-10 mx-auto col-sm-6 d-flex justify-content-around my-5 sortBtn"
          >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
            >
              all</a
            >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
              >Veg</a
            >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
              >Nonveg</a
            >
            <a
              href="#"
              class="btn btn-outline-secondary btn-black text-uppercase filter-btn"
              data-filter=""
              >deserts</a
            >
          </div>
        </div>
        <!--end of filter buttons -->
        <!-- store  items-->
        <div class="row" id="store-items">
          <!-- single item -->
           <!-- end of store item-->
          <?php foreach($products as $product):?>
         
          <!-- single item -->
          <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item">
            <div class="card">
              <div class="img-container">
                <img
                  src="<?php echo $product['img'];?>"
                  class="card-img-top store-img"
                  alt=""
                />
                <div
                  class="store-icons d-flex justify-content-around align-items-center"
                >
                <!--  <a href="#" class="store-icon"
                    ><i class="fas fa-heart fa-fw"></i
                  ></a>
                  <a href="#" class="store-icon"
                    ><i class="fas fa-search fa-fw"></i
                  ></a>
                  <a href="#" class="store-icon" data-id="<?php echo $product['id']?>"
                    ><i class="fas fa-shopping-cart fa-fw"></i
                  ></a>-->
                </div>
              </div>
              <div class="card-body">
              <!--item description-->
              <form action="index.php" method="post">
                <div
                  class="card-text d-flex justify-content-between text-capitalize"
                >
                
                  <h5 id="store-item-name"><?php echo $product['name']?></h5>
                  <button type="submit" name="add">Add to cart <i class="fas fa-shopping-cart fa-fw"></i></button>
                  <h5 class="store-item-value">
                    Rs
                    <strong id="store-item-price" class="font-weight-bold"
                      ><?php echo $product['price']?></strong>
                  </h5>
                  <input type="hidden" name="product_id" value="<?php echo $product['id']?>">
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end of store item-->
          <?php endforeach;?>
        </div>