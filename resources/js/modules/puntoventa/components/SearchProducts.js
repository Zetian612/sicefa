import React, { useState } from 'react'
import Modal from 'react-bootstrap/Modal'
import Button from 'react-bootstrap/Button'

export default function SearchProducts(props) {
  const [SearchProductsShow, setSearchProductsShow] = useState(false);

  const { onText } = props;

  const [currentText, setCurrentText] = useState(null);

  return (
    <>

      <Button variant="secondary" onClick={() => setSearchProductsShow(true)}>
        +
      </Button>

      <Modal show={SearchProductsShow} onHide={() => setSearchProductsShow(false)}>
        <Modal.Header>
          <Modal.Title>Agregar productos</Modal.Title>
          <Button variant="close" type="button" data-dismiss="modal" aria-label="Close" onClick={() => setSearchProductsShow(false)}>
          <span aria-hidden="true">×</span>
          </Button>
         
        </Modal.Header>
        <Modal.Body>
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
        </Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={() => setSearchProductsShow(false)}>
            Close
          </Button>
        </Modal.Footer>
      </Modal>
    </>
  )
}
