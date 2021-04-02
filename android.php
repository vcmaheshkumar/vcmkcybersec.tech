<?php include('header.php') ?>
<?php include('sub_header.php') ?>
<section id="contact">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">CHOOSE YOUR APP</h3>
      <p class="section-description">CHOOSE ATLEAST ONE OPTION IN EACH SECTION.</p>
    </div>
  </div>

  <div class="container wow fadeInUp mt-5">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <h4>VCMK CYBERSEC</h4>
            <i class="fa fa-building"></i>
            <p>N-404,VILLAGE HIGH ROAD, Sholinganallur, Tamil Nadu - 600 119.</p>
          </div>

          <div>
            <h4>For Email</h4>
            <i class="fa fa-envelope"></i>
            <p>maheshkvc2017@gmail.com</p>
            <i class="fa fa-envelope"></i>
            <p>info@vcmkcybersec.tech</p>
          </div>

          <div>
            <h4>Don’t Want to Wait?</h4>
            <i class="fa fa-phone"></i>
            <p>+91 75501 81658</p>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/vcmk_cyber_sec" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/vcmkcybersec/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/vcmk_cyber_sec/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="https://in.linkedin.com/in/v-c-mahesh-kumar-3506571a0" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://api.whatsapp.com/send/?phone=917550181658&text&app_absent=0" target="_blank" class="linkedin"><i class="fa fa-whatsapp"></i></a>
        </div>

      </div>
      <div class="col-lg-5 col-md-8">
        <div class="form">
          <div id="sendmessage"></div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="phone" data-msg="Please enter a valid phone number" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
            <h4>What is your app about?</h4>
            <div class="form-group">
                <input type="text" name="type" class="form-control" id="option" placeholder="enter your app type by selecting from below" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                Social Networking / Social Media Sharing<br>
                e-commerce / Shopping Apps<br>
                Service Apps<br>
                Booking Apps<br>
                2D Games<br>
                Transport & Logistics Management<br>
                Food Delivery<br>
                Lifestyle / Health and Fitness<br>
                Education and E-Learning<br>
                IoT<br>
                NGO & Fundraising<br>
                Real-Estate<br>
                Productivity<br>
              </div>
              <hr color="black" style="width:296px;">
              <h4>Which platform do you prefer to use?</h4>
              <div class="form-group">
                <input type="text" name="platform" class="form-control" id="option" placeholder="enter your app platform by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                <p>Android<br>
                iOS<br>
                Both</p>
              </div>
              <hr color="black" style="width:296px;">
              <h4>Which devices would you like your App to support?</h4>
              <div class="form-group">
                <input type="text" name="compact" class="form-control" id="option" placeholder="enter your app compactibility by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                <p>Smartphones<br>
                Tablets<br>
                Wearables<br>
                All of the above</p>
              </div>
              <hr color="black" style="width:296px;">
              <h4>Which Approach do you favour for building the App?</h4>
              <div class="form-group">
                <input type="text" name="method" class="form-control" id="option" placeholder="enter your app method by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                <p>Native<br>
                Web<br>
                Hybrid</p>
              </div>
              <hr color="black" style="width:296px;">
              <h4>How many screen do you envision for your App?</h4>
              <div class="form-group">
                <input type="text" name="screen" class="form-control" id="option" placeholder="enter your app screens by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                <p>5 screens<br>
                5-10 screens<br>
                10-15 screens<br>
                15-20 screens<br>
                20-25 screens<br>
                above 25 screens</p>
            </div>
            <hr color="black" style="width:296px;">
            <h4>How would you like your User to Sign-up/Log-in to your App?</h4>
            <div class="form-group">
              <input type="text" name="login" class="form-control" id="option" placeholder="enter your app's login type by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
              <p>Email Sign-up<br>
              Social Media Sign-up<br>
              Phone OTP<br>
              Face Detection<br>
              Select All<br>
              User are not required to Sign-up</p>
            </div>
            <hr color="black" style="width:296px;">
            <h4>Which features/functionalities would you like to incorporate in your App?</h4>
            <div class="form-group">
              <input type="text" name="feature" class="form-control" id="option" placeholder="enter your app feature by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
              <p>Maps and Geo-location<br>
              In-App Payment<br>
              Payment integration gateway<br>
              Social Media<br>
              Select All<br>
              IoT<br>
              Push notification<br>
              Multimedia playing and uploading<br>
              Offline data and sync<br>
              Chat / peer to peer communication</p>
            </div>
            <hr color="black" style="width:296px;">
            <h4>How many languages would your App support?</h4>
            <div class="form-group">
              <input type="text" name="language" class="form-control" id="option" placeholder="enter your app language by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
              <p>Single<br>
              Multiple</p>
            </div>
            <hr color="black" style="width:296px;">
            <h4>Would your App require/entile an Admin Panel?</h4>
            <div class="form-group">
              <input type="text" name="requirement" class="form-control" id="option" placeholder="enter your app requirement by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
              <p>Yes<br>
              No</p>
            </div>
            <h4>Admin panel platform</h4>
            <div class="form-group">
              <input type="text" name="adminplatform" class="form-control" id="option" placeholder="enter your admin platform by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
              <p>Web based<br>
              Mobile based<br>
              Both</p>
            </div>
            <h4>Web application</h4>
            <div class="form-group">
              <input type="text" name="additional" class="form-control" id="option" placeholder="enter your additional requirement by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
              <p>Yes<br>
              No</p>
            </div>
            <hr color="black" style="width:296px;">
            <h4>Do you require more than one app(eg. Customer+Vendor app)?</h4>
            <div class="form-group">
              <input type="text" name="vendorapp" class="form-control" id="option" placeholder="enter your additional app by selecting from below" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
              <p>Yes<br>
              No</p>
            </div>
            <div class="text-center"><button name="submit" type="submit">Submit</button></div><?php include('functions/and_func.php') ?>
          </form>
        </div>
      </div>

    </div>

  </div>
</section>
<?php include('footer.php') ?>
