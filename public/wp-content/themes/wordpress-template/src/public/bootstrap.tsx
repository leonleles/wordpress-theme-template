import {onReady} from "./helpers/on-ready";
import {BrowserRouter} from "react-router-dom";
import {render} from "@wordpress/element";

import * as blocks from "./blocks"
onReady(() => {

    Object.keys(blocks).map((name, idx) => {
        // @ts-ignore
        const Element = blocks[name]
        const {DOMClass = null} = Element;

        if (DOMClass) {
            const elements = document.getElementsByClassName(DOMClass);

            Object.keys(elements).map((__, i) => {
                const root: HTMLElement = elements[i] as HTMLElement
                const data = root?.dataset

                const props = data ? data : {}

                if (root) {
                    render(
                        <BrowserRouter basename={'/'}>
                            <Element {...props}/>
                        </BrowserRouter>,
                        root
                    );
                }
            })
        }
    })
})