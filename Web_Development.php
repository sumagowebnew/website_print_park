<?php include "header.php"; ?>



<!-- page-title -->
<section class="page-title centred container-fluid">
    <div class="bg-layer"
        style="background-image: url(./wp-content/themes/printpark/assets/images/shape/Frame1.png);    background-size: cover;">
    </div>
    <div class="pattern-layer"
    style="background-image: url(./wp-content/themes/printpark/assets/images/shape/Frame1.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Web Development</h1>
            <ul class="bread-crumb clearfix">
                <li class="breadcrumb-item"><a href="">Home &nbsp;</a></li>
                <li class="breadcrumb-item">Web Development</li>
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
                                class="menu-item menu-item-type-post_type menu-item-object-service current-menu-item  menu-item-1286">
                                <a href="Web_Development.php">Web Development                                    </a></li>
                            <li id="menu-item-1287"
                                class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1287">
                                <a href="Mobile_Application.php">Mobile Application</a></li>
                            <li id="menu-item-1288"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1288">
                                <a href="Digital_Marketing.php">      Digital Marketing</a></li>
                            <li id="menu-item-1289"
                                class="menu-item menu-item-type-post_type menu-item-object-service   menu-item-1289">
                                <a href="IT_Consulting.php">   IT Consulting </a></li>
                            <li id="menu-item-1290"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1290">
                                <a href="IT_Solutions.php">       IT Solutions</a></li>
                                <li id="menu-item-1291"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1291">
                                <a href="Project_Management.php">       Project Management</a></li>
                            <li id="menu-item-1292"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1292">
                                <a href="Data_Analytics.php"> Data Analytics</a></li>
                                <li id="menu-item-1293"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1293">
                                <a href="Resource_Augmentation.php">Resource Augmentation</a></li>
                            <li id="menu-item-1294"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1294">
                                <a href="Blockchain.php">Blockchain</a></li>
                            <li id="menu-item-1295"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1295">
                                <a href="Artificial_Intelligence.php">Artificial Intelligence (AI)</a></li>
                            <li id="menu-item-1296"
                                class="menu-item menu-item-type-post_type menu-item-object-service   menu-item-1296">
                                <a href="Outsourcing_Engagement.php">Outsourcing Engagement</a></li>
                            <li id="menu-item-1297"
                                class="menu-item menu-item-type-post_type menu-item-object-service  menu-item-1297">
                                <a href="IoT.php" >IoT (Internet of Things)</a></li>
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
                                    <h4>Download </h4>
                                    
                                </div>
                                <div class="download-btn">
                                    <button type="button"><a href ="./wp-content/uploads/2023/08/Final Business Profile.pdf" download attributes-list target="_blank"><i class="flaticon-file"></i></a></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="printpark_banner-1" class="widget widget_printpark_banner">
                        <div class="banner-widget">
                            <div class="inner-box">
                                <h3>Make your Website stand out from Competitors!</h3>
                                <div class="image-box">
                                    <!--<div class="shape"-->
                                    <!--    style="background-image: url(./wp-content/themes/printpark/assets/images/shape/shape-37.png);">-->
                                    <!--</div>-->
                                    <figure class="image"><img
                                            src="./wp-content/uploads/2023/08/laptop.png"
                                            alt="Awesome Image"></figure>
                                </div>
                                <div>
                                <!-- Button trigger modal -->
<!-- <p type="button" class="theme-btn btn-two">
GET A QUOTE
</p> -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
          <h4 class="modal-title">GET A QUOTE</h4>
          <button type="button" class="close" data-bs-dismiss="modal">×</button>
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
                        <option value="Web Hosting">Web Hosting</option>
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
                <div  style="text-align: left;" class="form-group text-center mt-4">
                    <!-- <center> -->
                        <input class="btn btn-success btn-lg"  onclick="myFunction()" type="submit" id="quoteReq" name="submit" value="Submit">
                        <input class="btn btn-danger btn-lg" type="reset" name="btn_reset" value="Clear">
                    <!-- </center> -->
                </div>
            </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div>
    <button type="button" class="theme-btn btn-two"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
