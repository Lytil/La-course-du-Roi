const ratio = .1
const options = {
    root: null,
    rootmargin: '0px',
    threshold: ratio 
}

const textAnimer = function () {
    console.log('textAnimer')
}

const observer = new IntersectionObsserver(textAnimer, options);