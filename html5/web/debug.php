<html>
    <head>
		<title>Multi (Debug)</title>
		<meta name="viewport" content="width=device-width">
    </head>

    <body bgcolor="#000000" class="nomargin body" style="overflow: hidden;">

        <script>
        window.SERVER_ROOT = "";
        <?php
            if( isset( $_GET['id'] ) )
            {
                echo 'var CLIENT_ID = "' . $_GET['id'] . '";';
            }
        ?>
        </script>

        <script type="text/javascript" src="js/external/gl-matrix.js"></script>
        <script type="text/javascript" src="js/external/ObjLoader.js"></script>
        <script type="text/javascript" src="js/external/jszip.js"></script>
        <script type="text/javascript" src="js/external/jszip-load.js"></script>
        <script type="text/javascript" src="js/external/md5.js"></script>

        <script type="text/javascript" src="js/engine/base/CCBaseTools.js"></script>
        <script type="text/javascript" src="js/engine/base/CCBaseTypes.js"></script>

        <script type="text/javascript" src="js/engine/ai/CCInterpolators.js"></script>
        <script type="text/javascript" src="js/engine/ai/CCMovementInterpolator.js"></script>
        <script type="text/javascript" src="js/engine/ai/CCPathFinderNetwork.js"></script>

        <script type="text/javascript" src="js/engine/tools/CCAudioManager.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCCameraBase.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCCameraAppUI.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCCameraFPS.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCAPIFacebook.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCAPIGoogle.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCAPITwitter.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCCollisionTools.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCMathTools.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCOctree.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCURLManager.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCVectors.js"></script>
        <script type="text/javascript" src="js/engine/tools/CCControls.js"></script>

        <script type="text/javascript" src="js/engine/objects/CCRenderable.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCObject.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCCollideable.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCCollideableStaticMesh.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCMoveable.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCTile3D.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCTile3DButton.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCObjectSkybox.js"></script>
        <script type="text/javascript" src="js/engine/objects/CCObjectText.js"></script>

        <script type="text/javascript" src="js/engine/rendering/CCTextureFontPageFile.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCPrimitiveBase.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCPrimitiveSquare.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCRenderer.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCModelBase.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCModel3D.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCPrimitive3D.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCPrimitiveObj.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCPrimitiveFBX.js"></script>
        <script type="text/javascript" src="js/engine/rendering/CCTextureManager.js"></script>

        <script type="text/javascript" src="js/engine/scenes/CCSceneBase.js"></script>
        <script type="text/javascript" src="js/engine/scenes/CCSceneAppUI.js"></script>

        <script type="text/javascript" src="js/engine/web/CCWebAudioManager.js"></script>
        <script type="text/javascript" src="js/engine/web/CCWebFileManager.js"></script>
        <script type="text/javascript" src="js/engine/web/CCWebURLManager.js"></script>
        <script type="text/javascript" src="js/engine/web/CCWebControls.js"></script>
        <script type="text/javascript" src="js/engine/web/CCWebTextureManager.js"></script>
        <script type="text/javascript" src="js/engine/web/CCWebGLRenderer.js"></script>
        <script type="text/javascript" src="js/engine/CCEngine.js"></script>
        <script type="text/javascript" src="js/engine/web/CCWebEngine.js"></script>


        <script type="text/javascript" src="js/app/gameobjects/CharacterControllerPlayer.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterControllerAI.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayer.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayerModel.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayerPrefab.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayerAndroid.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayerWeb.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayerBurger.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayerTank.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CharacterPlayerSoldier.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CollideableFloor.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CollideableParticle.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/CollideableWall.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/MoveableBullet.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/ObjectIndicator.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/PickupBase.js"></script>
        <script type="text/javascript" src="js/app/gameobjects/WeaponBase.js"></script>

        <script type="text/javascript" src="js/app/gamescenes/SceneManagerPlay.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneManagerGame.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneGameMap.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneGameSyndicate.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneManagerAndroids.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneManagerJoinMap.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneGameUI.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneGameBattleRoyale.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneGame1vs1.js"></script>
        <script type="text/javascript" src="js/app/gamescenes/SceneGameSideScroller.js"></script>

        <script type="text/javascript" src="js/app/gameui/SceneBackground.js"></script>
        <script type="text/javascript" src="js/app/gameui/SceneLeaderboards.js"></script>
        <script type="text/javascript" src="js/app/gameui/ScenePlayScreen.js"></script>
        <script type="text/javascript" src="js/app/gameui/ScenePlayerView.js"></script>
        <script type="text/javascript" src="js/app/gameui/SceneProfileLogin.js"></script>
        <script type="text/javascript" src="js/app/gameui/SceneItemShop.js"></script>
        <script type="text/javascript" src="js/app/gameui/SceneSplashScreen.js"></script>


        <script type="text/javascript" src="js/app/ui/TileOverlay.js"></script>
        <script type="text/javascript" src="js/app/ui/TileProfileBase.js"></script>
        <script type="text/javascript" src="js/app/ui/TileSocialProfile.js"></script>
        <script type="text/javascript" src="js/app/ui/SceneUIBack.js"></script>
        <script type="text/javascript" src="js/app/ui/SceneUIImage.js"></script>
        <script type="text/javascript" src="js/app/ui/AlertsManager.js"></script>
        <script type="text/javascript" src="js/app/ui/SceneUIAlert.js"></script>
        <script type="text/javascript" src="js/app/ui/SceneUINotification.js"></script>


        <script type="text/javascript" src="js/app/editor/SceneVisualJSEditor.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneGameEditor.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneJSMapEditor.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneAssetEditor.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneAssetEditorSettings.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneAudioEditor.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneCharacterEditor.js"></script>

        <script type="text/javascript" src="js/app/editor/SceneUIList.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIListAudio.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIListCharacters.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIListImages.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIListMapObjects.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIListModels.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIListUIObjects.js"></script>

        <script type="text/javascript" src="js/app/editor/SceneEditorUI.js"></script>

        <script type="text/javascript" src="js/app/editor/SceneMapEditorUI.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneMapEditor.js"></script>

        <script type="text/javascript" src="js/app/editor/SceneUIEditorUI.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIEditor.js"></script>

        <script type="text/javascript" src="js/app/editor/SceneManagerList.js"></script>

        <script type="text/javascript" src="js/app/editor/SceneMapsManagerList.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneMapsManager.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIManagerList.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneUIManager.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneImagesManager.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneCharactersManager.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneAudioManager.js"></script>

        <script type="text/javascript" src="js/app/editor/SceneGamesManagerList.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneGamesManagerUI.js"></script>
        <script type="text/javascript" src="js/app/editor/SceneGamesManager.js"></script>

        <script type="text/javascript" src="js/app/editor/EditorManager.js"></script>


        <script type="text/javascript" src="js/app/multi/SceneMultiUIGamesList.js"></script>
        <script type="text/javascript" src="js/app/multi/SceneMultiUIIntro.js"></script>
        <script type="text/javascript" src="js/app/multi/SceneMultiUILogin.js"></script>
        <script type="text/javascript" src="js/app/multi/SceneMultiUILauncher.js"></script>
        <script type="text/javascript" src="js/app/multi/SceneMultiManagerUI.js"></script>
        <script type="text/javascript" src="js/app/multi/SceneMultiManager.js"></script>


        <script type="text/javascript" src="js/app/DBAssets.js"></script>
        <script type="text/javascript" src="js/app/DBGames.js"></script>
        <script type="text/javascript" src="js/app/JSManager.js"></script>
        <script type="text/javascript" src="js/app/MultiplayerManager.js"></script>
        <script type="text/javascript" src="js/app/CCApp.js"></script>

        <script>
            window.onload = function()
            {
                new CCEngine();
            };
        </script>
    </body>
</html>