//adapted from example code 'benskitchen.com'
function refreshX3D(){

	const sHtml = "<script type='text/javascript' src='application/js/x3dom-1.7.2/x3dom.js'></script>";
	const frag = document.createRange().createContextualFragment(sHtml)
	document.body.appendChild( frag );
}
function canScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	document.getElementById('bottle-select').setAttribute('style','display:none');
	document.getElementById('can-select').setAttribute('style','');
	retexture(0, 'f.apple');
}

function bottleScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
	document.getElementById('bottle-select').setAttribute('style','');
	document.getElementById('can-select').setAttribute('style','display:none');
	retexture(8, 's.bitterlemon')
}

function retexture(ind, tgt){
	var elems = document.getElementsByClassName('x3dTitle');
	for (var i = 0, len = elems.length; i < len; i++){
		elems[i].setAttribute('style','display:none');
	}
	var elems = document.getElementsByClassName('x3dMethod');
	for (var i = 0, len = elems.length; i < len; i++){
		elems[i].setAttribute('style','display:none');
	}
	var elems = document.getElementsByClassName('x3dDesc');
	for (var i = 0, len = elems.length; i < len; i++){
		elems[i].setAttribute('style','display:none');
	}
	document.getElementById(`x3dModelTitle-${ind}`).setAttribute('style','');
	document.getElementById(`x3dCreationMethod-${ind}`).setAttribute('style','');
	document.getElementById(`Description-${ind}`).setAttribute('style','');
	if (ind > 7 && ind < 12){
		document.getElementById('model__BOTTLE_TEX').setAttribute('url', `"maps/bottles/${tgt}_texture.png"`);
	}else{
		document.getElementById('model__CAN_TEX').setAttribute('url', `"maps/cans/${tgt}_texture.png"`);
		
	}
}


var spinningX = false;
var spinningY = false;
var spinningZ = false;

function spinX()
{
	select = document.getElementById('SceneSwitch').getAttribute('whichChoice');
	stopRotation();
	spinningX = !spinningX;
	document.getElementById(`model__RotationTimerX-${select}`).setAttribute('enabled', spinningX.toString());
}

function spinY()
{
	select = document.getElementById('SceneSwitch').getAttribute('whichChoice');
	stopRotation();
	spinningY = !spinningY;
	document.getElementById(`model__RotationTimerY-${select}`).setAttribute('enabled', spinningY.toString());
}

function spinZ()
{
	select = document.getElementById('SceneSwitch').getAttribute('whichChoice');
	stopRotation();
	spinningZ = !spinningZ;
	document.getElementById(`model__RotationTimerZ-${select}`).setAttribute('enabled', spinningZ.toString());
}

function stopRotation()
{
	select = document.getElementById('SceneSwitch').getAttribute('whichChoice');
	spinningX= false;
	spinningY= false;
	spinningZ= false;
	document.getElementById(`model__RotationTimerX-${select}`).setAttribute('enabled', spinningX.toString());
	document.getElementById(`model__RotationTimerY-${select}`).setAttribute('enabled', spinningY.toString());
	document.getElementById(`model__RotationTimerZ-${select}`).setAttribute('enabled', spinningZ.toString());
}

function animateModel()
{
	select = document.getElementById('SceneSwitch').getAttribute('whichChoice');
    if(document.getElementById(`model__RotationTimerX-${select}`).getAttribute('enabled')!= 'true')
        document.getElementById(`model__RotationTimerX-${select}`).setAttribute('enabled', 'true');
    else
        document.getElementById(`model__RotationTimerX-${select}`).setAttribute('enabled', 'false');
	
	if(document.getElementById(`model__RotationTimerY-${select}`).getAttribute('enabled')!= 'true')
        document.getElementById(`model__RotationTimerY-${select}`).setAttribute('enabled', 'true');
    else
        document.getElementById(`model__RotationTimerY-${select}`).setAttribute('enabled', 'false');
	
	if(document.getElementById(`model__RotationTimerZ-${select}`).getAttribute('enabled')!= 'true')
        document.getElementById(`model__RotationTimerZ-${select}`).setAttribute('enabled', 'true');
    else
        document.getElementById(`model__RotationTimerZ-${select}`).setAttribute('enabled', 'false');
}

var currentWFrame = 0;
function wireFrame()
{
	// tgt 2
	var e = document.getElementById(`wire`);
	var diff = 2 - currentWFrame
	for (let i = 0; i < diff; i++) {
		e.runtime.togglePoints(true);
	}
	currentWFrame = 2;
}

function poly(){
	// tgt 0
	var e = document.getElementById(`wire`);
	var diff = (3 - currentWFrame) % 3
	for (let i = 0; i < diff; i++) {
		e.runtime.togglePoints(true);
	}
	currentWFrame = 0;
}

function points(){
	// tgt 1 0=>1 1=>0 2=>2
	var e = document.getElementById(`wire`);
	var diff = currentWFrame == 0 ? 1 : currentWFrame == 1 ? 0 : 2
	for (let i = 0; i < diff; i++) {
		e.runtime.togglePoints(true);
	}
	currentWFrame = 1;
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById(`model__headlight`).setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	for (let i = 1; i < 7; i++) {
		document.getElementById(`model__Omni00${i}`).setAttribute('on', lightOn.toString());
	}
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById(`model__CameraFront`).setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById(`model__CameraBack`).setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById(`model__CameraLeft`).setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById(`model__CameraRight`).setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById(`model__CameraTop`).setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById(`model__CameraBottom`).setAttribute('bind', 'true');
}