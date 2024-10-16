import Swiper, { Thumbs } from 'swiper'

const nav = document.querySelector('#nav')
const toggle_nav = document.querySelectorAll('.toggle-nav')

toggle_nav.forEach((elem) => {
	elem.addEventListener('click', () => {
		nav?.classList.toggle('max-lg:opacity-0')
		nav?.classList.toggle('max-lg:invisible')
	})
})

const swiperThumbs = new Swiper('.swiper-thumbs', {
	modules: [Thumbs],
	spaceBetween: 16,
	slidesPerView: 10,
})

new Swiper('.swiper-gallery', {
	modules: [Thumbs],
	thumbs: {
		autoScrollOffset: 1,
		swiper: swiperThumbs,
	},
})

const swiperCarousel = new Swiper('.swiper-carousel')
document.querySelector('.prev-carousel')?.addEventListener('click', () => swiperCarousel.slidePrev())
document.querySelector('.next-carousel')?.addEventListener('click', () => swiperCarousel.slideNext())

const accordion = document.querySelectorAll('.accordion-item')

accordion.forEach((elem) => {
	elem.addEventListener('click', () => {
		accordion.forEach((item) => {
			item.classList.replace('w-full', 'w-16')
			item.querySelector('img')?.classList.add('opacity-0')
			item.querySelector('.description')?.classList.add('hidden')
		})
		elem.classList.replace('w-16', 'w-full')
		elem.querySelector('img')?.classList.remove('opacity-0')
		elem.querySelector('.description')?.classList.remove('hidden')
	})
})


document.querySelectorAll('[data-effect]').forEach(elem => {
	new IntersectionObserver(entries => elem.classList.toggle('animate', entries[0].isIntersecting)).observe(elem)
})


const contact_forms = document.querySelectorAll('[data-ajax]') as NodeListOf<HTMLFormElement>
contact_forms.forEach(elem => {
	elem.addEventListener('submit', async event => {
		event.preventDefault()
		let alert = elem.querySelector('.alert')
		let button = elem.querySelector('.button')
		const button_html = button?.innerHTML ?? ''
		alert?.classList.remove('alert--success', 'alert--failure')
		if (alert) alert.innerHTML = ''
		if (button) button.innerHTML = '<em>Enviando...</em>'
		try {
			const ajax = elem.dataset.ajax
			if (ajax) {
				const response = await fetch(ajax, { method: 'POST', body: new FormData(elem) })
				const data = await response.json()
				const message = data.data
				if (data.success) {
					if (alert) alert.innerHTML = String(message)
					alert?.classList.add('alert--success')
					elem.reset()
				} else {
					throw message
				}
			}
		} catch (error) {
			if (alert) alert.innerHTML = String(error)
			alert?.classList.add('alert--failure')
		} finally {
			if (button) button.innerHTML = button_html
		}
	})
})
