<script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Lucide Icons
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // ==============================
            // Navbar scroll effect
            // ==============================
            const navbar = document.getElementById('navbar');
            const handleScroll = () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('glass', 'shadow-sm');
                } else {
                    navbar.classList.remove('glass', 'shadow-sm');
                }
            };
            window.addEventListener('scroll', handleScroll, {
                passive: true
            });
            handleScroll();

            // ==============================
            // Mobile menu toggle
            // ==============================
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
                // Close on link click
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
                });
            }

            // ==============================
            // Counter animation
            // ==============================
            const counters = document.querySelectorAll('[data-count]');
            const animateCounter = (el) => {
                const target = parseInt(el.dataset.count);
                const duration = 2000;
                const startTime = performance.now();

                const update = (currentTime) => {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
                    const current = Math.floor(eased * target);
                    el.textContent = current + '+';
                    if (progress < 1) requestAnimationFrame(update);
                };
                requestAnimationFrame(update);
            };

            // ==============================
            // Intersection Observer for animations
            // ==============================
            // Only use IO fallback if scroll-driven animations aren't supported
            const hasScrollAnimations = CSS.supports?.('(animation-timeline: view()) and (animation-range: entry)');

            const observerOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');

                        // Trigger counter animation
                        if (entry.target.hasAttribute('data-count')) {
                            animateCounter(entry.target);
                        }

                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
                observer.observe(el);
            });

            // Observe counters
            counters.forEach(el => observer.observe(el));

            // ==============================
            // Smooth scroll for anchor links
            // ==============================
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const navHeight = navbar.offsetHeight;
                        const targetPosition = target.getBoundingClientRect().top + window
                            .pageYOffset - navHeight;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // ==============================
            // Active nav link highlighting
            // ==============================
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');

            const highlightNav = () => {
                const scrollPos = window.scrollY + 100;
                sections.forEach(section => {
                    const top = section.offsetTop;
                    const height = section.offsetHeight;
                    const id = section.getAttribute('id');

                    if (scrollPos >= top && scrollPos < top + height) {
                        navLinks.forEach(link => {
                            link.classList.remove('text-primary', 'font-semibold');
                            link.classList.add('text-text-secondary');
                            if (link.getAttribute('href') === `#${id}`) {
                                link.classList.add('text-primary', 'font-semibold');
                                link.classList.remove('text-text-secondary');
                            }
                        });
                    }
                });
            };
            window.addEventListener('scroll', highlightNav, {
                passive: true
            });
        });
    </script>
