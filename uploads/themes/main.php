<section class="main-content" >
	<!-- Page Elements -->
	<div class="isotope-filter" id="isotope-filter">
		<!-- ======== Element: Profile ======== -->
		<?php $this->load->view('themes/contents/profile'); ?>

		<!-- ======== Element: About Resume ======== -->
		<div class="element element-big-image element-big-image-home home">
			<div class="element-wrapper">
				<img src="<?php echo base_url(); ?>assets/themes/img/home-featured.jpg" alt="">
				<!-- mask -->
				<div class="element-big-image-mask">
					<div class="mask-content">
						<h3 class="mask-content-title">"Bringing <strong>taste</strong> and <br/><strong>elegance</strong> in the same place..."</h3>
						<p><strong>Saveur</strong>. 212 Ave Lorem, London, UK</p>
						<p>Since November 05, 2002</p>
					</div>					
				</div>
				<!-- /mask -->
			</div>
		</div>
        <!-- ======== Element: Service ======== -->
        <div class="element element-content element-home  home">
            <div class="element-wrapper">
                <!-- element box -->
                <div class="element-box">
                    <div class="element-box-bg">
                        <!-- box title -->
                        <h2 class="element-box-title"><span>Restaurant</span></h2>
                        <!-- /box-title -->
                        <!-- Service Item-->
                        <div class="service-item">
                            <h2 class="service-title">Opening hours</h2>
                            <div class="service-description">
                                <dl class="dl-horizontal hours-list">
                                    <dt>Monday</dt>
                                    <dd>11am - 22pm</dd>
                                    <dt>Tuesday</dt>
                                    <dd>11am - 22pm</dd>
                                    <dt>Wednesday</dt>
                                    <dd>15pm - 23pm</dd>
                                    <dt>Thursday</dt>
                                    <dd>15pm - 23pm</dd>
                                    <dt>Friday</dt>
                                    <dd>15pm - 23pm</dd>
                                    <dt>Saturday</dt>
                                    <dd>11am - 22pm</dd>
                                    <dt>Sunday</dt>
                                    <dd>closed</dd>
                                </dl>
                            </div>
                        </div>
                        <!-- /Service Item -->
                    </div>
                </div>
                <!-- /element-box -->
            </div>
        </div>
        <!-- ======== / Element ======== -->

        <!-- ======== Element: Home ======== -->
        <div class="element element-content element-home home">
            <div class="element-wrapper">
                <!-- element box -->
                <div class="element-box">
                    <div class="element-box-bg">
                        <!-- box title -->
                        <h2 class="element-box-title"><span>Services</span></h2>
                        <!-- /box-title -->
                        <!-- Service Item-->
                        <div class="service-item">
                            <h2 class="service-title">Catering Services</h2>
                            <div class="service-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <ul>
                                    <li>Business Events</li>
                                    <li>Birthdays</li>
                                    <li>Weddings</li>
                                    <li>Party & Others</li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Service Item -->
                    </div>
                </div>
                <!-- /element-box -->
            </div>
        </div>
        <!-- ======== / Element ======== -->

        <!-- ======== Element: Menu List ======== -->
        <div class="element element-menu-list menu">
            <div class="element-wrapper" style="padding-left: 10px;padding-right: 10px;padding-top: 5px;">
                <?php
                use Tightenco\Collect\Support\Collection;
                $products = Collect($product_menu_list);
                $categories = $products->unique('category');
                ?>

                <?php foreach ($categories as $category): ?>
                    <h3 class="element-big-content-title" style="font-size:20px;"><strong><?php echo $category->category; ?></strong></h3>
                    <ul class="restaurant-menu-list">
                        <?php $product = $products->where('category', $category->category); ?>
                        <?php  $name_p = ""; ?>
                        <?php foreach ($product as $p):?>
                            <li>
                            <?php if($p->id==$name_p){ ?>
                                <div class="restaurant-menu-description">
                                    <?php echo $p->size_name; ?></div>
                                <div class="restaurant-menu-dots"></div>
                                <div class="restaurant-menu-price">$<?php echo $p->amount; ?></div>
                            <?php }else{ ?>
                                <div class="restaurant-menu-title" style="margin-top: 20px;">
                                    <div class="restaurant-menu-name"><span><?php echo $p->product; ?></span></div>
                                    <div class="restaurant-menu-dots"></div>
                                </div>
                                <div class="restaurant-menu-description">
                                    <?php echo $p->size_name; ?></div>
                                <div class="restaurant-menu-dots"></div>
                                <div class="restaurant-menu-price">$<?php echo $p->amount; ?></div>
                                <?php }
                                        $name_p = $p->id;
                                ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endforeach ?>
            </div>
        </div>

        <!-- ======== Element: Menu List ======== -->
        <div class="element element-menu-list menu">
            <div class="element-wrapper" style="padding-left: 10px;padding-right: 10px;padding-top: 5px;">
                <?php foreach ($categories as $category): ?>
                    <h3 class="element-big-content-title" style="font-size:20px;"><strong><?php echo $category->category; ?></strong></h3>
                    <ul class="restaurant-menu-list">
                        <?php $product = $products->where('category', $category->category); ?>
                        <?php  $name_p = ""; ?>
                        <?php foreach ($product as $p):?>
                            <li>
                                <?php if($p->id==$name_p){ ?>
                                    <div class="restaurant-menu-description">
                                        <?php echo $p->size_name; ?></div>
                                    <div class="restaurant-menu-dots"></div>
                                    <div class="restaurant-menu-price">$<?php echo $p->amount; ?></div>
                                <?php }else{ ?>
                                    <div class="restaurant-menu-title" style="margin-top: 20px;">
                                        <div class="restaurant-menu-name"><span><?php echo $p->product; ?></span></div>
                                        <div class="restaurant-menu-dots"></div>
                                    </div>
                                    <div class="restaurant-menu-description">
                                        <?php echo $p->size_name; ?></div>
                                    <div class="restaurant-menu-dots"></div>
                                    <div class="restaurant-menu-price">$<?php echo $p->amount; ?></div>
                                <?php }
                                $name_p = $p->id;
                                ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endforeach ?>
            </div>
        </div>

		<!-- ======== Element: Team Member ======== -->
		<div class="element element-content element-home giftcard">
			<div class="element-wrapper">
				<!-- Item Image -->
				<div class="menu-featured-image" style="background-image: url('<?php echo base_url(); ?>assets/themes/img/team/team3.jpg');"></div>
				<!-- /Item image -->
				<!-- our staff -->
				<div class="team-member-staff">Our Staff</div>
				<!-- /our staff -->
				<!-- Menu Element Mask -->
				<div class="team-member-mask-wrapper">						
					<div class="team-member-mask">
						<!-- Team Member Name -->
						<div class="team-member-text">
							<h3 class="team-member-title">Ryan Rex</h3>
							<p class="team-member-description">Cuisine Chef</p>
						</div>
						<!-- /Team Member Name -->
					</div>
				</div>
				<!-- /Menu Element Mask -->
			</div>
		</div>
		<!-- ======== / Element: Team Member ======== -->		




        <!-- ======== Element: Menu - Featured Item ======== -->
        <div class="element element-menu-featured giftcard">
            <div class="element-wrapper">
                <!-- Item Image -->
                <div class="menu-featured-image" style="background-image: url('<?php echo base_url(); ?>assets/themes/img/products/p4.jpg');"></div>
                <!-- /Item image -->
                <!-- Menu Element Mask -->
                <div class="menu-featured-mask-wrapper">
                    <div class="menu-featured-mask">
                        <!-- row -->
                        <div class="row menu-featured-title-wrapper">
                            <!-- item title -->
                            <div class="col-xs-8">
                                <h3 class="menu-featured-title">Spaghetti</h3>
                            </div>
                            <!-- /item title -->
                            <!-- item price -->
                            <div class="col-xs-4">
                                <span class="menu-featured-price">$ 7.75</span>
                            </div>
                            <!-- /item price -->
                        </div>
                        <!-- /row -->
                        <!-- Item Description -->
                        <div class="menu-featured-description">
                            <p>Type the description of the dish and show how it can be special. Make it look delicious!</p>
                            <p class="menu-featured-text-small"><i><strong>Ingredients:</strong> Verno slices, Dolre oil, Green onions, Mushroom, Tomatoes</i></p>
                        </div>
                        <!-- /Item Description -->
                    </div>
                </div>
                <!-- /Menu Element Mask -->
            </div>
        </div>
        <!-- ======== / Element ======== -->

        <!-- ======== Element: Menu - Featured Item ======== -->
		<div class="element element-menu-featured giftcard">
			<div class="element-wrapper">
				<!-- Item Image -->
				<div class="menu-featured-image" style="background-image: url('<?php echo base_url(); ?>assets/themes/img/products/p1.jpg');"></div>
				<!-- /Item image -->
				<!-- Menu Element Mask -->
				<div class="menu-featured-mask-wrapper">
					<div class="menu-featured-mask">
						<!-- row -->
						<div class="row menu-featured-title-wrapper">
							<!-- item title -->
							<div class="col-xs-8">
								<h3 class="menu-featured-title">Pepperoni Pizza</h3>
							</div>
							<!-- /item title -->
							<!-- item price -->
							<div class="col-xs-4">
								<span class="menu-featured-price">$ 9.95</span>
							</div>
							<!-- /item price -->		
						</div>
						<!-- /row -->
						<!-- Item Description -->
						<div class="menu-featured-description">
							<p>Type the description of the dish and show how it can be special. Make it look delicious!</p>
							<p class="menu-featured-text-small"><i><strong>Ingredients:</strong> Verno slices, Dolre oil, Green onions, Mushroom, Tomatoes</i></p>
						</div>
						<!-- /Item Description -->
					</div>
				</div>
				<!-- /Menu Element Mask -->
			</div>
		</div>
		<!-- ======== / Element ======== -->

		<!-- ======== Element: Menu - Featured Item ======== -->
		<div class="element element-menu-featured giftcard">
			<div class="element-wrapper">
				<!-- Item Image -->
				<div class="menu-featured-image" style="background-image: url('<?php echo base_url(); ?>assets/themes/img/products/p8.jpg');"></div>
				<!-- /Item image -->
				<!-- Menu Element Mask -->
				<div class="menu-featured-mask-wrapper">
					<div class="menu-featured-mask">
						<!-- row -->
						<div class="row menu-featured-title-wrapper">
							<!-- item title -->
							<div class="col-xs-8">
								<h3 class="menu-featured-title">Barbecue Beef</h3>
							</div>
							<!-- /item title -->
							<!-- item price -->
							<div class="col-xs-4">
								<span class="menu-featured-price">$ 8.50</span>
							</div>
							<!-- /item price -->		
						</div>
						<!-- /row -->
						<!-- Item Description -->
						<div class="menu-featured-description">
							<p>Type the description of the dish and show how it can be special. Make it look delicious!</p>
							<p class="menu-featured-text-small"><i><strong>Ingredients:</strong> Verno slices, Dolre oil, Green onions, Mushroom, Tomatoes</i></p>
						</div>
						<!-- /Item Description -->
					</div>
				</div>
				<!-- /Menu Element Mask -->
			</div>
		</div>
		<!-- ======== / Element ======== -->	



		<!-- ======== Element: about ======== -->
		<div class="element element-content element-team-member promotion">
			<div class="element-wrapper">
				<!-- Item Image -->
				<div class="menu-featured-image" style="background-image: url('<?php echo base_url(); ?>assets/themes/img/team/team2.jpg');"></div>
				<!-- /Item image -->
				<!-- our staff -->
				<div class="team-member-staff">Our Staff</div>
				<!-- /our staff -->
				<!-- Menu Element Mask -->
				<div class="team-member-mask-wrapper">						
					<div class="team-member-mask">
						<!-- Team Member Name -->
						<div class="team-member-text">
							<h3 class="team-member-title">Melissa Rex</h3>
							<p class="team-member-description">Cuisine Chef</p>
						</div>
						<!-- /Team Member Name -->
					</div>
				</div>
				<!-- /Menu Element Mask -->
			</div>
		</div>
		<!-- ======== / Element: Team Member ======== -->	

		<!-- ======== Element: About Picture ======== -->
		<div class="element element-about-picture promotion">
			<div class="element-wrapper">
				<!-- link box -->
				<a href="<?php echo base_url(); ?>assets/themes/img/about-picture2.jpg" class="about-picture-mask nivobox" data-lightbox-gallery="about">
					<div class="about-picture-mask-content">
						<i class="fa fa-eye"></i>
					</div>
				</a>
				<!-- /link box -->					
				<!-- img -->
				<img src="<?php echo base_url(); ?>assets/themes/img/about-picture2.jpg" class="responsive-image" alt="">
				<!-- /img -->
			</div>
		</div>
		<!-- ======== / Element ======== -->


        <!-- ======== Element: promotion======== -->
        <div class="element element-content element-promotion promotion">
            <div class="element-wrapper">
                <!-- Item Image -->
                <div class="menu-featured-image" style="background-image: url('<?php echo base_url(); ?>assets/themes/img/team/team4.jpg');"></div>
                <!-- /Item image -->
                <!-- our staff -->
                <div class="team-member-staff">Our Staff</div>
                <!-- /our staff -->
                <!-- Menu Element Mask -->
                <div class="team-member-mask-wrapper">
                    <div class="team-member-mask">
                        <!-- Team Member Name -->
                        <div class="team-member-text">
                            <h3 class="team-member-title">James Rex</h3>
                            <p class="team-member-description">Cuisine Chef</p>
                        </div>
                        <!-- /Team Member Name -->
                    </div>
                </div>
                <!-- /Menu Element Mask -->
            </div>
        </div>
        <!-- ======== / Element: Team Member ======== -->

        <!-- ======== Element: promotion Picture ======== -->
        <div class="element element-about-picture promotion">
            <div class="element-wrapper">
                <!-- link box -->
                <a href="<?php echo base_url(); ?>assets/themes/img/about-picture3.jpg" class="about-picture-mask nivobox" data-lightbox-gallery="about">
                    <div class="about-picture-content">
                        <i class="fa fa-eye"></i>
                    </div>
                </a>
                <!-- /link box -->
                <!-- img -->
                <img src="<?php echo base_url(); ?>assets/themes/img/about-picture3.jpg" class="responsive-image" alt="">
                <!-- /img -->
            </div>
        </div>
        <!-- ======== / Element ======== -->

        <!-- ======== Element: promotion Picture ======== -->
        <div class="element element-about-picture promotion">
            <div class="element-wrapper">
                <!-- link box -->
                <a href="<?php echo base_url(); ?>assets/themes/img/about-picture.jpg" class="about-picture-mask nivobox" data-lightbox-gallery="about">
                    <div class="about-picture-content">
                        <i class="fa fa-eye"></i>
                    </div>
                </a>
                <!-- /link box -->
                <!-- img -->
                <img src="<?php echo base_url(); ?>assets/themes/img/about-picture.jpg" class="responsive-image" alt="">
                <!-- /img -->
            </div>
        </div>
        <!-- ======== / Element ======== -->

        <!-- ======== Element: location  ======== -->
        <div class="element element-about-location location">
            <div class="element-wrapper">
                <!-- link box -->
                <a href="<?php echo base_url(); ?>assets/themes/img/about-picture.jpg" class="about-picture-mask nivobox" data-lightbox-gallery="about">
                    <div class="about-picture-content">
                        <i class="fa fa-eye"></i>
                    </div>
                </a>
                <!-- /link box -->
                <!-- img -->
                <img src="<?php echo base_url(); ?>assets/themes/img/about-picture.jpg" class="responsive-image" alt="">
                <!-- /img -->
            </div>
        </div>
        <!-- ======== Element: carreer  ======== -->
        <div class="element element-about-carreer carreer">
            <div class="element-wrapper">
                <!-- link box -->
                <a href="<?php echo base_url(); ?>assets/themes/img/about-picture.jpg" class="about-picture-mask nivobox" data-lightbox-gallery="about">
                    <div class="about-picture-content">
                        <i class="fa fa-eye"></i>
                    </div>
                </a>
                <!-- /link box -->
                <!-- img -->
                <img src="<?php echo base_url(); ?>assets/themes/img/about-picture.jpg" class="responsive-image" alt="">
                <!-- /img -->
            </div>
        </div>
        <!-- ======== / Element ======== -->

        <!-- ======== Element: Contact Form ======== -->
        <?php $this->load->view('themes/contents/career'); ?>
        <!-- ======== Element: Contact Form ======== -->
        <?php $this->load->view('themes/contents/location'); ?>
        <!-- ======== Element: Contact Form ======== -->
        <?php $this->load->view('themes/contents/promotion'); ?>
        <!-- ======== Element: Contact Form ======== -->
        <?php $this->load->view('themes/contents/contact'); ?>

		<!-- ======== Element: Contact Hire ======== -->
		<?php $this->load->view('themes/contents/map'); ?>

		<!-- ======== Element: contact ======== -->
		<div class="element element-contact-avaliable contact">
			<div class="element-wrapper">
				<div class="element-contact-available-mask">
					<p><span class="catering-services-title">Catering Services</span><br/><small>Complete the form to request a quote.</small></p>
				</div>
				<img src="<?php echo base_url(); ?>assets/themes/img/about-picture5.jpg" class="responsive-image" alt="">
			</div>
		</div>
		<!-- ======== / Element ======== -->	

		<!-- ======== Element: Contact infos ======== -->
		<div class="element element-content-3 element-contact-infos contact">
			<div class="element-wrapper">
				<div class="element-box" >
					<div class="element-box-bg">	
						<!-- box title -->
						<h2 class="element-box-title"><span>Contact Infos</span></h2>
						<!-- /box-title -->
						<h3 class="contact-info-title">Phone:</h3> 
						<p>069 574 242</p>
						<h3 class="contact-info-title">Email:</h3> 
						<p>info.apecambodia@gmail.com</p>
						<h3 class="contact-info-title">Address:</h3> 
						<p>128 Russian Blvd <strong>Phnom Penh - Cambodia</strong></p>	
					</div>
				</div>
			</div>
		</div>
		<!-- ======== / Element ======== -->
	</div>	
	<!-- /Page Elements -->
</section>