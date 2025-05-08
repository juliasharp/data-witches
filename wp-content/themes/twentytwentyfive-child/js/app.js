// wait until DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM Loaded");

  gsap.registerPlugin(ScrollTrigger);

  //wait until images, links, fonts, stylesheets and js is loaded
  window.addEventListener("load", function(e) {
    //custom gsap code goes here

    const banner = document.querySelector(".animated__banner");
    const sloganTexts = document.querySelectorAll(".animated__slogan-text");

    if (!banner || !sloganTexts.length) return;

    // fade in banner
    gsap.from(banner, {
      opacity: 0,
      y: 50,
      duration: 1,
      ease: "power2.out"
    });

    // slide up intro animation (first word)

    gsap.set(sloganTexts, { y: "130%" });
    gsap.set(sloganTexts[0], { y: "0%" }); //first word stays visible


    // looping cycle animation for changing words
    let tl = gsap.timeline({
      repeat: -1,
      repeatDelay: 3,
    })

    sloganTexts.forEach((text, index) => {
      let nextIndex = (index + 1) % sloganTexts.length; //loop back to first word
      let nextText = sloganTexts[nextIndex];

      tl.to(text, { y: "-130%", duration: 1.5, ease: "expo.inOut" }, "<") //move current word up
        .to(nextText, { y: "0%", duration: 1.5, ease: "expo.inOut" }, "<") //reset position above
        .set(text, { y: "130%" }); //bring next word into view
    });

    ScrollTrigger.create({
      trigger: banner,
      start: "top 80%",
      onEnter: () => tl.play(),
      onLeave: () => tl.pause(),
      onEnterBack: () => tl.play(),
      onLeaveBack: () => tl.pause()
    });
  })
})