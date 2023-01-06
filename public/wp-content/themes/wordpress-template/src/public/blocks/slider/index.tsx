import './styles.scss'
import {useState} from "@wordpress/element";

const Slider = ({color}: any) => {
    const [count, setCount] = useState(0)

    return (
        <div style={{border: `1px solid ${color}`}}>
            <h1>Contador: {count}</h1>
            <button onClick={() => setCount(count + 1)}>+</button>
        </div>
    )
}

Slider.DOMClass = 'wp-block-create-block-new-starter-block'

export default Slider;