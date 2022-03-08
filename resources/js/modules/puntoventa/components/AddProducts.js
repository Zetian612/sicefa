import React, {useState} from 'react'
import Modal from '../templates/Modal'
import Button from '../templates/Button'
import axios from 'axios';

export default function AddProducts(props) {

  

  const { onText } = props;

  const [currentText, setCurrentText] = useState(null);

  return (
    <>

      <Button
        className={"btn btn-secondary"}
        type={"button"}
        datatarget={"#modal-product"}
        datatoggle={"modal"}
        title={"+"}
      />

      <Modal
        modalTitle={"Buscar Producto"}
        modalId={"modal-product"}
        button={false}
        content={



          <div className="input-group">
            <input
              value={currentText || ""}
              className="form-control"
              placeholder="Ingrese el nombre del producto."
              onChange={event => setCurrentText(event.target.value)}
              onKeyDown={event => {
                if (event.key === "Enter") {
                  // Marcamos la salida, llamando a la función que recibe nuestra salida
                  if (onText) {
                    onText(currentText);
                  }
                }
              }}
            />
            <div className="input-group-append">
              <button
                className="btn btn-primary"
                onClick={() => {
                  // Marcamos la salida, llamando a la función que recibe nuestra salida
                  if (onText) {
                    onText(currentText);
                  }
                }}
              >
                <i className="fas fa-barcode" />
              </button>
            </div>
          </div>
        }
      />
    </>
  )
}
