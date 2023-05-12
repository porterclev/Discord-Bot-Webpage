import React from "react";
import ReactDOM from "react-dom/client";

function Example() {
    return (
        <div>
            <h1>Example Component</h1>
        </div>
    );
}

export default Example;

if (document.getElementById("example")) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Example />
        </React.StrictMode>
    );
}
