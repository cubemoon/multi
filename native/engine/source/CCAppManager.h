/*-----------------------------------------------------------
 * http://softwareispoetry.com
 *-----------------------------------------------------------
 * This software is distributed under the Apache 2.0 license.
 *-----------------------------------------------------------
 * File Name   : CCAppManager.h
 * Description : Interface between the different app specific views and features.
 *
 * Created     : 30/08/11
 * Author(s)   : Ashraf Samy Hegab
 *-----------------------------------------------------------
 */

#ifndef __CCAPPMANAGER_H__
#define __CCAPPMANAGER_H__


#ifdef IOS
    #ifdef __OBJC__
        #include "CCGLView.h"
        #include "CCVideoView.h"
        #import "CCViewController.h"
        #import "CCARView.h"
        #import "CCWebView.h"
        #import "CCWebJS.h"
    #else
        #define CCGLView void
        #define CCVideoView void
        #define CCViewController void
        #define UIWindow void
        #define CCARView void
        #define CCWebView void
        #define CCWebJS void
    #endif
#else
    #include "CCGLView.h"
    #include "CCWebView.h"
    #include "CCWebJS.h"
    #ifdef QT
        #include "CCVideoView.h"
    #endif
#endif

class CCAppManager
{
    static CCAppManager *_THIS;

    // Views
    CCGLView *glView;
    CCWebView *webView;
    CCWebJS *webJS;

#if defined IOS || defined QT
    CCVideoView *videoView;
#endif

#ifdef IOS
    CCARView *arView;
public:
	static CCViewController *ViewController;
protected:
    UIWindow *window;
#endif

    static CCTarget<float> Orientation;
    enum OrientationStateEnum
    {
        Orientation_Set,
        Orientation_Updating,
        Orientation_Setting
    };
    static OrientationStateEnum OrientationState;

    bool opaqueOpenGLRendering;

    int webJSJavaScriptCalls;
    static float WebJSJavaScriptUpdateTime;

public:
    // Called when our web page is loaded/updated
    static CCList<CCTextCallback> WebViewLoadedCallbacks;

    static CCList<CCTextCallback> WebJSLoadedCallbacks;
    static CCList<CCTextCallback> WebJSJavaScriptCallbacks;

    // Called when keyboard input occurs
    static CCList<CCTextCallback> KeyboardUpdateCallbacks;
    static CCList<CCTextCallback> KeyboardReturnCallbacks;



public:
	CCAppManager();
    ~CCAppManager();

    static bool Startup();
protected:
	void startup();

public:
    static void Shutdown();
protected:
    void shutdown();

public:
    static void Pause();
    static void Resume();

    static void LaunchWindow();

    inline static bool IsPortrait() { return Orientation.target == 0.0f || Orientation.target == 180.0f; }
    static void SetIfNewOrientation(const float targetOrientation);
    static void SetOrientation(const float targetOrientation, const bool interpolate=true);
    static void ProjectOrientation(float &x, float &y);
    static void UpdateOrientation(const float delta);
    inline static const CCTarget<float>& GetOrientation() { return Orientation; }

    static void InAppPurchase(const char *code, const bool consumable, CCLambdaCallback *callback);
    static void InAppPurchaseSuccessful();

public:     static void ToggleAdverts(const bool toggle);
protected:  void toggleAdvertsNativeThread(const bool toggle);
public:     static float AdvertHeight();

public:     void startVideoView(const char *file);
protected:  void startVideoViewNativeThread(const char *file);
public:     void stopVideoView();
protected:  void stopVideoViewNativeThread();

public:     void startARView();
protected:  void startARViewNativeThread();
public:     void stopARView();
protected:  void stopARViewNativeThread();

public:     static void WebBrowserOpen(const char *url);

public:     static void WebViewOpen(const char *url, const bool nativeThread=false);
protected:  void webViewOpenNativeThread(const char *url);

public:     static void WebViewLoadedNativeThread(const char *url, const char *data);
protected:  void webViewLoaded(const char *url, const char *data);

public:     static void WebViewClose(const bool nativeThread=false);
protected:  void webViewCloseNativeThread();

public:     static bool WebViewIsLoaded();

public:     static void WebViewClearData();

public:     static void WebJSOpen(const char *url, const bool isFile=false, const char *htmlData=NULL, bool nativeThread=false);
protected:  void webJSOpenNativeThread(const char *url, const bool isFile, const char *htmlData);
public:     static void WebJSLoadedNativeThread(const char *url, const char *data);

public:     static void WebJSClose(bool nativeThread=false);
protected:  void webJSCloseNativeThread();

public:     static bool WebJSIsLoaded();

public:     static void WebJSRunJavaScript(const char *script, const bool returnResult, bool nativeThread);
protected:  void webJSRunJavaScriptNativeThread(const char *script, const bool returnResult);

public:     static void WebJSJavaScriptResultNativeThread(const char *data, const bool returnResult);
public:     static bool WebJSIsJavaScriptRunning();
            static void WebJSSetJavaScriptUpdateTime(const float time);
            static float WebJSGetJavaScriptUpdateTime();

public:     static void KeyboardToggle(const bool show);
protected:  void keyboardToggleNativeThread(const bool show);

protected:
    void toggleBackgroundRender(const bool toggle);
};


#endif // __CCAPPMANAGER_H__

