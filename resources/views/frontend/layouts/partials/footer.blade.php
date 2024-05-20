
<div id="social-section" class="social-area"
     style="background-image: url('{{ asset('/uploads/banner').'/'. getBanners()['social_media'] }}')">

    <h2 class="text-center">{{ getGeneralSetting() ? getGeneralSetting()->social_title : '' }}</h2>

    <div class="social-links">
        <ul>
            <li><a href="{{ getSocial() ? getSocial()->facebook_link : '#' }}" title="Facebook" class="social-icon" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="{{ getSocial() ? getSocial()->twitter_link : '#' }}" title="Twitter" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="{{ getSocial() ? getSocial()->linkedin_link : '#' }}" title="Linkedin" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="{{ getSocial() ? getSocial()->instagram_link : '#' }}" title="Instagram" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="{{ getSocial() ? getSocial()->youtube_link : "#" }}" title="Youtube" class="social-icon" target="_blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
</div>

<footer class="copyright-area text-center" style="background-image: url('{{ asset('/uploads/banner').'/'. getBanners()['copyright'] }}')">
    <p>&copy; {{ getGeneralSetting() ? getGeneralSetting()->copyright_title : '' }} - {{ now()->format('Y') }}. Developed by
        <a href="https://linkedin.com/in/tawfiquebd" target="_blank" title="Linkedin">Md Tawfique Hossain</a>

        <button class="fa fa-arrow-up" id="scrollToTopBtn" onclick="scrollToTop()"></button>
    </p>
</footer>
