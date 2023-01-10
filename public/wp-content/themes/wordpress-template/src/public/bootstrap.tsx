import {onReady} from "./helpers/on-ready";

import * as blocks from "./blocks"
import {multipleRender} from "./helpers/render";
import {render} from "@wordpress/element";
import {BrowserRouter} from "react-router-dom";

onReady(() => {
    Object.keys(blocks).map((name, idx) => {
        // @ts-ignore
        const Component = blocks[name]
        const {DOMClass = null, DOMId = [null]} = Component;

        if (DOMClass) {
            const elements = document.getElementsByClassName(DOMClass);
            multipleRender(elements, Component)
        } else if (DOMId) {
            const root = document.getElementById(DOMId);
            render(
                <BrowserRouter basename={'/'}>
                    <Component/>
                </BrowserRouter>,
                root
            );
        }
    })
})