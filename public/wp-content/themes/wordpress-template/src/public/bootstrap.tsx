import {onReady} from "./helpers/on-ready";

import * as blocks from "./blocks"
import * as statics from "./static"
import {mapRender} from "./helpers/render";

onReady(() => {
    mapRender(blocks)
    mapRender(statics)
})