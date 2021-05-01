
<?php
require_once('vandor/header.php');
?>

<section class="breadcumb-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb-item text-center">
                <h4>our team</h4>
                <ul>
                    <li><a href="index.php">Home</a></li> /
                    <li>Contact us</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact section start  -->

<section class="contact-us" style="background-image: url(images/slider-bg.jpg);">
    <div class="container">
        <div class="row mb-5 ">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-left ">
                    <h6>haw we team ?</h6>
                    <h3 class="hard">Say messege</h3>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-pra">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Assumenda in nobis officia accusamus neque?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6"data-aos="fade-up-right">
                <form action="">
                <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-form">
                                <input type="text" name="Frist_Name" id="first_name"placeholder="Your First Name">
                                <small>Your first name is requrid</small>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form">
                                <input type="text" name="Last_Name" id="first_name"placeholder="Your Last Name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form">
                                <input type="number" name="number" id="number"placeholder="Your Phone Number">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form">
                                <input type="email" name="Email" id="email"placeholder="Your Phone Email">
                            </div>
                        </div>
                </div>
            </form>
            <div class="row">
                <div class="col-xl-12">
                    <div class="messege">
                        <textarea name="messege" id="messege" cols="30" rows="10"placeholder="Your Messege"></textarea>
                        <a class="btn" href="">send messege</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6"data-aos="fade-up-left">
                <div class="contact-right">
                   <div class="single-box d-flex">
                    <div class="icon">
                        <h3><i class="fas fa-phone-volume"></i></h3>
                    </div>
                    <div class="email">
                        <h5><a href="tel:01761400943"></a>01761400943 <br>showruv Mahmud</h5>
                    </div>
                   </div>
                   <div class="single-box d-flex">
                    <div class="icon">
                        <h3><i class="fab fa-linkedin-in"></i></h3>                       
                    </div>
                    <div class="email">
                        <h5>showruv40@gmail.com</h5>
                    </div>
                   </div>
                   <div class="single-box d-flex">
                    <div class="icon">
                        <h3><i class="fas fa-map-marker-alt"></i></h3>
                    </div>
                    <div class="email">
                        <h5>brammon-bariya , Bancharampur <br>Darikandi</h5>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once('vandor/footer.php');
?>