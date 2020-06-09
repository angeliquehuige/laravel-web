<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1"/>
    <title>The globe of extremes</title>

    <link rel="stylesheet" href="https://js.arcgis.com/4.12/esri/themes/light/main.css"/>
    <link rel="stylesheet" href="/css/globe.css"/>

    <script src="https://js.arcgis.com/4.12/"></script>
    <script>
        require([
            "esri/Map",
            "esri/views/SceneView",
            "esri/layers/TileLayer",
            "esri/layers/GeoJSONLayer",
            "esri/Basemap",
            "esri/geometry/Mesh"
        ], function (Map, SceneView, TileLayer, GeoJSONLayer, Basemap, Mesh) {

            const basemap = new Basemap({
                baseLayers: [
                    new TileLayer({
                        url: "https://tiles.arcgis.com/tiles/nGt4QxSblgDfeJn9/arcgis/rest/services/terrain_with_heavy_bathymetry/MapServer"
                    })
                ]
            });

            const map = new Map({
                basemap: "national-geographic"
            });

            const view = new SceneView({
                container: "viewDiv",
                map: map,
                alphaCompositingEnabled: true,
                qualityProfile: "high",
                camera: {
                    position: [20.895168, 22.370216, 28000000],
                },
                environment: {
                    background: {
                        type: "color",
                        color: [255, 252, 244, 0]
                    },
                    starsEnabled: false,
                    atmosphereEnabled: false,
                    lighting: {
                        directShadowsEnabled: false,
                    },
                },
                constraints: {
                    altitude: {
                        min: 10000000,
                        max: 28000000
                    }
                },
                popup: {
                    dockEnabled: true,
                    dockOptions: {
                        position: "top-right",
                        breakpoint: false,
                        buttonEnabled: false
                    },
                    collapseEnabled: false
                },
                highlightOptions: {
                    color: '#a8dafc',
                    haloOpacity: 0.5
                }
            });

            view.ui.empty("top-left");

            const extremesLayer = new GeoJSONLayer({
                url: "/GeoJSON/visits.geojson",
                elevationInfo: {
                    mode: "absolute-height",
                    offset: offset
                },
                renderer: {
                    type: "simple",
                    symbol: {
                        type: "point-3d",
                        symbolLayers: [
                            {
                                // autocasts as new IconSymbol3DLayer()
                                type: "icon",
                                resource: {
                                    href: '/images/map-marker-alt-solid.svg'
                                },
                                size: 50,
                            }
                        ],
                    },
                },
                popupTemplate: {
                    title: "{country}",
                    content:
                        `<div class="popupImage">
              <img src="{imageUrl}"/>
            </div>
            <div class="popupDescription">
              <p class="info">
                <span class="esri-icon-map-pin"></span><span> {location}</span>
              </p>
              <p class="info">
                <span class="esri-icon-chat"></span><span> {language}</span>
              </p>
              <p class="info">
                <span class="esri-icon-group"></span> {population}
              </p>
              <p class="info">
                <span class="esri-icon-collection"></span> {facts}
              </p>
               <div class="text-center">
                <a class="link-unstyled btn btn-outline-light putUrlHere" href="">
                    Take me there!
                </a>
               </div>
            </div>`
                }
            });
            map.layers.add(extremesLayer);
        });
    </script>
</head>

<body>
<div id="viewDiv"></div>
</body>

</html>
