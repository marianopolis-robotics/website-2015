// set the scene size
var WIDTH = $('.earth').width(),
    HEIGHT = $('.earth').height();

// set some camera attributes
var VIEW_ANGLE = 15,
    ASPECT = WIDTH / HEIGHT,
    NEAR = 0.1,
    FAR = 10000;

// get the DOM element to attach to
// - assume we've got jQuery to hand
var $container = $('.earth');

// create a WebGL renderer, camera
// and a scene
var renderer = new THREE.WebGLRenderer();
var camera = new THREE.PerspectiveCamera(
                   VIEW_ANGLE,
                   ASPECT,
                   NEAR,
                   FAR );

var scene = new THREE.Scene();

// the camera starts at 0,0,0 so pull it back
camera.position.z = 300;

// start the renderer
renderer.setSize(WIDTH, HEIGHT);
renderer.setClearColorHex(0xeeeeee, 0.1);

// attach the render-supplied DOM element
$container.append(renderer.domElement);


// set up the sphere vars
var radius = 50, segments = 16, rings = 16;

// create the sphere's material
var sphereMaterial = new THREE.MeshLambertMaterial(
{
  // a gorgeous red.
  color: 0xCC0000
});

// create a new mesh with sphere geometry -
// we will cover the sphereMaterial next!
var sphere = new THREE.Mesh(
   new THREE.SphereGeometry(radius,
   segments,
   rings),

   sphereMaterial);

// add the sphere to the scene
scene.add(sphere);


// create a point light
var pointLight = new THREE.PointLight( 0xFFFFFF );

// set its position
pointLight.position.x = 10;
pointLight.position.y = 50;
pointLight.position.z = 130;

// add to the scene
scene.add(pointLight);

// Using wireframe materials to illustrate shape details.
var darkMaterial = new THREE.MeshBasicMaterial( { color: 0xffffcc } );
var wireframeMaterial = new THREE.MeshBasicMaterial( { color: 0x000000, wireframe: true, transparent: true } );
var multiMaterial = [ darkMaterial, wireframeMaterial ];

renderer.render(scene, camera);


