 <div class="element element-intro home">
        <div class="element-wrapper" >
            <div class="container">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <?php $i=1; ?>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                <?php foreach ($new_products as $new_product): ?>
                    <div class="item <?php echo ($i==1)? 'active'  : '' ; ?>">
                        <?php $i++; ?>
                        <div class="row">
                          <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>uploads/products/<?php echo $new_product->image; ?>" width="200" alt="new promotion">
                          </div>
                          <div class="col-sm-8">
                            <div class="row" style="text-align: center;">
                              <h4>This new cases are avialable in our Store please place an order or visit our store</h4>
                              <h5><i class="fa fa-home mr-3"></i> <?php echo ' '; ?>Address:  Address: #38 Street 337, Phnom Penh </h5>
                              <h5><i class="fa fa-phone mr-3"></i><?php echo ' '; ?>Phone: 016-800067.</h5> 
                              <h5><i class="fa fa-envelope mr-3"></i><?php echo ' '; ?>Email: yeansovanrom8@gmail.com.</h5>
                              <h5>Opening hours:24/h</h5> 

                            </div>
                            

                          </div>
                        </div>

                    </div>
                <?php endforeach ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>
    </div>