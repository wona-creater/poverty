<x-guest-layout>
    <main>
        <section id="home" class="hero-section bd-bottom d-flex align-items-center">
            <div class="bubble-effect">
                <div class="bubble b-1"></div>
                <div class="bubble b-2"></div>
                <div class="bubble b-3"></div>
                <div class="bubble b-4"></div>
                <div class="bubble b-5"></div>
                <div class="bubble b-6"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 sm-padding">
                        <div class="hero-content">
                            <h3>Grow Wealth with Vallfield</h3>
                            <h1>Secure. Simple. Vallfield.</h1>
                            <p>
                                Trade, or stake with confidence. <br />
                                Join thousands thriving with our platform.
                            </p>
                            <a href="{{ route('register') }}" class="default-btn">Start Investing</a>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="hero-content">
                            <img src="/frontend/img/hero.png" alt="Crypto Investment" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.hero-section -->

        <section id="features" class="features-section bg-grey bd-bottom padding">
            <div class="shape"></div>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="200ms">
                        <div class="section-heading mb-40">
                            <h2>Master Staking</h2>
                            <p>
                                Trade, stake, and grow your wealth with Vallfield’s secure, user-friendly platform.
                            </p>
                            <a href="{{ route('register') }}" class="default-btn">Join Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="row">
                            <div class="col-md-6 padding-15 wow fadeInUp" data-wow-delay="200ms">
                                <div class="features-item">
                                    <i class="icon-anchor"></i>
                                    <h3>Smart Trading</h3>
                                    <p>
                                        Trade with real-time insights and low fees.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15 wow fadeInUp" data-wow-delay="300ms">
                                <div class="features-item offset-top">
                                    <i class="icon-strategy"></i>
                                    <h3>High-Yield Staking</h3>
                                    <p>
                                        Earn passive income by staking securely.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15 wow fadeInUp" data-wow-delay="400ms">
                                <div class="features-item">
                                    <i class="icon-tools"></i>
                                    <h3>Secure Wallet</h3>
                                    <p>
                                        Store assets safely with advanced encryption and 2FA.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15 wow fadeInUp" data-wow-delay="500ms">
                                <div class="features-item offset-top">
                                    <i class="icon-genius"></i>
                                    <h3>Portfolio Insights</h3>
                                    <p>
                                        Track performance with clear, actionable analytics.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.features-section -->

        <section class="content-section bd-bottom padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="200ms">
                        <div class="content-info">
                            <h2>
                                Grow Your <br />
                                Wealth Effortlessly
                            </h2>
                            <p>
                                Trade, stake, and track your portfolio with Vallfield’s secure, intuitive platform.
                            </p>
                            <a href="{{ route('register') }}" class="default-btn">Start Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding wow fadeInRight" data-wow-delay="300ms">
                        <img src="/frontend/img/content-1.png" alt="Crypto Portfolio" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content-section -->

        <section class="content-section bd-bottom bg-grey padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 sm-padding wow fadeLeft" data-wow-delay="200ms">
                        <img src="/frontend/img/content-2.png" alt="Crypto Security" />
                    </div>
                    <div class="col-lg-6 sm-padding wow fadeRight" data-wow-delay="200ms">
                        <div class="content-info">
                            <h2>
                                Secure <br />
                                Investing, Always
                            </h2>
                            <p>
                                Enjoy 24/7 support and top-tier security on Vallfield’s trusted platform.
                            </p>
                            <a href="{{ route('register') }}" class="default-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content-section -->

        <section id="pricing" class="pricing-section bd-bottom padding">
            <div class="shape"></div>
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <span>Plans & Pricing</span>
                    <h2>Invest with Vallfield</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 padding-15 wow fadeInUp" data-wow-delay="200ms">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h3>Starter</h3>
                                <h2>$0 <span>Free</span></h2>
                            </div>
                            <ul class="pricing-list">
                                <li>Basic Trading</li>
                                <li>5% Staking Rewards</li>
                                <li>Standard Security</li>
                                <li>Email Support</li>
                            </ul>
                            <div class="pricing-footer">
                                <a href="{{ route('register') }}" class="default-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 padding-15 wow fadeInUp" data-wow-delay="300ms">
                        <div class="pricing-box mid-pricing">
                            <div class="pricing-head">
                                <h3>Pro</h3>
                                <h2>$49 <span>Monthly</span></h2>
                            </div>
                            <ul class="pricing-list">
                                <li>Advanced Trading</li>
                                <li>10% Staking Rewards</li>
                                <li>Enhanced Security</li>
                                <li>24/7 Support</li>
                            </ul>
                            <div class="pricing-footer">
                                <a href="{{ route('register') }}" class="default-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 padding-15 wow fadeInUp" data-wow-delay="400ms">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h3>Elite</h3>
                                <h2>$99 <span>Monthly</span></h2>
                            </div>
                            <ul class="pricing-list">
                                <li>Premium Trading</li>
                                <li>15% Staking Rewards</li>
                                <li>Top-Tier Security</li>
                                <li>Priority Support</li>
                            </ul>
                            <div class="pricing-footer">
                                <a href="{{ route('register') }}" class="default-btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.pricing-section -->

        <section id="reviews" class="testimonial-section bd-bottom padding">
            <div class="bubble-effect">
                <div class="bubble b-1"></div>
                <div class="bubble b-2"></div>
                <div class="bubble b-3"></div>
                <div class="bubble b-4"></div>
                <div class="bubble b-5"></div>
                <div class="bubble b-6"></div>
            </div>
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <span>Testimonials</span>
                    <h2>Trusted by Stakers</h2>
                </div>
                <div class="testimonial-wrap">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="slider slider-for">
                                <div class="testi-content">
                                    <p>
                                        "Vallfield’s platform made trading and staking simple and secure. I’ve doubled
                                        my
                                        portfolio in months!"
                                    </p>
                                    <div class="author-info">
                                        <h3>Anna Torres <span>Trader</span></h3>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>
                                        "Staking on Vallfield is a game-changer. Easy setup, great returns, and
                                        top-notch support."
                                    </p>
                                    <div class="author-info">
                                        <h3>Michael Chen <span>Investor</span></h3>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>
                                        "The security features give me peace of mind. Vallfield is my go-to for
                                        staking."
                                    </p>
                                    <div class="author-info">
                                        <h3>Sofia Mendes <span>Entrepreneur</span></h3>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>
                                        "Vallfield’s insights helped me make smarter trades. Highly recommend for
                                        beginners!"
                                    </p>
                                    <div class="author-info">
                                        <h3>Ethan Patel <span>New Investor</span></h3>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>
                                        "Fast, reliable, and user-friendly. Vallfield turned my staking goals into
                                        reality."
                                    </p>
                                    <div class="author-info">
                                        <h3>Liam Russo <span>Trader</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="slider slider-nav">
                                <div class="testi-thumb">
                                    <img src="/frontend/img/testi-1.jpg" alt="Anna Torres" />
                                </div>
                                <div class="testi-thumb">
                                    <img src="/frontend/img/testi-2.jpg" alt="Michael Chen" />
                                </div>
                                <div class="testi-thumb">
                                    <img src="/frontend/img/testi-3.jpg" alt="Sofia Mendes" />
                                </div>
                                <div class="testi-thumb">
                                    <img src="/frontend/img/testi-4.jpg" alt="Ethan Patel" />
                                </div>
                                <div class="testi-thumb">
                                    <img src="/frontend/img/testi-5.jpg" alt="Liam Russo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.testimonial-section -->

        <section class="faq-section padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <span>FAQs</span>
                    <h2>Your Staking Questions Answered</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="faq-content">
                            <li>
                                <h3>How secure is Vallfield?</h3>
                                <p>
                                    We use advanced encryption, 2FA, and cold storage to protect your assets.
                                </p>
                            </li>
                            <li>
                                <h3>What token can I trade?</h3>
                                <p>
                                    Trade Bitcoin, Ethereum, and major altcoins with low fees.
                                </p>
                            </li>
                            <li>
                                <h3>How do I start staking?</h3>
                                <p>
                                    Sign up, deposit, and choose a staking plan to earn rewards.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="faq-content">
                            <li>
                                <h3>Are there fees for trading?</h3>
                                <p>
                                    Enjoy competitive fees, starting at 0.1% per trade.
                                </p>
                            </li>
                            <li>
                                <h3>Can beginners use Vallfield?</h3>
                                <p>
                                    Yes, our intuitive platform and guides make staking easy for all.
                                </p>
                            </li>
                            <li>
                                <h3>How do I contact support?</h3>
                                <p>
                                    Reach our 24/7 support via email, chat, or phone.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.faq-section -->

        <section class="cta-section">
            <div class="container">
                <div class="row cta-wrap d-flex align-items-center">
                    <div class="cta-overlay-img"></div>
                    <div class="col-lg-7 sm-padding">
                        <div class="cta-content">
                            <h2>5,000+ Investors Trust <br />Vallfield for token Growth</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 sm-padding">
                        <div class="cta-content text-right">
                            <a href="{{ route('login') }}" class="default-btn">Log In</a>
                            <a href="{{ route('register') }}" class="default-btn">Join Free</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.cta-section -->

        <section class="widget-section bd-bottom padding">
            <div class="bubble-effect">
                <div class="bubble b-1"></div>
                <div class="bubble b-3"></div>
                <div class="bubble b-4"></div>
                <div class="bubble b-5"></div>
                <div class="bubble b-6"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 padding-15">
                        <div class="widget-content">
                            <a class="brand" href="#"><img src="/backend/images/app-logo.png" height="70"
                                    width="120" alt="150x50" /></a>
                            <p>
                                Vallfield empowers investors with secure, simple trading and staking.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 padding-15">
                        <div class="widget-links">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 padding-15">
                        <div class="widget-links">
                            <h3>Platform</h3>
                            <ul>
                                <li><a href="#">Trading</a></li>
                                <li><a href="#">Staking</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 padding-15">
                        <div class="widget-links">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Contact Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.widget-section -->
    </main>
</x-guest-layout>
{{--  --}}
