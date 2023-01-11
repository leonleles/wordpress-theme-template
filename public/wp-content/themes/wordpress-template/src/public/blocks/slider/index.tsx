import {useState} from "@wordpress/element"
const Slider = (props) => {
    const [state, setState] = useState(0)

    console.log(props)

    return (
        <div style={{border: `1px solid ${props?.color}`}}>
            <h1>Contador: {state}</h1>
            <button onClick={() => setState(state + 1)}>+</button>
        </div>
    )
}

Slider.DOMClass = 'wp-block-create-block-new-starter-block'

export default Slider;