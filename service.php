<?php include "header.php"; ?>



<!-- page-title -->
<section class="page-title centred">
   
    <div class="pattern-layer"
        style="background-image: url(./wp-content/uploads/2023/08/imagesservice/pooja.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Printing Services</h1>
            <ul class="bread-crumb clearfix">
                <li class="breadcrumb-item"><a href="">Home &nbsp;</a></li>
                <li class="breadcrumb-item">Printing Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- service-details -->
<section class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
      
  
     
            
           
            
            
            
            
            

            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <div id="nav_menu-7" class="widget widget_nav_menu">
                        <div class="widget-title">
                            <h3>Services Offered</h3>
                        </div>
                        <div class="menu-service-menu-container">
                            <ul id="menu-service-menu" class="menu">
                                <li id="menu-item-1286"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1286">
                                    <a href="Web_Development.php">Web Development                                    </a></li>
                                <li id="menu-item-1287"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1287">
                                    <a href="Mobile_Application.php">Mobile Application</a></li>
                                <li id="menu-item-1288"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1288">
                                    <a href="Digital_Marketing.php">      Digital Marketing</a></li>
                                <li id="menu-item-1289"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1289">
                                    <a href="IT_Consulting.php">   IT Consulting </a></li>
                                <li id="menu-item-1290"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1290">
                                    <a href="IT_Solutions.php">       IT Solutions</a></li>
                                    <li id="menu-item-1290"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1290">
                                    <a href="Project_Management.php">       Project Management</a></li>
                                <li id="menu-item-1291"
                                    class="menu-item menu-item-type-post_type menu-item-object-service current-menu-item menu-item-1291">
                                    <a href="Data_Analytics.php" aria-current="page"> Data Analytics</a></li>
                                    <li id="menu-item-1287"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1287">
                                    <a href="Resource_Augmentation.php">Resource Augmentation</a></li>
                                <li id="menu-item-1288"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1288">
                                    <a href="Blockchain.php">Blockchain</a></li>
                                <li id="menu-item-1289"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1289">
                                    <a href="Artificial_Intelligence.php">Artificial Intelligence (AI)</a></li>
                                <li id="menu-item-1290"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1290">
                                    <a href="Outsourcing_Engagement.php">Outsourcing Engagement</a></li>
                                <li id="menu-item-1291"
                                    class="menu-item menu-item-type-post_type menu-item-object-service current-menu-item menu-item-1291">
                                    <a href="IoT.php" aria-current="page">IoT (Internet of Things)s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="printpark_download_box_widget-1" class="widget widget_printpark_download_box_widget">
                        <div class="download-widget">
                            <figure class="image-box"><img
                                    src="./wp-content/uploads/2023/08/thumbnail.png"
                                    alt="Awesome Image"></figure>
                            <div class="content-box">
                                <div class="text">
                                    <h4>Download Sample</h4>
                                    
                                </div>
                                <div class="download-btn">
                                    <button type="button"><a href ="pdf/website pdf.pdf" attributes-list target="_blank"><i class="flaticon-file"></i></a></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="printpark_banner-1" class="widget widget_printpark_banner">
                        <div class="banner-widget">
                            <div class="inner-box">
                                <h3>Make your Website stand out from Competitors!</h3>
                                <div class="image-box">
                                    <div class="shape"
                                        style="background-image: url(./wp-content/themes/printpark/assets/images/shape/shape-37.png);">
                                    </div>
                                    <figure class="image"><img
                                            src="./wp-content/uploads/2023/08/laptop.png"
                                            alt="Awesome Image"></figure>
                                </div>
                             <button type="button"  class="theme-btn btn-two" data-bs-toggle="modal" data-bs-target="#exampleModal">
