const ratio = .1
const options = {
    root: null,
    rootmargin: '0px',
    threshold: ratio 
}

const textAnimer = function (entries, observer) {
    entries.forEach(function(entry){
        if(entry.intersection > rattio) {
        } else {
        console.log(entry.intersectionRatio)
        }
    })
}

const observer = new IntersectionObsserver(textAnimer, options);
observer.observe(document.querySelector('.reveal'))