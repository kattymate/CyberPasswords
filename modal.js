// gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    const OpenButton = document.getElementById('modal__button');
    const CloseButton = document.getElementById('close--button');
    const modal = document.querySelector('.modal__window');
    const backgr = document.querySelector('.back_modal');

    genPas();

    OpenButton.addEventListener('click', () => {
        let tl = gsap.timeline({ duration: .3 });

        tl.add('modal')
            .to(modal, {
                opacity: 1
            }, 'modal')
            .to(backgr, {
                opacity: .4,
                onStart: () => {
                    modal.style.display = 'block';
                    backgr.style.display = 'block';
                }
            }, 'modal');
    });

    CloseButton.addEventListener('click', () => {
        let tl = gsap.timeline({ duration: .3 });

        tl.add('modal')
            .to(modal, {
                opacity: 0
            }, 'modal')
            .to(backgr, {
                opacity: 0,
                onComplete: () => {
                    modal.style.display = 'none';
                    backgr.style.display = 'none';
                }
            }, 'modal')
    });

    backgr.addEventListener('click', () => {
        let tl = gsap.timeline({ duration: .2 });

        tl.add('modal')
            .to(modal, {
                opacity: 0
            }, 'modal')
            .to(backgr, {
                opacity: 0,
                onComplete: () => {
                    modal.style.display = 'none';
                    backgr.style.display = 'none';
                }
            }, 'modal');
    });

    let accountMan = document.querySelector('#accountMan');
    let windowExit = document.querySelector('.window');

    let bool = false;

    accountMan.addEventListener('click', () => {
        if (!bool) {
            let tl = gsap.timeline({ duration: .2 });

            tl.add('modal')
                .to(windowExit, {
                    opacity: 1,
                    onStart: () => {
                        windowExit.style.display = 'flex';
                        bool = true;
                    }
                }, 'modal');
        } else if (bool) {
            let tl = gsap.timeline({ duration: .2 });

            tl.add('modal')
                .to(windowExit, {
                    opacity: 0,
                    onComplete: () => {
                        windowExit.style.display = 'none';
                        bool = false;
                    }
                }, 'modal');
        }
    });

    Anims('.create__section--cards-card', '#modal__button', '.create__header--title', '.create__header--profile-icon');

    let tl = gsap.timeline({ duration: 0.4 });

    let boolean = false;

    document.querySelector('.arrowdown').addEventListener('click', () => {
        if (!boolean) {
            tl.clear().fromTo('.kriterii-div', { y: 10, opacity: 0 }, { y: 0, opacity: 1, stagger: 0.2, onComplete: () => { boolean = true; } });
        } else {
            tl.clear().fromTo('.kriterii-div', { y: 0, opacity: 1 }, { y: 10, opacity: 0, onComplete: () => { boolean = false; } });
        }
    });

});

function Anims(pass, butt, namePage, account) {
    let tl = gsap.timeline({ duration: 0.5 });

    tl.add('start')
        .fromTo(pass, {
            y: 20
        }, {
            y: 0,
            opacity: 1,
            stagger: .3
        }, 'start');

    tl.fromTo(butt, {
        y: 20
    }, {
        y: 0,
        opacity: 1,
    }, 'start');

    tl.fromTo(namePage, {
        x: -20
    }, {
        x: 0,
        opacity: 1,
    }, 'start');
    tl.fromTo(account, {
        x: 20
    }, {
        x: 0,
        opacity: 1,
    }, 'start');
}

function genPas() {
    document.querySelector('.gen__password').addEventListener('click', function() {
        const includeUppercase = document.getElementById('includeUppercase').checked;
        const includeLowercase = document.getElementById('includeLowercase').checked;
        const includeSpecial = document.getElementById('includeSpecial').checked;
        const includeNumbers = document.getElementById('includeNumbers').checked;
        const passwordLength = Math.random() * (15 - 6) + 6;

        const uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        const lowercase = 'abcdefghijklmnopqrstuvwxyz';
        const digits = '0123456789';
        const specialChars = '!@#$%^&*(),.?":{}<>';

        let allowedChars = '';

        if (includeUppercase) allowedChars += uppercase;
        if (includeLowercase) allowedChars += lowercase;
        if (includeNumbers) allowedChars += digits;
        if (includeSpecial) allowedChars += specialChars;

        if (!allowedChars) {
            allowedChars = uppercase + lowercase + digits + specialChars;
        }

        let password = '';
        for (let i = 0; i < passwordLength; i++) {
            const randomIndex = Math.floor(Math.random() * allowedChars.length);
            password += allowedChars[randomIndex];
        }

        document.querySelector('.password').value = password;
    });
}