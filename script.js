gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    ShareComments();

    ScrollHeader('.header', '.namePage', '.auth');
    AnimSect1('#sect1', '#sect1_img', '.SectionOne');
    AnimSect2('#namePage', '.sect2_mini', '.sect2');
    AnimSect3('#sec3Page', '#miniPage', '#text3', '#miniPageNechet', '#text3Nechet', '.SectionThree');
    AnimSect4('.nameSect', '.card', '.secureSect');
    AnimHeader('#headerPage', '.buttHead', '.header');
    AnimFooter('.textF', 'li', '.imgs', '.formF', '.FeedBack');
});

function AnimFooter(name, li, img, communication, section) {
    let tl = gsap.timeline({ duration: .5 });

    tl.add('start')
        .fromTo(name, {
            x: -20
        }, {
            x: 0,
            opacity: 1,
            stagger: .3
        }, 'start')
        .fromTo(li, {
            x: -20
        }, {
            x: 0,
            opacity: 1,
            stagger: .3,
            delay: .7
        }, 'start')
        .fromTo(img, {
            x: -20
        }, {
            x: 0,
            opacity: 1,
            stagger: .3,
            delay: .7
        }, 'start')
        .fromTo(communication, {
            x: 20
        }, {
            x: 0,
            opacity: 1,
            stagger: .2,
        }, 'start');

    ScrollTrigger.create({
        trigger: section,
        start: '10% 90%',
        end: 'bottom 90%',
        marker: true,
        animation: tl
    });
}

function AnimHeader(namePage, buttons, section) {
    let tl = gsap.timeline({ duration: .5 });

    tl.add('start')
        .fromTo(namePage, {
            y: 20
        }, {
            y: 0,
            opacity: 1
        }, 'start')
        .fromTo(buttons, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .3
        }, 'start');

    ScrollTrigger.create({
        trigger: section,
        start: '10% 90%',
        end: 'bottom 90%',
        animation: tl
    });
}

function AnimSect4(nameSect, cards, section) {
    let tl = gsap.timeline({ duration: .5 });

    tl.add('start')
        .fromTo(nameSect, {
            y: 20
        }, {
            y: 0,
            opacity: 1
        }, 'start')
        .fromTo(cards, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .3
        });

    ScrollTrigger.create({
        trigger: section,
        start: '10% 90%',
        end: 'bottom 90%',
        animation: tl
    });
}

function AnimSect3(namePage, miniPage, text, minipageNechet, textNechet, section) {
    let tl = gsap.timeline({ duration: .5 });

    tl.add('start').add('text')
        .fromTo(namePage, {
            y: 20
        }, {
            opacity: 1,
            y: 0,
            stagger: .4
        }, 'start')
        .fromTo(minipageNechet, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .5,
            delay: .2
        }, 'text')
        .fromTo(miniPage, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .5,
            delay: .4
        }, 'text')
        .fromTo(textNechet, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .5,
            delay: .3
        }, 'text')
        .fromTo(text, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .5,
            delay: .7
        }, 'text');

    ScrollTrigger.create({
        trigger: section,
        start: '20% 90%',
        end: 'bottom 90%',
        animation: tl
    });
}

function AnimSect2(namePage, divs, section) {
    let tl = gsap.timeline({ duration: .4 });

    tl.add('start')
        .fromTo(namePage, {
            y: 20
        }, {
            opacity: 1,
            y: 0,
            stagger: .3
        }, 'start')
        .fromTo(divs, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .3
        });
    ScrollTrigger.create({
        trigger: section,
        start: 'top 90%',
        end: 'bottom 90%',
        animation: tl
    });
}

function AnimSect1(elements1, imgSect, section) {
    let tl = gsap.timeline({ duration: .4 });

    tl.add('start').fromTo(elements1, {
        x: -20
    }, {
        x: 0,
        opacity: 1,
        stagger: .4
    }, 'start').fromTo(imgSect, {
        x: 20
    }, {
        x: 0,
        opacity: 1,
        stagger: .4
    }, 'start');

    ScrollTrigger.create({
        trigger: section,
        start: 'top 90%',
        end: 'bottom 90%',
        animation: tl
    });
}

function ScrollHeader(idHeader, idSpan, idButton) {
    let tl = gsap.timeline({ duration: .5 });
    tl.add('start')
        .to(idHeader, {
            backgroundColor: "rgb(245, 245, 245)",
        }, 'start')
        .to(idSpan, {
            color: "rgb(0, 62, 58)",
        }, 'start')
        .to(idButton, {
            color: "rgb(0, 62, 58)",
            border: "rgb(0, 62, 58) 4px solid",
        }, 'start');

    ScrollTrigger.create({
        trigger: idHeader,
        start: 'top top',
        end: "bottom 10%",
        animation: tl,
        onEnterBack: () => {
            gsap.to(idHeader, {
                backgroundColor: "rgb(0, 62, 58)",
            });
            gsap.to(idSpan, {
                color: "rgb(245, 245, 245)",
            });
            gsap.to(idButton, {
                color: "rgb(245, 245, 245)",
                border: "rgb(245, 245, 245) 4px solid",
            });
        },
        onLeave: () => {
            gsap.to(idHeader, {
                backgroundColor: "rgb(245, 245, 245)",
            });
            gsap.to(idSpan, {
                color: "rgb(0, 62, 58)",
            });
            gsap.to(idButton, {
                color: "rgb(0, 62, 58)",
                border: "rgb(0, 62, 58) 4px solid",
            });
        }
    });
}

function ShareComments() {
    const form = document.getElementById('form');
    const result = document.getElementById('result');

    form.addEventListener('submit', function(e) {
        const formData = new FormData(form);
        e.preventDefault();

        const object = Object.fromEntries(formData);
        const json = JSON.stringify(object);

        result.innerHTML = "Please wait..."

        fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            })
            .then(async(response) => {
                let json = await response.json();
                if (response.status == 200) {
                    result.innerHTML = json.message;
                } else {
                    console.log(response);
                    result.innerHTML = json.message;
                }
            })
            .catch(error => {
                console.log(error);
                result.innerHTML = "Something went wrong!";
            })
            .then(function() {
                form.reset();
                setTimeout(() => {
                    result.style.display = "none";
                }, 3000);
            });
    });
}