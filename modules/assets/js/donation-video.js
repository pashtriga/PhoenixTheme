/** Donation Video Modal */

function playDonationVideo(videoId) {
    let videoContent = document.getElementById("donation-video-" + videoId).innerHTML;
    let modal = document.getElementById("videoModal");
    document.getElementById('donationModalContent').innerHTML = videoContent;
    modal.style.display = "block";
}

let closeBtn = document.getElementsByClassName("close")[0];
closeBtn.addEventListener("click", function (event) {
    document.getElementById("videoModal").style.display = "none";
    document.getElementById('donationModalContent').innerHTML = '';
});
