import {useState} from "@wordpress/element"
const Slider = ({color}: any) => {
    const [state, setState] = useState(0)

    return (
        <div style={{border: `1px solid ${color}`}}>
            <h1>Contador: {state}</h1>
            <button onClick={() => setState(state + 1)}>+</button>
        </div>
    )
}

Slider.DOMClass = 'wp-block-create-block-new-starter-block'

export default Slider;