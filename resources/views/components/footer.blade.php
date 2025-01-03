<footer class="footer">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Company Info -->
            <div class="col-lg-4">
                <div class="pe-lg-5">
                    <img src="{{ asset('img/logo-v2.svg') }}" alt="Rizaldi Logo" height="40" class="mb-4">
                    <p class="text-secondary mb-4">Backend Developer specializing in creating robust and scalable
                        solutions with a strong focus on problem solving and innovation.</p>
                    <div class="social-links">
                        <a href="https://github.com/t-rizaldi" target="_blank" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" target="_blank" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://instagram.com/t_rizaldi" target="_blank" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://tiktok.com/@katak.lintas" target="_blank" class="social-link">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('v2.index') }}">Home</a></li>
                    <li><a href="#">Experience</a></li>
                    <li><a href="{{ route('v2.service') }}">Services</a></li>
                    <li><a href="{{ route('v2.portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('v2.blog') }}">Blog</a></li>
                    <li><a href="{{ route('v2.contact') }}">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-4">Services</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Backend Development</a></li>
                    <li><a href="#">API Development</a></li>
                    <li><a href="#">Database Design</a></li>
                    <li><a href="#">System Architecture</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">
                <h5 class="text-white mb-4">Contact Info</h5>
                <ul class="list-unstyled footer-contact mb-4">
                    <li>
                        <i class="fas fa-phone"></i>
                        +62 853-7116-1621
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        admin@trizaldi.com
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        Kota Langsa, Aceh, Indonesia
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="py-3" style="background: rgba(15, 23, 42, 0.5);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <p class="mb-0 text-secondary">© 2024 <a href="{{ route('v2.index') }}"
                            class="text-decoration-none gradient-text">Rizal Dev</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
