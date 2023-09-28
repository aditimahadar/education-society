class Footer extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
    <footer class="footer">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="first-wrap">
                    <div class="for-logo">
                    <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    <div class="footer-icons d-flex">
                        <div class="box-1"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                        <div class="box-1"><a href="#"><i class="fab fa-twitter"></i></a></div>
                        <div class="box-1"><a href="#"><i class="fab fa-instagram"></i></a></div>
                        <div class="box-1"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
        <div class="col-md-4 col-lg-2">
            <div class="inner-quick-links">
                <div class="quick-links">
                    <h4>Quick Links</h4>
                    <div class="line"></div>
                    <div class="links">
                        <ul>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="gallery.php">Gallery</a>
                            </li>
                            <li>
                                <a href="contact_us.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-4 col-lg-2">
                <div class="quick-links">
                    <h4>Useful Links</h4>
                    <div class="line"></div>
                    <div class="links">
                        <ul>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="#">Disclaimer</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="newsletter">
                    <div class="quick-links">
                        <h4>Newsletter</h4>
                        <div class="line"></div>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        <form class=" d-flex">
                            <div class="form-group">
                                <div class="inner-form">
                                  <input type="text" placeholder="Your Email Address">
                                </div>
                            </div>
                                <button class="btn">Send</button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
        <div class="three-box">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                <div class="box d-flex justify-content-between align-items-center">
                <div class="circle text-center rounded-circle">
                   <i class="fas fa-phone-alt"></i>
                </div>
                <div class="box-content">
                    <h4>Jl.Sunset Road No.815</h4>
                    <p>Give Us A Call</p>
                </div>
            </div>
                </div>
                <div class="col-md-4 col-lg-4">
                <div class="mid-box d-flex justify-content-between align-items-center">
                <div class="circle text-center rounded-circle">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="box-content">
                    <h4>support@domain.com</h4>
                    <p>Drop Us a Line</p>
                </div>
            </div>
                </div>
                <div class="col-md-4 col-lg-4">
                <div class="box d-flex justify-content-between align-items-center">
                <div class="circle text-center rounded-circle">
                   <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="box-content">
                    <h4>Jl.Sunset Road No.815</h4>
                    <p>Give Us A Call</p>
                </div>
            </div>
                </div>
            </div>
        </div>
        <div class="last-section">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="last-section-text">
                        <h4> Yashwant education society by... </h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="last-section-text-2 text-right">
                        <h4>Copyright © 2023. All rights reserved.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    `;
    }
}
customElements.define('footer-component', Footer);