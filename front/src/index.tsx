import * as React from "react";
import * as ReactDOM from "react-dom";

const App = () => (
  <>
    <h1>Test Parcel</h1>
    <ul>
      <li>hi</li>
    </ul>
  </>
)

ReactDOM.render(
  <App />,
  document.querySelector("#root") as HTMLDivElement,
)
