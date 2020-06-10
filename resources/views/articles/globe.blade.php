<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1"/>
    <title>The globe of extremes</title>

    <link rel="stylesheet" href="https://js.arcgis.com/4.12/esri/themes/light/main.css"/>
    <link rel="stylesheet" href="/css/globe.css"/>
    <link rel="stylesheet" href="/css/style.css"/>

    <script src="https://js.arcgis.com/4.12/"></script>
    <script>
        require([
            "esri/Map",
            "esri/views/SceneView",
            "esri/layers/TileLayer",
            "esri/layers/GeoJSONLayer",
            "esri/Basemap",

            "esri/Graphic",
            "esri/geometry/Point",
            "esri/geometry/Mesh"
        ], function (Map, SceneView, TileLayer, GeoJSONLayer, Basemap, Graphic, Point, Mesh) {


            const R = 6358137; // approximate radius of the Earth in m
            const offset = 200000; // offset from the ground used for the clouds

            const basemap = new Basemap({
                baseLayers: [
                    new TileLayer({
                        url: "https://server.arcgisonline.com/ArcGIS/rest/services/World_Physical_Map/MapServer"
                    })
                ]
            });

            const map = new Map({
                basemap: basemap
            });

            const view = new SceneView({
                container: "viewDiv",
                map: map,
                alphaCompositingEnabled: true,
                qualityProfile: "high",
                camera: {
                    position: [20, 22, 25000000],
                },
                environment: {
                    background: {
                        type: "color",
                        color: [244, 244, 244, 0]
                    },
                    starsEnabled: false,
                    atmosphereEnabled: false,
                    lighting: {
                        directShadowsEnabled: false,
                    }
                },
                constraints: {
                    altitude: {
                        min: 1000000,
                        max: 25000000
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
                    color: [255, 255, 255],
                    haloOpacity: 0.5
                }
            });

            view.ui.empty("top-left");

            const cloudsSphere = Mesh.createSphere(new Point({
                x: 0, y: -90, z: -(2 * R + offset)
            }), {
                size: 2 * (R + offset),
                material: {
                    colorTexture: '/images/clouds-nasa.png',
                    doubleSided: false
                },
                densificationFactor: 4
            });

            cloudsSphere.components[0].shading = "flat";

            const clouds = new Graphic({
                geometry: cloudsSphere,
                symbol: {
                    type: "mesh-3d",
                    symbolLayers: [{ type: "fill" }]
                }
            });

            view.graphics.add(clouds);

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
                        symbolLayers: [{
                            type: "icon",
                            resource: { href: '/images/dot-circle-regular.svg' },
                            size: 25
                        },
                        ]
                    }
                },
                popupTemplate: {
                    title: "{name}",
                    content: `
            <div class="popupImage">
              <img src="{imageUrl}" alt="{imageCaption}"/>
            </div>
            <div class="popupImageCaption">{imageCaption}</div>
            <div class="popupDescription">
              <p class="info">
                <span class="esri-icon-favorites"></span> {type}
              </p>
              <p class="info">
                <span class="esri-icon-map-pin"></span> {location}
              </p>
              <p class="info">
                <span class="esri-icon-documentation"></span> {facts}
              </p>
            </div>
          `
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
