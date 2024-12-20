const dropdown = document.querySelector('.dropdown');
        dropdown.addEventListener('click', () => {
            dropdown.classList.toggle('active');
        });

        // Scroll behavior for text overlay
        window.addEventListener('scroll', function () {
            const textOverlay = document.querySelector('.text-overlay');
            const currentScroll = window.scrollY; // Get the current scroll position

            // Move Background Image and Text: Adjust position based on scroll
            textOverlay.style.transform = 'translate(-50%, calc(-50% - ' + currentScroll / 5 + 'px))'; // Adjust speed for text movement
        });

        // Scroll behavior for font size reduction of about-title
        const aboutTitle = document.querySelector('.about-title');
        let lastScrollPosition = 0; // To track last scroll position

        window.addEventListener('scroll', function () {
            const scrollPosition = window.scrollY; // Get the current scroll position
            const originalFontSize = 10; // Original font size in rem

            // If scrolling down, shrink the font size
            if (scrollPosition > lastScrollPosition) {
                let fontSize = Math.max(4, originalFontSize - scrollPosition / 100); // Min font size is 2rem
                aboutTitle.style.fontSize = fontSize + 'rem';
            }
            // If scrolling up, restore the font size to the original size
            else {
                let fontSize = originalFontSize;
                aboutTitle.style.fontSize = fontSize + 'rem'; // Keep the font size as original
            }

            // Apply smooth transition for font size change
            aboutTitle.style.transition = 'font-size 1s ease';

            // Update the last scroll position
            lastScrollPosition = scrollPosition;
        });	
		window.onscroll = function() {
			  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
				document.getElementById("backToTopBtn").style.display = "block"; // Show the button
			  } else {
				document.getElementById("backToTopBtn").style.display = "none"; // Hide the button
			  }
			};