GET A QUOTEs
</button>
</div>
<!-- Modal end-->

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 content-side content-side">
                <div class="service-details-content pl-0">
                    <div class="content-one">
                        <figure class="image-box"><img fetchpriority="high" width="770" height="490"
                        src="./wp-content/uploads/2023/08/imagesservice/1) websites.jpg"                                class="attachment-printpark_1170x490 size-printpark_1170x490 wp-post-image" alt=""
                                decoding="async"></figure>
                        <div class="text-box">
                            <h2>Web Development</h2>
                            <p>Website and web application development, upkeep, and enhancement are all included in web development services. This includes developing the front-end and back-end components, creating the user interface and graphic components, and publishing the website to the internet. In order to guarantee that websites run successfully, these services also include hosting, security, and performance optimization. We create simple websites as well as intricate e-commerce platforms and web-based applications in collaboration with clients to satisfy their demands. </p>
                            <!-- Having a strong online presence, improving user experience, and taking care of technical issues like SEO and security are also the main objectives. -->
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
                                        <h3>Customer Focus</h3>
                                        <p>Prioritizing the needs and satisfaction of our customers, with prompt attention to their needs, providing practical and helpful responses, and going the extra mile to exceed their expectations.</p>
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
                                        <h3>Excellence</h3>
                                        <p>Striving for excellence, consistently delivering high-quality services, continuously improving processes, and seeking innovative solutions to enhance customer experiences..</p>
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
                                        <h3>Integrity</h3>
                                        <p>Ethical integrity and upholding high standards of work ethics that are essential for building trust and competence with customers. </p>
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="shape"
                                            style="background-image: url(./wp-content/themes/printpark/assets/images/shape/right.png);">
                                        </div>
                                        <div class="icon"><i class="flaticon-double-check"></i></div>
                                        <div class="overlay-icon"><i class="flaticon-double-check-1"></i></div>
                                    </div>
                                    <div class="inner-box">
                                        <h3>Customer Advocacy</h3>
                                        <p>Emphasis on the company's dedication to proactively representing and promoting the best interests of our clients/ customers..</p>
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
                                                    src="./wp-content/uploads/2023/08/slides/Rectangle2.png"
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
                                                    src="./wp-content/uploads/2023/08/slides/Rectangle1.png"
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
                                                    src="./wp-content/uploads/2023/08/slides/Rectangle3.png"
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
                                                    src="./wp-content/uploads/2023/08/slides/Rectangle4.png"
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
                                                    src="./wp-content/uploads/2023/08/slides/Rectangle5.png"
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
                            

                        </div>
                    </div>
                    <div class="content-four">
                        <div class="text-box">
                            <h2>Industries Served</h2>
                            <p>We offer our streamlined expertise of services across a range of different industries:</p>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block ">
                                <div class="acc-btn">
                                    <div class="icon-box"></div>
                                    <h5>Product Based</h5>
                                </div>
                                <div class="acc-content">
                                    <p>Streamlining product development and enhancing customer experiences through digital solutions.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5> E- commerce</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Revolutionizing the fashion industry with innovative e-commerce platforms and data-driven insights.</p>
                                </div>
                            </li>
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5>Property</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Transforming real estate management and transactions with cutting-edge technology and automation.</p>
                                </div>
                            </li>
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5>Education</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Empowering educators and enriching learning experiences with personalized digital tools and platforms.</p>
                                </div>
                            </li>
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5>Healthcare</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Advancing healthcare delivery and patient care with innovative IT solutions and data analytics</p>
                                </div>
                            </li>
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="icon-box"></div>
                                    <h5>Stock Market</h5>
                                </div>
                                <div class="acc-content ">
                                    <p>Empowering financial professionals with data-driven insights and intelligent trading platforms</p>
                                </div>
                            </li>
                            <!--<li class="accordion block ">-->
                            <!--    <div class="acc-btn ">-->
                            <!--        <div class="icon-box"></div>-->
                            <!--        <h5>Software Companies</h5>-->
                            <!--    </div>-->
                            <!--    <div class="acc-content ">-->
                            <!--        <p>Accelerating software development and innovation through agile methodologies and DevOps practices.</p>-->
                            <!--    </div>-->
                            <!--</li>-->
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

