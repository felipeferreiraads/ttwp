$.getScript('https://maps.google.com/maps/api/js?key=AIzaSyAWWlEtv-ApTzfB9oNiPaKnjcT6993tGIQ&libraries=places')
    .done(function () {
        var data = { lat: -25.460099, lng: -49.253493 }
        var maps = new google.maps.Map(document.getElementById('js-map'), {
            zoom: 15,
            center: data,
            styles: [
                { elementType: 'geometry', stylers: [{ color: '#9a01b1' }] },
                { elementType: 'labels.text.stroke', stylers: [{ color: '#000' }] },
                { elementType: 'labels.text.fill', stylers: [{ color: '#3b0044' }] },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{ color: '#c401e1' }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{ color: '#7e0191' }]
                },
            ]
        })

        var service = new google.maps.places.PlacesService(maps)
        var iconBase = 'https://felipeferreiraads.github.io/tribaltech/assets/img/'

        service.getDetails({ placeId: 'ChIJc77rH-bk3JQRVWnGYceSIRU' }, function (place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                var marker = new google.maps.Marker({
                    map: maps,
                    position: place.geometry.location,
                    icon: iconBase + 'marker.png'
                })
            }
        })
    })
    .fail(function () {
        console.log('Ocorreu algum erro ao carregar o script!')
    })