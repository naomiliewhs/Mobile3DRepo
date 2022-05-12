        <div id="models" class="main_contents" style="">

            <div class="row">

                <div class="col-sm-8">
                    <div class="card text-left">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">


                            <?php for ($i = 0; $i < count($data); $i++) { ?>
                                <div id="x3dModelTitle-<?php echo $i ?>" class="x3dTitle card-text drinksText" style="display:none;">
                                    <h2><?php echo $data[$i]['x3dModelTitle'] ?>
                                    </h2>
                                </div>
                            <?php } ?>

                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="canScene(); cokeDescription();">Cans</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="bottleScene(); spriteDescription();">Bottles</button>

                            <div id="can-select" class="row">
                                <li id="dropSelect-can-fanta" style='list-style-type:none'>
                                    <button class="btn active dropdown-toggle" data-toggle="dropdown" aria-expanded="false" onclick="">Fanta</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#" onclick="retexture(0,'f.apple');">Apple</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(1,'f.grape');">Grape</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(2,'f.orange');">Orange</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(3,'f.pineapple');">Pineapple</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(4,'f.strawberry');">Strawberry</a>
                                    </div>
                                </li>
                                <li id="dropSelect-can-schweppe" style='list-style-type:none'>
                                    <button class="btn active dropdown-toggle" data-toggle="dropdown" aria-expanded="false" onclick="">Schweppes</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#" onclick="retexture(5,'s.bitterlemon');">Bitter Lemon</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(6,'s.citrusmix');">Citrus Mix</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(7,'s.gingerale');">Ginger Ale</a>
                                    </div>
                                </li>
                                <li id="dropSelect-can-coke" style='list-style-type:none'>
                                    <button class="btn active dropdown-toggle" data-toggle="dropdown" aria-expanded="false" onclick="">Coke</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#" onclick="retexture(12,'coke');">Coca Cola</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(13,'dietcoke');">Diet Coke</a>
                                    </div>
                                </li>
                                <li id="dropSelect-can-pepper" style='list-style-type:none'>
                                    <button class="btn active dropdown-toggle" data-toggle="dropdown" aria-expanded="false" onclick="">Dr Pepper</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#" onclick="retexture(14,'drpepper');">Dr Pepper</a>
                                    </div>
                                </li>
                            </div>
                            <div id="bottle-select" class="row" style="display:none">
                                <li id="dropSelect-bottle-schweppe" style='list-style-type:none'>
                                    <button class="btn active dropdown-toggle" data-toggle="dropdown" aria-expanded="false" onclick="">Schweppes</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#" onclick="retexture(8,'s.bitterlemon');">Bitter Lemon</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(9,'s.citrusmix');">Citrus Mix</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(10,'s.lemon');">Lemon</a>
                                        <a class="dropdown-item" href="#" onclick="retexture(11,'s.indian');">Indian Tonic</a>
                                    </div>
                                </li>
                            </div>
                            <div class="model3D">
                                <x3d id="wire">
                                    <scene>
                                        <Switch whichChoice="0" id='SceneSwitch'>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/can.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/bottle.x3d"> </inline>
                                            </transform>
                                        </Switch>
                                    </scene>
                                </x3d>
                            </div>
                            <?php for ($i = 0; $i < count($data); $i++) { ?>
                                <div id="x3dCreationMethod-<?php echo $i ?>" class="x3dMethod card-text drinksText" style="display:none;">
                                    <p><?php echo $data[$i]['x3dCreationMethod'] ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <?php for ($i = 0; $i < count($data); $i++) { ?>
                        <div id="Description-<?php echo $i ?>" class="row x3dDesc" style="display:none;">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title drinksText">
                                            <h2><?php echo $data[$i]['modelTitle'] ?></h2>
                                        </div>
                                        <div class="card-subtitle drinksText">
                                            <h3><?php echo $data[$i]['modelSubtitle'] ?></h3>
                                        </div>
                                        <div class="card-text drinksText">
                                            <p><?php echo $data[$i]['modelDescription'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div id="interaction" class="col-sm-4 control-column">

                    <div class="column-element">
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item dropdown">
                                        <button class="btn nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false" onclick="cameraOptions();">Cameras</button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                            <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                            <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                            <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                            <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                            <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <button class="btn nav-link active" href="#" onclick="animationOptions();">Animation</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="btn nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false" onclick="renderOptions();">Render</button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(10px, 95px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="#" onclick="poly();">Polygon</a>
                                            <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                                            <a class="dropdown-item" href="#" onclick="points();">Vertex</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">Lights</a>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                            <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                            <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body" id="cameraOps">
                                <div class="card-Title x3dCamera_Subtitle drinksText">
                                    <h3>Camera Views</h3>
                                </div>
                                <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                                <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                                <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                                <div class="card-text x3dCameraDescription drinksText">
                                    <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera
                                        views</p>
                                </div>
                            </div>
                            <div class="card-body" id="animationOps" style="display:none">
                                <div class="card-Title x3dAnimationSubtitle drinksText">
                                    <h3>Animation Options</h3>
                                </div>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spinX();">RotX</a>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spinY();">RotY</a>
                                <a href="#" class="btn btn-outline-light btn-responsive" onclick="spinZ();">RotZ</a>
                                <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                <div class="card-text x3dAnimationDescription drinksText">
                                    <p>These buttons select a range of X3D animation options</p>
                                </div>
                            </div>
                            <div class="card-body" id="renderOps" style="display:none">
                                <div class="card-Title x3dRendersubtitle drinksText">
                                    <h3>Render and Lighting Options</h3>
                                </div>
                                <a href="#" class="btn btn-success btn-responsive" onclick="poly();">Poly</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                                <a href="#" class="btn btn-secondary btn-responsive" onclick="points();">Points</a>
                                <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                                <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                                <div class="card-text x3dRenderDescription drinksText">
                                    <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card column-element">
                        <div class="card text-left">
                            <div class="card-header gallery-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active">Gallery</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-title title_gallery drinksText">
                                    <h2>3D Images</h2>
                                    <h2></h2>
                                </div>
                                <div class="gallery" id="gallery">
                                    <?php for ($i = 0; $i < count($data); $i++) { ?>
                                        <a href='<?php echo "../application/assets/images/gallery_images/pngs/".$i."_transparent.png"?>' data-fancybox data-caption="Gallery Image"> 
                                            <img class="card-img-top img-thumbnail" src='<?php echo "../application/assets/images/gallery_images/pngs/".$i."_transparent.png"?>'/>
                                        </a>
                                    <?php } ?>
                                        
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
            <script src="../application/js/modelInteractions.js"></script>
            <!-- END IMPORTED BLOCK -->