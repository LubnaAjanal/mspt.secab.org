<?php include('../headerPages/header.php'); ?>

<style>
    .image-slider {
        display: flex;
        flex-flow: column;
        width: clamp(360px, 96vw, 830px);
        aspect-ratio: 16 / 9;
        min-height: 300px;
        overflow: hidden;
        border-radius: 8px;
        container-type: inline-size;
        contain: content;
        background-color: #0006;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px, rgba(0, 0, 0, 0.3) 0px 2px 4px,
            rgba(0, 0, 0, 0.25) 0px 4px 8px, rgba(0, 0, 0, 0.2) 0px 8px 16px,
            rgba(0, 0, 0, 0.15) 0px 16px 32px;
    }

    .slider__content {
        flex-grow: 1;
        display: flex;
        justify-content: space-between;
    }

    .slider-control--button {
        border: 0;
        background: 0;
        outline: 0;
        cursor: pointer;
        place-content: center;
        padding-inline: 3vw;
        z-index: 1;
        display: grid;
    }

    .icon {
        height: 2rem;
        width: 2rem;
        fill: var(--icon-default);
        border-radius: 50%;
    }

    .slider-control--button:where(:hover) {
        background-image: linear-gradient(to var(--position),
                #0000 0%,
                #0002,
                80%,
                #0006 100%);

        .icon {
            fill: var(--icon-accent);
            background: #0001;
        }
    }

    .slider-control--button:active {
        outline: 0.2em solid hsl(204 100 53);
        outline-offset: -0.5em;
    }

    .prev-button {
        --position: left;
    }

    .next-button {
        --position: right;
    }

    .image-display {
        position: fixed;
        inset: 0;
    }

    .slider-navigation {
        z-index: 10;
        display: grid;
        grid-auto-flow: column;
        grid-template-columns: repeat(5, 1fr);
        grid-auto-columns: 100%;
        gap: 1.25rem;
        padding: 1rem;
        place-content: center;
        background-color: var(--navigation-color);
        backdrop-filter: blur(6px);
    }

    .nav-button {
        display: grid;
        width: 100%;
        height: 100%;
        border-radius: 0.5em;
        overflow: hidden;
        align-items: center;
        justify-content: center;
        border: 0;
        aspect-ratio: 16 / 9;
        transition: filter 150ms linear, scale 266ms ease;
    }

    .thumbnail {
        display: block;
        max-width: 100%;
        width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .nav-button[aria-selected="true"] {
        scale: 1.1;
    }

    .nav-button[aria-selected="true"],
    .nav-button:focus-visible {
        outline: 0.2em solid var(--active-color);
        outline-offset: 0.2em;
    }

    .nav-button[aria-selected="false"] {
        filter: opacity(0.7);
    }

    .nav-button[aria-selected="false"]:where(:hover, :focus-visible) {
        filter: opacity(1);
    }

    @container (max-width: 660px) {
        .nav-button:not(:has(img)) {
            background-color: rgb(241, 235, 232);
        }

        .slider-navigation {
            display: flex;
            justify-content: center;
            padding-block: 1.5em;
        }

        .nav-button {
            inline-size: 0.625rem;
            aspect-ratio: 1;
            border-radius: 50%;
        }

        .nav-button>.thumbnail {
            display: none;
        }

        .nav-button[aria-selected="true"] {
            background-color: black;
            scale: 1.5;
        }
    }

    /* end image slide code here */

    .library {
        background-color: #fff;
        padding: 15px;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.4);
    }
</style>

<section style="margin-left:20%;">
    <div class="container">
        <div class="image-slider">
            <section class="slider__content">
                <button type="button" class="slider-control--button prev-button">
                    <svg width="16" height="16" fill="currentColor" class="icon arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <main class="image-display"></main>
                <button type="button" class="slider-control--button next-button">
                    <svg width="16" height="16" fill="currentColor" class="icon arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg>
                </button>
            </section>
            <nav class="slider-navigation">
                <button class="nav-button" aria-selected="true">
                    <img class="thumbnail" src="../assets/img/facilities/lib1.jpg" alt="Thumbnail 1" />
                </button>
                <button class="nav-button" aria-selected="false">
                    <img class="thumbnail" src="../assets/img/facilities/lib2.jpg" alt="Thumbnail 2" />
                </button>
                <button class="nav-button" aria-selected="false">
                    <img class="thumbnail" src="../assets/img/facilities/lib3.jpg" alt="Thumbnail 3" />
                </button>
                <button class="nav-button" aria-selected="false">
                    <img class="thumbnail" src="../assets/img/facilities/lib4.jpg" alt="Thumbnail 4" />
                </button>
                <button class="nav-button" aria-selected="false">
                    <img class="thumbnail" src="../assets/img/facilities/lib5.jpg" alt="Thumbnail 5" />
                </button>
                <!-- <button class="nav-button" aria-selected="false">
                    <img class="thumbnail" src="https://picsum.photos/800/400?random=6" alt="Thumbnail 6" />
                </button> -->
            </nav>
        </div>
    </div>
</section>

<div class="container">
    <h3 class="heading2" style="width:15%;">Library</h3>
    <div class="library">
        <p>The library and information centre was established in the year 1983 and it has a vast collection of text books, reference books, bound volumes, national and international journals, E- books, E- journals, encyclopedia and other multimedia resources. Library has 22641 volumes and subscription for 5 technical journals and 5 daily newspapers.</p>
        <p>E- Journals are subscribed from E-Resource Consortium, which is a value added service to the readers and has a collection of 8611 e-journals. These resources are IP based and can be accessed through Digital library. Library has a Membership of DELNET, New Delhi and National Digital Library of India, IIT Kharagpur.</p>
    </div>
</div>

<?php include 'library1.php'; ?>

<script>
    class Slider {
        constructor(slider) {
            this.slider = slider;
            this.display = slider.querySelector(".image-display");
            this.navButtons = Array.from(slider.querySelectorAll(".nav-button"));
            this.prevButton = slider.querySelector(".prev-button");
            this.nextButton = slider.querySelector(".next-button");
            this.sliderNavigation = slider.querySelector(".slider-navigation");
            this.currentSlideIndex = 0;
            this.preloadedImages = {};

            this.initialize();
        }

        initialize() {
            this.setupSlider();
            this.preloadImages();
            this.eventListeners();
        }

        setupSlider() {
            this.showSlide(this.currentSlideIndex);
        }

        showSlide(index) {
            this.currentSlideIndex = index;
            const navButtonImg = this.navButtons[
                this.currentSlideIndex
            ].querySelector("img");
            if (navButtonImg) {
                const imgClone = navButtonImg.cloneNode();
                this.display.replaceChildren(imgClone);
            }
            this.updateNavButtons();
        }

        updateNavButtons() {
            this.navButtons.forEach((button, buttonIndex) => {
                const isSelected = buttonIndex === this.currentSlideIndex;
                button.setAttribute("aria-selected", isSelected);
                if (isSelected) button.focus();
            });
        }

        preloadImages() {
            this.navButtons.forEach((button) => {
                const imgElement = button.querySelector("img");
                if (imgElement) {
                    const imgSrc = imgElement.src;
                    if (!this.preloadedImages[imgSrc]) {
                        this.preloadedImages[imgSrc] = new Image();
                        this.preloadedImages[imgSrc].src = imgSrc;
                    }
                }
            });
        }

        eventListeners() {
            document.addEventListener("keydown", (event) => {
                this.handleAction(event.key);
            });

            this.sliderNavigation.addEventListener("click", (event) => {
                const targetButton = event.target.closest(".nav-button");
                const index = targetButton ?
                    this.navButtons.indexOf(targetButton) :
                    -1;
                if (index !== -1) {
                    this.showSlide(index);
                }
            });

            this.prevButton.addEventListener("click", () =>
                this.handleAction("prev")
            );
            this.nextButton.addEventListener("click", () =>
                this.handleAction("next")
            );
        }

        handleAction(action) {
            if (action === "Home") {
                this.currentSlideIndex = 0;
            } else if (action === "End") {
                this.currentSlideIndex = this.navButtons.length - 1;
            } else if (action === "ArrowRight" || action === "next") {
                this.currentSlideIndex =
                    (this.currentSlideIndex + 1) % this.navButtons.length;
            } else if (action === "ArrowLeft" || action === "prev") {
                this.currentSlideIndex =
                    (this.currentSlideIndex - 1 + this.navButtons.length) %
                    this.navButtons.length;
            }

            this.showSlide(this.currentSlideIndex);
        }
    }
    const ImageSlider = new Slider(document.querySelector(".image-slider"));
</script>




<?php
include('../headerPages/top_footer.php');
include('../headerPages/footer.php');
?>