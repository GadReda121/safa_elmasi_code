<footer class="bg-cyan py-3 ">
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center justify-content-md-between flex-wrap justify-content-center gap-2 gap-md-0">
                <h6 class="m-0">
                    جميع الحقوق محفوظة © لعيادات الايادي البيضاء للرعاية الطبية
                </h6>
                {{-- route for private-policy --}}
                <a href="{{ route('private-policy') }}" class="text-white mb-0">
                    سياسة الخصوصية
                </a>
                <div class="d-flex gap-2">
                    <!-- facebook -->
                    {{-- <a href="https://www.facebook.com/whitehandscare" target="_blank" class="bg_icon_social" aria-label="Facebook" title="Facebook" rel="noopener noreferrer">
                        <i class="bi bi-facebook fs-5"></i>
                    </a> --}}
                    <!-- twitter -->
                    <!-- {{-- <a href="https://twitter.com/safadiamond" target="_blank" class="bg_icon_social" aria-label="Twitter" title="Twitter" rel="noopener noreferrer">
                        <i class="bi bi-twitter fs-5"></i>
                    </a> --}} -->
                    <!-- instagram -->
                    <!-- <a href="https://www.instagram.com/darbalhayaclinic" target="_blank" class="bg_icon_social" aria-label="Instagram" title="Instagram" rel="noopener noreferrer">
                        <i class="bi bi-instagram fs-5"></i>
                    </a> -->
                    <!-- whatsapp -->
                    {{-- <a href="tel:0535786913" target="_blank" class="bg_icon_social">
                        <i class="bi bi-whatsapp fs-5"></i>
                    </a> --}}
                    <!-- snapchat -->
                    <!-- <a href="https://www.snapchat.com/add/drbalhayaclinic?share_id=MkI5MTE1NDUtOEEwQS00QjVELTlBRDQtREQwRDAwREYxOTEx&locale=ar_SA%40calendar%3Dgregorian%3Bnumbers%3Dlatn&sid=adf6210549ee4cdaa06cf8760afec8c1" target="_blank" class="bg_icon_social" aria-label="Snapchat" title="Snapchat" rel="noopener noreferrer">
                        <i class="bi bi-snapchat fs-5"></i>
                    </a> -->
                    {{-- tiktok --}}
                    <!-- <a href="https://www.tiktok.com/@darbalhayaclinic" target="_blank" class="bg_icon_social" aria-label="Tiktok" title="Tiktok" rel="noopener noreferrer">
                        <i class="bi bi-tiktok fs-5"></i>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/main.js') }}"></script>
@stack('js')
</body>

</html>
