let imgHasAnimated = false;  
let pHasAnimated = false;

function isInViewport(element) {
    if (!element) return false;
    const rect = element.getBoundingClientRect();
    return (
        rect.top < window.innerHeight && rect.bottom > 0
    );
}
function enterImg() {
    const img = document.getElementById('pcAsus');

    if (isInViewport(img) && !imgHasAnimated) {
        img.style.animation = 'enterLeft 2s ease-out forwards';
        imgHasAnimated = true; 
    }
}
window.addEventListener('scroll', enterImg);

function enterP(){
    const p = document.getElementsByClassName('redecouverte')[0];

    if (isInViewport(p) && !pHasAnimated) {
        p.style.animation = 'enterRight 2s ease-out forwards';
        pHasAnimated = true; 
    }
}
window.addEventListener('scroll', enterP);

document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(Flip);
    const containers = document.querySelectorAll('.containerAll');

    containers.forEach(container => {
        const img17 = container.querySelector('.img17');
        const img18 = container.querySelector('.img18');
        const img19 = container.querySelector('.img19');
        const img20 = container.querySelector('.img20');
        const img20b = container.querySelector('.img20b');

        if (img17 && img18 && img19 && img20 && img20b) {
            let hasFlipped4 = false;
        
            function handleMouseOverGroup4() {
                img18.style.opacity = "1";
                if (!hasFlipped4) {
                    let tl = gsap.timeline({ defaults: { duration: 1.3, ease: "power2.inOut" } });

        tl.to(img20, { x: -50 }) // img20 va à gauche
        .to(img20b, { x: 50 }, "-=1.2") // img21 va à droite (léger chevauchement)
        .to(img20, { y: -60 }) // img20 monte
        .to(img20b, { y: 70 }, "-=1.2") // img21 descend
        .to(img20, { x: 5 }) // img20 retourne vers la droite
        .to(img20b, { x: -10 }, "-=1.2"); // img21 va légèrement à gauche
    
                }
            }
            function handleMouseOutGroup4() {
                img18.style.opacity = "0";
                if (!hasFlipped4) {
                    gsap.to(img20, { x: 0, duration: 1 });
                    gsap.to(img20b, { x: 3, duration: 1 });
                    hasFlipped4 = true;
                }
            }
            img17.addEventListener("mouseover", handleMouseOverGroup4);
            img17.addEventListener("mouseout", handleMouseOutGroup4);
        }
    })});
    