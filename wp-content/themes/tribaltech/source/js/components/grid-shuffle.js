import Shuffle from 'shufflejs'

class GridShuffle {
    constructor(element) {
        this.element = element
        this.activeFilters = []
        this.shuffle = new Shuffle(element, {
            itemSelector: '.artist',
            sizer: '.sizer',
        })

        this.addEventListeners()
    }

    addEventListeners() {
        var filter = document.getElementsByClassName('filter-category')
        filter = Array.from(filter)
        filter.forEach(function (checkbox) {
            checkbox.addEventListener('click', this.handleFilterChange.bind(this), false)
        }, this)

        var filterMobile = document.getElementById('filter-mobile')
        filterMobile.addEventListener('change', this.handleFilterChange.bind(this), false)
    }

    handleFilterChange(event) {
        var btn = event.currentTarget
        var btnGroup = btn.getAttribute('data-group') ? btn.getAttribute('data-group') : btn.value
        this.activeFilters = []
        this.activeFilters.push(btnGroup)
        this.removeActiveFilter()
        btn.classList.add('active')
        this.shuffle.filter(this.activeFilters)
    }

    removeActiveFilter() {
        var filters = document.getElementsByClassName('filter-category')
        filters = Array.from(filters)
        filters.forEach(function (filter) {
            filter.classList.remove('active')
        }, this)
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var element = document.getElementById('grid-artists')
    if(element) {
        window.grid_shuffle = new GridShuffle(element)
    }
})