<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

{{-- hide navbar when scroll --}}
<script>
    (function() {
        // Store the initial position of the scroll
        let prevScrollpos = window.pageYOffset;

        // Add a scroll event listener to the window
        window.onscroll = function() {
            // Get the current position of the scroll
            let currentScrollPos = window.pageYOffset;

            // If the current position is less than the previous position,
            // that means the user is scrolling up, so show the navbar
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                // Otherwise, the user is scrolling down, so hide the navbar
                document.getElementById("navbar").style.top = "-60px";
            }

            // Update the previous position for the next scroll event
            prevScrollpos = currentScrollPos;
        };
    })();
</script>


<script>
    function previewImage(input) {
        const preview = document.getElementById('preview');
        const parrentImg = document.getElementById('browse-file');
        const selectImage = document.getElementById('select-image');

        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
            preview.hidden = false;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
            preview.hidden = true;
        }
        selectImage.style.display = 'none';
        parrentImg.style.setProperty("height", "700px", "important");
        parrentImg.style.setProperty("width", "700px", "important");
    }
</script>

@yield('script')
@livewireScripts
