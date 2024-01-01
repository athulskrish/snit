<?php
include('header.php');
?>



<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->

<!-- <div class="banner">
  <div class="container"> -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/m1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/m2.jpg" style="width:100%; margin-top: 125px;">
  <div class="text">Caption Text</div>
</div>
<!-- <div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/4.jpg" style="width:100%;">
  <div class="text">Caption Two</div>
</div> -->

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/m3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


</div>  









  <!--Banner-->
 <!--  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Trust & Quality</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
              <p class="small-text">   Sree Narayana Institute of Technology emphasises academic excellence and all-round development of children by offering a fine blend of curricular and co-curricular activities and moral education.</p>
               <a href="#footer" class="btn get-quote">GET A QUOTE</a>             </div>
            <a href="#feature" class="mouse-hover">
               <div class="mouse"></div> 
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!--/ Banner-->


  <!--Feature-->
  <section id="annoucement" class="section-padding">
    <div class="container">
      <div class="row">
        <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Management </h4>
                <p>SNIT is managed by Sree Narayana Education Society, a non-profit charitable society based in Calicut. 
                      The trust gets its inspiration from the teachings of Sree Narayana Guru, the great social reformer of Kerala. 
                      SNES has strived to deliver quality education to students for over three and a half decades.
                      </p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <!-- <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Quality Education</h4>
                <p>College life is the most creative, innovative and joyous period in one's life, though some of you may not know. 
                      Your Alma mater must be precious to you. This particular spot on the earth gives you the necessary nutrients for your growth and development. 
                      This temple of learning inspires and facilitates them to realise their full potential. 
                            The college emphasises academic excellence and all-round development of children by offering a fine blend of curricular and co-curricular activities and moral education.
                     </p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-book"></i>
              </div>
            </div>
          </div> -->
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Sister Insititutions</h4>
               
                 Sree Narayana Public School<br>
                        Sree Narayana College of Technology<br>
                      
                        Kids World, Kollam<br>
                        Indian Public School, Kollam.<br>
                          Sree Narayana Institute of Ayurvedic Studies and Research<br>
                
                
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div> 

          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Annoucements</h4>
                <div class="stuck">
  <div class="header-section text-center">
           <!-- <h2>Annoucements</h2> Features -->
<center>
           <div id="scroll-container">
  <div id="scroll-text">
   
 
          <p>Applications are invited for vacant / Lapsed seats(Merit and Management) upto 12/10/2022. Spot Admission for:
1, Applicants having MCA 2022 score will be done on 13/10/2022 at 10AM.
2, Non-entrance holder's spot admission for vacant seats if any, will be on 15/10/2022 at 10AM.</p>

<p>Applications are invited for vacant / Lapsed seats(Merit and Management) upto 12/10/2022. Spot Admission for:
1, Applicants having MCA 2022 score will be done on 13/10/2022 at 10AM.
2, Non-entrance holder's spot admission for vacant seats if any, will be on 15/10/2022 at 10AM.</p>


<p>Applications are invited for vacant / Lapsed seats(Merit and Management) upto 12/10/2022. Spot Admission for:
1, Applicants having MCA 2022 score will be done on 13/10/2022 at 10AM.
2, Non-entrance holder's spot admission for vacant seats if any, will be on 15/10/2022 at 10AM.</p>
<div>
</div> </div></div></center>
  </div>
</div>
                
                
              </div>
              <div class="fea-img pull-left">
              <i class="fa fa-bell"></i>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>


  <!-- <section  id="annoucement" class="section-padding">
    <div  class="container">
        <div  class="row" >
    <table>
    <tr>
        <td style=" vertical-align: top; position:fixed">
        <div class="updates">Latest Updates</div>
                <ul >
                    <li style="color: black;">HI</li>
                    <li>hello</li>
                </ul>
        </td>
    </tr>
</table>
    </div></div>
