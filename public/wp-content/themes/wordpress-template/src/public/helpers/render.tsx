import {render} from "@wordpress/element";
import {BrowserRouter} from "react-router-dom";

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