import React from "react";
import ReactDOM from "react-dom/client";
import { Unity, useUnityContext } from "react-unity-webgl";

const UnityGame = () => {
    const { unityProvider } = useUnityContext({
        loaderUrl: "./unity/Build/unity.loader.js",
        dataUrl: "./unity/Build/unity.data",
        frameworkUrl: "./unity/Build/unity.framework.js",
        codeUrl: "./unity/Build/unity.wasm",
    });

    return (
        <div>
            <Unity
                unityProvider={unityProvider}
                style={{ width: 800, height: 600 }}
            />
        </div>
    );
};

export default UnityGame;

if (document.getElementById("unity")) {
    const Index = ReactDOM.createRoot(document.getElementById("unity"));

    Index.render(
        <React.StrictMode>
            <UnityGame />
        </React.StrictMode>
    );
}
