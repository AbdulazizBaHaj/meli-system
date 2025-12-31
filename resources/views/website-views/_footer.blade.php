<div class="fluid-container gradient-bg">
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
            <div class="col-lg-4 d-flex align-items-center">
                <img src="{{ URL::asset('assets\images\red-icon.png') }}" alt="" class="img-fluid"
                    style="max-width: 100px">
            </div>

            <div class="nav col-lg-4 justify-content-end">
                <span class="mb-3 mb-lg-0 text-muted">Privacy Policy</span>
            </div>
        </footer>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
            <div class="col-lg-4 d-flex align-items-center">
                <span class="mb-3 mb-lg-0 text-muted">{{ $footerData->footer_copyrights }}</span>
            </div>


            <ul class="nav col-lg-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a href="{{ $footerData->footer_twitter }}" target="_blank" rel="noopener noreferrer"><button class="footer-icon"><i
                                class="bi bi-twitter"></i></button></a>
                </li>
                <li class="ms-3">
                    <a href="{{ $footerData->footer_instagram }}" target="_blank" rel="noopener noreferrer"><button
                            class="footer-icon"><i class="bi bi-instagram"></i></button></a>
                </li>
                <li class="ms-3">
                    <a href="{{ $footerData->footer_facebook }}" target="_blank" rel="noopener noreferrer"><button
                            class="footer-icon"><i class="bi bi-facebook"></i></button></a>
                </li>
                <li class="ms-3">
                    <button class="footer-icon"><i class="bi bi-youtube"></i></button>
                </li>
            </ul>

        </footer>
    </div>
</div>
