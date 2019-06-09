if (window.location.href.indexOf("project") == -1) {
const body = document.querySelector('body')
const items = document.querySelectorAll('.projects')

for (let i = 0; i < items.length; i++) {
    const item = items[i]
    let circle = 360/items.length
    let act = circle*i
    item.style.transform = `rotate(${act}deg)`
}

const resize = () => {
    let tall = items[0].offsetHeight * (items.length)
    let size = body.offsetHeight + tall
    body.style.height = size+'px'
    
}
resize()
document.addEventListener('resize', resize)

const scroll = () => {
    const tall = items[0].offsetHeight * (items.length)
    const ref = document.querySelector('.presentation').offsetHeight
    const scrollY = window.scrollY
    const degree = 360/items.length
    let newScroll = scrollY - ref
    let speed = Math.round((newScroll/tall)*360)
    if (newScroll >= 0) {
        for (let i = 0; i < items.length; i++) {
            let position = (degree*i)-speed
            items[i].style.top = `${newScroll}px`
            if (-5 < position && position < 5) {
               position = 0
            }
            items[i].style.transform = `rotate(${position}deg)`
            items[i].style.top = `${0}px`
        }
    }
    else {
        for (let i = 0; i < items.length; i++) {
            items[i].style.top = `${ref - scrollY}px`
        }
        items[0].style.transform = `rotate(0deg)`
    }
    if ((degree*[items.length-1])-speed < 0) {
        items[items.length-1].style.transform = `rotate(0deg)`
    }
}
scroll()
document.addEventListener('scroll', scroll)
document.addEventListener('resize', scroll)

}