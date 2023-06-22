<template>
    <section id="outer" class="section outer">
        <!--        <div class="outer__scheme" id="map"></div>-->
        <GmapMap class="outer__scheme" :center="mapCenter" zoom="15" :options="options" ref="map_component"
                 style="height: 600px;width: 100%" :zoom="15">
            <!--                        <GmapCircle :center="objectCenter"-->
            <!--                                    :options="circleOption"/>-->
            <!--            <GmapMarker/>-->
            <GmapCircle :options="circle1"></GmapCircle>
            <GmapCircle :options="circle2"></GmapCircle>
        </GmapMap>
        <div class="container outer__main">
            <h2 data-string="outer_title" class="title outer__title" data-animate="reveal">{{ $t('block6_1') }}</h2>
            <p data-string="outer_text" class="outer__description" data-animate="reveal">{{ $t('block6_2') }}</p>
        </div>

    </section>
</template>

<script>

export default {
    name: "Block6",
    data() {
        return {
            mapCenter: {lat: 43.2766133, lng: 76.8136264},
            circle1: {
                center: {lat: 43.27723592842318, lng: 76.81586293380391},
                strokeColor: "#C74C31",
                strokeOpacity: 1,
                strokeWeight: 2,
                fillColor: "#C74C31",
                fillOpacity: 0.5,
                radius: 50,

                title: 'Arena Sunset'
            },
            circle2: {
                center: {lat: 43.273753, lng: 76.814938},
                strokeColor: "#C74C31",
                strokeOpacity: 1,
                strokeWeight: 2,
                fillColor: "#C74C31",
                fillOpacity: 0.5,
                radius: 25,

                title: 'Arena Park'
            },
            options: {
                // zoom: 15,
                // center: {lat: 43.2766133, lng: 76.8136264},
                disableDefaultUI: true,
                styles: [
                    {
                        "featureType": "all",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "color": "#291f13"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#ccb49a"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "color": "#c74c31"
                            },
                            {
                                "weight": "0.92"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "color": "#6d5e4f"
                            },
                            {
                                "weight": ".88"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#332d27"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "off"
                            },
                            {
                                "color": "#ccb49a"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "saturation": "-100"
                            },
                            {
                                "gamma": "0.94"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "color": "#dcc4ab"
                            }
                        ]
                    }
                ]
            }
        };
    },
    // created() {
    //     const comp = this.$refs.map_component;
    //
    //     comp.classList.add('my-class');
    //
    //
    // }
};
</script>

<style>

/*.outer .vue-map {*/
/*    width: 100%;*/
/*    height: 100%;*/
/*}*/
</style>
