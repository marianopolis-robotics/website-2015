// set the scene size
var WIDTH = $('.mesh').width(),
    HEIGHT = $('.mesh').height();

// set some camera attributes
var VIEW_ANGLE = 15,
    ASPECT = WIDTH / HEIGHT,
    NEAR = 0.1,
    FAR = 10000;

// get the DOM element to attach to
// - assume we've got jQuery to hand
var $container = $('.mesh');

// create a WebGL renderer, camera
// and a scene
var renderer = new THREE.WebGLRenderer({alpha: true});
/*
var camera = new THREE.PerspectiveCamera(
                   VIEW_ANGLE,
                   ASPECT,
                   NEAR,
                   FAR );
                   */
camera = new THREE.OrthographicCamera(
    -WIDTH/2, WIDTH/2,
    HEIGHT/2, -HEIGHT/2, 1, 1000);

var scene = new THREE.Scene();

// the camera starts at 0,0,0 so pull it back
camera.position.z = 300.0;

/*
camera.position.y = 100.0;
camera.rotation.set(-Math.atan(100/300), 0, 0);
*/

// start the renderer
renderer.setSize(WIDTH, HEIGHT);
//renderer.setClearColor(0x081531, 0.0);

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
//scene.add(sphere);


// create a point light
var pointLight = new THREE.PointLight( 0xFFFFFF );

// set its position
pointLight.position.x = 10;
pointLight.position.y = 50;
pointLight.position.z = 130;

// add to the scene
//scene.add(pointLight);




////////////
// CUSTOM //
////////////

// Using wireframe materials to illustrate shape details.
var darkMaterial = new THREE.MeshBasicMaterial( { color: 0xffffcc } );
var wireframeMaterial = new THREE.MeshBasicMaterial( { color: 0x000000, wireframe: true, transparent: true } );
var multiMaterial = [ darkMaterial, wireframeMaterial ];


var texture = new THREE.Texture();
var manager = new THREE.LoadingManager();
var loader = new THREE.OBJLoader(manager);
loader.load('../data/ship.obj', function(object){
  object.traverse(function(child){
    if ( child instanceof THREE.Mesh ) {
      //child.material.map = texture;
      //child.material.color.setHex(0xff0000);
      //child.material = new THREE.MeshBasicMaterial( { color: 0xff0000, wireframe: true, transparent: true } );
      child.material = new THREE.MeshBasicMaterial( { color: 0x34DDDD, wireframe: true, transparent: true } );

    }
  });
  object.position.x = 0;
  object.scale.set(3,3,3);

  scene.add( object );

  animation(object);
});

function animation(object){
  object.rotation.y += Math.PI * 0.01;
  renderer.render(scene, camera);
  requestAnimationFrame(function(){
    animation(object);
  });
}


// draw!


