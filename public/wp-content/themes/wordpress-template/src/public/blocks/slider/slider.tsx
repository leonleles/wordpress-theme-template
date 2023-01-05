import './styles.scss'
import {useState} from "@wordpress/element";

export function Slider() {
    const [count, setCount] = useState(0)

    return (
        <>
            <h1>Contador: {count}</h1>
            <button onClick={() => setCount(count + 1)}>+</button>
        </>
    )
}