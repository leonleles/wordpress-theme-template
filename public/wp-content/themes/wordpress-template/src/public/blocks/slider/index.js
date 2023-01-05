import {onReady} from "../../helpers/on-ready";
import {BrowserRouter} from "react-router-dom";
import {Slider} from "./slider";
import {render} from "@wordpress/element";

onReady(() => {
    const root = document.getElementById('wp-block-create-block-new-starter-block');

    if (root) {
        render(
            <BrowserRouter basename={'/'}>
                <Slider/>
            </BrowserRouter>,
            root
        );
    }
})