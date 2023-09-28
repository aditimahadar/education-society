class Header extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
                <header class="navigation">
                <div
                class="container"
                style="border-bottom: 1px solid #d6d6d6; background: #ffff"
                >
                <div class="row">
                    <div class="col-12">
                    <div class="brand">
                        <a href="index.php">Logo</a>
                    </div>
                    <nav>
                        <div class="nav-mobile">
                        <a id="nav-toggle" href="index.php"><span></span></a>
                        </div>
                        <ul class="nav-list">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="gallery.php">our gallery</a>
                        </li>
                        <li>
                            <a href="contact_us.php">Contact us</a>
                        </li>
                        </ul>
                    </nav>
                    </div>
                </div>
                </div>
            </header>
            <div class="sub-header">
                <div class="container">
                <div class="row">
                    <div class="col-md-9">
                    <div class="main-flex d-flex justify-content-start">
                        <div class="flex-wrap d-flex justify-content-start">
                        <div class="circle-round rounded-circle text-center">
                            <i class="fas fa-city"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Yashwant education society</h3>
                            <h4>kolhapur-416234</h4>
                        </div>
                        </div>
                        <div class="flex-wrap d-flex justify-content-start">
                        <div class="circle-round rounded-circle text-center">
                            <i class="fas fa-phone" style="transform: rotate(90deg)"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone Number</h3>
                            <a href="contact_us.php">kolhapur - 416234</a>
                        </div>
                        </div>
                        <div class="flex-wrap d-flex justify-content-start">
                        <div class="circle-round rounded-circle text-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Send Your Mail</h3>
                            <a href="contact_us.php">kolhapur - 416234</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="btn-wrapper">
                    <a href="contact_us.php">
                    <button class="btn-web">Registration</button>
                    </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
          `;
    }
}
customElements.define('header-component', Header);