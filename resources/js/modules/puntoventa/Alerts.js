import React, {useState} from 'react'
import Alert from 'react-bootstrap/Alert'
export default function Alerts(props) {

    const [show, setShow] = useState(true);

    if (show) {
        return (
            <Alert ariant={"success"} variant={'danger'}>
                {props.AlertMS}
            </Alert>
        )
    }
}