GET A QUOTE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">GET A QUOTE</h4>
          <button type="button" class="close" data-bs-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
            <form method="post" name="myForm" onsubmit="return quoteRequest();">
                <div style="    text-align: left;" class="form-group">
                    <label>Name :</label>
                    <input class="form-control" type="text" name="fname" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Name" required="">
                </div>          
                <div  style="    text-align: left;" class="form-group">
                    <label>Contact :</label>
                    <input class="form-control" type="tel" name="contact" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" pattern="[7-9]{1}[0-9]{9}" placeholder="Mobile no" required="">
                </div>
                <div  style="    text-align: left;" class="form-group">
                    <label>Email :</label>
                    <input class="form-control" type="email" name="email" pattern="^(([-\w\d]+)(\.[-\w\d]+)@([-\w\d]+)(\.[-\w\d]+)(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" placeholder="Email" required="">
                </div>
                <div  style="    text-align: left;" class="form-group">
                    <label>Type of Services :</label>
                    <select name="service" class="form-control" required="">
                        <option value="">Select Service</option>
                        <option value="Website Development">Website Development</option>
                        <option value="App Development">App Development</option>
                        <option value="Software Development">Software Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Social Media">Social Media</option>
                        <option value="SEO">SEO</option>
                        <option value="Training/Internship">Training/Internship</option>
                        <option value="Start up Consultancy">Start up Consultancy</option>
                        <option value="#">Web Hosting</option>
                    </select>
                </div>
                <div  style="    text-align: left;" class="form-group">
                    <label>Other :</label>
                    <input class="form-control" type="text" name="other" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Other Service">
                </div> 
                <div  style="    text-align: left;" class="form-group">
                    <label>Address / City :</label>
                    <textarea class="form-control" rows="4" cols="10" name="address" placeholder="Address / City"></textarea>
                </div>
                <div  style="    text-align: left;" class="form-group">
                    <label>Any Comment :</label>
                    <textarea class="form-control" rows="4" cols="10" name="comment" placeholder="Comment"></textarea>
                </div>
                <!--<div class="form-group">-->
                <!--    <input type="text" name="captcha" id="captcha" class="form-control" placeholder="Enter Captcha" required>-->
                <!--    <img src="captcha.php">-->
                <!--</div>-->
                
                <!--<div class="">-->
                <!--     <label>Captcha Code :</label>-->
                <!--    <input type="text" name="captcha" id="captcha" required="reCAPTCHA is not valid. Please try again!" placeholder="Captcha Code" class="form-control">-->
                <!--    <img src="captcha.php" id="capt">-->
                    
                <!--</div>-->
                <div  style="    text-align: left;" class="form-group">
                    <center>
                        <input class="btn btn-success btn-lg" type="submit" id="quoteReq" name="submit" value="Submit">
                        <input class="btn btn-danger btn-lg" type="reset" name="btn_reset" value="Clear">
                    </center>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 content-side content-side">
                <div class="service-details-content pl-0">
                    <div class="content-one">
                        <figure class="image-box"><img fetchpriority="high" width="770" height="490"
                                src="./wp-content/uploads/2023/08/service-6.jpg"
                                class="attachment-printpark_1170x490 size-printpark_1170x490 wp-post-image" alt=""
                                decoding="async"></figure>
                        <div class="text-box">
                            <h2>Printing Services</h2>
                            <p>Take a trivial example, which of us ever undertakes laborious&#8230; Nor again is there
                                anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but
                                because occasionally circumstances occur in which toil and pain can procure him some
                                great pleasure. To take a trivial example, which of us ever undertakes laborious
                                physical exercise, except to obtain some advantage from it? But who has any right to
                                find fault with a man who chooses to enjoy a pleasure.</p>
                            <h5>Obtain pain of itself, because it is pain, but because occasionally circumstances occur
                                in which toil and pain can procure him some great pleasure.</h5>
                        </div>
                    </div>
                    <div class="content-two">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="shape"
                                            style="background-image: url(./wp-content/themes/printpark/assets/images/shape/shape-38.png);">
                                        </div>
                                        <div class="icon"><i class="flaticon-double-check"></i></div>
                                        <div class="overlay-icon"><i class="flaticon-double-check-1"></i></div>
                                    </div>
                                    <div class="inner-box">
                                        <h3>Digital Printing</h3>
                                        <p>Denounce with righteous indignation &amp; dislike men who are so beguiled and
                                            demoralized the charms of pleasure that they cannot foresee obligations have
                                            to be repudiated.</p>
                                    </div>
                                    <div class="link-box">
                                        <h6><a href="https://wp1.themevibrant.com/newwp/printpark/projects-01/"><i
                                                    class="flaticon-arrow-right"></i>See in Gallery</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="shape"
                                            style="background-image: url(./wp-content/themes/printpark/assets/images/shape/shape-38.png);">
                                        </div>
                                        <div class="icon"><i class="flaticon-double-check"></i></div>
                                        <div class="overlay-icon"><i class="flaticon-double-check-1"></i></div>
                                    </div>
                                    <div class="inner-box">
                                        <h3>Sheet-Fed Printing</h3>
                                        <p>On the other hand, we denounce with righteous indignation &amp; dislike men
                                            who are so beguiled demoralized by the charms of pleasure of moment, so
                                            trouble that are bound.</p>
                                    </div>
                                    <div class="link-box">
                                        <h6><a href="https://wp1.themevibrant.com/newwp/printpark/projects-01/"><i
                                                    class="flaticon-arrow-right"></i>See in Gallery</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="shape"
                                            style="background-image: url(./wp-content/themes/printpark/assets/images/shape/shape-38.png);">
                                        </div>
                                        <div class="icon"><i class="flaticon-double-check"></i></div>
                                        <div class="overlay-icon"><i class="flaticon-double-check-1"></i></div>
                                    </div>
                                    <div class="inner-box">
                                        <h3>Large Format Printing</h3>
                                        <p>Indignation &amp; dislike men who are so beguiled demoralized by the charms
                                            of pleasure of the moment, so blinded by desire, that they cannot foresee
                                            the pain and trouble equal.</p>
                                    </div>
                                    <div class="link-box">
                                        <h6><a href="https://wp1.themevibrant.com/newwp/printpark/projects-01/"><i
                                                    class="flaticon-arrow-right"></i>See in Gallery</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="shape"
                                            style="background-image: url(./wp-content/themes/printpark/assets/images/shape/shape-38.png);">
                                        </div>
                                        <div class="icon"><i class="flaticon-double-check"></i></div>
                                        <div class="overlay-icon"><i class="flaticon-double-check-1"></i></div>
                                    </div>
                                    <div class="inner-box">
                                        <h3>Offset Printing</h3>
                                        <p>The wise man therefore always holds in these matters to this principle of
                                            selection he rejects pleasures to easy secure other greater pleasures seds
                                            else he endures pains.</p>
                                    </div>
                                    <div class="link-box">
                                        <h6><a href="https://wp1.themevibrant.com/newwp/printpark/projects-01/"><i
                                                    class="flaticon-arrow-right"></i>See in Gallery</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-three">
                        <div class="text-box">
                            <h2>Why Hire from Sumago</h2>
                            <p>When it comes to securing the top talent in the IT industry, we understand that you have many choices. Here's why choosing to hire from us is your best decision.</p>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="single-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image image-1"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-7-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-322"></figure>
                                            <figure class="image image-2"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-8-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-323"></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Exceptional Expertise</h3>
                                            <p>Our pool of IT professionals is handpicked and comprised of experts with a wealth of experience in various domains. When you hire from us, you're getting access to the most skilled and knowledgeable individuals in the field.</p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image image-1"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-8-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-323"></figure>
                                            <figure class="image image-2"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-7-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-322"></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Versatility</h3>
                                            <p>We offer a diverse range of IT professionals, spanning from software developers and data scientists to cybersecurity experts and project managers. No matter your specific needs, we have the right talent to drive your projects forward.</p>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image image-1"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-8-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-323"></figure>
                                            <figure class="image image-2"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-7-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-322"></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Customized Solutions</h3>
                                            <p>Your unique project deserves a tailored approach. We work closely with you to understand your objectives and requirements, and then match you with the professionals who possess the exact skills and experience necessary to achieve your goals..</p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image image-1"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-8-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-323"></figure>
                                            <figure class="image image-2"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-7-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-322"></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Scalability</h3>
                                            <p>Whether you need a single developer or an entire team, we can scale our services to meet your project's scope and size. As your needs change, we're ready to adapt.</p>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image image-1"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-8-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-323"></figure>
                                            <figure class="image image-2"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-7-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-322"></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Timely Delivery</h3>
                                            <p>Our professionals are committed to delivering projects on time, ensuring that you stay on track and ahead of your competition.</p>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <div class="image-box">
                                            <figure class="image image-1"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-8-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-323"></figure>
                                            <figure class="image image-2"><img
                                                    src="https://wp1.themevibrant.com/newwp/printpark/wp-content/uploads/2023/08/service-7-300x300.jpg"
                                                    alt="" width="330" height="330"
                                                    class="alignnone size-medium wp-image-322"></figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                        <div class="content-box">
                                            <h3>Technology in Print</h3>
                                            <p>Denounce with righteous indignation &amp; dislike men who are so beguiled
                                                and demoralized the charms of pleasure that they cannot foresee
                                                obligations have to be repudiated.</p>
                                            <ul class="list-item clearfix">
                                                <li>Max. sheet format: 72 x 102 cm</li>
                                                <li>Max speed: 15,000 sheets/h</li>
                                                <li>Minimum sheet format: 34 x 48 cm</li>
                                                <li>Max. print format: 71 x 102 cm</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-four">
                        <div class="text-box">
                            <h2>Industries Served</h2>
                            <p>Loves orpursues or desires to obtain pain of itself, because it is pain, but because
                                occasionally.</p>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5>Businesses</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Give you a complete account of the system, and expound theactual teachings of the
                                        great explorer rationally encounter consequences that are extremely</p>
                                </div>
                            </li>
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-box"></div>
                                    <h5>Sports</h5>
                                </div>
                                <div class="acc-content current">
                                    <p>Give you a complete account of the system, and expound theactual teachings of the
                                        great explorer rationally encounter consequences that are extremely</p>
                                </div>
                            </li>
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5>Breweriers</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Give you a complete account of the system, and expound theactual teachings of the
                                        great explorer rationally encounter consequences that are extremely</p>
                                </div>
                            </li>
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5>Fundraisers</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Give you a complete account of the system, and expound theactual teachings of the
                                        great explorer rationally encounter consequences that are extremely</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- service-details end -->



<div class="clearfix"></div>

<?php include "footer.php"; ?>