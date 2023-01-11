import {render} from "@wordpress/element";
import {BrowserRouter} from "react-router-dom";

export const mapRender = (components: any) => {
        Object
        .keys(components)
        .map((name, idx) => {
            // @ts-ignore
            const Component = components[name]
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
}

export function multipleRender(elements: any, Component: any) {
    Object.keys(elements).map((__, i) => {
        const root: HTMLElement = elements[i] as HTMLElement
        const data = root?.dataset

        const props = data ? data : {}

        if (root) {
            render(
                <BrowserRouter basename={'/'}>
                    <Component {...props}/>
                </BrowserRouter>,
                root
            );
        }
    })
}