</section> -->
  <!--/ feature-->
  <!--Organisations-->
  <!-- <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>65%</h3>
              <p>Say NO!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Says Yes!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>15%</h3>
              <p>Can't Say!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
              <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
            </hgroup>
            <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Organisations-->
  <!--Cta-->
  <!-- <section id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">Subscribe Now</h2>
          <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
          <div class="cta-2-form text-center">
            <form action="#" method="post" id="workshop-newsletter-form">
              <input name="" placeholder="Enter Your Email Address" type="email">
              <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Cta-->
  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Clubs</h2>
          <p>Choose your club.<br>
           </p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <!-- <i class="fa fa-html5 color-green"></i> -->
              <img src="img/innovation.jpg" sizes="img-responsive">
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Innovation Club</h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <!-- <i class="fa fa-css3 color-green"></i> -->
                            <img src="img/iedc.jpg" sizes="img-responsive">

            </div>
            <div class="icon-text">
              <h4 class="ser-text"> Innovation and Entrepreneurship Development Centre (IEDC)</h4>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <!-- <i class="fa fa-joomla color-green"></i> -->
                                          <img src="img/media.jpg" sizes="img-responsive">

            </div>
            <div class="icon-text">
              <h4 class="ser-text">Media club</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <!-- <i class="fa fa-joomla color-green"></i> -->
                                          <img src="img/placement.jpg" sizes="img-responsive">

            </div>
            <div class="icon-text">
              <h4 class="ser-text">Placement cell</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
    x
  </section>
  <!--/ work-shop-->
  <!--Faculity member-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Meet Our Faculty Member</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p> -->
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">   DR. T. MAHALEKSHMI</p>
              <p class="pm-staff-profile-title">   Principal</p>
           

           
              
              <!-- Qualification: PhD, M.S., M.Sc.     <br>                 Date of joining: 07/10/2003      <br>           Experience: 37 years <br> -->
              <p class="pm-staff-profile-bio">               Qualification: PhD, M.S., M.Sc.     <br>                 Date of joining: 07/10/2003      <br>           Experience: 37 years <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">DR. SAJEEV J</p>
              <p class="pm-staff-profile-title">Associate Professor </p>

              <p class="pm-staff-profile-bio">Qualifications: PhD, MCA, NET     <br>                  Date of Joining: 20/08/2003          <br>     Experience: 21 years</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Prof. MIRIAM THOMAS</p>
              <p class="pm-staff-profile-title">Assistant Professor</p>

              <p class="pm-staff-profile-bio">Qualifications: MCA                       <br>      Date of Joining: 16/07/2007    <br>          Experience: 15 years</p>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
       
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">   Prof. Redhya M</p>
              <p class="pm-staff-profile-title">  Assistant Professor</p>
           

           
              
              <!-- Qualification: PhD, M.S., M.Sc.     <br>                 Date of joining: 07/10/2003      <br>           Experience: 37 years <br> -->
              <p class="pm-staff-profile-bio">               Qualification: MCA (Doing PhD)   <br>                 Date of joining:15/10/2007      <br>           Experience: 16 years <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">DR. Rejitha P R</p>
              <p class="pm-staff-profile-title">Assistant Professor </p>

              <p class="pm-staff-profile-bio">Qualifications: MCA, NET(Doing PhD)    <br>                  Date of Joining: 03/09/2012        <br>     Experience: 17 years</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Prof. Sanila S</p>
              <p class="pm-staff-profile-title">Assistant Professor</p>

              <p class="pm-staff-profile-bio">Qualifications: MCA, M.Tech(Doing PhD)                                 <br>      Date of Joining: 02/01/2022    <br>          Experience: 16 years</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Faculity member-->
  <!--Testimonial-->
  <!-- <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">See What Our Customer Are Saying?</h2>
          <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
            <p class="text-name">Abraham Doe - Creative Dırector</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
            <p class="text-name">Abraham Doe - Creative Dırector</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Testimonial-->
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Gallery</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p> -->
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/g1.jpg" class="img-responsive">
            <!-- <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption> -->
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/g2.jpg" class="img-responsive">
            <!-- <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption> -->
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/g3.jpg" class="img-responsive">
           <!--  <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption> -->
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/g4.jpg" class="img-responsive">
            <!-- <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption> -->
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/g5.jpg" class="img-responsive">
            <!-- <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption> -->
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/g6.jpg" class="img-responsive">
<!--             <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption> -->
            <a href="#"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  <!--Pricing-->
 <!--  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Our Pricing</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
             Plan > --
            <div class="pricing-head">
              <h4>Monthly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">200</span>
            </div>

            Plean Detail
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            Plan  
            <div class="pricing-head">
              <h4>Quarterly Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">800</span>
            </div>

            Plean Detail
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
             Plan  
            <div class="pricing-head">
              <h4>Year Plan</h4>
              <span class="fa fa-usd curency"></span> <span class="amount">1200</span>
            </div>

            Plean Detail
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --> 
    <!--/ Pricing-->
  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p> -->
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND MESSAGE</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->

  <?php
include('footer.php');
?>
