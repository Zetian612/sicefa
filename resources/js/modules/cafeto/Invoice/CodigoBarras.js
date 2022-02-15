import React, { useState } from "react";

export default props => {
  const { onText } = props;

  const [currentText, setCurrentText] = useState(null);

  return (
    <div className="input-group">
      <input
        value={currentText || ""}
        className="form-control"
        placeholder="Escanea el código de barras (Ej. 123 o 456)"
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
  );
};
