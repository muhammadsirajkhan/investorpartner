document.addEventListener('DOMContentLoaded', function() {
    const videoTabs = document.querySelectorAll('.btn-tab');
    const videoContent = document.querySelector('.video-tab-content');
    const videoModal = document.getElementById('videoModal');
    const modalIframe = videoModal.querySelector('iframe');

    // Handle tab clicks
    videoTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            videoTabs.forEach(t => t.classList.remove('active'));
            // Add active class to clicked tab
            this.classList.add('active');

            // Update background image
            const bgImage = this.getAttribute('data-bg');
            if (bgImage) {
                videoContent.style.backgroundImage = `url('${bgImage}')`;
            }

            // Update play button video ID
            const videoId = this.getAttribute('data-video-id');
            const playButton = videoContent.querySelector('.video-modal-trigger');
            if (playButton && videoId) {
                playButton.setAttribute('data-video-id', videoId);
            }
        });
    });

    // Handle modal video
    videoModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        if (!button) return;
        
        const videoId = button.getAttribute('data-video-id');
        if (videoId) {
            modalIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        }
    });

    // Clear iframe src when modal is closed
    videoModal.addEventListener('hidden.bs.modal', function() {
        modalIframe.src = '';
    });
});